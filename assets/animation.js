(function() {
    'use strict';
    const VERSION = '0.4',
        BUILT = '2026-10-12 14:47';
    const RM = matchMedia('(prefers-reduced-motion: reduce)').matches;
    const NS = 'http://www.w3.org/2000/svg';
    const $ = s => document.querySelector(s);
    const el = (tag, attrs, parent) => {
        const n = document.createElementNS(NS, tag);
        for (const k in attrs) n.setAttribute(k, attrs[k]);
        if (parent) parent.appendChild(n);
        return n
    };
    const stage = $('#stage'),
        vp = $('#vp');
    let MOBILE = false,
        SCALE = 1;

    /* geometry */
    const S = 56,
        C = Math.cos(Math.PI / 6),
        OX = 1352,
        OY = 470;
    const P = (x, y, z = 0) => [OX + (x - y) * S * C, OY + (x + y) * S * .5 - z * S];
    const pts = a => a.map(p => p[0].toFixed(2) + ',' + p[1].toFixed(2)).join(' ');
    const inv = (sx, sy) => {
        const a = (sx - OX) / (S * C),
            b = (sy - OY) / (S * .5);
        return [(a + b) / 2, (b - a) / 2]
    };

    /* grid */
    const lines = $('#lines');
    const L = 4000;
    for (let j = -60; j <= 60; j++) {
        const x0 = OX + j * -S * C,
            y0 = OY + j * S * .5;
        el('line', {
            x1: x0 - L * C,
            y1: y0 - L * .5,
            x2: x0 + L * C,
            y2: y0 + L * .5
        }, lines)
    }
    for (let i = -60; i <= 60; i++) {
        const x0 = OX + i * S * C,
            y0 = OY + i * S * .5;
        el('line', {
            x1: x0 + L * C,
            y1: y0 - L * .5,
            x2: x0 - L * C,
            y2: y0 + L * .5
        }, lines)
    }
    /* painted edge tiles, seeded */
    let seed = 569;
    const rnd = () => (seed = (seed * 16807) % 2147483647) / 2147483647;
    const tiles = $('#tiles');
    const tileSet = new Set();
    const tile = (i, j, col, op, g) => {
        const k = i + ',' + j;
        if (tileSet.has(k)) return;
        tileSet.add(k);
        return el('polygon', {
            points: pts([P(i, j), P(i + 1, j), P(i + 1, j + 1), P(i, j + 1)]),
            fill: col,
            'fill-opacity': op
        }, g)
    };
    [
        [90, 300, '#121214', [.05, .08, .11], 6],
        [140, 820, '#121214', [.04, .07, .1], 7],
        [60, 560, '#2E47E6', [.1, .16], 3],
        [1820, 250, '#121214', [.05, .08, .12], 7],
        [1790, 700, '#121214', [.04, .07, .1], 6],
        [1860, 930, '#2E47E6', [.12, .18], 3]
    ].forEach(([sx, sy, col, ops, n]) => {
        const [a, b] = inv(sx, sy);
        const i0 = Math.floor(a),
            j0 = Math.floor(b);
        const nb = [
            [0, 0],
            [1, 0],
            [0, 1],
            [1, 1],
            [-1, 0],
            [0, -1],
            [2, 1],
            [1, 2]
        ];
        for (let k = 0; k < n; k++) {
            const d = nb[Math.floor(rnd() * nb.length)];
            tile(i0 + d[0], j0 + d[1], col, ops[Math.floor(rnd() * ops.length)], tiles)
        }
    });

    /* catalogue */
    const CAT = {
        ebooks: {
            label: 'E-books',
            icon: 'book',
            kind: 'E-BOOK',
            title: 'Grid systems for screens',
            k1: 'FORMAT',
            v1: 'PDF and EPUB',
            price: '$25',
            cover: '#2E47E6',
            cv: 'Grid systems'
        },
        video: {
            label: 'Video courses',
            icon: 'play',
            kind: 'VIDEO COURSE',
            title: 'Motion basics in Figma',
            k1: 'LENGTH',
            v1: '12 lessons',
            price: '$48',
            cover: '#121214',
            cv: 'Motion basics'
        },
        software: {
            label: 'Software',
            icon: 'window',
            kind: 'SOFTWARE',
            title: 'Palette kit plugin',
            k1: 'WORKS IN',
            v1: 'Figma',
            price: '$19',
            cover: '#12A37A',
            cv: 'Palette kit'
        },
        templates: {
            label: 'Templates',
            icon: 'grid',
            kind: 'TEMPLATE',
            title: 'Portfolio site template',
            k1: 'FORMAT',
            v1: 'Figma and Framer',
            price: '$39',
            cover: '#E8336F',
            cv: 'Portfolio'
        },
        audio: {
            label: 'Audiobooks',
            icon: 'wave',
            kind: 'AUDIOBOOK',
            title: 'Talking type, read aloud',
            k1: 'LENGTH',
            v1: '3h 40m',
            price: '$15',
            cover: '#E9A21B',
            cv: 'Talking type'
        }
    };
    const ORDER = ['ebooks', 'video', 'software', 'templates', 'audio'];
    const SERVICES = ['User interface', 'User experience', 'Illustration', 'E-commerce', 'A/B testing'];

    /* boxes */
    const WHITE = ['#FFFFFF', '#EDEBE5', '#DEDBD3'],
        WHITE_H = ['#FFFFFF', '#F3F2EE', '#E6E3DC'],
        BLUE = ['#6A7EF2', '#2E47E6', '#2238B4'];
    const BOXES = [
        [0, 0, 6],
        [0, 2, 5],
        [0, 4, 4],
        [2, 0, 5],
        [2, 2, 3],
        [2, 4, 3],
        [4, 0, 4],
        [4, 2, 3],
        [4, 4, 2]
    ];
    const FACES = {
        '0,4L': 'ebooks',
        '2,4L': 'video',
        '4,4L': 'software',
        '4,4R': 'templates',
        '4,2R': 'audio'
    };
    const BLUEB = {
        x0: 2,
        y0: 2,
        z0: 3,
        h: 1
    };
    const LIFT_MAX = 1.35;
    const boxesG = $('#boxes');
    const icons = {
        book: [
            [
                [0, 3],
                [9, 1],
                [11, 3],
                [11, 20],
                [9, 18],
                [0, 20],
                [0, 3]
            ],
            [
                [11, 3],
                [13, 1],
                [22, 3],
                [22, 20],
                [13, 18],
                [11, 20]
            ]
        ],
        play: [Array.from({
            length: 25
        }, (_, t) => [11 + 10 * Math.cos(t * Math.PI / 12), 11 + 10 * Math.sin(t * Math.PI / 12)]), [
            [8.5, 6.5],
            [16, 11],
            [8.5, 15.5],
            [8.5, 6.5]
        ]],
        window: [
            [
                [0, 2],
                [22, 2],
                [22, 20],
                [0, 20],
                [0, 2]
            ],
            [
                [0, 7],
                [22, 7]
            ],
            [
                [5, 11],
                [9, 14],
                [5, 17]
            ],
            [
                [11, 17],
                [16, 17]
            ]
        ],
        grid: [
            [0, 1],
            [12, 1],
            [0, 12],
            [12, 12]
        ].map(([a, b]) => [
            [a, b],
            [a + 10, b],
            [a + 10, b + 9],
            [a, b + 9],
            [a, b]
        ]),
        wave: [6, 12, 18, 10, 16, 8, 4].map((h, i) => [
            [i * 3.6 + 1, 11 - h / 2],
            [i * 3.6 + 1, 11 + h / 2]
        ])
    };
    const faceFn = (side, x0, y0, ztop) => {
        if (side === 'L') {
            const o = P(x0, y0 + 2, ztop);
            return (u, v) => [o[0] + u * C, o[1] + u * .5 + v]
        }
        const o = P(x0 + 2, y0 + 2, ztop);
        return (u, v) => [o[0] + u * C, o[1] - u * .5 + v]
    };
    const boxObjs = [];

    function buildBox(b, cols, isBlue) {
        const {
            x0,
            y0,
            z0,
            h
        } = b;
        const x1 = x0 + 2,
            y1 = y0 + 2,
            z1 = z0 + h;
        const g = el('g', {
            class: 'box'
        }, boxesG);
        const top = [P(x0, y0, z1), P(x1, y0, z1), P(x1, y1, z1), P(x0, y1, z1)];
        const right = [P(x1, y0, z0), P(x1, y1, z0), P(x1, y1, z1), P(x1, y0, z1)];
        const left = [P(x0, y1, z0), P(x1, y1, z0), P(x1, y1, z1), P(x0, y1, z1)];
        const st = {
            stroke: '#121214',
            'stroke-opacity': .1,
            'stroke-width': .75,
            'stroke-linejoin': 'round'
        };
        const fR = el('polygon', {
            points: pts(right),
            fill: cols[2],
            class: 'f',
            ...st
        }, g);
        const fL = el('polygon', {
            points: pts(left),
            fill: cols[1],
            class: 'f',
            ...st
        }, g);
        const fT = el('polygon', {
            points: pts(top),
            fill: cols[0],
            class: 'f',
            ...st
        }, g);
        for (let k = 1; k < h; k++) {
            const a = P(x0, y1, z0 + k),
                c = P(x1, y1, z0 + k),
                d = P(x1, y0, z0 + k);
            el('polyline', {
                points: pts([a, c, d]),
                fill: 'none',
                stroke: '#121214',
                'stroke-opacity': .05,
                'stroke-width': .75
            }, g)
        }
        const o = {
            g,
            b,
            cols,
            isBlue,
            fR,
            fL,
            fT,
            faces: {},
            lift: 0,
            liftT: 0,
            hov: 0,
            hovT: 0,
            appear: 0,
            delay: 0
        };
        if (!isBlue) {
            for (const side of ['L', 'R']) {
                const cat = FACES[x0 + ',' + y0 + side];
                if (!cat) continue;
                const f = faceFn(side, x0, y0, z1);
                const ic = el('g', {}, g);
                for (const pl of icons[CAT[cat].icon]) el('polyline', {
                    points: pts(pl.map(([u, v]) => f(14 + u, 14 + v))),
                    fill: 'none',
                    stroke: '#121214',
                    'stroke-opacity': .75,
                    'stroke-width': 1.6,
                    'stroke-linejoin': 'round',
                    'stroke-linecap': 'round'
                }, ic);
                const lp = f(14, h * S - 14 - 15);
                const t = el('text', {
                    transform: `matrix(${C},${side==='L'?.5:-.5},0,1,${lp[0]},${lp[1]+12})`,
                    fill: '#121214',
                    'fill-opacity': .78
                }, g);
                t.textContent = CAT[cat].label;
                const poly = side === 'L' ? left : right;
                o.faces[side] = {
                    cat,
                    poly,
                    fill: side === 'L' ? fL : fR
                };
                (side === 'L' ? fL : fR).dataset.cat = cat;
            }
        } else {
            const f = faceFn('R', x0, y0, z1);
            const lp = f(56, (h * S - 11) / 2);
            const t = el('text', {
                transform: `matrix(${C},-.5,0,1,${lp[0]},${lp[1]+9})`,
                fill: '#fff',
                'text-anchor': 'middle',
                'font-size': 11,
                style: 'font-size:11px'
            }, g);
            t.textContent = 'Design services';
        }
        boxObjs.push(o);
        return o;
    }
    const order = BOXES.map(([x0, y0, h]) => ({
        x0,
        y0,
        z0: 0,
        h,
        key: (x0 + y0) / 2
    })).concat([{
        ...BLUEB,
        key: 2.6,
        blue: true
    }]).sort((a, b) => a.key - b.key);
    let blueObj;
    order.forEach((b, i) => {
        const o = buildBox(b, b.blue ? BLUE : WHITE, !!b.blue);
        o.delay = .25 + i * .07;
        if (b.blue) {
            blueObj = o;
            o.liftT = LIFT_MAX;
            o.lift = LIFT_MAX;
            o.delay = .25 + order.length * .07 + .15
        }
    });

    /* ghost slot */
    const ghost = $('#ghost');
    (function() {
        const {
            x0: gx,
            y0: gy,
            z0: gz
        } = BLUEB;
        const hx = [P(gx, gy, gz + 1), P(gx + 2, gy, gz + 1), P(gx + 2, gy, gz), P(gx + 2, gy + 2, gz), P(gx, gy + 2, gz), P(gx, gy + 2, gz + 1)];
        el('polygon', {
            points: pts(hx),
            fill: '#2E47E6',
            'fill-opacity': .05
        }, ghost);
        el('polygon', {
            points: pts(hx),
            class: 'gl'
        }, ghost);
        const a = P(gx + 2, gy + 2, gz + 1);
        [P(gx, gy + 2, gz + 1), P(gx + 2, gy, gz + 1), P(gx + 2, gy + 2, gz)].forEach(b => el('line', {
            x1: a[0],
            y1: a[1],
            x2: b[0],
            y2: b[1],
            class: 'gl'
        }, ghost));
        [hx[0], hx[2], hx[3], hx[5]].forEach(p => el('rect', {
            x: p[0] - 4,
            y: p[1] - 4,
            width: 8,
            height: 8,
            fill: '#fff',
            stroke: '#2E47E6',
            'stroke-width': 1.5
        }, ghost));
    })();

    /* selections */
    const sels = $('#sels');

    function makeSel(col) {
        const g = el('g', {
            opacity: 0
        }, sels);
        const poly = el('polygon', {
            class: 'sel',
            stroke: col,
            fill: col
        });
        const hs = [0, 1, 2, 3].map(() => el('rect', {
            class: 'hdl',
            width: 8,
            height: 8,
            stroke: col
        }));
        g.appendChild(poly);
        hs.forEach(h => g.appendChild(h));
        return {
            g,
            poly,
            hs,
            cat: null,
            col
        }
    }
    const selLina = makeSel('#E8336F'),
        selYou = makeSel('#2E47E6');

    function faceOf(cat) {
        for (const o of boxObjs)
            for (const s in o.faces)
                if (o.faces[s].cat === cat) return {
                    o,
                    poly: o.faces[s].poly,
                    fill: o.faces[s].fill
                };
    }

    function setSel(sel, cat) {
        sel.cat = cat;
        if (!cat) {
            sel.g.setAttribute('opacity', 0);
            return
        }
        const f = faceOf(cat);
        sel.box = f.o;
        const q = f.poly;
        sel.base = q;
        sel.poly.setAttribute('points', pts(q));
        let len = 0;
        for (let i = 0; i < 4; i++) {
            const a = q[i],
                b = q[(i + 1) % 4];
            len += Math.hypot(a[0] - b[0], a[1] - b[1])
        }
        sel.poly.style.setProperty('--len', len);
        sel.poly.style.strokeDasharray = len;
        sel.poly.classList.remove('draw');
        void sel.poly.getBBox();
        sel.poly.classList.add('draw');
        sel.g.setAttribute('opacity', 1);
    }

    function posSel(sel) {
        if (!sel.cat) return;
        const dy = -(sel.box.lift * S) - sel.box.hov * 8;
        sel.g.setAttribute('transform', `translate(0,${dy.toFixed(2)})`);
        sel.base.forEach((p, i) => {
            sel.hs[i].setAttribute('x', p[0] - 4);
            sel.hs[i].setAttribute('y', p[1] - 4)
        })
    }

    /* fx rings */
    const fx = $('#fx');

    function ring(x, y, col) {
        const r = el('circle', {
            cx: x,
            cy: y,
            r: 4,
            class: 'ring',
            stroke: col
        }, fx);
        if (RM) {
            r.remove();
            return
        }
        const t0 = performance.now();
        (function f(t) {
            const k = Math.min(1, (t - t0) / 650);
            const e = 1 - Math.pow(1 - k, 3);
            r.setAttribute('r', 4 + 22 * e);
            r.setAttribute('stroke-opacity', 1 - k);
            if (k < 1) requestAnimationFrame(f);
            else r.remove()
        })(t0);
    }

    /* floor paint under the pointer */
    const paintG = $('#paint');
    const heat = new Map();

    function paintAt(sx, sy) {
        const [a, b] = inv(sx, sy);
        const i = Math.floor(a),
            j = Math.floor(b);
        if (i >= 0 && i < 6 && j >= 0 && j < 6) return;
        const k = i + ',' + j;
        let h = heat.get(k);
        if (!h) {
            const p = el('polygon', {
                points: pts([P(i, j), P(i + 1, j), P(i + 1, j + 1), P(i, j + 1)]),
                fill: '#2E47E6',
                'fill-opacity': 0
            }, paintG);
            h = {
                p,
                v: 0
            };
            heat.set(k, h)
        }
        h.v = Math.min(.22, h.v + .12)
    }

    /* windows */
    const wProd = $('#wProd'),
        wIns = $('#wIns');

    function loadWin(w, fn) {
        if (RM) {
            fn();
            return
        }
        w.classList.add('loading');
        setTimeout(() => {
            fn();
            w.classList.remove('loading')
        }, 380)
    }
    let prodCat = 'ebooks';

    function showProduct(cat, by) {
        if (cat === prodCat && !by) return;
        prodCat = cat;
        const c = CAT[cat];
        loadWin(wProd, () => {
            $('#pKind').textContent = c.kind;
            $('#pKind').style.color = by === 'you' ? '#2E47E6' : '#E8336F';
            $('#pTitle').textContent = c.title;
            $('#pK1').textContent = c.k1;
            $('#pV1').textContent = c.v1;
            $('#pV2').textContent = c.price;
            $('#pCover').style.background = c.cover;
            $('#pCovT').textContent = c.cv;
        });
    }
    let svc = 0;

    function setPlaced(p) {
        wIns.classList.toggle('placed', p);
        $('#iSt').textContent = p ? 'PLACED' : 'PLACING';
        if (p) {
            wIns.classList.remove('pulse');
            void wIns.offsetWidth;
            wIns.classList.add('pulse')
        }
    }

    function nextService() {
        svc = (svc + 1) % SERVICES.length;
        loadWin(wIns, () => {
            $('#iSv').textContent = SERVICES[svc]
        })
    }

    /* draggable windows */
    const winState = new Map();
    [wProd, wIns].forEach(w => winState.set(w, {
        dx: 0,
        dy: 0,
        drag: false
    }));
    [wProd, wIns].forEach(w => {
        const st = winState.get(w);
        let sx, sy, ox, oy;
        w.addEventListener('pointerdown', e => {
            if (MOBILE) return;
            st.drag = true;
            w.classList.add('drag');
            const p = toStage(e);
            sx = p[0];
            sy = p[1];
            ox = st.dx;
            oy = st.dy;
            w.setPointerCapture(e.pointerId)
        });
        w.addEventListener('pointermove', e => {
            if (!st.drag) return;
            const p = toStage(e);
            st.dx = ox + (p[0] - sx);
            st.dy = oy + (p[1] - sy)
        });
        const up = () => {
            st.drag = false;
            w.classList.remove('drag')
        };
        w.addEventListener('pointerup', up);
        w.addEventListener('pointercancel', up);
    });

    /* ruler */
    const ruler = $('#ruler');
    for (let Y = 80; Y <= 1700; Y += 10) {
        const i = document.createElement('i');
        const m = Y % 100 === 0;
        i.className = m ? 'm' : '';
        i.style.top = (Y - 72) + 'px';
        i.style.width = (m ? 14 : (Y % 50 === 0 ? 9 : 5)) + 'px';
        ruler.appendChild(i);
    }
    const rulerNums = [];
    for (let Y = 100; Y < 1700; Y += 100) {
        const e = document.createElement('em');
        e.textContent = Y;
        e.style.top = (Y - 72 + 4) + 'px';
        ruler.appendChild(e);
        rulerNums.push([Y, e])
    }
    const bandTop = document.createElement('em'),
        bandBot = document.createElement('em');
    bandTop.className = bandBot.className = 'bl';
    ruler.appendChild(bandTop);
    ruler.appendChild(bandBot);

    function layoutCopy() {
        const copy = $('#copy');
        if (MOBILE) return;
        const h = copy.offsetHeight;
        const top = Math.round(72 + (1008 - h) / 2);
        copy.style.top = top + 'px';
        const band = $('#band');
        band.style.top = (top - 72) + 'px';
        band.style.height = h + 'px';
        bandTop.textContent = top;
        bandBot.textContent = top + h;
        bandTop.style.top = (top - 72 + 4) + 'px';
        bandBot.style.top = (top + h - 72 - 4 - bandBot.offsetHeight) + 'px';
        rulerNums.forEach(([Y, e]) => {
            e.style.visibility = (Math.abs(Y - top) < 40 || Math.abs(Y - top - h) < 40) ? 'hidden' : 'visible'
        })
    }

    /* cursors */
    function Cursor(id) {
        const n = $(id);
        return {
            n,
            x: 0,
            y: 0,
            on: false,
            set(x, y) {
                this.x = x;
                this.y = y;
                n.style.transform = `translate(${x}px,${y}px)`
            },
            show() {
                n.classList.add('on')
            },
            press() {
                n.classList.add('press');
                setTimeout(() => n.classList.remove('press'), 160)
            }
        }
    }
    const lina = Cursor('#cLina'),
        omar = Cursor('#cOmar'),
        you = Cursor('#you');
    const sleep = ms => new Promise(r => setTimeout(r, ms));
    let paused = false;

    function moveTo(c, x, y, dur) {
        return new Promise(res => {
            const x0 = c.x,
                y0 = c.y;
            const dx = x - x0,
                dy = y - y0;
            const cx = x0 + dx * .5 - dy * .25,
                cy = y0 + dy * .5 + dx * .25;
            const t0 = performance.now();
            (function f(t) {
                if (paused) {
                    requestAnimationFrame(f);
                    return
                }
                const k = Math.min(1, (t - t0) / dur);
                const e = k < .5 ? 4 * k * k * k : 1 - Math.pow(-2 * k + 2, 3) / 2;
                const a = (1 - e) * (1 - e),
                    b = 2 * (1 - e) * e,
                    d = e * e;
                c.set(a * x0 + b * cx + d * x, a * y0 + b * cy + d * y);
                if (k < 1) requestAnimationFrame(f);
                else res()
            })(t0)
        })
    }
    const centroid = q => [(q[0][0] + q[1][0] + q[2][0] + q[3][0]) / 4, (q[0][1] + q[1][1] + q[2][1] + q[3][1]) / 4];

    async function linaLoop() {
        lina.set(-60, 700);
        lina.show();
        await moveTo(lina, 1124, 585, 1400);
        lina.press();
        ring(1124, 585, '#E8336F');
        setSel(selLina, 'ebooks');
        showProduct('ebooks', 'lina');
        await sleep(2000);
        let i = 0;
        for (;;) {
            i = (i + 1) % ORDER.length;
            const cat = ORDER[i];
            const f = faceOf(cat);
            const c = centroid(f.poly);
            const tx = c[0] + 8,
                ty = c[1] + 20 - f.o.hov * 8;
            await moveTo(lina, tx, ty, 1100 + Math.random() * 300);
            lina.press();
            ring(tx, ty, '#E8336F');
            setSel(selLina, cat);
            if (!youLock) showProduct(cat, 'lina');
            await sleep(2200 + Math.random() * 600);
        }
    }

    function blueTop() {
        const b = BLUEB;
        const p = P(b.x0 + 1, b.y0 + 1, b.z0 + b.h + blueObj.lift);
        return [p[0] - 10, p[1] - 14 - blueObj.hov * 8]
    }
    let omarHolding = false;
    async function omarLoop() {
        omar.set(2000, 200);
        omar.show();
        let p = blueTop();
        await moveTo(omar, p[0], p[1], 1500);
        await sleep(900);
        for (;;) {
            p = blueTop();
            await moveTo(omar, p[0], p[1], 500);
            omar.press();
            omarHolding = true;
            blueObj.liftT = 0;
            await sleep(950);
            omarHolding = false;
            const s = P(BLUEB.x0 + 1, BLUEB.y0 + 1, BLUEB.z0 + 1);
            ring(s[0], s[1], '#12A37A');
            setPlaced(true);
            await moveTo(omar, omar.x + 120, omar.y - 90, 900);
            await sleep(2600);
            p = blueTop();
            await moveTo(omar, p[0], p[1], 900);
            omar.press();
            omarHolding = true;
            blueObj.liftT = LIFT_MAX;
            setPlaced(false);
            nextService();
            await sleep(1000);
            omarHolding = false;
            await moveTo(omar, omar.x + 150, omar.y - 40, 900);
            await sleep(2600);
        }
    }

    /* user pointer */
    let ptr = {
            in: false,
            x: 960,
            y: 540,
            nx: 0,
            ny: 0
        },
        par = {
            x: 0,
            y: 0
        },
        youLock = false,
        youT = 0;

    function toStage(e) {
        const r = stage.getBoundingClientRect();
        return [(e.clientX - r.left) / SCALE, (e.clientY - r.top) / SCALE]
    }
    vp.addEventListener('pointermove', e => {
        const [x, y] = toStage(e);
        ptr.in = true;
        ptr.x = x;
        ptr.y = y;
        ptr.nx = x / 960 - 1;
        ptr.ny = y / 540 - 1;
        if (!MOBILE) {
            document.body.classList.toggle('guiding', y > 72);
            const gy = Math.round(y);
            $('#readout').style.top = (gy - 72) + 'px';
            $('#readout').textContent = gy
            you.set(x, y);
            you.n.classList.add('on');
            if (!RM) paintAt(x, y);
        }
    });
    vp.addEventListener('pointerleave', () => {
        ptr.in = false;
        ptr.nx = ptr.ny = 0;
        document.body.classList.remove('guiding');
        you.n.classList.remove('on')
    });
    let hovered = null;
    boxesG.addEventListener('pointerover', e => {
        const g = e.target.closest('.box');
        const o = boxObjs.find(b => b.g === g);
        if (o) {
            hovered = o;
            o.hovT = 1;
            o.fT.setAttribute('fill', '#FFFFFF');
            if (!o.isBlue) {
                o.fL.setAttribute('fill', WHITE_H[1]);
                o.fR.setAttribute('fill', WHITE_H[2])
            }
        }
    });
    boxesG.addEventListener('pointerout', e => {
        const g = e.target.closest('.box');
        const o = boxObjs.find(b => b.g === g);
        if (o && !(e.relatedTarget && g.contains(e.relatedTarget))) {
            o.hovT = 0;
            o.fL.setAttribute('fill', o.cols[1]);
            o.fR.setAttribute('fill', o.cols[2]);
            o.fT.setAttribute('fill', o.cols[0]);
            if (hovered === o) hovered = null
        }
    });
    boxesG.addEventListener('click', e => {
        const g = e.target.closest('.box');
        const o = boxObjs.find(b => b.g === g);
        if (!o) return;
        const [x, y] = toStage(e);
        if (o.isBlue) {
            if (omarHolding) return;
            const placing = o.liftT > 0;
            o.liftT = placing ? 0 : LIFT_MAX;
            ring(x, y, '#2E47E6');
            setPlaced(placing);
            if (!placing) nextService();
            return
        }
        let cat = e.target.dataset.cat;
        if (!cat) {
            const ks = Object.values(o.faces);
            if (ks.length) cat = ks[0].cat
        }
        ring(x, y, '#2E47E6');
        if (cat) {
            setSel(selYou, cat);
            youLock = true;
            clearTimeout(youT);
            youT = setTimeout(() => {
                youLock = false;
                setSel(selYou, null)
            }, 6000);
            showProduct(cat, 'you')
        }
    });

    /* layout */
    const copyEl = $('#copy');

    function fit() {
        MOBILE = innerWidth <= 820;
        if (MOBILE) {
            const w = innerWidth;
            SCALE = w * (883 / 375) / 1920;
            stage.style.transform = `translate(${(-435/375*w).toFixed(2)}px,${(-37/375*w).toFixed(2)}px) scale(${SCALE})`;
            ['#gridLayer', '#sceneWrap', '#overlay'].forEach(s => {
                $(s).style.transform = ''
            });
            [wProd, wIns].forEach(x => x.style.transform = '');
            if (copyEl.parentNode !== $('#hero')) $('#hero').appendChild(copyEl);
            return
        }
        if (copyEl.parentNode !== stage) stage.insertBefore(copyEl, wProd);
        SCALE = Math.min(innerWidth / 1920, innerHeight / 1080);
        if (innerWidth / 1920 < SCALE * 1.0001) SCALE = innerWidth / 1920;
        stage.style.transform = `translate(-50%,0) scale(${SCALE})`;
        const L0 = (innerWidth - 1920 * SCALE) / 2 / SCALE;
        const rl = $('#ruler');
        rl.style.left = (-L0) + 'px';
        ['#gridLayer', '#sceneWrap', '#overlay'].forEach(s => {
            $(s).style.transform = ''
        });
        layoutCopy()
    }
    addEventListener('resize', fit);

    /* frame loop */
    const easeOut = t => 1 - Math.pow(1 - t, 3);
    let T0 = 0;

    function frame(now) {
        const t = (now - T0) / 1000;
        if (!RM) {
            par.x += (ptr.nx - par.x) * .06;
            par.y += (ptr.ny - par.y) * .06
        }
        for (const o of boxObjs) {
            const k = RM ? 1 : Math.max(0, Math.min(1, (t - o.delay) / .8));
            o.appear = k;
            const ek = easeOut(k);
            o.lift += (o.liftT - o.lift) * (RM ? 1 : (o.isBlue ? .09 : .2));
            o.hov += (o.hovT - o.hov) * (RM ? 1 : .18);
            const dy = -(o.lift * S) - o.hov * 8 - (1 - ek) * 70;
            o.g.setAttribute('transform', `translate(0,${dy.toFixed(2)})`);
            o.g.setAttribute('opacity', ek.toFixed(3))
        }
        ghost.style.opacity = (blueObj.lift > .15 && blueObj.appear > .9) ? 1 : 0;
        posSel(selLina);
        posSel(selYou);
        if (omarHolding) {
            const p = blueTop();
            omar.set(p[0], p[1])
        }
        for (const [k, h] of heat) {
            h.v *= RM ? 0 : .965;
            h.p.setAttribute('fill-opacity', h.v.toFixed(3));
            if (h.v < .004) {
                h.p.remove();
                heat.delete(k)
            }
        }
        if (!MOBILE && !RM) {
            $('#gridLayer').style.transform = `translate(${(-par.x*6).toFixed(2)}px,${(-par.y*4).toFixed(2)}px)`;
            $('#sceneWrap').style.transform = `translate(${(-par.x*12).toFixed(2)}px,${(-par.y*8).toFixed(2)}px)`;
            for (const [w, st] of winState) {
                const d = w === wProd ? 22 : 28;
                w.style.transform = `translate(${(st.dx-par.x*d).toFixed(2)}px,${(st.dy-par.y*d*.7).toFixed(2)}px)`
            }
        }
        requestAnimationFrame(frame)
    }

    /* boot */
    function boot() {
        fit();
        T0 = performance.now();
        requestAnimationFrame(() => requestAnimationFrame(() => document.body.classList.add('in')));
        const gl = $('#gridLayer');
        if (!RM) {
            gl.animate([{
                opacity: 0
            }, {
                opacity: 1
            }], {
                duration: 1400,
                easing: 'ease-out',
                fill: 'backwards'
            })
        }
        setTimeout(() => wProd.classList.add('on'), RM ? 0 : 1500);
        setTimeout(() => wIns.classList.add('on'), RM ? 0 : 1750);
        if (!RM) {
            wProd.classList.add('loading');
            wIns.classList.add('loading');
            setTimeout(() => wProd.classList.remove('loading'), 2100);
            setTimeout(() => wIns.classList.remove('loading'), 2350);
        }
        setSel(selLina, 'ebooks');
        selLina.g.setAttribute('opacity', RM ? 1 : 0);
        if (RM) {
            lina.set(1124, 585);
            lina.show();
            const p = P(BLUEB.x0 + 1, BLUEB.y0 + 1, BLUEB.z0 + BLUEB.h + LIFT_MAX);
            omar.set(p[0] - 10, p[1] - 14);
            omar.show();
        } else {
            setTimeout(linaLoop, 1900);
            setTimeout(omarLoop, 2600)
        }
        requestAnimationFrame(frame)
    }
    document.addEventListener('visibilitychange', () => {
        paused = document.hidden
    });
    document.addEventListener('click', e => {
        if (e.target.closest('a[href="#"]')) e.preventDefault()
    });
    document.fonts && document.fonts.ready ? document.fonts.ready.then(boot) : boot();

    window.dp = Object.assign(window.dp || {}, {
        version: () => VERSION + ' (' + BUILT + ')',
        state: () => ({
            mobile: MOBILE,
            scale: SCALE,
            reducedMotion: RM,
            product: prodCat,
            service: SERVICES[svc],
            placed: blueObj.liftT === 0,
            linaSel: selLina.cat,
            youSel: selYou.cat
        }),
        replay: () => location.reload(),
        place: () => {
            blueObj.liftT = 0;
            setPlaced(true)
        },
        lift: () => {
            blueObj.liftT = LIFT_MAX;
            setPlaced(false)
        },
        select: c => {
            setSel(selYou, c);
            showProduct(c, 'you')
        },
        remeasure: fit
    });
})();