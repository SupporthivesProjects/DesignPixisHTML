
<footer class="p-foot">
        <div class="p-wrap">
            <div class="p-ft">
                <div class="p-brand">
                    <a href="index.html" class="lg">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 1l10 5.8v11.4L12 24 2 18.2V6.8z" fill="#121214" stroke="#fff" stroke-width="1.4" stroke-linejoin="round" />
                            <path d="M12 12.6L22 6.8M12 12.6L2 6.8M12 12.6V24" stroke="#fff" stroke-width="1.4" />
                            <path d="M12 1l10 5.8L12 12.6 2 6.8z" fill="#2E47E6" />
                        </svg>DesignPixis</a>
                    <p>Design resources and a studio, from one place.</p><a href="mailto:hello@designpixis.com">hello@designpixis.com</a></div>
                <div class="p-cols">
                    <div class="p-col"><small>Store</small><a href="store.html?cat=ebooks">E-books</a><a href="store.html?cat=video">Video courses</a><a href="store.html?cat=software">Software</a><a href="store.html?cat=templates">Templates</a><a href="store.html?cat=audiobooks">Audiobooks</a></div>
                    <div class="p-col"><small>Studio</small><a href="design-services.html#user-interface">User Interface</a><a href="design-services.html#user-experience">User Experience</a><a href="design-services.html#illustration">Illustration</a><a href="design-services.html#e-commerce">E-Commerce</a>
                        <a
                        href="design-services.html#ab-testing">AB Testing</a>
                    </div>
                    <div class="p-col"><small>Company</small><a href="about.html">About</a><a href="faq.html">FAQ</a><a href="contact.html">Contact</a></div>
                    <div class="p-col"><small>Legal</small><a href="terms.html">Terms and Conditions</a><a href="privacy.html">Privacy Policy</a></div>
                </div>
            </div>
            <div class="p-fb">
                <span>© 2026 DesignPixis. All rights reserved.</span>
                <div class="p-util">
                    <div class="p-cur" id="cur">
                        <button aria-haspopup="listbox" aria-expanded="false"><span id="curL">USD $</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>
                        <ul role="listbox">
                            <li class="sel" data-c="USD $">USD<span>$</span></li>
                            <li data-c="EUR €">EUR<span>€</span></li>
                            <li data-c="GBP £">GBP<span>£</span></li>
                        </ul>
                    </div>
                    <div class="p-pay" aria-label="Visa and Mastercard"><span class="p-visa" role="img" aria-label="Visa"><svg viewBox="0 7.4 24 9.2" aria-hidden="true"><path fill="#fff" d="M9.112 8.262L5.97 15.758H3.92L2.374 9.775c-.094-.368-.175-.503-.461-.658C1.447 8.864.677 8.627 0 8.479l.046-.217h3.3a.904.904 0 01.894.764l.817 4.338 2.018-5.102zm8.033 5.049c.008-1.979-2.736-2.088-2.717-2.972.006-.269.262-.555.822-.628a3.66 3.66 0 011.913.336l.34-1.59a5.207 5.207 0 00-1.814-.333c-1.917 0-3.266 1.02-3.278 2.479-.012 1.079.963 1.68 1.698 2.04.756.367 1.01.603 1.006.931-.005.504-.602.725-1.16.734-.975.015-1.54-.263-1.992-.473l-.351 1.642c.453.208 1.289.39 2.156.398 2.037 0 3.37-1.006 3.377-2.564m5.061 2.447H24l-1.565-7.496h-1.656a.883.883 0 00-.826.55l-2.909 6.946h2.036l.405-1.12h2.488zm-2.163-2.656l1.02-2.815.588 2.815zm-8.16-4.84l-1.603 7.496H8.34l1.605-7.496z"/></svg></span>
                        <span
                        class="p-mc"><i style="left:0;background:#EB001B"></i><i style="left:calc(12*var(--u));background:#F79E1B;opacity:.9"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
    <script src="assets/uiframe/js/jquery.min.js"></script>
    <script src="assets/uiframe/js/bootstrap.bundle.min.js"></script>
    <script src="assets/uiframe/js/popper.min.js"></script>
    <script src="assets/uiframe/js/slick.js"></script>
    <script src="assets/uiframe/js/owl.carousel.js"></script>
    <script src="assets/uiframe/js/swiper-bundle.min.js"></script>
    <script src="assets/uiframe/js/flickity.pkgd.min.js"></script>   
    <script src="assets/uiframe/js/aos.js"></script>
    <script src="assets/uiframe/js/home-js.js"></script>
    <script src="assets/catalogue.js"></script>
    <script src="assets/site.js"></script>
    <script src="assets/animation.js"></script>
    <script src="assets/animation1.js"></script>
    <script>
      $(document).ready(function () {
          $(".navbar-toggler").click(function () {
              $(this).toggleClass("is-active");
              $("header").toggleClass("header-is-active");

              let logo = $("#logo");
              if (logo.attr("src") === "./img/logo.svg") {
                  logo.attr("src", "./img/logo.svg");
              } else {
                  logo.attr("src", "./img/logo.svg");
              }
          });
      });
    </script>
    <script>
      $('#filterid').on('click', function(event) {
          $('#filterBox').slideToggle(300);
          $('#filterBox').toggleClass('open');
          event.preventDefault();
      });
      $(document).ready(function(){
        $("#filter-close").click(function(){
          $("#filterBox").slideUp("slow");
        });
      });
      document.querySelectorAll(".ul-filter-menu h3").forEach(header => {
        header.addEventListener("click", () => {
          const body = header.nextElementSibling;

          body.classList.toggle("open");     // toggle body
          header.classList.toggle("active"); // toggle class on h3
        });
      });
    </script>
    <script>
      function selectCurrency(currency, flagSrc) {
          const btn = document.getElementById("currencyBtn");
          const flag = document.getElementById("currencyFlag");
          btn.innerHTML = `${currency} <img id="currencyFlag" src="${flagSrc}" class="img-fluid">`;
      }
    </script>
    <script>
      window.addEventListener('scroll', function() {
          var content = document.querySelector('header');
          var scrollPosition = window.scrollY;
          if (scrollPosition > 10) {
              content.classList.add("header-scroll")
          } else {
              content.classList.remove("header-scroll")
          }
      });
    </script>
    <script>
      AOS.init();
    </script>
    <!-- --------account create modal------ -->
     <script>
        (function() {
        const nx = DP.nextUrl('');
        const q = nx ? '?next=' + encodeURIComponent(nx) : '';
        document.querySelectorAll('[data-carry]').forEach(a => {
            a.href = a.getAttribute('href').split('?')[0] + q
        });
        const f = document.getElementById('f');
        f.addEventListener('submit', e => {
            e.preventDefault();
            if (!DP.validate(f)) return;
            const parts = document.getElementById('name').value.trim().split(/\s+/);
            const first = parts[0];
            const last = parts.slice(1).join(' ');
            DP.user.signIn({
                first,
                last,
                email: f.email.value.trim()
            });
            const dest = DP.nextUrl('account-library.html');
            const toCheckout = /^checkout\.html/.test(dest);
            DP.popup({
                heading: 'Account created',
                body: toCheckout ? `You're in, ${DP.esc(first)}. We'll take you back to checkout to finish your order.` : `You're in, ${DP.esc(first)}. Anything you buy from the store will be waiting in your library.`,
                button: {
                    label: toCheckout ? 'Continue to checkout' : (dest === 'account-library.html' ? 'Go to your library' : 'Continue'),
                    href: dest
                }
            });
            document.getElementById('dpPop').addEventListener('click', ev => {
                if (ev.target.id === 'dpPop') location.href = dest
            }, {
                once: true
            })
        });
    })();
    </script>
    <!-- --------store page------ -->
    <script>
    (function() {
    const COUNTS = {
        '': 113,
        ebooks: 57,
        video: 26,
        software: 24,
        templates: 5,
        audiobooks: 1
    };
    const CHIPS = [
        ['', 'All'],
        ['ebooks', 'E-books'],
        ['video', 'Video courses'],
        ['software', 'Software'],
        ['templates', 'Templates'],
        ['audiobooks', 'Audiobooks']
    ];
    const mob = matchMedia('(max-width:820px)');
    const $ = s => document.querySelector(s);
    let cat = DP.qs('cat') || '';
    if (!(cat in COUNTS)) cat = '';
    let page = Math.max(1, parseInt(DP.qs('page') || '1', 10) || 1);
    let q = '',
        sort = 'pop';

    /* hero window: the first three resources */
    $('#mock').innerHTML = DP.CAT.slice(0, 3).map(p => `<a class="st-it" href="product.html?id=${p.id}"><span class="cv"><img src="${DP.cover(p)}" alt="${DP.esc(p.name)}">${DP.pill(p)}</span><span class="mt"><b>${DP.esc(p.name)}</b><span>${DP.money(p.price)}</span></span></a>`).join('');

    $('#chips').innerHTML = CHIPS.map(([k, l]) => `<button class="dp-chip" role="tab" data-cat="${k}">${l}<small>${COUNTS[k]}</small></button>`).join('');

    function sorted(list) {
        const l = list.slice();
        if (sort === 'low') l.sort((a, b) => a.price - b.price);
        else if (sort === 'high') l.sort((a, b) => b.price - a.price);
        else if (sort === 'name') l.sort((a, b) => a.name.localeCompare(b.name, 'en-GB', {
            numeric: true
        }));
        return l
    }

    function url() {
        const u = new URLSearchParams();
        if (cat) u.set('cat', cat);
        if (page > 1) u.set('page', page);
        const s = u.toString();
        history.replaceState(null, '', 'store.html' + (s ? '?' + s : ''))
    }

    function render() {
        const per = mob.matches ? 6 : 15;
        const total = COUNTS[cat];
        const base = sorted(DP.CAT.filter(p => !cat || p.cat === cat));
        const pages = Math.max(1, Math.ceil(total / per));
        if (page > pages) page = pages;
        let items, shown;
        if (q) {
            const t = q.toLowerCase();
            items = base.filter(p => p.name.toLowerCase().includes(t));
            shown = items.length
        } else {
            items = DP.rotate(Math.max(0, Math.min(per, total - (page - 1) * per)), page - 1, base);
            shown = items.length
        }
        const g = $('#grid');
        g.innerHTML = items.length ? items.map((p, i) => DP.card(p, i)).join('') : `<p class="st-empty" style="grid-column:1/-1">Nothing matches "${DP.esc(q)}". <button type="button" id="clr">Clear the search</button></p>`;
        const c = $('#clr');
        if (c) c.addEventListener('click', () => {
            $('#q').value = '';
            q = '';
            render();
            $('#q').focus()
        });
        DP.pixeliseAll(g);
        DP.reveal(g);
        $('#showing').textContent = q ? `Showing ${shown} of ${shown} resource${shown===1?'':'s'}` : `Showing ${shown} of ${total} resource${total===1?'':'s'}`;
        document.querySelectorAll('#chips .dp-chip').forEach(b => {
            const on = b.dataset.cat === cat;
            b.classList.toggle('cur', on);
            b.setAttribute('aria-selected', on)
        });
        document.querySelectorAll('.st-tabs a').forEach(a => a.classList.toggle('cur', (new URL(a.href).searchParams.get('cat') || '') === cat));
        $('#cat').value = cat;
        pag(q ? 1 : pages);
    }

    function pag(pages) {
        const n = $('#pag');
        const list = [];
        if (pages <= 5) {
            for (let i = 1; i <= pages; i++) list.push(i)
        } else if (page <= 3) list.push(1, 2, 3, '…', pages);
        else if (page >= pages - 2) list.push(1, '…', pages - 2, pages - 1, pages);
        else list.push(1, '…', page, '…', pages);
        n.innerHTML = list.map(i => i === '…' ? '<span class="gap" aria-hidden="true">…</span>' : `<button data-p="${i}"${i===page?' class="cur" aria-current="page"':''} aria-label="Page ${i}">${i}</button>`).join('') + `<button class="p-btn p-b2 p-bs" data-p="${page+1}"${page>=pages?' disabled':''}>Next</button>`;
        DP.pixeliseAll(n);
    }

    function go(p) {
        page = p;
        url();
        render();
        const t = $('#catalogue');
        if (t.getBoundingClientRect().top < 0) t.scrollIntoView({
            block: 'start'
        })
    }
    $('#pag').addEventListener('click', e => {
        const b = e.target.closest('[data-p]');
        if (b && !b.disabled) go(+b.dataset.p)
    });
    $('#chips').addEventListener('click', e => {
        const b = e.target.closest('[data-cat]');
        if (!b) return;
        cat = b.dataset.cat;
        page = 1;
        url();
        render()
    });
    $('#cat').addEventListener('change', e => {
        cat = e.target.value;
        page = 1;
        url();
        render()
    });
    $('#sort').addEventListener('change', e => {
        sort = e.target.value;
        render()
    });
    $('#q').addEventListener('input', e => {
        q = e.target.value.trim();
        render()
    });
    document.querySelectorAll('.st-tabs a').forEach(a => a.addEventListener('click', e => {
        e.preventDefault();
        cat = new URL(a.href).searchParams.get('cat') || '';
        page = 1;
        url();
        render();
        $('#catalogue').scrollIntoView({
            block: 'start',
            behavior: matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth'
        })
    }));
    mob.addEventListener('change', render);
    render();
})();
</script>
<!-- ------------about------------- -->
 <script>
    (function() {
    const RM = matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (RM) return;
    const films = [...document.querySelectorAll('video.film')];
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
                v.pause()
            }
        }
    }, {
        rootMargin: '100px 0px'
    });
    films.forEach(v => vio.observe(v));
})();
(function() {
    const r = document.getElementById('abRuler');
    if (!r) return;
    let h = '';
    for (let x = 0; x <= 1440; x += 48) {
        const mj = x % 240 === 0 || x === 1440;
        const px = x === 1440 ? 1439 : x;
        h += `<span class="tk${mj?' mj':''}" style="left:${(px/1440*100).toFixed(4)}%"></span>`;
        if (x % 240 === 0 && x < 1440) h += `<em style="left:${(x/1440*100).toFixed(4)}%">${x}</em>`
    }
    [0, 496, 992].forEach((x, i) => {
        h += `<span class="sm" style="left:${(x/1440*100).toFixed(4)}%;--d:${i*.15}s"></span>`
    });
    r.insertAdjacentHTML('beforeend', h);
})();
 </script>
