/* DesignPixis site kit v1.3 (2026-10-13 15:12). State, chrome and shared behaviour for every page. Console: dp */
(function() {
    'use strict';
    const VERSION = '1.3',
        BUILT = '2026-10-13 15:12';
    const RM = matchMedia('(prefers-reduced-motion: reduce)').matches;
    const isTouch = matchMedia('(hover: none), (pointer: coarse)').matches;
    const $ = (s, r = document) => r.querySelector(s),
        $$ = (s, r = document) => [...r.querySelectorAll(s)];
    const store = {
        get(k, d) {
            try {
                const v = localStorage.getItem('dp_' + k);
                return v ? JSON.parse(v) : d
            } catch (e) {
                return d
            }
        },
        set(k, v) {
            try {
                localStorage.setItem('dp_' + k, JSON.stringify(v))
            } catch (e) {}
        },
        del(k) {
            try {
                localStorage.removeItem('dp_' + k)
            } catch (e) {}
        }
    };

    /* catalogue */
    const CAT = window.DP_CATALOGUE || [];
    const CATS = {
        ebooks: {
            label: 'E-book',
            plural: 'E-books',
            bg: '#2E47E6',
            fg: '#FFFFFF',
            cover: 'assets/img/cover-002.jpg',
            format: 'PDF and EPUB'
        },
        video: {
            label: 'Video course',
            plural: 'Video courses',
            bg: '#121214',
            fg: '#FFFFFF',
            cover: 'assets/img/cover-001.jpg',
            format: 'MP4 lessons'
        },
        software: {
            label: 'Software',
            plural: 'Software',
            bg: '#12A37A',
            fg: '#FFFFFF',
            cover: 'assets/img/cover-003.jpg',
            format: 'WordPress plugin'
        },
        templates: {
            label: 'Template',
            plural: 'Templates',
            bg: '#E8336F',
            fg: '#FFFFFF',
            cover: 'assets/img/cover-005.jpg',
            format: 'WordPress theme'
        },
        audiobooks: {
            label: 'Audiobook',
            plural: 'Audiobooks',
            bg: '#E9A21B',
            fg: '#121214',
            cover: 'assets/img/cover-065.jpg',
            format: 'MP3 and MP4'
        }
    };
    const byId = id => CAT.find(p => p.id === id);
    const cover = p => 'assets/img/cover-' + p.id + '.jpg';
    const money = n => '$' + (Math.round(n * 100) / 100).toFixed(2);
    const esc = s => String(s).replace(/[&<>"]/g, c => ({
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;'
    } [c]));
    const qs = n => new URLSearchParams(location.search).get(n);
    const pill = p => {
        const c = CATS[p.cat];
        return `<span class="dp-pill" style="background:${c.bg};color:${c.fg}"><i></i>${c.label}</span>`
    };

    /* money model */
    const DISCOUNT = {
        code: 'WELCOME10',
        rate: .10
    };

    function totals(ids) {
        const lines = ids.map(byId).filter(Boolean);
        const subtotal = lines.reduce((a, p) => a + p.price, 0);
        const discount = Math.round(subtotal * DISCOUNT.rate * 100) / 100;
        return {
            lines,
            subtotal: Math.round(subtotal * 100) / 100,
            discount,
            total: Math.round((subtotal - discount) * 100) / 100,
            code: DISCOUNT.code
        }
    }

    /* cart: a download is bought once, so no quantities */
    const cart = {
        ids() {
            return store.get('cart', []).filter(byId)
        },
        has(id) {
            return cart.ids().includes(id)
        },
        add(id) {
            const c = cart.ids();
            if (!c.includes(id)) {
                c.push(id);
                store.set('cart', c)
            }
            paintCart(true);
            return c
        },
        remove(id) {
            store.set('cart', cart.ids().filter(x => x !== id));
            paintCart()
        },
        clear() {
            store.set('cart', []);
            paintCart()
        },
        totals() {
            return totals(cart.ids())
        }
    };

    function paintCart(bump) {
        const n = cart.ids().length;
        $$('[data-cart-count]').forEach(b => {
            b.textContent = n;
            if (bump && !RM) {
                b.classList.remove('bump');
                void b.offsetWidth;
                b.classList.add('bump')
            }
        })
    }

    /* account */
    /* only what the visitor has typed is kept; the profile survives sign out so signing back in restores it */
    const clean = o => {
        const r = {};
        for (const k in o || {})
            if (o[k] != null && String(o[k]).trim() !== '') r[k] = String(o[k]).trim();
        return r
    };
    const user = {
        get() {
            return store.get('user', null)
        },
        signIn(u) {
            u = clean(u);
            const prof = store.get('profile', null);
            const base = prof && (!u.email || prof.email === u.email) ? prof : {};
            const v = Object.assign({}, base, u);
            store.set('user', v);
            store.set('profile', v);
            paintUser();
            return v
        },
        update(u) {
            const v = Object.assign({}, user.get() || {}, clean(u));
            store.set('user', v);
            store.set('profile', v);
            paintUser();
            return v
        },
        name() {
            const u = user.get() || {};
            return ((u.first || '') + ' ' + (u.last || '')).trim() || 'John Smith'
        },
        signOut() {
            store.del('user');
            paintUser()
        }
    };

    function paintUser() {
        const u = user.get();
        document.documentElement.classList.toggle('signed', !!u);
        document.body && document.body.classList.toggle('signed', !!u);
        $$('.menu-si').forEach(a => a.hidden = !!u);
        $$('.menu-acct').forEach(a => a.hidden = !u);
        $$('[data-user-name]').forEach(e => e.textContent = user.name());
        $$('[data-user-email]').forEach(e => e.textContent = (u && u.email) || 'john@example.com')
    }

    /* orders: seeded history plus anything bought in this browser */
    const SEED = [];

    function orderFrom(o) {
        const t = totals(o.ids);
        if (o.discount === false) {
            t.discount = 0;
            t.total = t.subtotal;
            t.code = null
        }
        return Object.assign({}, o, t)
    }
    const orders = {
        list() {
            return store.get('orders', []).concat(SEED).map(orderFrom)
        },
        get(ref) {
            return orders.list().find(o => o.ref === ref)
        },
        place(ids) {
            const mine = store.get('orders', []);
            const n = 148 + mine.length;
            const o = {
                ref: 'DP-' + String(n).padStart(6, '0'),
                date: new Date().toISOString().slice(0, 10),
                ids: ids.slice()
            };
            mine.unshift(o);
            store.set('orders', mine);
            return orderFrom(o)
        }
    };

    function library() {
        const seen = new Set();
        const out = [];
        for (const o of orders.list())
            for (const id of o.ids) {
                if (seen.has(id)) continue;
                seen.add(id);
                out.push({
                    p: byId(id),
                    date: o.date,
                    ref: o.ref
                })
            }
        return out
    }
    const fmtDate = d => {
        const x = new Date(d + 'T12:00:00');
        return x.getDate() + ' ' + x.toLocaleString('en-GB', {
            month: 'long'
        }) + ' ' + x.getFullYear()
    };

    /* gate: checkout needs an account */
    // function requireAuth() {
    //     if (!user.get()) {
    //         location.replace('sign-in.html?next=' + encodeURIComponent(location.pathname.split('/').pop() + location.search));
    //         return false
    //     }
    //     return true
    // }

    function nextUrl(def) {
        const n = qs('next');
        return n && /^[a-z0-9\-]+\.html(\?[\w=&%-]*)?$/i.test(n) ? n : def
    }

    /* product card */
    const ARROW = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>';

    function card(p, i) {
        const c = CATS[p.cat];
        const url = 'product.html?id=' + p.id;
        const own = cart.has(p.id);
        return `<article class="dp-card p-rv" style="--d:${((i||0)%5*.06).toFixed(2)}s"><div class="top"><a href="${url}" class="cv" aria-label="${esc(p.name)}"><img src="${cover(p)}" alt="" loading="lazy">${pill(p)}</a><div class="info"><span class="k">${c.label}</span><a href="${url}" class="t">${esc(p.name)}</a><p class="d">${esc(p.short)}</p></div></div><div class="buy">${money(p.price)}<button class="p-btn p-b2 p-bs dp-add${own?' added':''}" data-add="${p.id}"><span>${own?'In cart':'Add to cart'}</span></button></div></article>`
    }
    /* rotation: fill any number of slots with the five products */
    const rotate = (n, start = 0, list = CAT) => Array.from({
        length: n
    }, (_, i) => list[(i + start) % list.length]);

    /* toast under the cart */
    let toastT;

    function toast(p) {
        const t = $('#dpToast');
        if (!t) return;
        $('img', t).src = cover(p);
        $('.it b', t).textContent = p.name;
        $('.it small', t).textContent = CATS[p.cat].label + ' · ' + money(p.price);
        const tt = cart.totals();
        const n = tt.lines.length;
        $('.sub span', t).textContent = 'Cart, ' + n + ' resource' + (n === 1 ? '' : 's');
        $('.sub b', t).textContent = money(tt.subtotal);
        t.classList.add('show');
        clearTimeout(toastT);
        toastT = setTimeout(() => t.classList.remove('show'), 4000)
    }
    document.addEventListener('click', e => {
        const x = e.target.closest('#dpToast .x');
        if (x) {
            $('#dpToast').classList.remove('show')
        }
    });

    /* popup */
    const MARK = '<svg class="mk" viewBox="0 0 56 56" aria-hidden="true"><circle cx="28" cy="28" r="28" fill="#47B147"/><path d="M17 28.5l7.5 7.5L39.5 21" fill="none" stroke="#fff" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"/></svg>';

    function popup(o) {
        const p = $('#dpPop');
        if (!p) return;
        const c = $('.card', p);
        c.className = 'card' + (o.wide ? ' wide' : '');
        c.innerHTML = (o.mark === false ? '' : MARK) + `<div><h3 id="dpPopH">${esc(o.heading)}</h3>${o.body?`<p>${o.body}</p>`:''}</div>${o.html||''}${o.button?`<a href="${o.button.href||'#'}" class="p-btn p-b1" data-pop-btn>${esc(o.button.label)}</a>`:''}`;
        popFrom = document.activeElement;
        p.classList.add('show');
        p.setAttribute('aria-hidden', 'false');
        const b = $('[data-pop-btn]', c);
        if (b) {
            pixelise(b);
            if (!o.button.href) {
                b.addEventListener('click', ev => {
                    ev.preventDefault();
                    closePop();
                    o.button.onClick && o.button.onClick()
                })
            }
            setTimeout(() => b.focus(), 50)
        }
    }
    let popFrom = null;

    function closePop() {
        const p = $('#dpPop');
        if (!p || !p.classList.contains('show')) return;
        p.classList.remove('show');
        p.setAttribute('aria-hidden', 'true');
        if (popFrom && popFrom.focus && document.contains(popFrom)) popFrom.focus();
        popFrom = null
    }

    function trap(e, box) {
        if (e.key !== 'Tab') return;
        const f = $$('a[href],button:not([disabled]),input,select,textarea,[tabindex]:not([tabindex="-1"])', box).filter(x => x.offsetParent !== null);
        if (!f.length) return;
        const a = f[0],
            z = f[f.length - 1];
        if (e.shiftKey && document.activeElement === a) {
            e.preventDefault();
            z.focus()
        } else if (!e.shiftKey && document.activeElement === z) {
            e.preventDefault();
            a.focus()
        } else if (!box.contains(document.activeElement)) {
            e.preventDefault();
            a.focus()
        }
    }
    addEventListener('keydown', e => {
        const p = $('#dpPop');
        if (p && p.classList.contains('show')) {
            trap(e, $('.card', p));
            return
        }
        const m = $('#dpmenu');
        if (m && m.classList.contains('open')) trap(e, m)
    });
    document.addEventListener('click', e => {
        if (e.target.id === 'dpPop' || e.target.closest('[data-pop-close]')) closePop()
    });
    addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            closePop();
            closeMenu();
            const t = $('#dpToast');
            t && t.classList.remove('show')
        }
    });

    /* add to cart, anywhere on the site */
    document.addEventListener('click', e => {
        const b = e.target.closest('[data-add]');
        if (!b) return;
        e.preventDefault();
        const id = b.dataset.add;
        const p = byId(id);
        if (!p) return;
        if (cart.has(id)) {
            location.href = 'cart.html';
            return
        }
        cart.add(id);
        $$(`[data-add="${id}"]`).forEach(x => {
            x.classList.add('added');
            const s = $('span:not(.pg)', x) || x;
            s.textContent = 'In cart'
        });
        toast(p)
    });
    /* checkout links respect the account gate */
    document.addEventListener('click', e => {
        const a = e.target.closest('[data-checkout]');
        if (!a) return;
        if (!user.get()) {
            e.preventDefault();
            location.href = 'sign-in.html?next=checkout.html'
        }
    });

    /* forms */
    const EMAIL = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    function fieldErr(f, on, msg) {
        const w = f.closest('.dp-field') || f.closest('.dp-check') || f.closest('.dp-cap');
        if (!w) return;
        w.classList.toggle('err', on);
        const m = $('.msg', w);
        if (m && msg) m.textContent = msg
    }

    function validate(form) {
        let ok = true,
            first = null;
        $$('[required]', form).forEach(f => {
            let bad = false,
                msg = null;
            if (f.type === 'checkbox') bad = !f.checked;
            else if (f.type === 'file') bad = !f.files || !f.files.length;
            else {
                const v = f.value.trim();
                bad = !v;
                if (!bad && f.type === 'email' && !EMAIL.test(v)) {
                    bad = true;
                    msg = 'Enter an email address like john@example.com.'
                }
                if (!bad && f.dataset.min && v.length < +f.dataset.min) {
                    bad = true;
                    msg = f.dataset.minMsg || ('Use at least ' + f.dataset.min + ' characters.')
                }
                if (!bad && f.dataset.match) {
                    const o = $('#' + f.dataset.match, form);
                    if (o && o.value !== f.value) {
                        bad = true;
                        msg = 'The passwords do not match.'
                    }
                }
            }
            fieldErr(f, bad, msg);
            if (bad) {
                ok = false;
                first = first || f
            }
        });
        $$('.dp-cap[data-required]', form).forEach(c => {
            const bad = !c.classList.contains('ok');
            c.classList.toggle('err', bad);
            if (bad) {
                ok = false;
                first = first || c
            }
        });
        if (first) {
            (first.closest('.dp-field,.dp-check,.dp-cap') || first).scrollIntoView({
                block: 'center',
                behavior: RM ? 'auto' : 'smooth'
            });
            if (first.focus) setTimeout(() => first.focus({
                preventScroll: true
            }), RM ? 0 : 300)
        }
        return ok
    }
    document.addEventListener('input', e => {
        const f = e.target;
        if (f.matches('[required]')) fieldErr(f, false)
    });
    document.addEventListener('change', e => {
        const f = e.target;
        if (f.matches('[required]')) fieldErr(f, false);
        if (f.type === 'file') {
            const w = f.closest('.dp-file');
            if (w) {
                const v = $('.v', w);
                w.classList.toggle('has', !!f.files.length);
                v.textContent = f.files.length ? f.files[0].name : (v.dataset.ph || 'Upload a file')
            }
        }
    });
    /* password eye */
    document.addEventListener('click', e => {
        const b = e.target.closest('.dp-in .eye');
        if (!b) return;
        e.preventDefault();
        const i = $('input', b.parentNode);
        i.type = i.type === 'password' ? 'text' : 'password';
        b.setAttribute('aria-label', i.type === 'password' ? 'Show password' : 'Hide password')
    });
    /* reCAPTCHA stand in */
    document.addEventListener('click', e => {
        const c = e.target.closest('.dp-cap');
        if (!c || c.classList.contains('ok') || c.classList.contains('busy')) return;
        c.classList.add('busy');
        c.classList.remove('err');
        c.setAttribute('aria-checked', 'mixed');
        setTimeout(() => {
            c.classList.remove('busy');
            c.classList.add('ok');
            c.setAttribute('aria-checked', 'true')
        }, RM ? 0 : 700)
    });
    document.addEventListener('keydown', e => {
        if ((e.key === 'Enter' || e.key === ' ') && e.target.classList && e.target.classList.contains('dp-cap')) {
            e.preventDefault();
            e.target.click()
        }
    });

    /* menu */
    const menu = $('#dpmenu');

    function closeMenu() {
        if (!menu || !menu.classList.contains('open')) return;
        menu.classList.remove('open');
        const mb = $('#pmb');
        mb && mb.focus();
        document.documentElement.style.overflow = '';
        const b = $('#pmb');
        b && b.setAttribute('aria-expanded', 'false')
    }
    if (menu) {
        $('#pmb').addEventListener('click', () => {
            menu.classList.add('open');
            document.documentElement.style.overflow = 'hidden';
            $('#pmb').setAttribute('aria-expanded', 'true');
            setTimeout(() => $('#pmx').focus(), 50)
        });
        $('#pmx').addEventListener('click', closeMenu);
        menu.addEventListener('click', e => {
            if (e.target.closest('a')) closeMenu()
        });
        addEventListener('resize', () => {
            if (innerWidth > 820) closeMenu()
        })
    }

    /* currency selector, label only (prices stay in USD on this build) */
    const curEl = $('#cur');
    if (curEl) {
        curEl.querySelector('button').addEventListener('click', e => {
            e.stopPropagation();
            const o = curEl.classList.toggle('open');
            e.currentTarget.setAttribute('aria-expanded', o)
        });
        curEl.querySelectorAll('li').forEach(li => li.addEventListener('click', () => {
            curEl.querySelectorAll('li').forEach(x => x.classList.remove('sel'));
            li.classList.add('sel');
            $('#curL').textContent = li.dataset.c;
            curEl.classList.remove('open')
        }));
        document.addEventListener('click', e => {
            if (!e.target.closest('#cur')) curEl.classList.remove('open')
        })
    }

    /* questions accordion, any .p-q list */
    document.addEventListener('click', e => {
        const bt = e.target.closest('.p-q>button');
        if (!bt) return;
        const q = bt.parentNode;
        const open = !q.classList.contains('open');
        const group = q.parentNode;
        $$('.p-q', group).forEach(x => {
            x.classList.remove('open');
            $('button', x).setAttribute('aria-expanded', 'false')
        });
        if (open) {
            q.classList.add('open');
            bt.setAttribute('aria-expanded', 'true')
        }
    });

    /* reveals */
    let rio = null;

    function reveal(root = document) {
        const els = $$('.p-rv:not(.on),.p-h2:not(.on),.mask:not(.on),[data-rv]:not(.on)', root);
        if (RM || !('IntersectionObserver' in window)) {
            els.forEach(n => n.classList.add('on'));
            return
        }
        if (!rio) rio = new IntersectionObserver(es => {
            for (const e of es)
                if (e.isIntersecting) {
                    e.target.classList.add('on');
                    rio.unobserve(e.target)
                }
        }, {
            threshold: .12,
            rootMargin: '0px 0px -40px 0px'
        });
        els.forEach(n => rio.observe(n))
    }

    /* pixel fill hover on every button, as hero option 02 */
    const CELL = 10;

    function pixelise(el) {
        if (el.classList.contains('px')) return;
        el.classList.add('px');
        const pg = document.createElement('span');
        pg.className = 'pg';
        el.prepend(pg);
        let cells = [],
            cols = 1,
            built = false;
        const build = () => {
            const w = el.offsetWidth,
                h = el.offsetHeight;
            cols = Math.max(1, Math.ceil(w / CELL));
            const r = Math.max(1, Math.ceil(h / CELL));
            pg.style.gridTemplateColumns = `repeat(${cols},1fr)`;
            pg.style.gridTemplateRows = `repeat(${r},1fr)`;
            pg.innerHTML = '';
            cells = [];
            for (let i = 0; i < cols * r; i++) {
                const s = document.createElement('s');
                pg.appendChild(s);
                cells.push(s)
            }
            built = true
        };
        const run = (on, e) => {
            if (!built) build();
            const rr = el.getBoundingClientRect();
            const ox = e ? (e.clientX - rr.left) / rr.width : .5,
                oy = e ? (e.clientY - rr.top) / rr.height : .5;
            const rows = Math.ceil(cells.length / cols);
            cells.forEach((s, i) => {
                const cx = (i % cols + .5) / cols,
                    cy = (Math.floor(i / cols) + .5) / rows;
                const d = Math.hypot(cx - ox, (cy - oy) * .5);
                s.style.transitionDelay = RM ? '0s' : (on ? d * 420 + Math.random() * 120 : (1 - d) * 180 + Math.random() * 80) + 'ms'
            });
            el.classList.toggle('hot', on)
        };
        if (isTouch) return;
        el.addEventListener('pointerenter', e => {
            built = false;
            run(true, e)
        });
        el.addEventListener('pointerleave', e => run(false, e));
        if (!RM) {
            el.addEventListener('pointermove', e => {
                const r = el.getBoundingClientRect();
                const mx = e.clientX - r.left - r.width / 2,
                    my = e.clientY - r.top - r.height / 2;
                el.style.transition = 'color .25s .05s';
                el.style.transform = `translate(${(mx*.12).toFixed(1)}px,${(my*.2).toFixed(1)}px)`
            });
            el.addEventListener('pointerleave', () => {
                el.style.transition = 'transform .5s cubic-bezier(.22,1,.36,1),color .25s';
                el.style.transform = '';
                setTimeout(() => el.style.transition = '', 500)
            })
        }
    }

    function pixeliseAll(root = document) {
        $$('.btn,.p-btn', root).forEach(pixelise)
    }

    /* page fade fallback for browsers without cross document view transitions */
    document.addEventListener('click', e => {
        if (!document.documentElement.classList.contains('fx') || e.defaultPrevented) return;
        if (e.button !== 0 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;
        const a = e.target.closest('a[href]');
        if (!a || a.target || a.hasAttribute('download')) return;
        const h = a.getAttribute('href');
        if (!h || h.charAt(0) === '#' || /^(mailto|tel|javascript):/i.test(h)) return;
        const u = new URL(a.href, location.href);
        if (u.origin !== location.origin) return;
        if (u.pathname === location.pathname && u.search === location.search && u.hash) return;
        e.preventDefault();
        document.documentElement.classList.add('leaving');
        setTimeout(() => {
            location.href = u.href
        }, 240)
    });
    addEventListener('pageshow', () => document.documentElement.classList.remove('leaving'));
    /* links that are not built yet do nothing rather than jump */
    document.addEventListener('click', e => {
        if (e.target.closest('a[href="#"]')) e.preventDefault()
    });

    /* boot */
    function boot() {
        $$('.dp-cap').forEach(c => {
            if (!c.hasAttribute('aria-checked')) c.setAttribute('aria-checked', c.classList.contains('ok') ? 'true' : 'false')
        });
        paintUser();
        paintCart();
        pixeliseAll();
        reveal();
        document.dispatchEvent(new CustomEvent('dp:ready'))
    }
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', boot);
    else boot();
    addEventListener('pageshow', e => {
        if (e.persisted) {
            paintCart();
            paintUser()
        }
    });
    addEventListener('storage', () => {
        paintCart();
        paintUser()
    });

    window.DP = {
        VERSION,
        CAT,
        CATS,
        byId,
        cover,
        money,
        esc,
        qs,
        pill,
        card,
        rotate,
        totals,
        cart,
        user,
        orders,
        library,
        fmtDate,
        requireAuth,
        nextUrl,
        toast,
        popup,
        closePop,
        validate,
        reveal,
        pixelise,
        pixeliseAll,
        ARROW,
        DISCOUNT,
        paintCart,
        paintUser
    };
    const prev = window.dp || {};
    window.dp = Object.assign(prev, {
        site: () => 'DesignPixis site v' + VERSION + ' (' + BUILT + ')',
        state: () => ({
            page: document.body.dataset.page,
            signedIn: !!user.get(),
            cart: cart.ids(),
            totals: cart.totals(),
            orders: orders.list().map(o => o.ref),
            reducedMotion: RM,
            touch: isTouch
        }),
        signIn: () => user.signIn(),
        signOut: () => user.signOut(),
        fill: () => {
            ['001', '002', '003'].forEach(id => cart.add(id));
            return cart.ids()
        },
        reset: () => {
            ['cart', 'user', 'profile', 'orders', 'last'].forEach(k => store.del(k));
            paintCart();
            paintUser();
            return 'cleared'
        },
        fail: () => {
            location.href = 'payment-error.html'
        }
    });
    if (!prev.version) window.dp.version = window.dp.site;
})();