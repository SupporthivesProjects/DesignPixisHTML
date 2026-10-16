<?php include 'includes/header.php'; ?>
<main class="dp-page">
  <section class="pd-top">
    <div class="dp-wrap">
      <div class="pd-crumb">
        <nav class="dp-crumb" aria-label="Breadcrumb" id="crumb">
          <a href="store.html">Store</a>
          <i>/</i>
          <a href="store.html?cat=video">Video courses</a>
          <i>/</i>
          <span aria-current="page">Learning Gutenberg</span>
        </nav>
      </div>
      <div class="pd-row">
        <div class="pd-cv p-rv" id="cv"></div>
        <div class="pd-info">
          <h1 class="p-rv" id="nm" style="--d:.05s">Learning Gutenberg</h1>
          <p class="lead p-rv" id="ab" style="--d:.1s"></p>
          <div class="pd-price p-rv" id="pr" style="--d:.12s"></div>
          <div class="pd-win p-rv" style="--d:.15s">
            <div class="bar">Details <span class="pd-dots" aria-hidden="true">
                <i></i>
                <i></i>
                <i></i>
              </span>
            </div>
            <div class="pd-rows" id="rows"></div>
          </div>
          <div class="pd-act p-rv" style="--d:.2s">
            <button class="p-btn p-b1 dp-add" id="add" data-add="001">
              <span>Add to cart</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pd-rel">
    <div class="dp-wrap">
      <div class="p-head">
        <div class="p-ttl">
          <div class="p-lab p-rv">
            <i></i>From the store
          </div>
          <h2 class="p-h2">
            <span class="l">
              <span>Related resources</span>
            </span>
          </h2>
        </div>
        <a href="store.html" class="p-link p-rv" style="--d:.15s">See all resources</a>
      </div>
      <div class="dp-grid" id="rel"></div>
    </div>
  </section>
</main>

 <?php include 'includes/footer.php'; ?>