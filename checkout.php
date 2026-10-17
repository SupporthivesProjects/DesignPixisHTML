<?php include 'includes/header.php'; ?>

<style>
h1{
  margin-bottom: 0px;
}
.dp-page{
  min-height: auto;
}
hr{
  margin: 0px
}
</style>

<main class="dp-page">
  <section class="fl-head">
    <div class="p-lab">
      <i></i>Almost yours
    </div>
    <h1>Checkout</h1>
    <nav class="fl-steps" aria-label="Checkout steps">
      <a class="fl-step done" href="cart.html">
        <em>1</em>Cart </a>
      <i></i>
      <span class="fl-step cur" aria-current="step">
        <em>2</em>
        <span class="d">Your details</span>
        <span class="m">Details</span>
      </span>
      <i></i>
      <span class="fl-step">
        <em>3</em>
        <span class="d">Secure payment</span>
        <span class="m">Payment</span>
      </span>
    </nav>
  </section>
  <section class="fl-body">
    <form class="co-form" id="cod" novalidate>
      <div class="co-card">
        <div class="co-grp">
          <h2>Your details</h2>
          <div class="dp-row">
            <div class="dp-field">
              <label for="first">First name</label>
              <div class="dp-in">
                <input placeholder="John" id="first" autocomplete="given-name" required>
              </div>
              <p class="msg">Enter your first name.</p>
            </div>
            <div class="dp-field">
              <label for="last">Last name</label>
              <div class="dp-in">
                <input placeholder="Smith" id="last" autocomplete="family-name" required>
              </div>
              <p class="msg">Enter your last name.</p>
            </div>
          </div>
          <div class="dp-row">
            <div class="dp-field">
              <label for="email">Email</label>
              <div class="dp-in">
                <input placeholder="john@example.com" id="email" type="email" autocomplete="email" required>
              </div>
              <p class="msg">Enter your email address.</p>
            </div>
            <div class="dp-field">
              <label for="company">Company (optional)</label>
              <div class="dp-in">
                <input placeholder="Smith Design Ltd" id="company" autocomplete="organization">
              </div>
            </div>
          </div>
        </div>
        <div class="co-grp">
          <h2>Billing address</h2>
          <div class="dp-field">
            <label for="address">Address line 1</label>
            <div class="dp-in">
              <input placeholder="221 Example Street" id="address" autocomplete="address-line1" required>
            </div>
            <p class="msg">Enter the first line of your address.</p>
          </div>
          <div class="dp-row">
            <div class="dp-field">
              <label for="address2">Address line 2 (optional)</label>
              <div class="dp-in">
                <input placeholder="Flat 4" id="address2" autocomplete="address-line2">
              </div>
            </div>
            <div class="dp-field">
              <label for="city">City</label>
              <div class="dp-in">
                <input placeholder="London" id="city" autocomplete="address-level2" required>
              </div>
              <p class="msg">Enter your city.</p>
            </div>
          </div>
          <div class="dp-row">
            <div class="dp-field">
              <label for="postcode">Postcode</label>
              <div class="dp-in">
                <input placeholder="N1 9GU" id="postcode" autocomplete="postal-code" required>
              </div>
              <p class="msg">Enter your postcode.</p>
            </div>
            <div class="dp-field">
              <label for="country">Country</label>
              <div class="dp-in sel">
                <select id="country" autocomplete="country-name" required>
                  <option>United Kingdom</option>
                  <option>Ireland</option>
                  <option>France</option>
                  <option>Germany</option>
                  <option>Netherlands</option>
                  <option>Spain</option>
                  <option>Italy</option>
                  <option>United States</option>
                  <option>Canada</option>
                  <option>Australia</option>
                  <option>New Zealand</option>
                </select>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="m6 9 6 6 6-6" />
                </svg>
              </div>
              <p class="msg">Choose your country.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="co-card">
        <h2>Order summary</h2>
        <div id="lines" style="display:flex;flex-direction:column;gap:24px">
            <div class="co-line">
            <img src="assets/img/cover-003.jpg" alt="WP Video Focus cover">
            <div class="in">
                <b>WP Video Focus</b>
                <small>Software</small>
            </div>
            <b>$54.95</b>
            </div>
            <div class="co-line">
            <img src="assets/img/cover-002.jpg" alt="Website Creation and Design cover">
            <div class="in">
                <b>Website Creation and Design</b>
                <small>E-book</small>
            </div>
            <b>$30.53</b>
            </div>
            <div class="co-line">
            <img src="assets/img/cover-001.jpg" alt="Learning Gutenberg cover">
            <div class="in">
                <b>Learning Gutenberg</b>
                <small>Video course</small>
            </div>
            <b>$73.26</b>
            </div>
            <div class="co-line">
            <img src="assets/img/cover-065.jpg" alt="7 Step WordPress Setup Audio Video Series cover">
            <div class="in">
                <b>7 Step WordPress Setup Audio Video Series</b>
                <small>Audiobook</small>
            </div>
            <b>$79.38</b>
            </div>
        </div>
        <hr>
        <div class="co-disc">
            <div class="dp-field">
            <label for="code">Discount code</label>
            <div class="dp-in">
                <input id="code" value="WELCOME10" autocomplete="off">
            </div>
            </div>
            <button type="button" class="p-btn p-b2 px" id="apply">
            <span class="pg"></span>Apply </button>
        </div>
        <p class="co-ok" id="coddeMsg" role="status">WELCOME10 applied: 10% off this order.</p>
        <hr>
        <div class="co-tots">
            <div class="co-rw">
            <span>Subtotal</span>
            <b id="sub">$238.12</b>
            </div>
            <div class="co-rw">
            <span>Discount (WELCOME10)</span>
            <b class="g" id="disc">−$23.81</b>
            </div>
        </div>
        <hr>
        <div class="co-rw tot">
            <span>Total today</span>
            <b id="tot">$214.31</b>
        </div>
        <label class="dp-check">
            <input type="checkbox" required="">
            <span class="bx">
            <svg width="10" height="8" viewBox="0 0 10 8" aria-hidden="true">
                <path d="M1 4l2.8 2.8L9 1.2" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            </span>
            <span>I agree to the <a href="terms.html">Terms and Conditions</a> and the <a href="privacy.html">Privacy Policy</a>. </span>
        </label>
        <div class="co-sub">
            <div class="dp-cap" tabindex="0" role="checkbox" aria-label="I'm not a robot" data-required="" aria-checked="false">
            <div class="l">
                <span class="b">
                <svg width="18" height="14" viewBox="0 0 18 14" aria-hidden="true">
                    <path d="M1.5 7.5l5 5L16.5 1.5" fill="none" stroke="#009E55" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                </span>I'm not a robot
            </div>
            <div class="r">
                <svg width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                <circle cx="16" cy="16" r="12" fill="none" stroke="#4A8FE3" stroke-width="4" stroke-dasharray="56 20"></circle>
                <path d="M26 6v8h-8" fill="none" stroke="#1C3AA9" stroke-width="3"></path>
                </svg>
                <span>reCAPTCHA</span>
                <small>Privacy · Terms</small>
            </div>
            </div>
            <button type="submit" class="p-btn p-b1 px" id="go">
            <span class="pg"></span>Continue to secure payment </button>
        </div>
        <p class="co-note">You'll pay on our provider's secure page. DesignPixis never sees your card details.</p>
        <div class="co-pay" aria-label="Visa and Mastercard">
            <span class="v" role="img" aria-label="Visa">
            <svg viewBox="0 7.4 24 9.2" aria-hidden="true">
                <path fill="currentColor" d="M9.112 8.262L5.97 15.758H3.92L2.374 9.775c-.094-.368-.175-.503-.461-.658C1.447 8.864.677 8.627 0 8.479l.046-.217h3.3a.904.904 0 01.894.764l.817 4.338 2.018-5.102zm8.033 5.049c.008-1.979-2.736-2.088-2.717-2.972.006-.269.262-.555.822-.628a3.66 3.66 0 011.913.336l.34-1.59a5.207 5.207 0 00-1.814-.333c-1.917 0-3.266 1.02-3.278 2.479-.012 1.079.963 1.68 1.698 2.04.756.367 1.01.603 1.006.931-.005.504-.602.725-1.16.734-.975.015-1.54-.263-1.992-.473l-.351 1.642c.453.208 1.289.39 2.156.398 2.037 0 3.37-1.006 3.377-2.564m5.061 2.447H24l-1.565-7.496h-1.656a.883.883 0 00-.826.55l-2.909 6.946h2.036l.405-1.12h2.488zm-2.163-2.656l1.02-2.815.588 2.815zm-8.16-4.84l-1.603 7.496H8.34l1.605-7.496z"></path>
            </svg>
            </span>
            <span class="mc">
            <i style="left:0;background:#EB001B"></i>
            <i style="left:12px;background:#F79E1B;opacity:.9"></i>
            </span>
        </div>
    </div>
    </form>
  </section>
</main>
 <?php include 'includes/footer.php'; ?>