<?php include 'includes/header.php'; ?>
<main class="dp-page au">
  <div class="au-media">
    <img src="assets/img/auth-sign-in.jpg" alt="Isometric arch with design resource tiles and a selected blue cube" width="1758" height="2370">
  </div>
  <div class="au-col">
    <div class="au-ttl">
      <span class="p-lab">
        <i></i>Welcome back </span>
      <h1 class="t-h1">Sign in</h1>
      <p class="t-lead">Your library, orders and invoices are all in here.</p>
    </div>
    <form class="dp-form au-form">
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
          <input id="pw" name="pw" type="password" required data-min="8" placeholder="Your password" autocomplete="current-password">
          <button type="button" class="eye" aria-label="Show password">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M2.06 12.35a1 1 0 0 1 0-.7 10.75 10.75 0 0 1 19.88 0 1 1 0 0 1 0 .7 10.75 10.75 0 0 1-19.88 0" />
              <circle cx="12" cy="12" r="3" />
            </svg>
          </button>
        </div>
        <p class="msg">Enter your password.</p>
      </div>
      <div class="au-row">
        <a href="forgot-password.html" class="au-lk" data-carry>Forgot your password?</a>
      </div>
      <button class="p-btn p-b1 p-full" type="submit">Sign in</button>
    </form>
    <hr>
    <p class="au-sw">New here? <a href="sign-up.html" data-carry>Create an account</a>
    </p>
  </div>
</main>
 <?php include 'includes/footer.php'; ?>