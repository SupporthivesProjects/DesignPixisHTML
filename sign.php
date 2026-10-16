<?php include 'includes/header.php'; ?>
<main class="dp-page au">
  <div class="au-media">
    <img src="assets/img/auth-sign-up.jpg" alt="Isometric arch with design resource tiles and a selected blue cube" width="1758" height="2370">
  </div>
  <div class="au-col">
    <div class="au-ttl">
      <span class="p-lab">
        <i></i>New here </span>
      <h1 class="t-h1">Create an account</h1>
      <p class="t-lead">You need one to check out. We'll take you straight back to your order.</p>
    </div>
    <form class="dp-form au-form" id="f" novalidate>
      <div class="dp-field">
        <label for="name">Full name</label>
        <div class="dp-in">
          <input id="name" name="name" type="text" required placeholder="John Smith" autocomplete="name">
        </div>
        <p class="msg">Enter your full name.</p>
      </div>
      <div class="dp-field">
        <label for="email">Email</label>
        <div class="dp-in">
          <input id="email" name="email" type="email" required placeholder="john@example.com" autocomplete="email">
        </div>
        <p class="msg">Enter your email address.</p>
      </div>
      <div class="dp-field">
        <label for="pw">Password</label>
        <div class="dp-in">
          <input id="pw" name="pw" type="password" required data-min="8" value="" placeholder="At least 8 characters" autocomplete="new-password">
          <button type="button" class="eye" aria-label="Show password">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M2.06 12.35a1 1 0 0 1 0-.7 10.75 10.75 0 0 1 19.88 0 1 1 0 0 1 0 .7 10.75 10.75 0 0 1-19.88 0" />
              <circle cx="12" cy="12" r="3" />
            </svg>
          </button>
        </div>
        <p class="msg">Use at least 8 characters.</p>
      </div>
      <label class="dp-check">
        <input type="checkbox" required>
        <span class="bx">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M2.5 6.2l2.3 2.3 4.7-4.9" />
          </svg>
        </span>
        <span>I agree to the <a href="terms.html">Terms and Conditions</a> and the <a href="privacy.html">Privacy Policy</a>. </span>
      </label>
      <div class="au-sub">
        <div class="dp-cap" tabindex="0" role="checkbox" aria-label="I am not a robot" data-required>
          <div class="l">
            <span class="b">
              <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true">
                <path d="M4 10.5l4 4 8-9" fill="none" stroke="#009E55" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>I'm not a robot
          </div>
          <div class="r">
            <svg width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
              <path d="M16 3a13 13 0 0 1 12.6 9.8l-4 .1A9 9 0 0 0 16 7z" fill="#4A90E2" />
              <path d="M29 16a13 13 0 0 1-9.8 12.6l-.1-4A9 9 0 0 0 25 16z" fill="#1C3AA9" />
              <path d="M16 29a13 13 0 0 1-12.6-9.8l4-.1A9 9 0 0 0 16 25z" fill="#ABABAB" />
              <path d="M3 16A13 13 0 0 1 12.8 3.4l.1 4A9 9 0 0 0 7 16z" fill="#4A90E2" />
            </svg>
            <span>reCAPTCHA</span>
            <small>Privacy · Terms</small>
          </div>
        </div>
        <button class="p-btn p-b1" type="submit">Create account</button>
      </div>
    </form>
    <hr>
    <p class="au-sw">Already have an account? <a href="sign-in.html" data-carry>Sign in</a>
    </p>
  </div>
</main>

 <?php include 'includes/footer.php'; ?>