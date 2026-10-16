<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DesignPixis</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/tg-icon.svg">
    <link rel="stylesheet" href="assets/css/mainBase.css">
  </head>
  <body>
  
  <div class="main-div">
    <header class="p-nav static show" id="pnav">
        <div class="in">
            <a href="index.html" class="lgo" aria-label="DesignPixis home">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 1l10 5.8v11.4L12 24 2 18.2V6.8z" fill="#fff" stroke="#121214" stroke-width="1.4" stroke-linejoin="round" />
                    <path d="M12 12.6L22 6.8M12 12.6L2 6.8M12 12.6V24" stroke="#121214" stroke-width="1.4" />
                    <path d="M12 1l10 5.8L12 12.6 2 6.8z" fill="#2E47E6" />
                </svg><span>DesignPixis</span></a>
                <nav aria-label="Main">
                  <a href="store.html">Store</a>
                  <a href="design-services.html">Design services</a>
                  <a href="about.html">About</a>
                  <a href="contact.html">Contact</a></nav>
                <div class="r"><a href="sign-in.html" class="si">Sign in</a><a href="account-library.html" class="acct">Account</a><a href="cart.html" class="ct" id="navCart">Cart<b data-cart-count>0</b></a>
                    <button class="mb" id="pmb" aria-expanded="false" aria-controls="dpmenu"><span class="bars"><i></i><i></i></span>Menu</button>
                </div>
        </div>
    </header>
    <div class="dp-menu" id="dpmenu" role="dialog" aria-modal="true" aria-label="Menu">
        <div>
            <div class="bar">
                <a href="index.html" class="lgo" aria-label="DesignPixis home">
                    <svg width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 1l10 5.8v11.4L12 24 2 18.2V6.8z" fill="#fff" stroke="#121214" stroke-width="1.4" stroke-linejoin="round" />
                        <path d="M12 12.6L22 6.8M12 12.6L2 6.8M12 12.6V24" stroke="#121214" stroke-width="1.4" />
                        <path d="M12 1l10 5.8L12 12.6 2 6.8z" fill="#2E47E6" />
                    </svg>
                </a>
                <div class="r"><a href="cart.html" class="ctm">Cart<b data-cart-count>0</b></a>
                    <button class="x" id="pmx">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" aria-hidden="true">
                            <path d="M1 1l10 10M11 1L1 11" />
                        </svg>Close</button>
                </div>
            </div>
            <nav class="links" aria-label="Menu">
                <a href="store.html"><small>01</small>Store</a>
                <a href="design-services.html"><small>02</small>Design services</a>
                <a href="about.html"><small>03</small>About</a>
                <a href="faq.html"><small>04</small>FAQ</a>
                <a href="contact.html"><small>05</small>Contact</a>
            </nav>
            <div class="cats"><small>Shop by category</small>
                <div class="g">
                    <a href="store.html?cat=ebooks">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                        </svg>E-books</a>
                    <a href="store.html?cat=video">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="10" />
                            <polygon points="10 8 16 12 10 16 10 8" />
                        </svg>Video courses</a>
                    <a href="store.html?cat=software">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m7 11 2-2-2-2" />
                            <path d="M11 13h4" />
                            <rect width="18" height="18" x="3" y="3" rx="2" />
                        </svg>Software</a>
                    <a href="store.html?cat=templates">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect width="7" height="7" x="3" y="3" rx="1" />
                            <rect width="7" height="7" x="14" y="3" rx="1" />
                            <rect width="7" height="7" x="14" y="14" rx="1" />
                            <rect width="7" height="7" x="3" y="14" rx="1" />
                        </svg>Templates</a>
                    <a href="store.html?cat=audiobooks">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M2 10v3" />
                            <path d="M6 6v11" />
                            <path d="M10 3v18" />
                            <path d="M14 8v7" />
                            <path d="M18 5v13" />
                            <path d="M22 10v3" />
                        </svg>Audiobooks</a><a href="store.html" class="all">All resources</a></div>
        </div>
        <div class="stu">
            <div>
                <svg class="iso" viewBox="0 0 327 200" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
                    <g stroke="#fff" stroke-width=".6" fill="none">
                        <path d="M-200 0 L146 200" />
                        <path d="M-200 200 L146 0" />
                        <path d="M-172 0 L174 200" />
                        <path d="M-172 200 L174 0" />
                        <path d="M-144 0 L202 200" />
                        <path d="M-144 200 L202 0" />
                        <path d="M-116 0 L230 200" />
                        <path d="M-116 200 L230 0" />
                        <path d="M-88 0 L258 200" />
                        <path d="M-88 200 L258 0" />
                        <path d="M-60 0 L286 200" />
                        <path d="M-60 200 L286 0" />
                        <path d="M-32 0 L314 200" />
                        <path d="M-32 200 L314 0" />
                        <path d="M-4 0 L342 200" />
                        <path d="M-4 200 L342 0" />
                        <path d="M24 0 L370 200" />
                        <path d="M24 200 L370 0" />
                        <path d="M52 0 L398 200" />
                        <path d="M52 200 L398 0" />
                        <path d="M80 0 L426 200" />
                        <path d="M80 200 L426 0" />
                        <path d="M108 0 L454 200" />
                        <path d="M108 200 L454 0" />
                        <path d="M136 0 L482 200" />
                        <path d="M136 200 L482 0" />
                        <path d="M164 0 L510 200" />
                        <path d="M164 200 L510 0" />
                        <path d="M192 0 L538 200" />
                        <path d="M192 200 L538 0" />
                        <path d="M220 0 L566 200" />
                        <path d="M220 200 L566 0" />
                        <path d="M248 0 L594 200" />
                        <path d="M248 200 L594 0" />
                        <path d="M276 0 L622 200" />
                        <path d="M276 200 L622 0" />
                        <path d="M304 0 L650 200" />
                        <path d="M304 200 L650 0" />
                        <path d="M332 0 L678 200" />
                        <path d="M332 200 L678 0" />
                        <path d="M360 0 L706 200" />
                        <path d="M360 200 L706 0" />
                        <path d="M388 0 L734 200" />
                        <path d="M388 200 L734 0" />
                        <path d="M416 0 L762 200" />
                        <path d="M416 200 L762 0" />
                        <path d="M444 0 L790 200" />
                        <path d="M444 200 L790 0" />
                        <path d="M472 0 L818 200" />
                        <path d="M472 200 L818 0" />
                        <path d="M500 0 L846 200" />
                        <path d="M500 200 L846 0" />
                        <path d="M528 0 L874 200" />
                        <path d="M528 200 L874 0" />
                        <path d="M556 0 L902 200" />
                        <path d="M556 200 L902 0" />
                        <path d="M584 0 L930 200" />
                        <path d="M584 200 L930 0" />
                        <path d="M612 0 L958 200" />
                        <path d="M612 200 L958 0" />
                    </g>
                </svg><small>THE STUDIO</small><b>Want it built for you?</b>
                <p>Tell us what you need. We come back with a scope and a fixed price.</p><a href="design-services.html#brief" class="p-btn p-b3 p-bs">Send a brief</a></div>
        </div>
    </div>
    <div class="bot"><a href="sign-in.html" class="p-btn p-b2 menu-si">Sign in</a><a href="account-library.html" class="p-btn p-b2 menu-acct" hidden>Account</a><span>hello@designpixis.com</span></div>
    </div>
    <div class="dp-toast" id="dpToast" role="status" aria-live="polite">
        <div class="hd">
            <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true">
                <circle cx="10" cy="10" r="10" fill="#47B147" />
                <path d="M5.8 10.2l2.8 2.8 5.6-5.8" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
            </svg><span>Added to cart</span>
            <button class="x" aria-label="Close">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" aria-hidden="true">
                    <path d="M1 1l10 10M11 1L1 11" />
                </svg>
            </button>
        </div>
        <div class="it"><img alt="" src="assets/img/cover-001.jpg">
            <div><b></b><small></small></div>
        </div>
        <hr>
        <div class="sub"><span></span><b></b></div>
        <div class="acts"><a href="cart.html" class="p-btn p-b2 p-bs">View cart</a><a href="checkout.html" class="p-btn p-b1 p-bs" data-checkout>Checkout</a></div>
    </div>
    <div class="dp-pop" id="dpPop" aria-hidden="true">
        <div class="card" role="dialog" aria-modal="true" aria-labelledby="dpPopH"></div>
    </div>
  
  