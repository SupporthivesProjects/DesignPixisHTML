<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="assets/css/page/index.css">
<div id="smooth">
  <main id="main">
    <section id="hero">
      <div id="vp">
        <div id="stage">
          <div class="layer" id="gridLayer">
            <svg id="grid" width="1920" height="1080" viewBox="0 0 1920 1080">
              <g id="lines" stroke="#121214" stroke-opacity=".075" stroke-width="1"></g>
              <g id="tiles"></g>
              <g id="paint"></g>
            </svg>
          </div>
          <div class="layer" id="overlay"></div>
          <div class="layer" id="sceneWrap">
            <svg id="scene" width="1920" height="1080" viewBox="0 0 1920 1080">
              <g id="boxes"></g>
              <g id="ghost"></g>
              <g id="sels"></g>
              <g id="fx"></g>
            </svg>
            <div class="cur" id="cLina">
              <svg viewBox="0 0 24 24">
                <path d="M4 3l15 7-6.5 2L10 19z" fill="#E8336F" stroke="#fff" stroke-width="1.5" stroke-linejoin="round" />
              </svg>
              <span style="background:#E8336F">Lina</span>
            </div>
            <div class="cur" id="cOmar">
              <svg viewBox="0 0 24 24">
                <path d="M4 3l15 7-6.5 2L10 19z" fill="#12A37A" stroke="#fff" stroke-width="1.5" stroke-linejoin="round" />
              </svg>
              <span style="background:#12A37A">Omar</span>
            </div>
          </div>
          <div id="copy">
            <h1>
              <span class="ln">
                <span style="transition-delay:.35s">Design resources,</span>
              </span>
              <span class="ln">
                <span style="transition-delay:.47s">and <em>the studio</em>
                </span>
              </span>
              <span class="ln">
                <span style="transition-delay:.59s">that made them.</span>
              </span>
            </h1>
            <p class="fd" style="transition-delay:.85s">E-books, video courses, software, templates and audiobooks from working designers. When a file is not enough, book the studio and we design it for you.</p>
            <div class="btns fd" style="transition-delay:.95s">
              <a href="store.html" class="btn b1">
                <span>Browse <span class="m-hide"> the store</span>
                </span>
              </a>
              <a href="design-services.html" class="btn b2">Book a service</a>
            </div>
          </div>
          <div class="win" id="wProd">
            <div class="body">
              <div class="hd">
                <div class="cv" id="pCover">
                  <span id="pCovT">Grid systems</span>
                </div>
                <div>
                  <div class="kind" id="pKind">E-BOOK</div>
                  <div class="ttl" id="pTitle">Grid systems for screens</div>
                </div>
              </div>
              <hr>
              <div class="row">
                <small id="pK1">FORMAT</small>
                <span id="pV1">PDF and EPUB</span>
              </div>
              <div class="row">
                <small>PRICE</small>
                <span id="pV2">$25</span>
              </div>
            </div>
            <div class="sk">
              <i></i>
              <i></i>
              <i></i>
              <i></i>
            </div>
          </div>
          <div class="win" id="wIns">
            <div class="body">
              <div class="hd">
                <span>Design services</span>
                <span class="st">
                  <span id="iSt">PLACING</span>
                  <span class="dot"></span>
                </span>
              </div>
              <hr>
              <div class="row">
                <small>SERVICE</small>
                <span id="iSv">User interface</span>
              </div>
              <div class="row">
                <small>BRIEF</small>
                <span>Uploaded</span>
              </div>
              <div class="row">
                <small>OUTPUT</small>
                <span id="fits">Figma file</span>
              </div>
            </div>
            <div class="sk">
              <i></i>
              <i></i>
              <i></i>
              <i></i>
            </div>
          </div>
          <div id="ruler">
            <div class="band" id="band"></div>
            <div id="readout">0</div>
          </div>
          <div class="cur" id="you">
            <span style="background:#2E47E6;left:14px;top:16px">You</span>
          </div>
        </div>
      </div>
    </section>
    <section class="p-sec p-white js_clip" id="routes">
      <div class="p-wrap">
        <div class="p-head">
          <div class="p-ttl">
            <div class="p-lab p-rv">
              <i></i>The store and the studio
            </div>
            <h2 class="p-h2">
              <span class="l">
                <span>Resources to buy,</span>
              </span>
              <span class="l">
                <span>services to book.</span>
              </span>
            </h2>
          </div>
          <p class="p-lead p-rv" style="--d:.15s">Pick up a resource and do the work yourself, or hand us the brief and we design it with you. Same thinking either way.</p>
        </div>
        <div class="p-routes">
          <article class="p-route p-rv">
            <div class="p-bar">
              <b>Store</b>
              <span>DOWNLOAD <i style="background:#2E47E6"></i>
              </span>
            </div>
            <div class="p-media">
              <div class="p-img">
                <img src="assets/img/home-store.jpg" alt="Five design resources on a shelf, a blue book lifting off as it downloads">
                <video class="film" muted loop playsinline preload="metadata" data-src="films/store.mp4" aria-hidden="true"></video>
              </div>
            </div>
            <div class="p-rc">
              <div class="p-lab">
                <i></i>Design resources
              </div>
              <h3 class="p-h3">Learn from the files</h3>
              <p class="p-body">E-books, video courses, software, templates and audiobooks on design. Bought once, kept in your library, downloaded whenever you need them.</p>
              <a href="store.html" class="p-btn p-b1">Browse the store</a>
            </div>
          </article>
          <article class="p-route p-rv" style="--d:.12s">
            <div class="p-bar">
              <b>Studio</b>
              <span>ENQUIRY <i style="background:#12A37A"></i>
              </span>
            </div>
            <div class="p-media">
              <div class="p-img">
                <img src="assets/img/home-studio.jpg" alt="A brief becoming a workbench where a page layout is built from blocks">
                <video class="film" muted loop playsinline preload="metadata" data-src="films/studio-route.mp4" aria-hidden="true"></video>
              </div>
            </div>
            <div class="p-rc">
              <div class="p-lab">
                <i></i>Design services
              </div>
              <h3 class="p-h3">Hand us the brief</h3>
              <p class="p-body">User interface, user experience, illustration, e-commerce and AB testing, scoped with you before anything is drawn.</p>
              <a href="design-services.html#brief" class="p-btn p-b2">Book a service</a>
            </div>
          </article>
        </div>
      </div>
    </section>
    <section class="p-sec p-paper js_clip" id="categories">
      <div class="p-wrap">
        <div class="p-head">
          <div class="p-ttl">
            <div class="p-lab p-rv">
              <i></i>The store
            </div>
            <h2 class="p-h2">
              <span class="l">
                <span>Shop by category</span>
              </span>
            </h2>
          </div>
          <p class="p-lead p-rv" style="--d:.15s">Browse a category, add what you need to the cart and download it from your library whenever you need it.</p>
        </div>
        <div class="p-cats">
          <a href="store.html?cat=ebooks" class="p-cat p-rv" style="--d:0s">
            <div class="top">
              <div class="p-tile">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                  <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                </svg>
              </div>
              <h3>E-books</h3>
              <p class="p-body">Long form guides on layout, type and craft that you keep open beside you as you work.</p>
            </div>
            <div class="p-price">From $31.75 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </div>
          </a>
          <a href="store.html?cat=video" class="p-cat p-rv" style="--d:.06s">
            <div class="top">
              <div class="p-tile">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <circle cx="12" cy="12" r="10" />
                  <polygon points="10 8 16 12 10 16 10 8" />
                </svg>
              </div>
              <h3>Video courses</h3>
              <p class="p-body">Lessons you follow at your own pace, with every step of the work shown on screen.</p>
            </div>
            <div class="p-price">From $105.02 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </div>
          </a>
          <a href="store.html?cat=software" class="p-cat p-rv" style="--d:.12s">
            <div class="top">
              <div class="p-tile">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="m7 11 2-2-2-2" />
                  <path d="M11 13h4" />
                  <rect width="18" height="18" x="3" y="3" rx="2" />
                </svg>
              </div>
              <h3>Software</h3>
              <p class="p-body">Small tools that take the tedium out of palettes, type scales and handover.</p>
            </div>
            <div class="p-price">From $42.74 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </div>
          </a>
          <a href="store.html?cat=templates" class="p-cat p-rv" style="--d:.18s">
            <div class="top">
              <div class="p-tile">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <rect width="7" height="7" x="3" y="3" rx="1" />
                  <rect width="7" height="7" x="14" y="3" rx="1" />
                  <rect width="7" height="7" x="14" y="14" rx="1" />
                  <rect width="7" height="7" x="3" y="14" rx="1" />
                </svg>
              </div>
              <h3>Templates</h3>
              <p class="p-body">Files you can start from, structured the way we structure our own client work.</p>
            </div>
            <div class="p-price">From $37.84 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </div>
          </a>
          <a href="store.html?cat=audiobooks" class="p-cat p-rv" style="--d:.24s">
            <div class="top">
              <div class="p-tile">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M2 10v3" />
                  <path d="M6 6v11" />
                  <path d="M10 3v18" />
                  <path d="M14 8v7" />
                  <path d="M18 5v13" />
                  <path d="M22 10v3" />
                </svg>
              </div>
              <h3>Audiobooks</h3>
              <p class="p-body">The same material read aloud, for the commute, the gym and the days away from a desk.</p>
            </div>
            <div class="p-price">From $29.40 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </div>
          </a>
        </div>
      </div>
    </section>
    <section class="p-sec p-white js_clip" id="new">
      <div class="p-wrap">
        <div class="p-head">
          <div class="p-ttl">
            <div class="p-lab p-rv">
              <i></i>From the store
            </div>
            <h2 class="p-h2">
              <span class="l">
                <span>
                  <span class="m-hide">Most p</span>
                  <span class="m-show">P</span>opular resources </span>
              </span>
            </h2>
          </div>
          <a href="store.html" class="p-link p-rv" style="--d:.15s">See all resources <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M5 12h14" />
              <path d="m12 5 7 7-7 7" />
            </svg>
          </a>
        </div>
        <div class="p-prods" id="prods">
          <article class="p-prod p-rv" style="--d:0.00s">
            <div class="top">
              <a href="product.html?id=001" class="p-cover">
                <img src="assets/img/cover-001.jpg" alt="Learning Gutenberg" loading="lazy">
                <span class="pill" style="background:#121214;color:#FFFFFF">
                  <i></i>Video course </span>
              </a>
              <div class="p-info">
                <span class="k">Video course</span>
                <a href="product.html?id=001" class="t">Learning Gutenberg</a>
                <p class="p-body">The WordPress block editor, from your first block to full layouts.</p>
              </div>
            </div>
            <div class="p-buy">$73.26 <button class="p-btn p-b2 p-bs p-add" data-add="001">
                <span>Add to cart</span>
              </button>
            </div>
          </article>
          <article class="p-prod p-rv" style="--d:0.06s">
            <div class="top">
              <a href="product.html?id=002" class="p-cover">
                <img src="assets/img/cover-002.jpg" alt="Website Creation and Design" loading="lazy">
                <span class="pill" style="background:#2E47E6;color:#FFFFFF">
                  <i></i>E-book </span>
              </a>
              <div class="p-info">
                <span class="k">E-book</span>
                <a href="product.html?id=002" class="t">Website Creation and Design</a>
                <p class="p-body">Choosing a website design that fits your brand and your goals.</p>
              </div>
            </div>
            <div class="p-buy">$30.53 <button class="p-btn p-b2 p-bs p-add" data-add="002">
                <span>Add to cart</span>
              </button>
            </div>
          </article>
          <article class="p-prod p-rv" style="--d:0.12s">
            <div class="top">
              <a href="product.html?id=003" class="p-cover">
                <img src="assets/img/cover-003.jpg" alt="WP Video Focus" loading="lazy">
                <span class="pill" style="background:#12A37A;color:#FFFFFF">
                  <i></i>Software </span>
              </a>
              <div class="p-info">
                <span class="k">Software</span>
                <a href="product.html?id=003" class="t">WP Video Focus</a>
                <p class="p-body">Keeps your video playing in the corner as visitors scroll.</p>
              </div>
            </div>
            <div class="p-buy">$54.95 <button class="p-btn p-b2 p-bs p-add" data-add="003">
                <span>Add to cart</span>
              </button>
            </div>
          </article>
          <article class="p-prod p-rv" style="--d:0.18s">
            <div class="top">
              <a href="product.html?id=005" class="p-cover">
                <img src="assets/img/cover-005.jpg" alt="Kickstart Genesis Framework WP Theme" loading="lazy">
                <span class="pill" style="background:#E8336F;color:#FFFFFF">
                  <i></i>Template </span>
              </a>
              <div class="p-info">
                <span class="k">Template</span>
                <a href="product.html?id=005" class="t">Kickstart Genesis Framework WP Theme</a>
                <p class="p-body">A mobile friendly WordPress theme on the Genesis framework.</p>
              </div>
            </div>
            <div class="p-buy">$37.84 <button class="p-btn p-b2 p-bs p-add" data-add="005">
                <span>Add to cart</span>
              </button>
            </div>
          </article>
          <article class="p-prod p-rv" style="--d:0.24s">
            <div class="top">
              <a href="product.html?id=065" class="p-cover">
                <img src="assets/img/cover-065.jpg" alt="7 Step WordPress Setup Audio Video Series" loading="lazy">
                <span class="pill" style="background:#E9A21B;color:#121214">
                  <i></i>Audiobook </span>
              </a>
              <div class="p-info">
                <span class="k">Audiobook</span>
                <a href="product.html?id=065" class="t">7 Step WordPress Setup Audio Video Series</a>
                <p class="p-body">Set up a WordPress site in seven steps. Audio and video.</p>
              </div>
            </div>
            <div class="p-buy">$79.38 <button class="p-btn p-b2 p-bs p-add" data-add="065">
                <span>Add to cart</span>
              </button>
            </div>
          </article>
        </div>
        <div class="p-dots" id="dots"></div>
      </div>
    </section>
    <section class="p-studio js_clip" id="studio">
      <div class="p-sl">
        <div class="p-img">
          <img src="assets/img/studio-film-poster.jpg" alt="A hand sketching wireframes on a tablet">
          <video class="film" muted loop playsinline preload="metadata" data-src="films/studio.mp4" aria-hidden="true"></video>
        </div>
        <div class="p-sel" id="sel"></div>
        <i class="p-hd" data-h="0,0"></i>
        <i class="p-hd" data-h="1,0"></i>
        <i class="p-hd" data-h="0,1"></i>
        <i class="p-hd" data-h="1,1"></i>
        <span class="p-curs" id="lina">Lina</span>
      </div>
      <div class="p-sr">
        <div class="p-ttl">
          <div class="p-lab p-rv">
            <i></i>The studio
          </div>
          <h2 class="p-h2">
            <span class="l">
              <span>Design services,</span>
            </span>
            <span class="l">
              <span>scoped before we start.</span>
            </span>
          </h2>
          <p class="p-lead p-rv" style="--d:.15s;width:auto">Scope and cost are agreed up front. You can steer the work as it develops, and everything you need arrives at handover.</p>
        </div>
        <div class="p-svcs">
          <div class="p-svc p-rv">
            <b>User Interface</b>
            <p class="p-body">Screens, states and a component system that your developers can build from.</p>
          </div>
          <div class="p-svc p-rv" style="--d:.06s">
            <b>User Experience</b>
            <p class="p-body">Flows, structure and hierarchy worked out before anything gets styled.</p>
          </div>
          <div class="p-svc p-rv" style="--d:.12s">
            <b>Illustration</b>
            <p class="p-body">Original artwork drawn for your brand, not bought from a marketplace.</p>
          </div>
          <div class="p-svc p-rv" style="--d:.18s">
            <b>E-Commerce</b>
            <p class="p-body">Product, cart and checkout pages, designed around the way people actually shop and buy.</p>
          </div>
          <div class="p-svc p-rv" style="--d:.24s">
            <b>AB Testing</b>
            <p class="p-body">Two versions, real traffic and a decision based on what people did.</p>
          </div>
          <a href="design-services.html#brief" class="p-unsure p-rv" style="--d:.3s">
            <b>Not sure which you need?</b>
            <span>Send us a brief</span>
          </a>
        </div>
        <div class="p-rv p-sact" style="--d:.2s">
          <a href="design-services.html" class="p-btn p-b1">Book a service</a>
        </div>
      </div>
    </section>
    <section class="p-sec p-white js_clip" id="faq">
      <div class="p-wrap p-faq">
        <div class="p-ttl">
          <div class="p-lab p-rv">
            <i></i>Before you buy
          </div>
          <h2 class="p-h2">
            <span class="l">
              <span>Questions</span>
            </span>
            <span class="l">
              <span>we get asked</span>
            </span>
          </h2>
          <a href="faq.html" class="p-link p-rv" style="--d:.15s">Read all the answers <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M5 12h14" />
              <path d="m12 5 7 7-7 7" />
            </svg>
          </a>
        </div>
        <div class="p-qs" id="qs">
          <div class="p-q open p-rv">
            <button aria-expanded="true">
              <span>Do I own what I buy <br class="m-br"> from the store? </span>
              <i class="ic"></i>
            </button>
            <div class="a">
              <div>
                <p>You get a licence to use the file in your own work and in client projects, for as long as you like. You cannot resell or share the file itself.</p>
              </div>
            </div>
          </div>
          <div class="p-q p-rv" style="--d:.06s">
            <button aria-expanded="false">
              <span>Can I use the resources <br class="m-br"> on client work? </span>
              <i class="ic"></i>
            </button>
            <div class="a">
              <div>
                <p>Yes. The licence covers client projects, so you can build what you buy into the work you hand over.</p>
              </div>
            </div>
          </div>
          <div class="p-q p-rv" style="--d:.12s">
            <button aria-expanded="false">
              <span>How are studio <br class="m-br"> projects priced? </span>
              <i class="ic"></i>
            </button>
            <div class="a">
              <div>
                <p>Every project is scoped first. You get one fixed price for the agreed scope before any work starts.</p>
              </div>
            </div>
          </div>
          <div class="p-q p-rv" style="--d:.18s">
            <button aria-expanded="false">
              <span>What do I get at handover?</span>
              <i class="ic"></i>
            </button>
            <div class="a">
              <div>
                <p>The working Figma file, every asset exported, and a walkthrough so your team knows where everything lives.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-break js_clip" id="break" style="--op:50% 30%">
      <div class="p-img">
        <img src="assets/img/break-film-poster.jpg" alt="Two designers reviewing printed work at a studio desk">
        <video class="film" muted loop playsinline preload="metadata" data-src="films/break.mp4" aria-hidden="true"></video>
      </div>
      <div class="p-bsel"></div>
      <span class="p-tag" style="left:calc(240*var(--u));top:calc(40*var(--u));background:#fff;color:#2E47E6">images/in the studio</span>
      <span class="p-tag" id="dim" style="left:50%;top:calc(500*var(--u));transform:translateX(-50%);background:#2E47E6;color:#fff">1440 × 416</span>
    </section>
    <section class="p-split js_clip" id="split">
      <div class="p-half" style="background:#2E47E6">
        <div class="p-lab p-rv">
          <i></i>The store
        </div>
        <h2 class="p-h2">
          <span class="l">
            <span>Start with a resource.</span>
          </span>
        </h2>
        <p class="p-rv" style="--d:.1s">Five categories, each priced per item. Buy what you need now and come back for the next one.</p>
        <div class="p-rv" style="--d:.2s">
          <a href="store.html" class="p-btn p-b3">Browse the store</a>
        </div>
      </div>
      <div class="p-half" style="background:#121214">
        <div class="p-lab p-rv">
          <i></i>The studio
        </div>
        <h2 class="p-h2">
          <span class="l">
            <span>Start with a brief.</span>
          </span>
        </h2>
        <p class="p-rv" style="--d:.1s">Tell us what you need and upload anything you already have. We come back with a plan and a price.</p>
        <div class="p-rv" style="--d:.2s">
          <a href="design-services.html#brief" class="p-btn p-b4">Book a service</a>
        </div>
      </div>
    </section>
  </main>
</div>
 <?php include 'includes/footer.php'; ?>