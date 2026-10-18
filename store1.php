<?php include 'includes/header.php'; ?>

<main class="dp-page">
<section class="st-hero">
  <div class="dp-wrap st-row">
   <div class="st-copy">
    <div class="p-lab p-rv on"><i></i>The store</div>
    <h1 class="p-rv on" style="--d:.05s">Resources for<br>working designers</h1>
    <p class="p-rv on" style="--d:.1s">E-books, video courses, software, templates and audiobooks. Bought once, kept in your library, downloaded whenever you need them.</p>
   </div>
   <div class="st-art p-rv on" style="--d:.15s" aria-label="The store, shown as a design window">
    <div class="st-win">
     <div class="st-bar"><div class="tt"><b>Store</b><small>113 resources</small></div><div class="st-dots" aria-hidden="true"><i></i><i></i><i></i></div></div>
     <nav class="st-tabs" aria-label="Store categories"><a href="store.html" class="cur">All</a><a href="store.html?cat=ebooks">E-books</a><a href="store.html?cat=video">Video courses</a><a href="store.html?cat=software">Software</a><a href="store.html?cat=templates">Templates</a><a href="store.html?cat=audiobooks">Audiobooks</a></nav>
     <div class="st-covers" id="modck"><a class="st-it" href="product.html?id=001"><span class="cv"><img src="assets/img/cover-001.jpg" alt="Vijay Learning Gutenberg"><span class="dp-pill" style="background:#121214;color:#FFFFFF"><i></i>Video course</span></span><span class="mt"><b>Vijay Learning Gutenberg</b><span>$100.26</span></span></a><a class="st-it" href="product.html?id=002"><span class="cv"><img src="assets/img/cover-002.jpg" alt="Rahul Website Creation and Design"><span class="dp-pill" style="background:#2E47E6;color:#FFFFFF"><i></i>E-book</span></span><span class="mt"><b>Rahul Website Creation and Design</b><span>$30.53</span></span></a><a class="st-it" href="product.html?id=003"><span class="cv"><img src="assets/img/cover-003.jpg" alt="WP Video Focus"><span class="dp-pill" style="background:#12A37A;color:#FFFFFF"><i></i>Software</span></span><span class="mt"><b>WP Video Focus</b><span>$54.95</span></span></a></div>
    </div>
    <div class="st-sel" aria-hidden="true"><i class="h" style="left:0;top:0"></i><i class="h" style="left:100%;top:0"></i><i class="h" style="left:0;top:100%"></i><i class="h" style="left:100%;top:100%"></i><span class="sz">226 × 224</span></div>
    <svg class="st-cur" viewBox="0 0 18 25" aria-hidden="true"><path d="M1.5 1.5v19.2l5-4.6 3.4 7.4 3.1-1.4-3.3-7.2h6.8z" fill="#E8336F" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"></path></svg>
    <span class="st-name" aria-hidden="true">Lina</span>
   </div>
  </div>
 </section>

