<?php include 'includes/header.php'; ?>

    <style>
      .lb-empty {
        background: var(--paper);
        border-radius: 16px;
        padding: 80px 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 16px
      }

      .lb-empty .tile {
        width: 56px;
        height: 56px;
        border-radius: 8px;
        background: rgba(46, 71, 230, .08);
        color: var(--blue);
        display: grid;
        place-items: center
      }

      .lb-empty h2 {
        font-weight: 600;
        font-size: 32px;
        line-height: 1.2;
        letter-spacing: -.03em
      }

      .lb-empty p {
        max-width: 440px;
        font-size: 16px;
        line-height: 1.5;
        color: rgba(18, 18, 20, .72)
      }

      .lb-empty .p-btn {
        margin-top: 8px
      }

      @media (max-width:820px) {
        .lb-empty {
          padding: 40px 24px;
          align-items: flex-start;
          text-align: left
        }

        .lb-empty h2 {
          font-size: 24px
        }
      }

      
      [hidden] {
        display: none !important
      }

      .ac-hd {
        background: #fff
      }

      main.dp-page {
        background: #fff
      }

      .ac-hd .dp-wrap {
        padding-top: calc(72*var(--u));
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: calc(24*var(--u))
      }

      .ac-hd .t-lead {
        max-width: calc(640*var(--u))
      }

    
      html {
        overflow-x: visible
      }

      body {
        overflow-x: hidden;
        overflow-x: clip
      }

      
      @media (min-width:821px) {
        /* .ac-main {
        min-height: calc(100vh - 96px)
      } */
      }

      .ac-sec {
        overflow: visible;
        background: #fff;
        padding: calc(56*var(--u)) 0 calc(104*var(--u))
      }

      .ac-main {
        display: flex;
        flex-direction: column;
        gap: 24px;
        min-width: 0
      }

      .dp-side .who small {
        opacity: .5
      }

      .dp-side nav button {
        width: 100%;
        box-sizing: border-box
      }

      .dp-side nav a:focus-visible,
      .dp-side nav button:focus-visible,
      .dp-tabs a:focus-visible,
      .dp-tabs button:focus-visible {
        outline: 2px solid var(--blue);
        outline-offset: 2px
      }

      .dp-tabs a:not(.cur):hover,
      .dp-tabs button:hover {
        border-color: var(--ink)
      }

      button.p-btn {
        border: 0;
        cursor: pointer;
        font-family: inherit
      }

      .ac-dl {
        padding: 10px 16px !important;
        font-size: 14px !important
      }

      .dp-pop {
        background: rgba(18, 18, 20, .8)
      }

      .dp-pop .card {
        width: min(560px, 100%);
        padding: 48px
      }

      .dp-pop .card.wide {
        width: min(640px, 100%);
        position: relative;
        max-height: calc(100vh - 48px);
        overflow-y: auto
      }

      @media (max-width:820px) {
        .ac-hd .dp-wrap {
          padding-top: 40px;
          gap: 24px
        }

        .ac-hd .t-lead {
          font-size: 18px;
          max-width: none
        }

        .ac-sec {
          padding: 40px 0
        }

        .dp-acct {
          gap: 32px
        }

        .ac-main {
          gap: 32px
        }

        .dp-tabs {
          margin: 0 -24px;
          padding: 0 24px
        }

        .dp-pop .card {
          padding: 32px
        }

        .dp-pop .card.wide {
          padding: 24px;
          gap: 16px
        }
      }
    </style>
    <style>
      .od-h,
      .od-r {
        display: grid;
        grid-template-columns: calc(200*var(--u)) calc(240*var(--u)) calc(160*var(--u)) calc(160*var(--u)) 1fr;
        align-items: center;
        border-bottom: 1px solid rgba(18, 18, 20, .1)
      }

      .od-h {
        padding-bottom: 16px;
        font: 400 11px/1.3 "Geist Mono", monospace;
        letter-spacing: .02em;
        text-transform: uppercase;
        color: rgba(18, 18, 20, .5)
      }

      .od-h span:last-child,
      .od-r>span:last-child,
      .od-r .inv {
        text-align: right;
        justify-self: end
      }

      .od-r {
        padding: 24px 0;
        cursor: pointer;
        transition: background .25s
      }

      .od-r:hover {
        background: linear-gradient(90deg, transparent, rgba(245, 244, 240, .8) 8%, rgba(245, 244, 240, .8) 92%, transparent)
      }

      .od-r:focus-visible {
        outline: 2px solid var(--blue);
        outline-offset: 2px
      }

      .od-r .ref {
        font-weight: 500;
        font-size: 15px;
        line-height: 1.4
      }

      .od-r:hover .ref {
        color: var(--blue)
      }

      .od-r .c {
        font-size: 16px;
        line-height: 1.5;
        color: rgba(18, 18, 20, .72)
      }

      .od-r .inv {
        all: unset;
        cursor: pointer;
        font-weight: 500;
        font-size: 16px;
        line-height: 1.4;
        color: var(--blue)
      }

      .od-r .inv:hover {
        text-decoration: underline;
        text-underline-offset: 3px
      }

      .od-r .inv:focus-visible {
        outline: 2px solid var(--blue);
        outline-offset: 3px
      }

      /* order detail popup */
      .od-x {
        all: unset;
        cursor: pointer;
        position: absolute;
        top: 44px;
        right: 44px;
        width: 28px;
        height: 28px;
        display: grid;
        place-items: center;
        border-radius: 6px
      }

      .od-x:hover {
        background: var(--paper)
      }

      .od-x:focus-visible {
        outline: 2px solid var(--blue)
      }

      .dp-pop .card.wide>div:first-of-type {
        padding-right: 40px
      }

      .dp-pop .card.wide>div:first-of-type p {
        margin-top: 6px;
        font-size: 15px;
        color: rgba(18, 18, 20, .6)
      }

      .dp-pop hr {
        border: 0;
        height: 1px;
        background: rgba(18, 18, 20, .1);
        flex: none
      }

      .od-ls {
        display: flex;
        flex-direction: column
      }

      .od-l {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 16px 0;
        border-bottom: 1px solid rgba(18, 18, 20, .1)
      }

      .od-l img {
        width: 48px;
        height: 48px;
        border-radius: 8px;
        object-fit: cover;
        flex: none
      }

      .od-l div {
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
        gap: 2px
      }

      .od-l b,
      .od-sr b,
      .od-l>span {
        font-weight: 500;
        font-size: 15px;
        line-height: 1.4
      }

      .od-l small {
        font-size: 13px;
        line-height: 1.4;
        color: rgba(18, 18, 20, .6)
      }

      .od-sr {
        display: flex;
        justify-content: space-between;
        align-items: center
      }

      .od-sr span {
        font-size: 16px;
        line-height: 1.5;
        color: rgba(18, 18, 20, .72)
      }

      .od-tot {
        display: flex;
        justify-content: space-between;
        align-items: center
      }

      .od-tot span {
        font-weight: 500;
        font-size: 20px;
        line-height: 1.4
      }

      .od-tot b {
        font-weight: 600;
        font-size: 24px;
        line-height: 1.2;
        letter-spacing: -.03em
      }

      .od-act {
        display: flex;
        gap: 16px
      }

      .od-act .p-btn {
        align-self: auto
      }

      @media (max-width:820px) {
        .od-h {
          display: none
        }

        .od-r {
          display: flex;
          flex-direction: column;
          align-items: flex-start;
          gap: 4px
        }

        .od-r .inv {
          justify-self: auto;
          text-align: left;
          margin-top: 4px
        }

        .od-x {
          top: 20px;
          right: 20px
        }

        .dp-pop .card.wide>div:first-of-type {
          padding-right: 32px
        }

        .od-l {
          padding: 12px 0;
          align-items: flex-start
        }

        .od-act {
          flex-direction: column;
          gap: 12px
        }
      }
    </style>
    <main class="dp-page tirthak_fullt">
      <section class="ac-hd">
        <div class="dp-wrap"><span class="p-lab"><i></i>Your account</span>
          <h1 class="t-h1">Orders</h1>
          <p class="t-lead">Every order you have placed, with its invoice beside it.</p>
        </div>
      </section>
      <section class="ac-sec">
        <div class="dp-wrap dp-acct">
          <aside class="dp-side diff_colort" aria-label="Account">
            <div class="who"><small>Signed in as</small><b>John Smith</b><span>john@example.com</span></div>
            <hr style="margin: 0px;">
            <nav><a href="account-library.html">Library</a><a href="account-orders.html" class="cur"
                aria-current="page">Orders</a><a href="account-details.html">Account details</a><button type="button"
                data-signout>Sign out</button></nav>
          </aside>
          <div class="ac-main">
            <nav class="dp-tabs" aria-label="Account"><a href="account-library.html">Library</a><a
                href="account-orders.html" class="cur" aria-current="page">Orders</a><a
                href="account-details.html">Account details</a><button type="button" data-signout>Sign out</button>
            </nav>

            <div class="od-t" role="table" aria-label="Orders">
              <div class="od-h" role="row"><span role="columnheader">Order</span><span
                  role="columnheader">Date</span><span role="columnheader">Items</span><span
                  role="columnheader">Total</span><span role="columnheader">Invoice</span></div>
              <div id="odRows" role="rowgroup">
                <div class="od-r" role="row">
                  <span class="ref" role="cell">DP-000004</span>
                  <span class="c" role="cell">12 October 2026</span>
                  <span class="c" role="cell">2 items</span>
                  <span class="c" role="cell">$130.79</span>
                  <span role="cell"><button type="button" class="inv" style="margin: 0px" data-bs-toggle="modal"
                      data-bs-target="#exampleModal">View invoice</button></span>
                </div>
                <div class="od-r" role="row">
                  <span class="ref" role="cell">DP-000003</span>
                  <span class="c" role="cell">28 September 2026</span>
                  <span class="c" role="cell">1 item</span>
                  <span class="c" role="cell">$54.95</span>
                  <span role="cell"><button type="button" class="inv" style="margin: 0px" data-invoice="DP-000003">View
                      invoice</button></span>
                </div>
                <div class="od-r" role="row">
                  <span class="ref" role="cell">DP-000002</span>
                  <span class="c" role="cell">14 August 2026</span>
                  <span class="c" role="cell">1 item</span>
                  <span class="c" role="cell">$37.84</span>
                  <span role="cell"><button type="button" class="inv" style="margin: 0px" data-invoice="DP-000002">View
                      invoice</button></span>
                </div>
                <div class="od-r" role="row">
                  <span class="ref" role="cell">DP-000001</span>
                  <span class="c" role="cell">2 July 2026</span>
                  <span class="c" role="cell">1 item</span>
                  <span class="c" role="cell">$79.38</span>
                  <span role="cell"><button type="button" class="inv" style="margin: 0px" data-invoice="DP-000001">View
                      invoice</button></span>
                </div>
              </div>
            </div>
            <div class="lb-empty od-empty diff_colort different_stylest" id="odEmpty">
              <span class="tile"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M16 10a4 4 0 0 1-8 0" />
                  <path d="M3.1 6h17.8" />
                  <path
                    d="M3.4 5.5 5 3h14l1.6 2.5A2 2 0 0 1 21 7v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 .4-1.5z" />
                </svg></span>
              <h2>No orders yet</h2>
              <p>When you buy from the store, each order and its invoice shows up here.</p>
              <a href="store.html" class="p-btn p-b1 for_margin_zerot">Browse the store</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered  modal-xl ">
        <div class="modal-content modal_tirthakt mx-auto">
          <div>
            <h3 id="dpPopH" class="modal_tt">Order DP-000003</h3>
            <p class="modal_pp">Placed on 28 September 2026 · 1 item</p>
          </div>
          <button type="button" class="od-x" aria-label="Close" data-pop-close=""><svg width="14" height="14"
              viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
              aria-hidden="true">
              <path d="M1 1l10 10M11 1L1 11"></path>
            </svg></button>
          <div class="od-ls w-100">
            <div class="od-l"><img src="assets/img/cover-003.jpg" alt="">
              <div><b>WP Video Focus</b><small>Software</small></div><span>$54.95</span>
            </div>
          </div>
          <div class="od-sr w-100"><span>Subtotal</span><b>$54.95</b></div>
          <div class="od-sr w-100"><span>Discount (WELCOME10)</span><b>−$15.87</b></div>
          <div class="line_t">

          </div>
          <div class="od-tot w-100"><span>Total</span><b>$54.95</b></div>
          <div class="od-act for_hundt"><a href="invoice.html?ref=DP-000003" class="p-btn p-b1 for_hundt">Open full invoice</a><button
              type="button" class="p-btn p-b2 for_hundt" data-pop-close="">Close</button></div>

        </div>
      </div>


      <footer class="p-foot">
        <div class="p-wrap">
          <div class="p-ft">
            <div class="p-brand">
              <a href="index.html" class="lg">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M12 1l10 5.8v11.4L12 24 2 18.2V6.8z" fill="#121214" stroke="#fff" stroke-width="1.4"
                    stroke-linejoin="round" />
                  <path d="M12 12.6L22 6.8M12 12.6L2 6.8M12 12.6V24" stroke="#fff" stroke-width="1.4" />
                  <path d="M12 1l10 5.8L12 12.6 2 6.8z" fill="#2E47E6" />
                </svg>DesignPixis</a>
              <p>Design resources and a studio, from one place.</p><a
                href="mailto:hello@designpixis.com">hello@designpixis.com</a>
            </div>
            <div class="p-cols">
              <div class="p-col"><small>Store</small><a href="store.html?cat=ebooks">E-books</a><a
                  href="store.html?cat=video">Video courses</a><a href="store.html?cat=software">Software</a><a
                  href="store.html?cat=templates">Templates</a><a href="store.html?cat=audiobooks">Audiobooks</a></div>
              <div class="p-col"><small>Studio</small><a href="design-services.html#user-interface">User Interface</a><a
                  href="design-services.html#user-experience">User Experience</a><a
                  href="design-services.html#illustration">Illustration</a><a
                  href="design-services.html#e-commerce">E-Commerce</a>
                <a href="design-services.html#ab-testing">AB Testing</a>
              </div>
              <div class="p-col"><small>Company</small><a href="about.html">About</a><a href="faq.html">FAQ</a><a
                  href="contact.html">Contact</a></div>
              <div class="p-col"><small>Legal</small><a href="terms.html">Terms and Conditions</a><a
                  href="privacy.html">Privacy Policy</a></div>
            </div>
          </div>
          <div class="p-fb">
            <span>© 2026 DesignPixis. All rights reserved.</span>
            <div class="p-util">
              <div class="p-cur" id="cur">
                <button aria-haspopup="listbox" aria-expanded="false"><span id="curL">USD $</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round" aria-hidden="true">
                    <path d="m6 9 6 6 6-6" />
                  </svg>
                </button>
                <ul role="listbox">
                  <li class="sel" data-c="USD $">USD<span>$</span></li>
                  <li data-c="EUR €">EUR<span>€</span></li>
                  <li data-c="GBP £">GBP<span>£</span></li>
                </ul>
              </div>
              <div class="p-pay" aria-label="Visa and Mastercard"><span class="p-visa" role="img" aria-label="Visa"><svg
                    viewBox="0 7.4 24 9.2" aria-hidden="true">
                    <path fill="#fff"
                      d="M9.112 8.262L5.97 15.758H3.92L2.374 9.775c-.094-.368-.175-.503-.461-.658C1.447 8.864.677 8.627 0 8.479l.046-.217h3.3a.904.904 0 01.894.764l.817 4.338 2.018-5.102zm8.033 5.049c.008-1.979-2.736-2.088-2.717-2.972.006-.269.262-.555.822-.628a3.66 3.66 0 011.913.336l.34-1.59a5.207 5.207 0 00-1.814-.333c-1.917 0-3.266 1.02-3.278 2.479-.012 1.079.963 1.68 1.698 2.04.756.367 1.01.603 1.006.931-.005.504-.602.725-1.16.734-.975.015-1.54-.263-1.992-.473l-.351 1.642c.453.208 1.289.39 2.156.398 2.037 0 3.37-1.006 3.377-2.564m5.061 2.447H24l-1.565-7.496h-1.656a.883.883 0 00-.826.55l-2.909 6.946h2.036l.405-1.12h2.488zm-2.163-2.656l1.02-2.815.588 2.815zm-8.16-4.84l-1.603 7.496H8.34l1.605-7.496z" />
                    </svg></span>
                <span class="p-mc"><i style="left:0;background:#EB001B"></i><i
                    style="left:calc(12*var(--u));background:#F79E1B;opacity:.9"></i></span>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
<?php include 'includes/footer.php'; ?>