<!-- -----------------product-details---------------------- -->
 <script>
    (function() {
    const FORMAT = {
        video: 'MP4 video',
        ebooks: 'PDF and EPUB',
        software: 'WordPress plugin, ZIP',
        templates: 'WordPress theme',
        audiobooks: 'MP3 and MP4'
    };
    const id = DP.qs('id') || '001';
    const p = DP.byId(id);
    if (!p) {
        location.replace('404.html');
        return
    }
    const c = DP.CATS[p.cat];
    const $ = s => document.querySelector(s);
    document.title = p.name + ' | DesignPixis';
    $('#crumb').innerHTML = `<a href="store.html">Store</a><i>/</i><a href="store.html?cat=${p.cat}">${c.plural}</a><i>/</i><span aria-current="page">${DP.esc(p.name)}</span>`;
    $('#cv').innerHTML = `<img src="${DP.cover(p)}" alt="${DP.esc(p.name)} cover">${DP.pill(p)}`;
    $('#nm').textContent = p.name;
    $('#ab').textContent = p.intro || p.about[0];
    $('#pr').textContent = DP.money(p.price);
    $('#rows').innerHTML = `<div class="r"><span>Format</span><b>${FORMAT[p.cat]}</b></div><div class="r"><span>Category</span><b>${c.label}</b></div><div class="r"><span>Delivery</span><a href="account-library.html">Download from your library</a></div>`;
    const add = $('#add');
    add.dataset.add = p.id;
    if (DP.cart.has(p.id)) {
        add.classList.add('added');
        add.querySelector('span').textContent = 'In cart'
    }
    const i = DP.CAT.indexOf(p) % 4;
    $('#rel').innerHTML = DP.rotate(5, i, DP.CAT.filter(x => x.id !== p.id)).map((x, k) => DP.card(x, k)).join('');
    DP.pixeliseAll($('#rel'));
    DP.reveal();
})();
 </script>
 <!-- -----------cart------------------ -->




</body>
</html>
  