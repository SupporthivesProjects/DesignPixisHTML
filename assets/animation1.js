(function() {
    'use strict';
    const VERSION = '1.3',
        BUILT = '2026-10-13 15:01';
    const RM = matchMedia('(prefers-reduced-motion: reduce)').matches;
    const $ = s => document.querySelector(s),
        $$ = s => [...document.querySelectorAll(s)];
    const root = document.documentElement,
        wrap = $('#smooth'),
        hero = $('#hero'),
        nav = $('#pnav');
    const isTouch = matchMedia('(hover: none), (pointer: coarse)').matches;
    let MOBILE = innerWidth <= 820;
    const SMOOTH = !RM && !isTouch;
    const LERP = 0.085;

    /* tunables for the velocity wave clip (Innovator bank, Ayana study) */
    const W = {
        lerpD: 0.07,
        lerpM: 0.11,
        gainD: 1.25,
        gainM: 2.1,
        ptsD: 11,
        ptsM: 9,
        belly: 0.06,
        ripple: 0.022,
        amp: 0.65,
        headings: 0.35,
        on: !RM
    };

    /* smooth scroll */
    if ('scrollRestoration' in history) history.scrollRestoration = 'manual';
    if (SMOOTH) root.classList.add('smooth');
    let cur = 0,
        target = 0,
        prevY = 0,
        docH = 0;

    function remeasure() {
        MOBILE = innerWidth <= 820;
        if (SMOOTH) {
            docH = wrap.offsetHeight;
            document.body.style.height = docH + 'px'
        } else {
            document.body.style.height = ''
        }
        for (const w of waves) {
            w.w = w.el.offsetWidth;
            w.h = w.el.offsetHeight
        }
        placeHandles()
    }
    if ('ResizeObserver' in window) new ResizeObserver(remeasure).observe(wrap);
    addEventListener('resize', remeasure);

    /* wave clip */
    const waves = $$('.js_clip,.js_wave').map(el => ({
        el,
        x: el.classList.contains('js_wave'),
        w: 0,
        h: 0,
        vis: false,
        flat: true
    }));
    const io = new IntersectionObserver(es => {
        for (const e of es) {
            const w = waves.find(v => v.el === e.target);
            if (w) w.vis = e.isIntersecting
        }
    }, {
        rootMargin: '200px 0px'
    });
    waves.forEach(w => io.observe(w.el));
    let power = 0,
        amount = 0;
    const eio = x => -(Math.cos(Math.PI * x) - 1) / 2;

    function shape(x, t) {
        /* x 0..1 along the edge, returns -1..1ish */
        const r = (Math.sin(t * 6.5 + x * 8) + Math.sin(t * 10.7 + x * 8 + 3.5) + .5 * Math.sin(t * 6.5 - x * 8 + 3.5)) / 2.5;
        return Math.sin(Math.PI * x) * W.belly + r * W.ripple
    }

    function clip(w, t) {
        if (amount === 0) {
            if (!w.flat) {
                w.el.style.clipPath = '';
                w.flat = true
            }
            return
        }
        if (!w.vis) return;
        const n = MOBILE ? W.ptsM : W.ptsD,
            a = [],
            b = [];
        if (!w.x) {
            const S = w.w * W.amp * amount;
            const A = Math.abs(S) * (W.belly + W.ripple);
            for (let i = 0; i < n; i++) {
                const x = i / (n - 1);
                const o = shape(x, t) * S;
                a.push(`${(x*100).toFixed(2)}% ${(A+o).toFixed(1)}px`);
                b.push(`${(x*100).toFixed(2)}% ${(w.h-A+o).toFixed(1)}px`)
            }
            w.el.style.clipPath = `polygon(${a.join(',')},${b.reverse().join(',')})`
        } else {
            const S = Math.min(w.w, w.h * 3) * W.amp * W.headings * amount;
            const A = Math.abs(S) * (W.belly + W.ripple);
            for (let i = 0; i < n; i++) {
                const y = i / (n - 1);
                const o = shape(y, t + 1.3) * S;
                a.push(`${(A+o).toFixed(1)}px ${(y*100).toFixed(2)}%`);
                b.push(`${(w.w-A+o).toFixed(1)}px ${(y*100).toFixed(2)}%`)
            }
            w.el.style.clipPath = `polygon(${a.join(',')},${b.reverse().join(',')})`
        }
        w.flat = false
    }

    /* inner parallax */
    const pImgs = $$('.p-img>img,.p-img>video');

    function parallax() {
        if (RM) return;
        const vh = innerHeight;
        for (const im of pImgs) {
            if (!im.isConnected) continue;
            const r = im.parentNode.getBoundingClientRect();
            if (r.bottom < -50 || r.top > vh + 50) continue;
            const p = (r.top + r.height / 2 - vh / 2) / vh;
            im.style.transform = `translate3d(0,${(-p*r.height*.07).toFixed(1)}px,0)`
        }
    }

    /* films: load and play only in view, photo stays as the fallback */
    const films = $$('video.film');
    if (!RM) {
        const vio = new IntersectionObserver(es => {
            for (const e of es) {
                const v = e.target;
                if (e.isIntersecting) {
                    if (!v.src) {
                        v.src = v.dataset.src;
                        v.addEventListener('playing', () => v.classList.add('on'), {
                            once: true
                        });
                        v.addEventListener('error', () => v.remove(), {
                            once: true
                        })
                    }
                    v.play().catch(() => {})
                } else if (v.src) {
                    v.pause();
                    v.currentTime = 0
                }
            }
        }, {
            rootMargin: '100px 0px'
        });
        films.forEach(v => vio.observe(v))
    }

    /* fixed nav after the hero */
    function navState(y) {
        nav.classList.toggle('show', y > hero.offsetHeight - 80)
    }

    /* selection handles on the studio photo */
    function placeHandles() {
        const s = $('#sel');
        if (!s) return;
        const L = s.offsetLeft,
            T = s.offsetTop,
            Wd = s.offsetWidth,
            H = s.offsetHeight;
        $$('.p-hd[data-h]').forEach(h => {
            const [a, b] = h.dataset.h.split(',').map(Number);
            h.style.left = (L + a * Wd) + 'px';
            h.style.top = (T + b * H) + 'px'
        });
        const l = $('#lina');
        if (MOBILE) {
            l.style.left = (L + Wd - l.offsetWidth - 4) + 'px';
            l.style.top = (T + H - l.offsetHeight - 12) + 'px'
        } else {
            l.style.left = (L + Wd - 24) + 'px';
            l.style.top = (T + H + 10) + 'px'
        }
    }
    /* handles on the image break selection */
    (function() {
        const br = $('#break');
        const pts = [
            [0, 0],
            [.5, 0],
            [1, 0],
            [0, 1],
            [.5, 1],
            [1, 1],
            [0, .5],
            [1, .5]
        ];
        for (const [a, b] of pts) {
            const h = document.createElement('i');
            h.className = 'p-hd p-bh';
            h.dataset.a = a;
            h.dataset.b = b;
            br.appendChild(h)
        }
    })();

    function placeBreak() {
        const s = $('.p-bsel');
        const L = s.offsetLeft,
            T = s.offsetTop,
            Wd = s.offsetWidth,
            H = s.offsetHeight;
        $$('.p-bh').forEach(h => {
            h.style.left = (L + h.dataset.a * Wd) + 'px';
            h.style.top = (T + h.dataset.b * H) + 'px'
        });
        /* label reads the selection in design units: the selection is 1440 design px wide */
        if (Wd) $('#dim').textContent = '1440 × ' + Math.round(H * 1440 / Wd);
    }

    /* products */
    const prods = $('#prods'),
        dots = $('#dots');

    function buildDots() {
        dots.innerHTML = '';
        [...prods.children].forEach((_, i) => {
            const d = document.createElement('i');
            if (!i) d.className = 'on';
            dots.appendChild(d)
        })
    }
    prods.addEventListener('scroll', () => {
        const i = Math.round(prods.scrollLeft / (prods.children[0].offsetWidth + 16));
        [...dots.children].forEach((d, k) => d.classList.toggle('on', k === i))
    }, {
        passive: true
    });




    /* add to cart labels: the kit writes into the first span, which is the pixel grid (kit notes), so set the real label here */
    function paintAdds() {
        if (!window.DP) return;
        $$('.p-add[data-add]').forEach(b => {
            const own = DP.cart.has(b.dataset.add);
            b.classList.toggle('added', own);
            const g = b.querySelector('.pg');
            if (g && g.textContent) g.textContent = '';
            const l = b.querySelector('span:not(.pg)');
            if (l) l.textContent = own ? 'In cart' : 'Add to cart'
        })
    }
    document.addEventListener('click', e => {
        if (e.target.closest('[data-add]')) setTimeout(paintAdds, 0)
    });
    addEventListener('pageshow', paintAdds);
    addEventListener('storage', paintAdds);

    /* frame */
    let last = performance.now(),
        paused = false;
    document.addEventListener('visibilitychange', () => {
        paused = document.hidden
    });

    function tick(now) {
        const dt = Math.min(.05, Math.max(0, (now - last) / 1000));
        last = now;
        target = scrollY;
        if (SMOOTH) {
            cur += (target - cur) * LERP;
            if (Math.abs(target - cur) < .05) cur = target;
            const dpr = devicePixelRatio || 1;
            const y = Math.round(cur * dpr) / dpr;
            wrap.style.transform = `translate3d(0,${-y}px,0)`
        } else cur = target;
        const delta = cur - prevY;
        prevY = cur;
        if (W.on && !paused) {
            power += delta;
            power += (0 - power) * (MOBILE ? W.lerpM : W.lerpD);
            let v = power / innerHeight * (MOBILE ? W.gainM : W.gainD);
            v = Math.max(-1, Math.min(1, v));
            v = Math.sign(v) * eio(Math.abs(v));
            amount = Math.abs(v) < .001 ? 0 : v;
            if (!amount) power *= .5
        } else amount = 0;
        const t = now / 1000;
        for (const w of waves) clip(w, t);
        parallax();
        navState(cur);
        requestAnimationFrame(tick)
    }

    document.addEventListener('click', e => {
        if (e.target.closest('.p-q>button')) setTimeout(remeasure, 600)
    });

    function boot() {
        buildDots();
        paintAdds();
        remeasure();
        placeBreak();
        requestAnimationFrame(tick)
    }
    addEventListener('resize', placeBreak);
    document.fonts && document.fonts.ready ? document.fonts.ready.then(boot) : boot();
    addEventListener('load', remeasure);

    const hd = window.dp || {};
    window.dp = Object.assign(hd, {
        version: () => 'homepage ' + VERSION + ' (' + BUILT + ')',
        page: () => ({
            mobile: MOBILE,
            smooth: SMOOTH,
            reducedMotion: RM,
            scroll: Math.round(cur),
            docH,
            power: +power.toFixed(1),
            amount: +amount.toFixed(3),
            cart: (window.DP ? DP.cart.ids().length : 0)
        }),
        wave: o => o ? Object.assign(W, o) : Object.assign({}, W),
        kick: (px = 900) => {
            power += px
        },
        pageRemeasure: () => {
            remeasure();
            placeBreak()
        }
    });
})();