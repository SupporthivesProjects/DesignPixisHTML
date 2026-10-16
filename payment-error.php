<?php include 'includes/header.php'; ?>
<main class="dp-page">
  <section class="pc">
    <div class="pc-copy">
      <svg class="pc-mk p-rv" viewBox="0 0 64 64" aria-hidden="true">
        <circle cx="32" cy="32" r="32" fill="#DF3F3F" />
        <path d="M23 23l18 18M41 23L23 41" fill="none" stroke="#fff" stroke-width="2.6" stroke-linecap="round" />
      </svg>
      <div class="p-lab p-rv" style="--d:.05s">
        <i></i>Nothing was charged
      </div>
      <h1 class="p-rv" style="--d:.1s">Payment didn't <br>go through </h1>
      <p class="p-rv" style="--d:.15s">The payment provider declined it. Your cart is saved, so you can try again or use a different card.</p>
      <div class="pc-act p-rv" style="--d:.2s">
        <a href="checkout.html" class="p-btn p-b1">Try again</a>
        <a href="contact.html" class="p-btn p-b2">Contact us</a>
      </div>
    </div>
    <div class="pc-win p-rv" style="--d:.25s">
      <div class="bar">Your cart <span class="pc-dots" aria-hidden="true">
          <i></i>
          <i></i>
          <i></i>
        </span>
      </div>
      <div class="pc-rows" id="grows">
        <div class="r">
          <span>Subtotal</span>
          <b>$185.74</b>
        </div>
        <div class="r">
          <span>Discount (WELCOME10)</span>
          <b>−$18.57</b>
        </div>
        <div class="r tot">
          <span>Total due</span>
          <b>$167.17</b>
        </div>
      </div>
    </div>
  </section>
</main>
 <?php include 'includes/footer.php'; ?>