<section class="st-cat" id="cateflogue">
  <div class="dp-wrap">
    <div class="st-tool">
      <div class="st-fields">
        <div class="dp-field s">
          <label for="q">Search the store</label>
          <div class="dp-in">
            <input id="q" type="search" placeholder="Type scale, grid, Gutenberg" autocomplete="off">
          </div>
        </div>
        <div class="dp-field c">
          <label for="cat">Category</label>
          <div class="dp-in sel">
            <select id="cat">
              <option value="">All</option>
              <option value="ebooks">E-books</option>
              <option value="video">Video courses</option>
              <option value="software">Software</option>
              <option value="templates">Templates</option>
              <option value="audiobooks">Audiobooks</option>
            </select>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="m6 9 6 6 6-6"></path>
            </svg>
          </div>
        </div>
        <div class="dp-field o">
          <label for="sort">Sort by</label>
          <div class="dp-in sel">
            <select id="sort">
              <option value="pop">Most popular</option>
              <option value="low">Price, low to high</option>
              <option value="high">Price, high to low</option>
              <option value="name">Name</option>
            </select>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="m6 9 6 6 6-6"></path>
            </svg>
          </div>
        </div>
      </div>
      <div class="dp-chips st-chips" id="chifps" role="tablist" aria-label="Categories">
        <button class="dp-chip cur" role="tab" data-cat="" aria-selected="true">All <small>113</small>
        </button>
        <button class="dp-chip" role="tab" data-cat="ebooks" aria-selected="false">E-books <small>57</small>
        </button>
        <button class="dp-chip" role="tab" data-cat="video" aria-selected="false">Video courses <small>26</small>
        </button>
        <button class="dp-chip" role="tab" data-cat="software" aria-selected="false">Software <small>24</small>
        </button>
        <button class="dp-chip" role="tab" data-cat="templates" aria-selected="false">Templates <small>5</small>
        </button>
        <button class="dp-chip" role="tab" data-cat="audiobooks" aria-selected="false">Audiobooks <small>1</small>
        </button>
      </div>
    </div>
    <div class="dp-grid st-grid" id="grifd" aria-live="polite">
      <article class="dp-card p-rv on" style="--d:0.00s">
        <div class="top">
          <a href="product.html?id=001" class="cv" aria-label="Learning Gutenberg">
            <img src="assets/img/cover-001.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#121214;color:#FFFFFF">
              <i></i>Video course </span>
          </a>
          <div class="info">
            <span class="k">Video course</span>
            <a href="product.html?id=001" class="t">Learning Gutenberg</a>
            <p class="d">The WordPress block editor, from your first block to full layouts.</p>
          </div>
        </div>
        <div class="buy">$73.26 <button class="p-btn p-b2 p-bs dp-add px" data-add="001">
            <span class="pg"></span>
            <span>Add to cart</span>
          </button>
        </div>
      </article>
      <article class="dp-card p-rv on" style="--d:0.06s">
        <div class="top">
          <a href="product.html?id=002" class="cv" aria-label="Website Creation and Design">
            <img src="assets/img/cover-002.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#2E47E6;color:#FFFFFF">
              <i></i>E-book </span>
          </a>
          <div class="info">
            <span class="k">E-book</span>
            <a href="product.html?id=002" class="t">Website Creation and Design</a>
            <p class="d">Choosing a website design that fits your brand and your goals.</p>
          </div>
        </div>
        <div class="buy">$30.53 <button class="p-btn p-b2 p-bs dp-add added px" data-add="002">
            <span class="pg"></span>
            <span>In cart</span>
          </button>
        </div>
      </article>
      <article class="dp-card p-rv on" style="--d:0.12s">
        <div class="top">
          <a href="product.html?id=003" class="cv" aria-label="WP Video Focus">
            <img src="assets/img/cover-003.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#12A37A;color:#FFFFFF">
              <i></i>Software </span>
          </a>
          <div class="info">
            <span class="k">Software</span>
            <a href="product.html?id=003" class="t">WP Video Focus</a>
            <p class="d">Keeps your video playing in the corner as visitors scroll.</p>
          </div>
        </div>
        <div class="buy">$54.95 <button class="p-btn p-b2 p-bs dp-add px" data-add="003">
            <span class="pg"></span>
            <span>Add to cart</span>
          </button>
        </div>
      </article>
      <article class="dp-card p-rv on" style="--d:0.18s">
        <div class="top">
          <a href="product.html?id=005" class="cv" aria-label="Kickstart Genesis Framework WP Theme">
            <img src="assets/img/cover-005.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#E8336F;color:#FFFFFF">
              <i></i>Template </span>
          </a>
          <div class="info">
            <span class="k">Template</span>
            <a href="product.html?id=005" class="t">Kickstart Genesis Framework WP Theme</a>
            <p class="d">A mobile friendly WordPress theme on the Genesis framework.</p>
          </div>
        </div>
        <div class="buy">$37.84 <button class="p-btn p-b2 p-bs dp-add px" data-add="005">
            <span class="pg"></span>
            <span>Add to cart</span>
          </button>
        </div>
      </article>
      <article class="dp-card p-rv on" style="--d:0.24s">
        <div class="top">
          <a href="product.html?id=065" class="cv" aria-label="7 Step WordPress Setup Audio Video Series">
            <img src="assets/img/cover-065.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#E9A21B;color:#121214">
              <i></i>Audiobook </span>
          </a>
          <div class="info">
            <span class="k">Audiobook</span>
            <a href="product.html?id=065" class="t">7 Step WordPress Setup Audio Video Series</a>
            <p class="d">Set up a WordPress site in seven steps. Audio and video.</p>
          </div>
        </div>
        <div class="buy">$79.38 <button class="p-btn p-b2 p-bs dp-add px" data-add="065">
            <span class="pg"></span>
            <span>Add to cart</span>
          </button>
        </div>
      </article>
      <article class="dp-card p-rv" style="--d:0.00s">
        <div class="top">
          <a href="product.html?id=001" class="cv" aria-label="Learning Gutenberg">
            <img src="assets/img/cover-001.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#121214;color:#FFFFFF">
              <i></i>Video course </span>
          </a>
          <div class="info">
            <span class="k">Video course</span>
            <a href="product.html?id=001" class="t">Learning Gutenberg</a>
            <p class="d">The WordPress block editor, from your first block to full layouts.</p>
          </div>
        </div>
        <div class="buy">$73.26 <button class="p-btn p-b2 p-bs dp-add px" data-add="001">
            <span class="pg"></span>
            <span>Add to cart</span>
          </button>
        </div>
      </article>
      <article class="dp-card p-rv" style="--d:0.06s">
        <div class="top">
          <a href="product.html?id=002" class="cv" aria-label="Website Creation and Design">
            <img src="assets/img/cover-002.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#2E47E6;color:#FFFFFF">
              <i></i>E-book </span>
          </a>
          <div class="info">
            <span class="k">E-book</span>
            <a href="product.html?id=002" class="t">Website Creation and Design</a>
            <p class="d">Choosing a website design that fits your brand and your goals.</p>
          </div>
        </div>
        <div class="buy">$30.53 <button class="p-btn p-b2 p-bs dp-add added px" data-add="002">
            <span class="pg"></span>
            <span>In cart</span>
          </button>
        </div>
      </article>
      <article class="dp-card p-rv" style="--d:0.12s">
        <div class="top">
          <a href="product.html?id=003" class="cv" aria-label="WP Video Focus">
            <img src="assets/img/cover-003.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#12A37A;color:#FFFFFF">
              <i></i>Software </span>
          </a>
          <div class="info">
            <span class="k">Software</span>
            <a href="product.html?id=003" class="t">WP Video Focus</a>
            <p class="d">Keeps your video playing in the corner as visitors scroll.</p>
          </div>
        </div>
        <div class="buy">$54.95 <button class="p-btn p-b2 p-bs dp-add px" data-add="003">
            <span class="pg"></span>
            <span>Add to cart</span>
          </button>
        </div>
      </article>
      <article class="dp-card p-rv" style="--d:0.18s">
        <div class="top">
          <a href="product.html?id=005" class="cv" aria-label="Kickstart Genesis Framework WP Theme">
            <img src="assets/img/cover-005.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#E8336F;color:#FFFFFF">
              <i></i>Template </span>
          </a>
          <div class="info">
            <span class="k">Template</span>
            <a href="product.html?id=005" class="t">Kickstart Genesis Framework WP Theme</a>
            <p class="d">A mobile friendly WordPress theme on the Genesis framework.</p>
          </div>
        </div>
        <div class="buy">$37.84 <button class="p-btn p-b2 p-bs dp-add px" data-add="005">
            <span class="pg"></span>
            <span>Add to cart</span>
          </button>
        </div>
      </article>
      <article class="dp-card p-rv" style="--d:0.24s">
        <div class="top">
          <a href="product.html?id=065" class="cv" aria-label="7 Step WordPress Setup Audio Video Series">
            <img src="assets/img/cover-065.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#E9A21B;color:#121214">
              <i></i>Audiobook </span>
          </a>
          <div class="info">
            <span class="k">Audiobook</span>
            <a href="product.html?id=065" class="t">7 Step WordPress Setup Audio Video Series</a>
            <p class="d">Set up a WordPress site in seven steps. Audio and video.</p>
          </div>
        </div>
        <div class="buy">$79.38 <button class="p-btn p-b2 p-bs dp-add px" data-add="065">
            <span class="pg"></span>
            <span>Add to cart</span>
          </button>
        </div>
      </article>
      <article class="dp-card p-rv" style="--d:0.00s">
        <div class="top">
          <a href="product.html?id=001" class="cv" aria-label="Learning Gutenberg">
            <img src="assets/img/cover-001.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#121214;color:#FFFFFF">
              <i></i>Video course </span>
          </a>
          <div class="info">
            <span class="k">Video course</span>
            <a href="product.html?id=001" class="t">Learning Gutenberg</a>
            <p class="d">The WordPress block editor, from your first block to full layouts.</p>
          </div>
        </div>
        <div class="buy">$73.26 <button class="p-btn p-b2 p-bs dp-add px" data-add="001">
            <span class="pg"></span>
            <span>Add to cart</span>
          </button>
        </div>
      </article>
      <article class="dp-card p-rv" style="--d:0.06s">
        <div class="top">
          <a href="product.html?id=002" class="cv" aria-label="Website Creation and Design">
            <img src="assets/img/cover-002.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#2E47E6;color:#FFFFFF">
              <i></i>E-book </span>
          </a>
          <div class="info">
            <span class="k">E-book</span>
            <a href="product.html?id=002" class="t">Website Creation and Design</a>
            <p class="d">Choosing a website design that fits your brand and your goals.</p>
          </div>
        </div>
        <div class="buy">$30.53 <button class="p-btn p-b2 p-bs dp-add added px" data-add="002">
            <span class="pg"></span>
            <span>In cart</span>
          </button>
        </div>
      </article>
      <article class="dp-card p-rv" style="--d:0.12s">
        <div class="top">
          <a href="product.html?id=003" class="cv" aria-label="WP Video Focus">
            <img src="assets/img/cover-003.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#12A37A;color:#FFFFFF">
              <i></i>Software </span>
          </a>
          <div class="info">
            <span class="k">Software</span>
            <a href="product.html?id=003" class="t">WP Video Focus</a>
            <p class="d">Keeps your video playing in the corner as visitors scroll.</p>
          </div>
        </div>
        <div class="buy">$54.95 <button class="p-btn p-b2 p-bs dp-add px" data-add="003">
            <span class="pg"></span>
            <span>Add to cart</span>
          </button>
        </div>
      </article>
      <article class="dp-card p-rv" style="--d:0.18s">
        <div class="top">
          <a href="product.html?id=005" class="cv" aria-label="Kickstart Genesis Framework WP Theme">
            <img src="assets/img/cover-005.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#E8336F;color:#FFFFFF">
              <i></i>Template </span>
          </a>
          <div class="info">
            <span class="k">Template</span>
            <a href="product.html?id=005" class="t">Kickstart Genesis Framework WP Theme</a>
            <p class="d">A mobile friendly WordPress theme on the Genesis framework.</p>
          </div>
        </div>
        <div class="buy">$37.84 <button class="p-btn p-b2 p-bs dp-add px" data-add="005">
            <span class="pg"></span>
            <span>Add to cart</span>
          </button>
        </div>
      </article>
      <article class="dp-card p-rv" style="--d:0.24s">
        <div class="top">
          <a href="product.html?id=065" class="cv" aria-label="7 Step WordPress Setup Audio Video Series">
            <img src="assets/img/cover-065.jpg" alt="" loading="lazy">
            <span class="dp-pill" style="background:#E9A21B;color:#121214">
              <i></i>Audiobook </span>
          </a>
          <div class="info">
            <span class="k">Audiobook</span>
            <a href="product.html?id=065" class="t">7 Step WordPress Setup Audio Video Series</a>
            <p class="d">Set up a WordPress site in seven steps. Audio and video.</p>
          </div>
        </div>
        <div class="buy">$79.38 <button class="p-btn p-b2 p-bs dp-add px" data-add="065">
            <span class="pg"></span>
            <span>Add to cart</span>
          </button>
        </div>
      </article>
    </div>
    <hr class="st-hr">
    <div class="st-pag">
      <span id="showing">Showing 15 of 113 resources</span>
      <nav class="dp-pag" id="pag" aria-label="Pages">
        <button data-p="1" class="cur" aria-current="page" aria-label="Page 1">1</button>
        <button data-p="2" aria-label="Page 2">2</button>
        <button data-p="3" aria-label="Page 3">3</button>
        <span class="gap" aria-hidden="true">…</span>
        <button data-p="8" aria-label="Page 8">8</button>
        <button class="p-btn p-b2 p-bs px" data-p="2">
          <span class="pg"></span>Next </button>
      </nav>
    </div>
  </div>
</section>
</main>

 <?php include 'includes/footer.php'; ?>