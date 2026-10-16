<?php include 'includes/header.php'; ?>
<main class="dp-page au">
  <div class="au-media">
    <img src="assets/img/auth-forgot.jpg" alt="Isometric arch with design resource tiles and a selected blue cube" width="1758" height="2370">
  </div>
  <div class="au-col">
    <div class="au-ttl">
      <span class="p-lab">
        <i></i>Password </span>
      <h1 class="t-h1 one">Reset your <br class="m">password </h1>
      <p class="t-lead">Enter the email you signed up with and we'll send a link to choose a new one.</p>
    </div>
    <form class="dp-form au-form" id="f" novalidate>
      <div class="dp-field">
        <label for="email">Email</label>
        <div class="dp-in">
          <input id="email" name="email" type="email" required placeholder="john@example.com" autocomplete="email">
        </div>
        <p class="msg">Enter your email address.</p>
      </div>
      <button class="p-btn p-b1 p-full" type="submit">Send reset link</button>
    </form>
    <hr>
    <p class="au-sw">Remembered it? <a href="sign-in.html" data-carry>Back to sign in</a>
    </p>
  </div>
</main>

 <?php include 'includes/footer.php'; ?>