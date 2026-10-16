<?php include 'includes/header.php'; ?>
<main class="dp-page">
  <section class="st-hero">
    <div class="dp-wrap st-row">
      <div class="st-copy">
        <div class="p-lab p-rv">
          <i></i>The store
        </div>
        <h1 class="p-rv" style="--d:.05s">Resources for <br>working designers </h1>
        <p class="p-rv" style="--d:.1s">E-books, video courses, software, templates and audiobooks. Bought once, kept in your library, downloaded whenever you need them.</p>
      </div>
      <div class="st-art p-rv" style="--d:.15s" aria-label="The store, shown as a design window">
        <div class="st-win">
          <div class="st-bar">
            <div class="tt">
              <b>Store</b>
              <small>113 resources</small>
            </div>
            <div class="st-dots" aria-hidden="true">
              <i></i>
              <i></i>
              <i></i>
            </div>
          </div>
          <nav class="st-tabs" aria-label="Store categories">
            <a href="store.html" class="cur">All</a>
            <a href="store.html?cat=ebooks">E-books</a>
            <a href="store.html?cat=video">Video courses</a>
            <a href="store.html?cat=software">Software</a>
            <a href="store.html?cat=templates">Templates</a>
            <a href="store.html?cat=audiobooks">Audiobooks</a>
          </nav>
          <div class="st-covers" id="mock"></div>
        </div>
        <div class="st-sel" aria-hidden="true">
          <i class="h" style="left:0;top:0"></i>
          <i class="h" style="left:100%;top:0"></i>
          <i class="h" style="left:0;top:100%"></i>
          <i class="h" style="left:100%;top:100%"></i>
          <span class="sz">226 × 224</span>
        </div>
        <svg class="st-cur" viewBox="0 0 18 25" aria-hidden="true">
          <path d="M1.5 1.5v19.2l5-4.6 3.4 7.4 3.1-1.4-3.3-7.2h6.8z" fill="#E8336F" stroke="#fff" stroke-width="1.5" stroke-linejoin="round" />
        </svg>
        <span class="st-name" aria-hidden="true">Lina</span>
      </div>
    </div>
  </section>
  <section class="st-cat" id="catalogue">
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
                <path d="m6 9 6 6 6-6" />
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
                <path d="m6 9 6 6 6-6" />
              </svg>
            </div>
          </div>
        </div>
        <div class="dp-chips st-chips" id="chips" role="tablist" aria-label="Categories"></div>
      </div>
      <div class="dp-grid st-grid" id="grid" aria-live="polite"></div>
      <hr class="st-hr">
      <div class="st-pag">
        <span id="showing">Showing 15 of 113 resources</span>
        <nav class="dp-pag" id="pag" aria-label="Pages"></nav>
      </div>
    </div>
  </section>
</main>

 <?php include 'includes/footer.php'; ?>