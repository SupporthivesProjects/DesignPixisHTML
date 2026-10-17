<?php include 'includes/header.php'; ?>

    <style>
      /* account family: header, sidebar, content (Figma accounts pages) */
      [hidden] {
        display: none !important
      }

      .ac-hd {
        background: #fff
      }

      main.dp-page {
        background: #fff
      }

      .ac-hd .dp-wrap {
        padding-top: calc(72*var(--u));
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: calc(24*var(--u))
      }

      .ac-hd .t-lead {
        max-width: calc(640*var(--u))
      }

      /* mainBase.css sets overflow hidden on html/body/section, which breaks the sticky sidebar.
       With html left visible, body's overflow moves to the viewport, so body is no longer a
       scroll container and sticky works (clip is the modern way, hidden is the Safari < 16 fallback) */
      html {
        overflow-x: visible
      }

      body {
        overflow-x: hidden;
        overflow-x: clip
      }

      .ac-sec {
        overflow: visible;
        background: #fff;
        padding: calc(56*var(--u)) 0 calc(104*var(--u))
      }

      .ac-main {
        display: flex;
        flex-direction: column;
        gap: 24px;
        min-width: 0
      }

      .dp-side .who small {
        opacity: .5
      }

      .dp-side nav button {
        width: 100%;
        box-sizing: border-box
      }

      .dp-side nav a:focus-visible,
      .dp-side nav button:focus-visible,
      .dp-tabs a:focus-visible,
      .dp-tabs button:focus-visible {
        outline: 2px solid var(--blue);
        outline-offset: 2px
      }

      .dp-tabs a:not(.cur):hover,
      .dp-tabs button:hover {
        border-color: var(--ink)
      }

      button.p-btn {
        border: 0;
        cursor: pointer;
        font-family: inherit
      }

      .ac-dl {
        padding: 10px 16px !important;
        font-size: 14px !important
      }

      .dp-pop {
        background: rgba(18, 18, 20, .8)
      }

      .dp-pop .card {
        width: min(560px, 100%);
        padding: 48px
      }

      .dp-pop .card.wide {
        width: min(640px, 100%);
        position: relative;
        max-height: calc(100vh - 48px);
        overflow-y: auto
      }

      @media (max-width:820px) {
        .ac-hd .dp-wrap {
          padding-top: 40px;
          gap: 24px
        }

        .ac-hd .t-lead {
          font-size: 18px;
          max-width: none
        }

        .ac-sec {
          padding: 40px 0 0 0
        }

        .dp-acct {
          gap: 32px
        }

        .ac-main {
          gap: 16px
        }

        .dp-tabs {
          margin: 0 -24px;
          padding: 0 24px
        }

        .dp-pop .card {
          padding: 32px
        }

        .dp-pop .card.wide {
          padding: 24px;
          gap: 16px
        }
      }
    </style>
    <style>
      .dt-card {
        background: var(--paper);
        border: 1px solid rgba(18, 18, 20, .1);
        border-radius: calc(16*var(--u));
        padding: calc(40*var(--u));
        gap: calc(24*var(--u))
      }

      .dt-card h2 {
        font-weight: 600;
        font-size: calc(24*var(--u));
        line-height: 1.2;
        letter-spacing: -.03em
      }

      .dt-card h3 {
        font-weight: 500;
        font-size: calc(18*var(--u));
        line-height: 1.4
      }

      .dt-card .dp-row {
        gap: calc(24*var(--u))
      }

      .dt-card .p-btn {
        align-self: flex-start
      }

      .ac-main {
        gap: 24px !important
      }

      @media (max-width:820px) {
        .dt-card {
          margin: 0 -24px;
          border-radius: 0;
          border-left: 0;
          border-right: 0;
          padding: 40px 24px
        }

        .dt-card h3 {
          font-weight: 600;
          font-size: 24px;
          line-height: 1.2;
          letter-spacing: -.03em
        }
      }
    </style>
    <main class="dp-page tirthak_fullt">
      <section class="ac-hd">
        <div class="dp-wrap"><span class="p-lab"><i></i>Your account</span>
          <h1 class="t-h1">Account details</h1>
          <p class="t-lead">The name and address we put on your invoices.</p>
        </div>
      </section>
      <section class="ac-sec">
        <div class="dp-wrap dp-acct">
          <aside class="dp-side diff_colort" aria-label="Account">
            <div class="who"><small>Signed in as</small><b>John Smith</b><span>john@example.com</span></div>
            <hr style="margin: 0px;">
            <nav><a href="account-library.html">Library</a><a href="account-orders.html">Orders</a><a
                href="account-details.html" class="cur" aria-current="page">Account details</a><button type="button"
                data-signout>Sign out</button></nav>
          </aside>
          <div class="ac-main">
            <nav class="dp-tabs" aria-label="Account"><a href="account-library.html">Library</a><a
                href="account-orders.html">Orders</a><a href="account-details.html" class="cur"
                aria-current="page">Account details</a><button type="button" data-signout>Sign out</button></nav>
            <form class="dt-card dp-form diff_colort diff_radius_border" id="fd" novalidate>
              <h2>Your details</h2>
              <div class="dp-row">
                <div class="dp-field"><label for="name">Full name</label>
                  <div class="dp-in"><input placeholder="John Smith" id="name" type="text" required autocomplete="name">
                  </div>
                  <p class="msg">Enter your full name.</p>
                </div>
                <div class="dp-field"><label for="email">Email</label>
                  <div class="dp-in"><input placeholder="john@example.com" id="email" type="email" required
                      autocomplete="email"></div>
                  <p class="msg">Enter your email address.</p>
                </div>
              </div>
              <div class="dp-field"><label for="company">Company (optional)</label>
                <div class="dp-in"><input placeholder="Smith Design Ltd" id="company" type="text"
                    autocomplete="organization"></div>
                <p class="msg"></p>
              </div>
              <h3>Billing address</h3>
              <div class="dp-field"><label for="address">Address line 1</label>
                <div class="dp-in"><input placeholder="221 Example Street" id="address" type="text" required
                    autocomplete="address-line1"></div>
                <p class="msg">Enter the first line of your address.</p>
              </div>
              <div class="dp-row">
                <div class="dp-field"><label for="address2">Address line 2 (optional)</label>
                  <div class="dp-in"><input placeholder="Flat 4" id="address2" type="text" autocomplete="address-line2">
                  </div>
                  <p class="msg"></p>
                </div>
                <div class="dp-field"><label for="city">City</label>
                  <div class="dp-in"><input placeholder="London" id="city" type="text" required
                      autocomplete="address-level2"></div>
                  <p class="msg">Enter your city.</p>
                </div>
              </div>
              <div class="dp-row">
                <div class="dp-field"><label for="postcode">Postcode</label>
                  <div class="dp-in"><input placeholder="N1 9GU" id="postcode" type="text" required
                      autocomplete="postal-code"></div>
                  <p class="msg">Enter your postcode.</p>
                </div>
                <div class="dp-field"><label for="country">Country</label>
                  <div class="dp-in sel"><select id="country" required autocomplete="country-name">
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
                    </select><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                      stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="m6 9 6 6 6-6" /></svg></div>
                  <p class="msg">Choose your country.</p>
                </div>
              </div><button class="p-btn p-b1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Save
                changes</button>
            </form>
            <form class="dt-card dp-form diff_colort diff_radius_border" id="fp" novalidate>
              <h2>Password</h2>
              <div class="dp-row">
                <div class="dp-field"><label for="cpw">Current password</label>
                  <div class="dp-in"><input id="cpw" type="password" required autocomplete="current-password"><button
                      type="button" class="eye" aria-label="Show password"><svg width="20" height="20"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <path
                          d="M2.06 12.35a1 1 0 0 1 0-.7 10.75 10.75 0 0 1 19.88 0 1 1 0 0 1 0 .7 10.75 10.75 0 0 1-19.88 0" />
                        <circle cx="12" cy="12" r="3" /></svg></button></div>
                  <p class="msg">Enter your current password.</p>
                </div>
                <div class="dp-field"><label for="npw">New password</label>
                  <div class="dp-in"><input id="npw" type="password" required autocomplete="new-password"
                      data-min="8"><button type="button" class="eye" aria-label="Show password"><svg width="20"
                        height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path
                          d="M2.06 12.35a1 1 0 0 1 0-.7 10.75 10.75 0 0 1 19.88 0 1 1 0 0 1 0 .7 10.75 10.75 0 0 1-19.88 0" />
                        <circle cx="12" cy="12" r="3" /></svg></button></div>
                  <p class="msg">Use at least 8 characters.</p>
                </div>
              </div><button type="submit" class="p-btn p-b2">Update password</button>
            </form>
          </div>
        </div>
      </section>
    </main>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered  modal-xl ">
        <div class="modal-content tirhak_modal2 mx-auto">
            <div class="green_t">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" viewBox="0 0 25 18" fill="none">
                <path d="M1.19922 9.19995L8.19922 16.2L23.1992 1.19995" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" stroke="white"/>
              </svg>
            </div>
            <div>
              <h1>Details saved</h1>
              <h2>Your next invoice will use these details.</h2>
            </div>
            <button class="p-btn p-b1 for_hundt" type="button" >
              Done</button>
        </div>
      </div>
    </div>
 <?php include 'includes/footer.php'; ?>