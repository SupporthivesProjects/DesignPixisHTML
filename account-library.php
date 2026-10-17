<?php include 'includes/header.php'; ?>

    <style>
      
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
      .lb-hd {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-bottom: 32px;
        border-bottom: 1px solid rgba(18, 18, 20, .1);
        margin-bottom: 24px
      }

      .lb-hd b {
        font-weight: 500;
        font-size: 18px;
        line-height: 1.4
      }

      .lb-hd span {
        font-size: 15px;
        line-height: 1.5;
        opacity: .6
      }

      .lb-r {
        display: grid;
        grid-template-columns: 72px 1fr auto;
        column-gap: 24px;
        row-gap: 4px;
        align-items: center;
        padding: 24px 0;
        border-bottom: 1px solid rgba(18, 18, 20, .1)
      }

      .lb-r img {
        grid-row: 1/3;
        width: 72px;
        height: 72px;
        border-radius: 8px;
        object-fit: cover;
        background: #F1EBE2
      }

      .lb-r .t {
        grid-column: 2;
        font-weight: 500;
        font-size: 18px;
        line-height: 1.4;
        align-self: end
      }

      .lb-r .t:hover {
        color: var(--blue)
      }

      .lb-r .m {
        grid-column: 2;
        font-size: 15px;
        line-height: 1.5;
        color: rgba(18, 18, 20, .6);
        align-self: start
      }

      .lb-r .p-btn {
        grid-column: 3;
        grid-row: 1/3
      }

      .nw {
        white-space: nowrap
      }

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

      .lb-toast {
        position: fixed;
        z-index: 70;
        left: 50%;
        bottom: 24px;
        transform: translate(-50%, 12px);
        width: 420px;
        max-width: calc(100vw - 48px);
        display: flex;
        gap: 12px;
        align-items: flex-start;
        padding: 16px;
        border-radius: 12px;
        background: var(--ink);
        color: #fff;
        box-shadow: 0 12px 24px rgba(18, 18, 20, .2);
        opacity: 0;
        pointer-events: none;
        transition: opacity .35s var(--ease), transform .35s var(--ease)
      }

      .lb-toast.show {
        opacity: 1;
        transform: translate(-50%, 0);
        pointer-events: auto
      }

      .lb-toast>svg {
        flex: none;
        color: #8FA0FF;
        margin-top: 1px
      }

      .lb-toast div {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 2px;
        font-size: 14px;
        line-height: 1.4
      }

      .lb-toast b {
        font-weight: 500;
        font-size: 15px
      }

      .lb-toast span {
        opacity: .72
      }

      .lb-toast .x {
        all: unset;
        cursor: pointer;
        width: 20px;
        height: 20px;
        display: grid;
        place-items: center;
        border-radius: 4px;
        flex: none
      }

      .lb-toast .x:hover {
        background: rgba(255, 255, 255, .12)
      }

      .lb-toast .x:focus-visible {
        outline: 2px solid #fff
      }

      @media (prefers-reduced-motion:reduce) {
        .lb-toast {
          transition: none
        }
      }

      @media (max-width:820px) {
        .lb-hd {
          padding-bottom: 0;
          margin-bottom: 16px;
          padding-bottom: 16px
        }

        .lb-r {
          grid-template-columns: 56px 1fr;
          row-gap: 8px;
          align-items: start
        }

        .lb-r img {
          grid-row: 1/4;
          width: 56px;
          height: 56px
        }

        .lb-r .t,
        .lb-r .m {
          align-self: auto
        }

        .lb-r .p-btn {
          grid-column: 2;
          grid-row: 3;
          justify-self: start
        }

        .lb-empty {
          padding: 40px 24px;
          align-items: flex-start;
          text-align: left
        }

        .lb-empty h2 {
          font-size: 24px
        }
      }
    </style>
    <main class="dp-page tirthak_fullt">
      <section class="ac-hd">
        <div class="dp-wrap"><span class="p-lab"><i></i>Your account</span>
          <h1 class="t-h1">Library</h1>
          <p class="t-lead">Everything you own. Download it as many times as you need.</p>
        </div>
      </section>
      <section class="ac-sec">
        <div class="dp-wrap dp-acct">
          <aside class="dp-side diff_colort" aria-label="Account">
            <div class="who"><small>Signed in as</small><b>John Smith</b><span>john@example.com</span></div>
            <hr style="margin: 0px;">
            <nav><a href="account-library.html" class="cur" aria-current="page">Library</a><a
                href="account-orders.html">Orders</a><a href="account-details.html">Account details</a><button
                type="button" data-signout>Sign out</button></nav>
          </aside>
          <div class="ac-main">
            <nav class="dp-tabs" aria-label="Account"><a href="account-library.html" class="cur"
                aria-current="page">Library</a><a href="account-orders.html">Orders</a><a
                href="account-details.html">Account details</a><button type="button" data-signout>Sign out</button>
            </nav>
            <div id="lib">
              <div class="lb-hd"><b id="lbN">5 resources</b><span>Newest first</span></div>
              <div class="lb-list" id="lbList">
                <div class="lb-r">
                  <img src="assets/img/cover-001.jpg" alt="" loading="lazy">
                  <a href="product.html?id=001" class="t">Vijay Learning Gutenberg</a>
                  <span class="m">Video course · Bought <span class="nw">12 October 2026</span></span>
                  <a href="#" class="p-btn p-b2 p-bs for_pending_download" download>Pending Download</a>
                </div>
                <div class="lb-r">
                  <img src="assets/img/cover-002.jpg" alt="" loading="lazy">
                  <a href="product.html?id=002" class="t">Rahul Website Creation and Design</a>
                  <span class="m">E-book · Bought <span class="nw">12 October 2026</span></span>
                  <a href="#" class="p-btn p-b2 p-bs " download>Download</a>
                </div>
                <div class="lb-r">
                  <img src="assets/img/cover-003.jpg" alt="" loading="lazy">
                  <a href="product.html?id=003" class="t">WP Video Focus</a>
                  <span class="m">Software · Bought <span class="nw">28 September 2026</span></span>
                  <a href="#" class="p-btn p-b2 p-bs" download>Download</a>
                </div>
                <div class="lb-r">
                  <img src="assets/img/cover-005.jpg" alt="" loading="lazy">
                  <a href="product.html?id=005" class="t">Kickstart Genesis Framework WP Theme</a>
                  <span class="m">Template · Bought <span class="nw">14 August 2026</span></span>
                  <a href="#" class="p-btn p-b2 p-bs" download>Download</a>
                </div>
                <div class="lb-r">
                  <img src="assets/img/cover-065.jpg" alt="" loading="lazy">
                  <a href="product.html?id=065" class="t">7 Step WordPress Setup Audio Video Series</a>
                  <span class="m">Audiobook · Bought <span class="nw">2 July 2026</span></span>
                  <a href="#" class="p-btn p-b2 p-bs" download>Download</a>
                </div>
              </div>
            </div>
            <div class="lb-empty diff_colort different_stylest" id="lbEmpty">
              <span class="tile"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M12 7v14" />
                  <path
                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z" />
                </svg></span>
              <h2>Nothing in your library yet</h2>
              <p>Anything you buy from the store lands here, ready to download whenever you need it.</p>
              <a href="store.html" class="p-btn p-b1 for_margin_zerot">Browse the store</a>
            </div>
            <div class="lb-toast" id="lbToast" role="status" aria-live="polite"><svg width="20" height="20"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" aria-hidden="true">
                <path d="M12 15V3" />
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                <path d="m7 10 5 5 5-5" /></svg>
              <div><b></b><span>Your download has started.</span></div><button type="button" class="x"
                aria-label="Close"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor"
                  stroke-width="1.5" stroke-linecap="round" aria-hidden="true">
                  <path d="M1 1l10 10M11 1L1 11" /></svg></button>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php include 'includes/footer.php'; ?>