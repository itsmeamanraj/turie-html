<?php
$page_title = "Join as a Guide – TripInBlink";
$current_page = "guide";
$extra_css = <<<'EOCSS'
<link rel="stylesheet" href="assets/css/register-guide.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
EOCSS;
$extra_js = <<<'EOJS'
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="assets/js/register-guide.js"></script>
EOJS;

include 'include/header.php';
?>

<main class="registration-landing">
      <!-- 1. Hero Section -->
      <section class="reg-hero text-white">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-7 mb-5 mb-lg-0 pr-lg-5">
                  <span class="reg-eyebrow">Become a Local Expert</span>
                  <h1 class="reg-hero-title mb-3">Guide Travelers in Your City.<br>Earn Doing What You Love.</h1>
                  <p class="reg-hero-sub mb-4">Join our global network of local guides, share your city's secrets, and
                     run your own independent tour business on your terms.</p>
                  <div class="hero-cta-group d-flex gap-3 flex-wrap">
                     <a href="#registerFormSection" class="btn btn-primary-lg">
                        <span>Apply Now</span>
                        <i class="ri-arrow-right-line"></i>
                     </a>
                     <a href="#howItWorks" class="btn btn-outline-white">
                        <span>Learn How It Works</span>
                        <i class="ri-information-line"></i>
                     </a>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="hero-image-card">
                     <img src="assets/img/hero/guide_hero_graphics.png" alt="Guide with Tourists" class="img-fluid">
                     <div class="floating-badge shadow p-3 d-flex align-items-center gap-3">
                        <div class="badge-icon-bg">
                           <i class="ri-wallet-3-line"></i>
                        </div>
                        <div>
                           <span class="badge-sub">Average Earnings</span>
                           <h6 class="badge-main">$2,400 / mo</h6>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- 2. Floating Stats Bar -->
      <div class="reg-stats-bar-wrapper">
         <div class="container">
            <div class="reg-stats-bar-capsule shadow-lg">
               <div class="row align-items-center g-0">
                  <div class="col-6 col-md-3 stat-item">
                     <div class="stat-icon-box text-coral">
                        <i class="ri-user-star-line"></i>
                     </div>
                     <div>
                        <h3 class="stat-number">10k+</h3>
                        <p class="stat-desc">Certified Guides</p>
                     </div>
                  </div>
                  <div class="col-6 col-md-3 stat-item">
                     <div class="stat-icon-box text-warning">
                        <i class="ri-star-fill"></i>
                     </div>
                     <div>
                        <h3 class="stat-number">4.9/5</h3>
                        <p class="stat-desc">Traveler Rating</p>
                     </div>
                  </div>
                  <div class="col-6 col-md-3 stat-item">
                     <div class="stat-icon-box text-info">
                        <i class="ri-global-line"></i>
                     </div>
                     <div>
                        <h3 class="stat-number">120+</h3>
                        <p class="stat-desc">Countries Present</p>
                     </div>
                  </div>
                  <div class="col-6 col-md-3 stat-item">
                     <div class="stat-icon-box text-success">
                        <i class="ri-shield-check-line"></i>
                     </div>
                     <div>
                        <h3 class="stat-number">100%</h3>
                        <p class="stat-desc">Secure Payouts</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- 3. Partnership Benefits Section -->
      <section class="reg-benefits" id="benefits">
         <div class="container">
            <div class="section-title text-center mb-50">
               <span class="reg-section-subtitle">Partnership Benefits</span>
               <h2 class="reg-section-title">Why Guides Choose TripInBlink</h2>
            </div>
            <div class="row g-4">
               <div class="col-md-6 col-lg-3">
                  <div class="benefit-card h-100">
                     <div class="benefit-icon-box coral mb-4">
                        <i class="ri-calendar-line"></i>
                     </div>
                     <h4 class="card-title">Total Flexibility</h4>
                     <p class="card-text">You are the boss. Design your own itineraries, choose your hours, and guide
                        only when it fits your lifestyle.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="benefit-card h-100">
                     <div class="benefit-icon-box cyan mb-4">
                        <i class="ri-price-tag-3-line"></i>
                     </div>
                     <h4 class="card-title">Set Your Pricing</h4>
                     <p class="card-text">Set your own rates and keep the lion's share of your earnings. No hidden fees
                        or unexpected commission deductions.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="benefit-card h-100">
                     <div class="benefit-icon-box amber mb-4">
                        <i class="ri-global-line"></i>
                     </div>
                     <h4 class="card-title">Global Marketing</h4>
                     <p class="card-text">We handle the digital marketing, SEO, and global advertising so you get
                        constant bookings from international travelers.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="benefit-card h-100">
                     <div class="benefit-icon-box green mb-4">
                        <i class="ri-shield-check-line"></i>
                     </div>
                     <h4 class="card-title">Guaranteed Payouts</h4>
                     <p class="card-text">No chasing customers for money. Payouts are safely deposited weekly directly
                        to your local bank account.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- 4. How It Works Timeline Section -->
      <section class="reg-how-it-works" id="howItWorks">
         <div class="container">
            <div class="section-title text-center mb-50">
               <span class="reg-section-subtitle">Quick Process</span>
               <h2 class="reg-section-title">How to Become a Certified Guide</h2>
            </div>
            <div class="row g-4 position-relative timeline-container">
               <div class="col-md-3 text-center timeline-item">
                  <div class="step-number mb-3">1</div>
                  <h4 class="step-title">Apply Online</h4>
                  <p class="step-text">Fill out our quick registration form. It takes less than 5 minutes to submit your
                     details.</p>
               </div>
               <div class="col-md-3 text-center timeline-item">
                  <div class="step-number mb-3">2</div>
                  <h4 class="step-title">Quick Screening</h4>
                  <p class="step-text">Our team reviews your application and conducts a brief call to align on guiding
                     standards.</p>
               </div>
               <div class="col-md-3 text-center timeline-item">
                  <div class="step-number mb-3">3</div>
                  <h4 class="step-title">List Your Tours</h4>
                  <p class="step-text">Create and publish your local tour listings with our easy-to-use operator
                     dashboard.</p>
               </div>
               <div class="col-md-3 text-center timeline-item">
                  <div class="step-number mb-3">4</div>
                  <h4 class="step-title">Start Earning</h4>
                  <p class="step-text">Welcome tourists, show them your city's magic, and receive secure weekly payouts.
                  </p>
               </div>
            </div>
         </div>
      </section>

      <!-- 5. Ratings & Reviews Section -->
      <div class="tp-testimonial-area tp-testimonial-4 tp-tour-ptb z-index-2 p-relative pt-140 pb-120 fix">
         <div class="container-fluid p-0">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-testimonial-section-title text-center mb-35">
                     <span class="tp-section-5-subtitle fw-700 d-inline-block mb-15 wow fadeInUp"
                        data-wow-duration=".9s" data-wow-delay=".3s">Our Testimonial</span>
                     <h4 class="tp-section-title wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">Special
                        offer! choose your<br> pack today</h4>
                  </div>
                  <div class="swiper tp-testimonial-4-slide wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="swiper-wrapper slide-transtion">
                        <div class="swiper-slide">
                           <div class="tp-testimonial-item">
                              <div class="tp-testimonial-rating mb-15">
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                              </div>
                              <h3 class="tp-testimonial-title mb-20">Perfect travel website design</h3>
                              <p class="mb-40">“This service has taken my business to a whole new
                                 level. The design and functionality are both outstanding
                                 and user friendly. The team consistently provided timely
                                 support and exceeded my expectations.”</p>
                              <div class="d-flex align-items-center">
                                 <div class="tp-testimonial-user d-flex align-items-center mr-15">
                                    <span class="tp-testimonial-qoute">
                                       <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02"
                                             stroke="white" stroke-width="1.5" />
                                          <path
                                             d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02"
                                             stroke="white" stroke-width="1.5" />
                                       </svg>
                                    </span>
                                    <img src="assets/img/testimonial/avatar.png" alt="">
                                 </div>
                                 <div class="tp-testimonial-avatar-info">
                                    <h3 class="tp-testimonial-avatar-title">Michael Lewis</h3>
                                    <span class="tp-testimonial-avatar-pos">Product Designer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tp-testimonial-item">
                              <div class="tp-testimonial-rating mb-15">
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                              </div>
                              <h3 class="tp-testimonial-title mb-20">Travel-friendly modern features</h3>
                              <p class="mb-40">“This service has taken my business to a whole new
                                 level. The design and functionality are both outstanding
                                 and user friendly. The team consistently provided timely
                                 support and exceeded my expectations.”</p>
                              <div class="d-flex align-items-center">
                                 <div class="tp-testimonial-user d-flex align-items-center mr-15">
                                    <span class="tp-testimonial-qoute">
                                       <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02"
                                             stroke="white" stroke-width="1.5" />
                                          <path
                                             d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02"
                                             stroke="white" stroke-width="1.5" />
                                       </svg>
                                    </span>
                                    <img src="assets/img/testimonial/avatar-2.png" alt="">
                                 </div>
                                 <div class="tp-testimonial-avatar-info">
                                    <h3 class="tp-testimonial-avatar-title">Michael Lewis</h3>
                                    <span class="tp-testimonial-avatar-pos">Product Designer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tp-testimonial-item">
                              <div class="tp-testimonial-rating mb-15">
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                              </div>
                              <h3 class="tp-testimonial-title mb-20">Easy customization for travel</h3>
                              <p class="mb-40">“This service has taken my business to a whole new
                                 level. The design and functionality are both outstanding
                                 and user friendly. The team consistently provided timely
                                 support and exceeded my expectations.”</p>
                              <div class="d-flex align-items-center">
                                 <div class="tp-testimonial-user d-flex align-items-center mr-15">
                                    <span class="tp-testimonial-qoute">
                                       <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02"
                                             stroke="white" stroke-width="1.5" />
                                          <path
                                             d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02"
                                             stroke="white" stroke-width="1.5" />
                                       </svg>
                                    </span>
                                    <img src="assets/img/testimonial/avatar-3.png" alt="">
                                 </div>
                                 <div class="tp-testimonial-avatar-info">
                                    <h3 class="tp-testimonial-avatar-title">Michael Lewis</h3>
                                    <span class="tp-testimonial-avatar-pos">Product Designer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tp-testimonial-item">
                              <div class="tp-testimonial-rating mb-15">
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                          fill="currentColor" />
                                    </svg>
                                 </span>
                              </div>
                              <h3 class="tp-testimonial-title mb-20">Perfect travel website design</h3>
                              <p class="mb-40">“This service has taken my business to a whole new
                                 level. The design and functionality are both outstanding
                                 and user friendly. The team consistently provided timely
                                 support and exceeded my expectations.”</p>
                              <div class="d-flex align-items-center">
                                 <div class="tp-testimonial-user d-flex align-items-center mr-15">
                                    <span class="tp-testimonial-qoute">
                                       <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02"
                                             stroke="white" stroke-width="1.5" />
                                          <path
                                             d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02"
                                             stroke="white" stroke-width="1.5" />
                                       </svg>
                                    </span>
                                    <img src="assets/img/testimonial/avatar.png" alt="">
                                 </div>
                                 <div class="tp-testimonial-avatar-info">
                                    <h3 class="tp-testimonial-avatar-title">Michael Lewis</h3>
                                    <span class="tp-testimonial-avatar-pos">Product Designer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tp-testimonial-4-slide-2 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="swiper tp-testimonial-4-slide" dir="rtl">
                        <div class="swiper-wrapper slide-transtion">
                           <div class="swiper-slide">
                              <div class="tp-testimonial-item">
                                 <div class="tp-testimonial-rating mb-15">
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                 </div>
                                 <h3 class="tp-testimonial-title mb-20">Perfect travel website design</h3>
                                 <p class="mb-40">“This service has taken my business to a whole new
                                    level. The design and functionality are both outstanding
                                    and user friendly. The team consistently provided timely
                                    support and exceeded my expectations.”</p>
                                 <div class="d-flex align-items-center">
                                    <div class="tp-testimonial-user d-flex align-items-center mr-15">
                                       <span class="tp-testimonial-qoute">
                                          <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02"
                                                stroke="white" stroke-width="1.5" />
                                             <path
                                                d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02"
                                                stroke="white" stroke-width="1.5" />
                                          </svg>
                                       </span>
                                       <img src="assets/img/testimonial/avatar.png" alt="">
                                    </div>
                                    <div class="tp-testimonial-avatar-info">
                                       <h3 class="tp-testimonial-avatar-title">Michael Lewis</h3>
                                       <span class="tp-testimonial-avatar-pos">Product Designer</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-testimonial-item">
                                 <div class="tp-testimonial-rating mb-15">
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                 </div>
                                 <h3 class="tp-testimonial-title mb-20">Travel-friendly modern features</h3>
                                 <p class="mb-40">“This service has taken my business to a whole new
                                    level. The design and functionality are both outstanding
                                    and user friendly. The team consistently provided timely
                                    support and exceeded my expectations.”</p>
                                 <div class="d-flex align-items-center">
                                    <div class="tp-testimonial-user d-flex align-items-center mr-15">
                                       <span class="tp-testimonial-qoute">
                                          <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02"
                                                stroke="white" stroke-width="1.5" />
                                             <path
                                                d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02"
                                                stroke="white" stroke-width="1.5" />
                                          </svg>
                                       </span>
                                       <img src="assets/img/testimonial/avatar-2.png" alt="">
                                    </div>
                                    <div class="tp-testimonial-avatar-info">
                                       <h3 class="tp-testimonial-avatar-title">Michael Lewis</h3>
                                       <span class="tp-testimonial-avatar-pos">Product Designer</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-testimonial-item">
                                 <div class="tp-testimonial-rating mb-15">
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                 </div>
                                 <h3 class="tp-testimonial-title mb-20">Easy customization for travel</h3>
                                 <p class="mb-40">“This service has taken my business to a whole new
                                    level. The design and functionality are both outstanding
                                    and user friendly. The team consistently provided timely
                                    support and exceeded my expectations.”</p>
                                 <div class="d-flex align-items-center">
                                    <div class="tp-testimonial-user d-flex align-items-center mr-15">
                                       <span class="tp-testimonial-qoute">
                                          <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02"
                                                stroke="white" stroke-width="1.5" />
                                             <path
                                                d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02"
                                                stroke="white" stroke-width="1.5" />
                                          </svg>
                                       </span>
                                       <img src="assets/img/testimonial/avatar-3.png" alt="">
                                    </div>
                                    <div class="tp-testimonial-avatar-info">
                                       <h3 class="tp-testimonial-avatar-title">Michael Lewis</h3>
                                       <span class="tp-testimonial-avatar-pos">Product Designer</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-testimonial-item">
                                 <div class="tp-testimonial-rating mb-15">
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                    <span>
                                       <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z"
                                             fill="currentColor" />
                                       </svg>
                                    </span>
                                 </div>
                                 <h3 class="tp-testimonial-title mb-20">Perfect travel website design</h3>
                                 <p class="mb-40">“This service has taken my business to a whole new
                                    level. The design and functionality are both outstanding
                                    and user friendly. The team consistently provided timely
                                    support and exceeded my expectations.”</p>
                                 <div class="d-flex align-items-center">
                                    <div class="tp-testimonial-user d-flex align-items-center mr-15">
                                       <span class="tp-testimonial-qoute">
                                          <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02"
                                                stroke="white" stroke-width="1.5" />
                                             <path
                                                d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02"
                                                stroke="white" stroke-width="1.5" />
                                          </svg>
                                       </span>
                                       <img src="assets/img/testimonial/avatar.png" alt="">
                                    </div>
                                    <div class="tp-testimonial-avatar-info">
                                       <h3 class="tp-testimonial-avatar-title">Michael Lewis</h3>
                                       <span class="tp-testimonial-avatar-pos">Product Designer</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- 6. Guide Registration Form Section -->
      <section class="reg-form-section" id="registerFormSection">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="login-card">
                     <div class="form-header text-center mb-4">
                        <span class="reg-section-subtitle">Join Our Network</span>
                        <h2 class="mb-2">Start Your Application</h2>
                        <p>Fill out the basic information below to register as a local guide.</p>
                     </div>

                     <form action="#" method="POST" id="guideRegisterForm" enctype="multipart/form-data">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="contact-form">
                                 <label class="contact-label">First Name <span class="text-danger">*</span></label>
                                 <input class="form-control contact-input" type="text" name="first_name"
                                    id="guideFirstName" placeholder="John" required>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="contact-form">
                                 <label class="contact-label">Last Name <span class="text-danger">*</span></label>
                                 <input class="form-control contact-input" type="text" name="last_name"
                                    id="guideLastName" placeholder="Doe" required>
                              </div>
                           </div>
                        </div>

                        <div class="contact-form">
                           <label class="contact-label">Email Address <span class="text-danger">*</span></label>
                           <input class="form-control contact-input" type="email" name="email" id="guideEmail"
                              placeholder="name@company.com" required>
                        </div>

                        <div class="row">
                           <div class="col-sm-6">
                              <div class="contact-form">
                                 <label class="contact-label">Password <span class="text-danger">*</span></label>
                                 <div class="position-relative">
                                    <input type="password" class="form-control contact-input password-input"
                                       name="password" id="txtPasswordGuide" placeholder="Create strong password"
                                       required>
                                    <i class="toggle-password ri-eye-line"></i>
                                 </div>

                                 <!-- Dynamic Strength Checklist -->
                                 <div class="password-strength-checker mt-2" id="strength-checker-guide"
                                    style="display: none;">
                                    <div class="strength-meter">
                                       <div class="strength-progress" id="strength-progress-guide"></div>
                                    </div>
                                    <p class="mb-1 text-muted fw-bold" style="font-size: 11px;">Password Requirements:
                                    </p>
                                    <ul class="list-unstyled mb-0 d-flex flex-column gap-1" style="padding-left: 0;">
                                       <li class="req-length text-muted" id="req-length-guide"><i
                                             class="ri-checkbox-blank-circle-line mr-1"></i> Min 8 characters</li>
                                       <li class="req-upper text-muted" id="req-upper-guide"><i
                                             class="ri-checkbox-blank-circle-line mr-1"></i> 1 uppercase letter (A-Z)
                                       </li>
                                       <li class="req-lower text-muted" id="req-lower-guide"><i
                                             class="ri-checkbox-blank-circle-line mr-1"></i> 1 lowercase letter (a-z)
                                       </li>
                                       <li class="req-number text-muted" id="req-number-guide"><i
                                             class="ri-checkbox-blank-circle-line mr-1"></i> 1 number (0-9)</li>
                                       <li class="req-special text-muted" id="req-special-guide"><i
                                             class="ri-checkbox-blank-circle-line mr-1"></i> 1 special char (@$!%*?&#)
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="contact-form">
                                 <label class="contact-label">Repeat Password <span class="text-danger">*</span></label>
                                 <div class="position-relative">
                                    <input type="password" class="form-control contact-input password-input"
                                       name="password_confirmation" id="txtConfirmPasswordGuide"
                                       placeholder="Repeat password" required>
                                    <i class="toggle-password ri-eye-line"></i>
                                 </div>
                                 <div id="password-match-msg-guide" class="mt-2 text-12 fw-bold" style="display: none;">
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-sm-6">
                              <div class="contact-form">
                                 <label class="contact-label">Country <span class="text-danger">*</span></label>
                                 <select class="form-select form-control contact-input" name="country" id="guideCountry"
                                    required>
                                    <option value="" disabled selected>Select country</option>
                                    <option value="US">United States (+1)</option>
                                    <option value="GB">United Kingdom (+44)</option>
                                    <option value="IN">India (+91)</option>
                                    <option value="ES">Spain (+34)</option>
                                    <option value="IT">Italy (+39)</option>
                                    <option value="FR">France (+33)</option>
                                    <option value="DE">Germany (+49)</option>
                                    <option value="JP">Japan (+81)</option>
                                    <option value="AU">Australia (+61)</option>
                                    <option value="CA">Canada (+1)</option>
                                    <option value="BR">Brazil (+55)</option>
                                    <option value="MX">Mexico (+52)</option>
                                    <option value="AE">United Arab Emirates (+971)</option>
                                    <option value="SG">Singapore (+65)</option>
                                    <option value="TH">Thailand (+66)</option>
                                    <option value="NL">Netherlands (+31)</option>
                                    <option value="CH">Switzerland (+41)</option>
                                    <option value="GR">Greece (+30)</option>
                                    <option value="TR">Turkey (+90)</option>
                                    <option value="ID">Indonesia (+62)</option>
                                    <option value="MY">Malaysia (+60)</option>
                                    <option value="VN">Vietnam (+84)</option>
                                    <option value="ZA">South Africa (+27)</option>
                                    <option value="EG">Egypt (+20)</option>
                                    <option value="NZ">New Zealand (+64)</option>
                                    <option value="AR">Argentina (+54)</option>
                                    <option value="PT">Portugal (+351)</option>
                                    <option value="AT">Austria (+43)</option>
                                    <option value="BE">Belgium (+32)</option>
                                    <option value="SE">Sweden (+46)</option>
                                    <option value="NO">Norway (+47)</option>
                                    <option value="OTHER">Other Countries</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="contact-form">
                                 <label class="contact-label">Phone Number <span class="text-danger">*</span></label>
                                 <input class="form-control contact-input" type="tel" name="phone" id="guidePhone"
                                    placeholder="1234567890" required>
                              </div>
                           </div>
                        </div>

                        <div class="form-check mb-3 d-flex align-items-start gap-2">
                           <input class="form-check-input flex-shrink-0" type="checkbox" id="termsCheck" required
                              style="width: 18px; height: 18px; margin-top: 4px;">
                           <label class="form-check-label text-14" for="termsCheck"
                              style="cursor: pointer; line-height: 1.4; color: var(--tp-grey-1);">
                              I have read and accept the <a href="#" class="text-primary fw-bold"
                                 style="color: var(--tp-theme-1) !important;">Terms and Conditions</a> & <a href="#"
                                 class="text-primary fw-bold" style="color: var(--tp-theme-1) !important;">Privacy
                                 Policy</a>
                           </label>
                        </div>

                        <div class="form-check mb-4 d-flex align-items-start gap-2">
                           <input class="form-check-input flex-shrink-0" type="checkbox" id="marketingCheck"
                              style="width: 18px; height: 18px; margin-top: 4px;">
                           <label class="form-check-label text-14" for="marketingCheck"
                              style="cursor: pointer; line-height: 1.4; color: var(--tp-grey-1);">
                              I agree to receive updates, news and special offers from TripInBlink.
                           </label>
                        </div>

                        <button type="button" class="btn-primary-fill w-100" id="btnOpenProfileModal">
                           <span class="d-flex justify-content-center align-items-center gap-2">
                              <span>Continue to Profile Setup</span>
                              <i class="ri-arrow-right-line"></i>
                           </span>
                        </button>

                        <!-- Profile Building Modal Popup -->
                        <div class="modal fade profile-modal" id="guideProfileModal" tabindex="-1" aria-hidden="true"
                           data-bs-backdrop="static">
                           <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title">
                                       <i class="ri-user-star-line"></i> Build Your Guide Profile
                                    </h5>
                                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal"
                                       aria-label="Close">
                                       <i class="ri-close-line"></i>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <div class="alert p-3 mb-4 rounded-3 d-flex align-items-center gap-3"
                                       style="background-color: #fff4f2; border: 1px solid #fed7d0; color: #a32207;">
                                       <i class="ri-information-line"
                                          style="font-size: 24px; color: var(--tp-theme-1);"></i>
                                       <span class="text-13 fw-semibold">Completing these details helps travelers and
                                          admins discover your guiding profile easily.</span>
                                    </div>

                                    <!-- Languages Spoken -->
                                    <div class="mb-4">
                                       <label class="form-label-custom">Languages Spoken (Select multiple)</label>
                                       <select class="form-select select2-languages" name="languages[]"
                                          id="guideLanguages" multiple="multiple" style="width: 100%;">
                                          <option value="English" selected>English</option>
                                          <option value="Spanish">Spanish</option>
                                          <option value="French">French</option>
                                          <option value="German">German</option>
                                          <option value="Italian">Italian</option>
                                          <option value="Hindi">Hindi</option>
                                          <option value="Japanese">Japanese</option>
                                          <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                          <option value="Arabic">Arabic</option>
                                          <option value="Russian">Russian</option>
                                          <option value="Portuguese">Portuguese</option>
                                          <option value="Dutch">Dutch</option>
                                          <option value="Korean">Korean</option>
                                          <option value="Turkish">Turkish</option>
                                          <option value="Greek">Greek</option>
                                       </select>
                                    </div>

                                    <!-- Guiding Areas -->
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <div class="mb-4">
                                             <label class="form-label-custom">Primary Guiding City / Area</label>
                                             <select class="form-select form-control-custom" name="main_guiding_area"
                                                id="guideMainArea" style="width: 100%;">
                                                <option value="" disabled selected>Select primary city</option>
                                                <option value="Paris, France">Paris, France</option>
                                                <option value="Rome, Italy">Rome, Italy</option>
                                                <option value="London, UK">London, UK</option>
                                                <option value="Madrid, Spain">Madrid, Spain</option>
                                                <option value="Barcelona, Spain">Barcelona, Spain</option>
                                                <option value="Tokyo, Japan">Tokyo, Japan</option>
                                                <option value="New York, USA">New York, USA</option>
                                                <option value="Dubai, UAE">Dubai, UAE</option>
                                                <option value="Bangkok, Thailand">Bangkok, Thailand</option>
                                                <option value="Delhi, India">Delhi, India</option>
                                                <option value="Amsterdam, Netherlands">Amsterdam, Netherlands</option>
                                                <option value="Berlin, Germany">Berlin, Germany</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="mb-4">
                                             <label class="form-label-custom">Other Nearby Destinations</label>
                                             <select class="form-select form-control-custom"
                                                name="other_guiding_areas[]" id="guideOtherAreas" multiple="multiple"
                                                style="width: 100%;">
                                                <option value="Florence, Italy">Florence, Italy</option>
                                                <option value="Venice, Italy">Venice, Italy</option>
                                                <option value="Versailles, France">Versailles, France</option>
                                                <option value="Toledo, Spain">Toledo, Spain</option>
                                                <option value="Oxford, UK">Oxford, UK</option>
                                                <option value="Kyoto, Japan">Kyoto, Japan</option>
                                                <option value="Agra, India">Agra, India</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- Experience & License -->
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <div class="mb-4">
                                             <label class="form-label-custom">Years of Guiding Experience</label>
                                             <select class="form-select form-control-custom" name="experience" required>
                                                <option value="" selected disabled>Select experience level</option>
                                                <option value="New / Less than 1 year">New / Less than 1 year</option>
                                                <option value="1 - 3 Years">1 - 3 Years</option>
                                                <option value="3 - 5 Years">3 - 5 Years</option>
                                                <option value="5 - 10 Years">5 - 10 Years</option>
                                                <option value="10+ Years">10+ Years</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="mb-4">
                                             <label class="form-label-custom">Upload Guide License / Badge <span
                                                   class="text-muted fw-normal">(Image/PDF)</span></label>
                                             <div class="custom-file-dropzone" id="guideDropzone"
                                                onclick="document.getElementById('guideLicenseInput').click();">
                                                <input type="file" name="license" id="guideLicenseInput"
                                                   accept="image/*,.pdf" style="display: none;"
                                                   onchange="handleFileSelected(this, 'guideDropzone', 'guideFileSubtitle')">
                                                <div class="upload-icon-circle">
                                                   <i class="ri-upload-cloud-2-line"></i>
                                                </div>
                                                <div class="dropzone-title">Click to upload document</div>
                                                <div class="dropzone-subtitle" id="guideFileSubtitle">PNG, JPG or PDF
                                                   (max. 10MB)</div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- Tour Specializations & Skills -->
                                    <div class="mb-4">
                                       <label class="form-label-custom">Tour Specializations & Skills</label>
                                       <div class="row g-2 pt-1">
                                          <div class="col-6 col-sm-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="skills[]" value="Historical & Heritage"
                                                   checked>
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Historical & Heritage</span>
                                                </div>
                                             </label>
                                          </div>
                                          <div class="col-6 col-sm-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="skills[]" value="Food & Culinary">
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Food & Culinary</span>
                                                </div>
                                             </label>
                                          </div>
                                          <div class="col-6 col-sm-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="skills[]" value="Adventure & Hiking">
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Adventure & Hiking</span>
                                                </div>
                                             </label>
                                          </div>
                                          <div class="col-6 col-sm-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="skills[]" value="Nature & Wildlife">
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Nature & Wildlife</span>
                                                </div>
                                             </label>
                                          </div>
                                          <div class="col-6 col-sm-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="skills[]" value="Art & Culture">
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Art & Culture</span>
                                                </div>
                                             </label>
                                          </div>
                                          <div class="col-6 col-sm-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="skills[]" value="Photography">
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Photography</span>
                                                </div>
                                             </label>
                                          </div>
                                          <div class="col-6 col-sm-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="skills[]" value="Shopping & Local Markets">
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Shopping & Local Markets</span>
                                                </div>
                                             </label>
                                          </div>
                                          <div class="col-6 col-sm-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="skills[]" value="Nightlife & Walking">
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Nightlife & Walking</span>
                                                </div>
                                             </label>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- Service Capabilities -->
                                    <div class="mb-4 pt-3 border-top">
                                       <label class="form-label-custom mb-2">Service Capabilities</label>
                                       <p class="text-muted text-13 mb-3">These help TripInBlink match traveler requests
                                          to the right providers. You can register even if you do not offer transport or
                                          accommodation.</p>

                                       <!-- Transportation -->
                                       <div class="p-3 rounded-3 mb-3"
                                          style="background:#f8fafc; border:1px solid #e2e8f0;">
                                          <div class="form-check mb-2">
                                             <input class="form-check-input" type="checkbox"
                                                name="provides_transportation" value="1"
                                                id="guide_provides_transportation"
                                                onchange="document.getElementById('guide_transport_details').style.display = this.checked ? 'block' : 'none';">
                                             <label class="form-check-label fw-semibold"
                                                for="guide_provides_transportation" style="cursor: pointer;">
                                                Do you provide transportation as part of your services?
                                             </label>
                                          </div>
                                          <div id="guide_transport_details" style="display:none;">
                                             <div class="row g-2 mt-2">
                                                <div class="col-md-6">
                                                   <label class="form-label-custom text-13">Vehicle / transport
                                                      type</label>
                                                   <input type="text" name="vehicle_type"
                                                      class="form-control form-control-custom"
                                                      placeholder="e.g. Sedan, SUV, Mini bus">
                                                </div>
                                                <div class="col-md-6">
                                                   <label class="form-label-custom text-13">Maximum passenger
                                                      capacity</label>
                                                   <input type="number" min="1" max="100" name="max_passengers"
                                                      class="form-control form-control-custom" placeholder="e.g. 4">
                                                </div>
                                                <div class="col-6 col-md-3">
                                                   <label class="skill-card-checkbox">
                                                      <input type="checkbox" name="airport_transfers" value="1">
                                                      <div class="skill-card-content">
                                                         <div class="skill-check-icon"><i class="ri-check-line"></i>
                                                         </div><span>Airport transfers</span>
                                                      </div>
                                                   </label>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                   <label class="skill-card-checkbox">
                                                      <input type="checkbox" name="city_to_city" value="1">
                                                      <div class="skill-card-content">
                                                         <div class="skill-check-icon"><i class="ri-check-line"></i>
                                                         </div><span>City-to-city</span>
                                                      </div>
                                                   </label>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                   <label class="skill-card-checkbox">
                                                      <input type="checkbox" name="full_day_with_driver" value="1">
                                                      <div class="skill-card-content">
                                                         <div class="skill-check-icon"><i class="ri-check-line"></i>
                                                         </div><span>Full-day + driver</span>
                                                      </div>
                                                   </label>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                   <label class="skill-card-checkbox">
                                                      <input type="checkbox" name="transport_on_request" value="1">
                                                      <div class="skill-card-content">
                                                         <div class="skill-check-icon"><i class="ri-check-line"></i>
                                                         </div><span>On request</span>
                                                      </div>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <!-- Accommodation -->
                                       <div class="p-3 rounded-3 mb-3"
                                          style="background:#f8fafc; border:1px solid #e2e8f0;">
                                          <div class="form-check mb-2">
                                             <input class="form-check-input" type="checkbox"
                                                name="provides_accommodation" value="1"
                                                id="guide_provides_accommodation"
                                                onchange="document.getElementById('guide_accommodation_details').style.display = this.checked ? 'block' : 'none';">
                                             <label class="form-check-label fw-semibold"
                                                for="guide_provides_accommodation" style="cursor: pointer;">
                                                Can you arrange accommodation for travelers?
                                             </label>
                                          </div>
                                          <div id="guide_accommodation_details" style="display:none;">
                                             <div class="row g-2 mt-2">
                                                <div class="col-12">
                                                   <label class="skill-card-checkbox">
                                                      <input type="checkbox" name="hotel_booking_assistance" value="1">
                                                      <div class="skill-card-content">
                                                         <div class="skill-check-icon"><i class="ri-check-line"></i>
                                                         </div><span>Hotel booking assistance</span>
                                                      </div>
                                                   </label>
                                                </div>
                                                <div class="col-12 mt-2">
                                                   <label class="form-label-custom text-13 mb-1">Accommodation levels
                                                      you can arrange</label>
                                                   <div class="row g-2">
                                                      <div class="col-4">
                                                         <label class="skill-card-checkbox">
                                                            <input type="checkbox" name="accommodation_categories[]"
                                                               value="budget">
                                                            <div class="skill-card-content">
                                                               <div class="skill-check-icon"><i
                                                                     class="ri-check-line"></i></div><span>Budget</span>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div class="col-4">
                                                         <label class="skill-card-checkbox">
                                                            <input type="checkbox" name="accommodation_categories[]"
                                                               value="standard">
                                                            <div class="skill-card-content">
                                                               <div class="skill-check-icon"><i
                                                                     class="ri-check-line"></i></div>
                                                               <span>Standard</span>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div class="col-4">
                                                         <label class="skill-card-checkbox">
                                                            <input type="checkbox" name="accommodation_categories[]"
                                                               value="premium">
                                                            <div class="skill-card-content">
                                                               <div class="skill-check-icon"><i
                                                                     class="ri-check-line"></i></div>
                                                               <span>Premium</span>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                   <label class="form-label-custom text-13">Max rooms / group
                                                      size</label>
                                                   <input type="number" min="1" max="100" name="max_rooms"
                                                      class="form-control form-control-custom" placeholder="e.g. 5">
                                                </div>
                                                <div class="col-md-6 d-flex align-items-end mt-2">
                                                   <label class="skill-card-checkbox w-100">
                                                      <input type="checkbox" name="accommodation_on_request" value="1">
                                                      <div class="skill-card-content">
                                                         <div class="skill-check-icon"><i class="ri-check-line"></i>
                                                         </div><span>Include when requested</span>
                                                      </div>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row g-2">
                                          <div class="col-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="group_tours" value="1" checked>
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Group tours</span>
                                                </div>
                                             </label>
                                          </div>
                                          <div class="col-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="private_custom_tours" value="1" checked>
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Private / custom tours</span>
                                                </div>
                                             </label>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- Short Bio -->
                                    <div class="mb-0">
                                       <label class="form-label-custom">Short Bio / Introduction</label>
                                       <textarea class="form-control form-control-custom" name="about" rows="3"
                                          placeholder="Tell travelers about your guiding style, passions, and what makes your tours special..."></textarea>
                                    </div>
                                 </div>
                                 <div class="modal-footer d-flex justify-content-between">
                                    <button type="button" class="btn-modal-back" data-bs-dismiss="modal">
                                       <i class="ri-edit-line me-1"></i> Back to Edit
                                    </button>
                                    <button type="submit" class="btn-modal-submit" id="btnSubmitFinalGuide">
                                       <span>Complete & Submit Application</span>
                                       <i class="ri-check-line ms-1"></i>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>

                     <div class="mt-4 pt-3 border-top text-center">
                        <p class="mb-2 text-muted">Already registered? <a href="login.php" class="fw-bold"
                              style="color: var(--tp-theme-1); text-decoration: none;">Login here</a></p>
                        <p class="mb-0 text-muted">Not a Guide? <a href="register.php" class="fw-bold"
                              style="color: var(--tp-theme-1); text-decoration: none;">Sign up as a Tour Operator /
                              Traveler</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- 7. Frequently Asked Questions Section -->
      <section class="reg-faqs">
         <div class="container">
            <div class="section-title text-center mb-50">
               <span class="reg-section-subtitle">FAQs</span>
               <h2 class="reg-section-title">Frequently Asked Questions</h2>
            </div>
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="faq-accordion">
                     <div class="faq-item">
                        <button class="faq-trigger d-flex justify-content-between align-items-center w-100"
                           type="button">
                           <span class="faq-question">What are the requirements to become a guide?</span>
                           <i class="ri-add-line faq-icon"></i>
                        </button>
                        <div class="faq-content"
                           style="max-height: 0; overflow: hidden; transition: max-height 0.35s ease;">
                           <p class="pt-3">You need to have deep local knowledge, be passionate about hosting, and
                              possess necessary local guiding licenses or registrations required by your city's local
                              tourism regulations.</p>
                        </div>
                     </div>
                     <div class="faq-item">
                        <button class="faq-trigger d-flex justify-content-between align-items-center w-100"
                           type="button">
                           <span class="faq-question">How much does it cost to list tours?</span>
                           <i class="ri-add-line faq-icon"></i>
                        </button>
                        <div class="faq-content"
                           style="max-height: 0; overflow: hidden; transition: max-height 0.35s ease;">
                           <p class="pt-3">Listing your tours and profile on TripInBlink is 100% free. We only charge a
                              small booking commission when we bring you a successful customer booking.</p>
                        </div>
                     </div>
                     <div class="faq-item">
                        <button class="faq-trigger d-flex justify-content-between align-items-center w-100"
                           type="button">
                           <span class="faq-question">How do payouts work?</span>
                           <i class="ri-add-line faq-icon"></i>
                        </button>
                        <div class="faq-content"
                           style="max-height: 0; overflow: hidden; transition: max-height 0.35s ease;">
                           <p class="pt-3">All customer payments are collected securely on our platform. Your guide
                              earnings are calculated and deposited directly to your bank account weekly every Friday.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>

<?php
include 'include/footer.php';
?>
