<?php include 'includes/header.php'; ?>

<main class="ct">
  <section class="cthero con_out">
    <div class="split">
      <div class="cp">
        <div class="p-lab p-rv">
          <i></i>Contact
        </div>
        <h1 class="t-h1">
          <span class="mask">
            <span>Get in touch</span>
          </span>
        </h1>
        <p class="p-rv" style="--d:.15s">Stuck on an order, scoping a project or just curious. Every message reaches the person who will do the work.</p>
        <div class="ctdirect p-rv" style="--d:.25s">
          <small>Email</small>
          <a href="mailto:hello@designpixis.com">hello@designpixis.com</a>
        </div>
      </div>
      <div class="ph">
        <img src="assets/img/contact-office.jpg" alt="The DesignPixis studio, with two designers at their laptops and a third at the desk">
      </div>
    </div>
  </section>
  <section class="ctmsg dp-sec">
    <div class="dp-wrap con_out2">
      <div class="cp">
        <div class="p-lab p-rv">
          <i></i>Send a message
        </div>
        <h2 class="p-h2" aria-label="What can we help with?">
          <span class="l d" aria-hidden="true">
            <span>What can we</span>
          </span>
          <span class="l d" aria-hidden="true">
            <span>help with?</span>
          </span>
          <span class="l m" aria-hidden="true">
            <span>What can</span>
          </span>
          <span class="l m" aria-hidden="true">
            <span>we help with?</span>
          </span>
        </h2>
        <div class="cttopics">
          <div class="p-rv">
            <b>Buying something</b>
            <p>Questions about a resource, a licence or an order you have placed.</p>
          </div>
          <div class="p-rv" style="--d:.06s">
            <b>A studio project</b>
            <p>Tell us what you need. For a full brief, the <a href="design-services.html#brief">design services page</a> has its own form. </p>
          </div>
          <div class="p-rv" style="--d:.12s">
            <b>Your account</b>
            <p>Library, downloads, invoices and the details on them.</p>
          </div>
        </div>
      </div>
      <form class="ctform dp-form p-rv cont_form" id="msgForm" novalidate>
        <div class="dp-row">
          <div class="dp-field">
            <label for="mName">Full name</label>
            <div class="dp-in">
              <input id="mName" name="name" autocomplete="name" placeholder="John Smith" required>
            </div>
            <p class="msg">Enter your full name.</p>
          </div>
          <div class="dp-field">
            <label for="mEmail">Email</label>
            <div class="dp-in">
              <input id="mEmail" name="email" type="email" autocomplete="email" placeholder="john@example.com" required>
            </div>
            <p class="msg">Enter your email address.</p>
          </div>
        </div>
        <div class="dp-field">
          <label for="mTopic">Topic</label>
          <div class="dp-in sel">
            <select id="mTopic" name="topic" required>
              <option value="buying">Buying something</option>
              <option value="studio" selected>A studio project</option>
              <option value="account">Your account</option>
            </select>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="m6 9 6 6 6-6" />
            </svg>
          </div>
          <p class="msg">Choose a topic.</p>
        </div>
        <div class="dp-field">
          <label for="mMsg">Message</label>
          <div class="dp-in ta">
            <textarea id="mMsg" name="message" placeholder="What you need and roughly when" required></textarea>
          </div>
          <p class="msg">Write your message.</p>
        </div>
        <label class="dp-check">
          <input type="checkbox" required>
          <span class="bx">
            <svg width="12" height="12" viewBox="0 0 12 12" aria-hidden="true">
              <path d="M2.5 6.2l2.3 2.3 4.7-4.9" fill="none" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </span>
          <span>I agree to the <a href="terms.html">Terms and Conditions</a> and the <a href="privacy.html">Privacy Policy</a>. </span>
        </label>
        <div class="sub">
          <div class="dp-cap" tabindex="0" role="checkbox" aria-checked="false" aria-label="I'm not a robot" data-required>
            <div class="l">
              <span class="b">
                <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M4.5 12.5l5 5 10-11" fill="none" stroke="#0F9D58" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>I'm not a robot
            </div>
            <div class="r">
              <svg width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                <path d="M16 3a13 13 0 0 1 11.3 6.6l-3.5 2A9 9 0 0 0 16 7z" fill="#1C3AA9" />
                <path d="M27.3 9.6A13 13 0 0 1 22.5 27.3l-2-3.5A9 9 0 0 0 23.8 11.6z" fill="#4285F4" />
                <path d="M22.5 27.3A13 13 0 0 1 3.2 18.5l4-.6A9 9 0 0 0 20.5 23.8z" fill="#ABABAB" />
                <path d="M27.3 9.6l1.7-3.4.4 6.6-6.1-1.6z" fill="#1C3AA9" />
              </svg>
              <span>reCAPTCHA</span>
              <small>Privacy · Terms</small>
            </div>
          </div>
          <button type="button" class="p-btn p-b1" data-bs-toggle="modal" data-bs-target="#exampleModal">Send message</button>
        </div>
      </form>
    </div>
  </section>
</main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content cont_modal">
        <div class="cont_modal_tick">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" viewBox="0 0 25 18" fill="none">
                <path d="M1.19922 9.19995L8.19922 16.2L23.1992 1.19995" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" stroke="white"/>
            </svg>
        </div>
        <div class="cont_modal_div">
            <h2 class="cont_modal_h2">Message sent</h2>
            <p class="cont_modal_p">Thanks, John. We read every message and reply from hello@designpixis.com.</p>
        </div>
        <button type="button" class="p-btn p-b1" data-bs-toggle="modal">Back to the store</button>

    </div>
  </div>
</div>
  
<?php include 'includes/footer.php'; ?>