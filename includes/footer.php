
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

 <!-- -----------account------------------ -->
  <script>
    (function() {
    if (!DP.requireAuth()) return;
    document.querySelectorAll('[data-signout]').forEach(b => b.addEventListener('click', () => {
        DP.user.signOut();
        location.href = 'index.html'
    }));
    const u = DP.user.get();
    const fd = document.getElementById('fd'),
        fp = document.getElementById('fp');
    const $ = id => document.getElementById(id);
    $('name').value = ((u.first || '') + ' ' + (u.last || '')).trim();
    $('email').value = u.email || '';
    $('company').value = u.company || '';
    $('address').value = u.address || '';
    $('address2').value = u.address2 || '';
    $('city').value = u.city || '';
    $('postcode').value = u.postcode || '';
    if (u.country) {
        const s = $('country');
        if (![...s.options].some(o => o.value === u.country)) s.add(new Option(u.country));
        s.value = u.country
    }
    fd.addEventListener('submit', e => {
        e.preventDefault();
        if (!DP.validate(fd)) return;
        const parts = $('name').value.trim().split(/\s+/);
        DP.user.update({
            first: parts[0],
            last: parts.slice(1).join(' '),
            email: $('email').value.trim(),
            company: $('company').value.trim(),
            address: $('address').value.trim(),
            address2: $('address2').value.trim(),
            city: $('city').value.trim(),
            postcode: $('postcode').value.trim(),
            country: $('country').value
        });
        DP.popup({
            heading: 'Details saved',
            body: 'Your next invoice will use these details.',
            button: {
                label: 'Done',
                onClick: () => {}
            }
        })
    });
    fp.addEventListener('submit', e => {
        e.preventDefault();
        if (!DP.validate(fp)) return;
        fp.reset();
        DP.popup({
            heading: 'Password updated',
            body: 'Use your new password next time you sign in.',
            button: {
                label: 'Done',
                onClick: () => {}
            }
        })
    });
})();
  </script>


</body>
</html>
  