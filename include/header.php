<?php
/**
 * TripInBlink - Common Header Include
 */
if (!isset($page_title)) {
    $page_title = "TripInBlink – Discover, Plan & Book Tours in a Blink";
}
if (!isset($meta_description)) {
    $meta_description = "TripInBlink is your premier global travel and tour marketplace. Find expert local guides, tailored itineraries, and unforgettable adventures.";
}
if (!isset($current_page)) {
    $current_page = basename($_SERVER['PHP_SELF'], '.php');
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title><?= htmlspecialchars($page_title) ?></title>
   <meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Favicon -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
   <link rel="stylesheet" href="assets/css/daterangepicker.css">
   <link rel="stylesheet" href="assets/css/range-slider.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/main.css">
   <?php if (isset($extra_css)): ?>
       <?= $extra_css ?>
   <?php endif; ?>

   <!-- Google Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Inter:wght@400;500;600;700&family=Onest:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
   <![endif]-->

   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->

   <!-- tp-offcanvas start -->
   <div class="tp-offcanvas">
      <div class="tp-offcanvas-header mb-30">
         <div class="tp-offcanvas-logo">
            <a href="index.php"><img data-width="128" src="assets/img/logo/logo.png" alt="TripInBlink"></a>
         </div>
         <div class="tp-offcanvas-close">
            <button class="tp-offcanvas-close-button"><i class="fal fa-times"></i></button>
         </div>
      </div>
      <div class="tp-header-search p-relative mb-30">
         <form action="tour-grid-sidebar.php">
            <input class="tp-input" type="text" placeholder="Search destinations...">
            <button class="tp-header-search-btn" type="submit">
               <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.64267 10.7857C8.48288 10.7857 10.7853 8.48318 10.7853 5.64286C10.7853 2.80254 8.48288 0.5 5.64267 0.5C2.80245 0.5 0.5 2.80254 0.5 5.64286C0.5 8.48318 2.80245 10.7857 5.64267 10.7857Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M12.5 12.5L9.92871 9.92857" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
               </svg>
            </button>
         </form>
      </div>
      <div class="tp-offcanvas-menu mb-50">
         <nav></nav>
      </div>
      <div class="tp-offcanvas-content mb-40">
         <h3 class="tp-offcanvas-title">Explore with TripInBlink</h3>
         <p>Turn your travel dreams into reality. Plan customized trips and book verified local guides in a blink.</p>
      </div>
      <div class="tp-offcanvas-gallery mb-50">
         <a class="popup-image" href="assets/img/tour/01.jpg"><img src="assets/img/tour/01.jpg" alt="tour"></a>
         <a class="popup-image" href="assets/img/tour/02.jpg"><img src="assets/img/tour/02.jpg" alt="tour"></a>
         <a class="popup-image" href="assets/img/tour/03.jpg"><img src="assets/img/tour/03.jpg" alt="tour"></a>
         <a class="popup-image" href="assets/img/tour/04.jpg"><img src="assets/img/tour/04.jpg" alt="tour"></a>
      </div>
      <div class="tp-offcanvas-info mb-50">
         <h3 class="tp-offcanvas-title">Contact Support</h3>
         <span><a href="tel:+0012345688">+00 (123) 45688</a></span>
         <span><a href="mailto:support@tripinblink.com">support@tripinblink.com</a></span>
         <span><a href="#">742 Evergreen Terrace, New York</a></span>
      </div>
      <div class="tp-offcanvas-social">
         <h3 class="tp-offcanvas-title">Follow Us</h3>
         <a href="#"><i class="fab fa-facebook-f"></i></a>
         <a href="#"><i class="fab fa-twitter"></i></a>
         <a href="#"><i class="fab fa-instagram"></i></a>
         <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
   </div>
   <div class="tp-offcanvas-overlay"></div>
   <!-- tp-offcanvas end -->

   <!-- Header start -->
   <header class="tp-header-height">
      <div class="tp-header-top-area tp-header-top-spacing d-none d-md-block">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-4 col-md-6">
                  <div class="tp-header-top-info">
                     <ul>
                        <li><a href="tel:+0012345688">+00 (123) 45688</a></li>
                        <li><a href="mailto:support@tripinblink.com">support@tripinblink.com</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 d-none d-lg-block">
                  <div class="tp-header-top-discount text-center">
                     <p class="mb-0"><span>Save 50%</span> on Multi - day tours</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="tp-header-top-switcher-wrap d-flex justify-content-end">
                     <div class="tp-header-top-menu-item tp-header-top-lang">
                        <span class="tp-header-top-lang-toggle" id="tp-header-top-lang-toggle">English</span>
                        <ul>
                           <li><a href="#">Spanish</a></li>
                           <li><a href="#">French</a></li>
                           <li><a href="#">German</a></li>
                        </ul>
                     </div>
                     <div class="tp-header-top-menu-item tp-header-top-currency ml-30">
                        <span class="tp-header-top-currency-toggle" id="tp-header-top-currency-toggle">
                           <img src="assets/img/flag/01.png" alt=""> USD
                        </span>
                        <ul>
                           <li><a href="#"><img src="assets/img/flag/01.png" alt=""> USD </a></li>
                           <li><a href="#"><img src="assets/img/flag/03.png" alt=""> EUR </a></li>
                           <li><a href="#"><img src="assets/img/flag/08.png" alt=""> INR </a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div id="header-sticky" class="tp-header-area tp-header-four tp-header-lg-ptb tp-header-blur p-relative">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-2 col-6">
                  <div class="tp-header-logo">
                     <a href="index.php">
                        <img class="logo-1" width="135" src="assets/img/logo/logo-white.png" alt="TripInBlink">
                        <img class="d-none logo-2" width="135" src="assets/img/logo/logo.png" alt="TripInBlink">
                     </a>
                  </div>
               </div>
               <div class="col-xl-6 d-none d-xl-block">
                  <div class="tp-main-menu tp-menu-dropdown text-end mr-50">
                     <nav class="tp-mobile-menu-active">
                        <ul>
                           <li class="<?= ($current_page === 'index') ? 'active' : '' ?>">
                              <a href="index.php">Home</a>
                           </li>
                           <li class="<?= ($current_page === 'about') ? 'active' : '' ?>">
                              <a href="about.php">About</a>
                           </li>
                           <li class="has-dropdown position-inherit <?= in_array($current_page, ['tour-grid-sidebar', 'tour-details']) ? 'active' : '' ?>">
                              <a href="tour-grid-sidebar.php">Destinations</a>
                              <div class="sub-menu tp-megamenu-wrapper tp-megamenu-center">
                                 <div class="row">
                                    <div class="col-xl-4">
                                       <div class="tp-megamenu-list">
                                          <ul>
                                             <li>
                                                <a href="tour-details.php" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="assets/img/menu/01.png" alt="Osaka">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Osaka</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="tour-details.php" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="assets/img/menu/02.png" alt="Rome">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Rome</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="tour-details.php" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="assets/img/menu/03.png" alt="Paris">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Paris</span>
                                                   </div>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-xl-4">
                                       <div class="tp-megamenu-list">
                                          <ul>
                                             <li>
                                                <a href="tour-details.php" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="assets/img/menu/04.png" alt="London">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">London</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="tour-details.php" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="assets/img/menu/05.png" alt="Greece">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Greece</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="tour-details.php" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="assets/img/menu/06.png" alt="Turkey">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Turkey</span>
                                                   </div>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-xl-4">
                                       <div class="tp-megamenu-list">
                                          <ul>
                                             <li>
                                                <a href="tour-details.php" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="assets/img/destination/six/thumb.jpg" alt="Maldives">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Maldives</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="tour-details.php" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="assets/img/destination/six/thumb-2.jpg" alt="Canada">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Canada</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="tour-details.php" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="assets/img/destination/six/thumb-3.jpg" alt="Indonesia">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Indonesia</span>
                                                   </div>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="<?= ($current_page === 'contact') ? 'active' : '' ?>">
                              <a href="contact.php">Contact Us</a>
                           </li>
                           <li class="<?= ($current_page === 'blog') ? 'active' : '' ?>">
                              <a href="blog.php">Blog</a>
                           </li>
                           
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xl-4 col-6">
                  <div class="tp-header-option tp-header-two d-flex align-items-center justify-content-end">
                     <div class="tp-header-contact ml-30 d-none d-md-block">
                        <a href="plan-my-trip.php">Plan My Trip</a>
                     </div>
                     <div class="tp-header-top-menu-item tp-header-login ml-20 d-none d-xl-block">
                        <span class="tp-header-login-btn" id="tp-header-login-btn">
                           <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6.84473 8.18158C10.3622 8.18158 13.3237 10.6105 13.5391 13.7441L13.5361 13.8535C13.5034 14.097 13.2968 14.2697 13.0654 14.289L13.0645 14.29C12.7649 14.313 12.5416 14.0808 12.5195 13.8163V13.8144C12.3342 11.2383 9.85653 9.20209 6.84473 9.20209C3.81703 9.20222 1.34055 11.2545 1.1709 13.83V13.832C1.15142 14.0657 0.978315 14.2535 0.763672 14.2968L0.668945 14.3056H0.625V14.3046C0.335307 14.282 0.128516 14.0353 0.151367 13.7597C0.366927 10.6106 3.32725 8.18171 6.84473 8.18158Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                              <path d="M6.84473 0.149597C8.94337 0.149833 10.6426 1.84973 10.6426 3.94843C10.6423 6.04692 8.94322 7.74604 6.84473 7.74628C4.74603 7.74628 3.04613 6.04707 3.0459 3.94843C3.0459 1.84958 4.74588 0.149597 6.84473 0.149597ZM6.84473 1.18573C5.32757 1.18573 4.08203 2.43127 4.08203 3.94843C4.08227 5.46538 5.32772 6.71014 6.84473 6.71014C8.36154 6.7099 9.60621 5.46524 9.60645 3.94843C9.60645 2.43141 8.36169 1.18597 6.84473 1.18573Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                           </svg>
                        </span>
                        <ul>
                           <li><a href="login.php"><i class="icon far fa-user"></i> Login</a></li>
                           <li><a href="register.php"><i class="icon fas fa-user-plus"></i> Register</a></li>
                           <li><a href="guide.php"><i class="icon fas fa-id-badge"></i> Join as Guide</a></li>
                           <li><a href="operator.php"><i class="icon fas fa-briefcase"></i> Join as Operator</a></li>
                        </ul>
                     </div>
                     <div class="tp-header-toogle-wrapper d-xl-none ml-10">
                        <button class="tp-header-toogle">
                           <span></span>
                           <span></span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- Header end -->
