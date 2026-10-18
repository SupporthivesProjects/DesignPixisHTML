<?php include 'includes/header.php'; ?>
<main class="dp-page au">
  <div class="au-media">
    <img src="assets/img/auth-reset.jpg" alt="Isometric arch with design resource tiles and a selected blue cube" width="1758" height="2370">
  </div>
  <div class="au-col">
    <div class="au-ttl">
      <span class="p-lab">
        <i></i>Password </span>
      <h1 class="t-h1">Choose a <br class="m">new <br class="d"> password </h1>
      <p class="t-lead">Pick something you have not used here before. At least 8 characters.</p>
    </div>
    <form class="dp-form au-form" id="f" novalidate>
      <div class="dp-field">
        <label for="pw">New password</label>
        <div class="dp-in">
          <input id="pw" name="pw" type="password" required data-min="8" value="" placeholder="••••••••••" autocomplete="new-password">
          <button type="button" class="eye" aria-label="Show password">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M2.06 12.35a1 1 0 0 1 0-.7 10.75 10.75 0 0 1 19.88 0 1 1 0 0 1 0 .7 10.75 10.75 0 0 1-19.88 0" />
              <circle cx="12" cy="12" r="3" />
            </svg>
          </button>
        </div>
        <p class="msg">Use at least 8 characters.</p>
      </div>
      <div class="dp-field">
        <label for="pw2">Confirm new password</label>
        <div class="dp-in">
          <input id="pw2" name="pw2" type="password" required data-match="pw" value="" placeholder="••••••••••" autocomplete="new-password">
          <button type="button" class="eye" aria-label="Show password">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M2.06 12.35a1 1 0 0 1 0-.7 10.75 10.75 0 0 1 19.88 0 1 1 0 0 1 0 .7 10.75 10.75 0 0 1-19.88 0" />
              <circle cx="12" cy="12" r="3" />
            </svg>
          </button>
        </div>
        <p class="msg">Enter the same password again.</p>
      </div>
      <button class="p-btn p-b1 p-full" type="submit">Save password</button>
    </form>
  </div>
</main>

 <?php include 'includes/footer.php'; ?>