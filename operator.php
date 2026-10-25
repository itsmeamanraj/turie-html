<?php
$page_title = "Join as a Tour Operator – TripInBlink";
$current_page = "operator";
$extra_css = <<<'EOCSS'
<link rel="stylesheet" href="assets/css/register-operator.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
EOCSS;
$extra_js = <<<'EOJS'
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="assets/js/register-operator.js"></script>
EOJS;

include 'include/header.php';
?>

<main class="registration-landing">
      <!-- 1. Hero Section -->
      <section class="reg-hero operator-hero text-white">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-7 mb-5 mb-lg-0 pr-lg-5">
                  <span class="reg-section-subtitle">Become a Partner Operator</span>
                  <h1 class="reg-hero-title mb-3">Grow Your Tour Business.<br>Sell on TripInBlink.</h1>
                  <p class="reg-hero-sub mb-4">Reach millions of global travelers, automate your booking operations, and list your tours on the web's most partner-friendly travel marketplace.</p>
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
                     <img src="assets/img/hero/operator_hero_graphics.png" alt="Tour Agency Group" class="img-fluid rounded-4 shadow-lg">
                     <div class="floating-badge bg-white shadow p-3 d-flex align-items-center gap-3">
                        <div class="badge-icon-bg bg-success-soft">
                           <i class="ri-line-chart-line"></i>
                        </div>
                        <div>
                           <span class="badge-sub text-muted">Average Growth</span>
                           <h6 class="badge-main text-dark mb-0">+40% Bookings</h6>
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
                     <div class="stat-icon-box text-success">
                        <i class="ri-briefcase-line"></i>
                     </div>
                     <div>
                        <h3 class="stat-number">500+</h3>
                        <p class="stat-desc">Partner Agencies</p>
                     </div>
                  </div>
                  <div class="col-6 col-md-3 stat-item">
                     <div class="stat-icon-box text-warning">
                        <i class="ri-star-fill"></i>
                     </div>
                     <div>
                        <h3 class="stat-number">4.8/5</h3>
                        <p class="stat-desc">Operator Rating</p>
                     </div>
                  </div>
                  <div class="col-6 col-md-3 stat-item">
                     <div class="stat-icon-box text-info">
                        <i class="ri-map-pin-2-line"></i>
                     </div>
                     <div>
                        <h3 class="stat-number">150+</h3>
                        <p class="stat-desc">Destinations</p>
                     </div>
                  </div>
                  <div class="col-6 col-md-3 stat-item">
                     <div class="stat-icon-box text-danger">
                        <i class="ri-percent-line"></i>
                     </div>
                     <div>
                        <h3 class="stat-number">0%</h3>
                        <p class="stat-desc">Listing Fees</p>
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
               <h2 class="reg-section-title">Why Operators Choose TripInBlink</h2>
            </div>
            <div class="row g-4">
               <div class="col-md-6 col-lg-3">
                  <div class="benefit-card h-100">
                     <div class="benefit-icon-box green mb-4">
                        <i class="ri-global-line"></i>
                     </div>
                     <h4 class="card-title">Global Distribution</h4>
                     <p class="card-text">Instantly list and market your tours to millions of active international travelers searching for local experiences.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="benefit-card h-100">
                     <div class="benefit-icon-box cyan mb-4">
                        <i class="ri-dashboard-3-line"></i>
                     </div>
                     <h4 class="card-title">Powerful Dashboard</h4>
                     <p class="card-text">Easy upload interface for tours, calendar slot management, pricing controls, and real-time sales reporting tools.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="benefit-card h-100">
                     <div class="benefit-icon-box amber mb-4">
                        <i class="ri-customer-service-2-line"></i>
                     </div>
                     <h4 class="card-title">24/7 Partner Support</h4>
                     <p class="card-text">Receive dedicated operations support from our specialist team to optimize listings and resolve issues immediately.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="benefit-card h-100">
                     <div class="benefit-icon-box coral mb-4">
                        <i class="ri-percent-line"></i>
                     </div>
                     <h4 class="card-title">Risk-Free Pricing</h4>
                     <p class="card-text">No listing or setup fees. No monthly subscriptions. We only collect a small success fee on completed, successful bookings.</p>
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
               <h2 class="reg-section-title">How to Start Selling Your Tours</h2>
            </div>
            <div class="row g-4 position-relative timeline-container">
               <div class="col-md-3 text-center timeline-item">
                  <div class="step-number mb-3">1</div>
                  <h4 class="step-title">Register Agency</h4>
                  <p class="step-text">Fill in your agency details, license information, and submit your registration application form.</p>
               </div>
               <div class="col-md-3 text-center timeline-item">
                  <div class="step-number mb-3">2</div>
                  <h4 class="step-title">Upload Listings</h4>
                  <p class="step-text">Add your itineraries, custom slots, photos, and dynamic pricing onto the Operator portal.</p>
               </div>
               <div class="col-md-3 text-center timeline-item">
                  <div class="step-number mb-3">3</div>
                  <h4 class="step-title">Receive Bookings</h4>
                  <p class="step-text">We market your products worldwide. Bookings sync automatically with your availability calendar.</p>
               </div>
               <div class="col-md-3 text-center timeline-item">
                  <div class="step-number mb-3">4</div>
                  <h4 class="step-title">Get Paid Weekly</h4>
                  <p class="step-text">Host travelers, deliver exceptional tour experiences, and receive secure bank payouts every week.</p>
               </div>
            </div>
         </div>
      </section>

      <!-- 5. Ratings & Reviews Section -->
      <section class="reg-ratings-section">
         <div class="container">
            <div class="section-title text-center mb-50">
               <span class="reg-section-subtitle">Ratings & Reviews</span>
               <h2 class="reg-section-title">Trusted by Thousands of Travelers & Operators</h2>
            </div>
            
            <div class="row g-4 align-items-stretch mb-5">
               <!-- Summary Card -->
               <div class="col-lg-4">
                  <div class="rating-summary-card text-center d-flex flex-column justify-content-center h-100">
                     <h3 class="display-score mb-2">4.8</h3>
                     <div class="ratings stars-gold mb-2">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                     </div>
                     <p class="text-dark fw-bold mb-2">Excellent Trust Score</p>
                     <p class="text-14 text-muted mb-4">Based on over <strong>8,950+</strong> verified tour operator reviews worldwide.</p>
                     <div class="d-flex justify-content-center">
                        <span class="verified-badge"><i class="ri-shield-check-line"></i> 100% Verified Reviews</span>
                     </div>
                  </div>
               </div>
               
               <!-- Reviews Grid -->
               <div class="col-lg-8">
                  <div class="row g-4">
                     <!-- Review 1 -->
                     <div class="col-md-6">
                        <div class="review-item-card h-100 d-flex flex-column justify-content-between">
                           <div>
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                 <div class="ratings stars-gold">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                 </div>
                                 <span class="text-muted text-12">2 days ago</span>
                              </div>
                              <h5 class="review-title mb-2">"Best platform for local businesses"</h5>
                              <p class="review-comment mb-3">Hosting tours here has doubled my income. Payouts are weekly and the platform handles all transaction support automatically.</p>
                           </div>
                           <div class="review-author d-flex align-items-center mt-3">
                              <img src="assets/img/testimonial/user-1.jpeg" alt="Reviewer" class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover; margin-right: 12px;">
                              <div class="author-info">
                                 <span class="author-name fw-bold text-dark text-13 d-block">Carlos M.</span>
                                 <span class="author-meta text-12 text-muted">Guide in Madrid</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Review 2 -->
                     <div class="col-md-6">
                        <div class="review-item-card h-100 d-flex flex-column justify-content-between">
                           <div>
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                 <div class="ratings stars-gold">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                 </div>
                                 <span class="text-muted text-12">1 week ago</span>
                              </div>
                              <h5 class="review-title mb-2">"Incredibly simple to list"</h5>
                              <p class="review-comment mb-3">Creating local excursions is highly intuitive. The portal setup took less than a day, and we've already received dozens of active bookings.</p>
                           </div>
                           <div class="review-author d-flex align-items-center mt-3">
                              <img src="assets/img/testimonial/user-3.png" alt="Reviewer" class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover; margin-right: 12px;">
                              <div class="author-info">
                                 <span class="author-name fw-bold text-dark text-13 d-block">Sarah J.</span>
                                 <span class="author-meta text-12 text-muted">Operator in London</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Review 3 -->
                     <div class="col-md-6">
                        <div class="review-item-card h-100 d-flex flex-column justify-content-between">
                           <div>
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                 <div class="ratings stars-gold">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                 </div>
                                 <span class="text-muted text-12">3 days ago</span>
                              </div>
                              <h5 class="review-title mb-2">"Seamless weekly deposits"</h5>
                              <p class="review-comment mb-3">I appreciate that there are no hidden subscription charges. They only charge when I sell. The earnings go straight into my bank account every Friday.</p>
                           </div>
                           <div class="review-author d-flex align-items-center mt-3">
                              <img src="assets/img/testimonial/user-2.png" alt="Reviewer" class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover; margin-right: 12px;">
                              <div class="author-info">
                                 <span class="author-name fw-bold text-dark text-13 d-block">Elena R.</span>
                                 <span class="author-meta text-12 text-muted">Guide in Rome</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Review 4 -->
                     <div class="col-md-6">
                        <div class="review-item-card h-100 d-flex flex-column justify-content-between">
                           <div>
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                 <div class="ratings stars-gold">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                 </div>
                                 <span class="text-muted text-12">2 weeks ago</span>
                              </div>
                              <h5 class="review-title mb-2">"Excellent partner support"</h5>
                              <p class="review-comment mb-3">Whenever we have technical issues or booking updates, the merchant support responds within minutes. Unbelievable response speed.</p>
                           </div>
                           <div class="review-author d-flex align-items-center mt-3">
                              <img src="assets/img/testimonial/user-4.jpeg" alt="Reviewer" class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover; margin-right: 12px;">
                              <div class="author-info">
                                 <span class="author-name fw-bold text-dark text-13 d-block">Marcus K.</span>
                                 <span class="author-meta text-12 text-muted">Operator in Berlin</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- 6. Operator Registration Form Section -->
      <section class="reg-form-section" id="registerFormSection">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="login-card">
                     <div class="form-header text-center mb-4">
                        <span class="reg-section-subtitle">Grow Your Business</span>
                        <h2 class="mb-2">Register Your Tour Agency</h2>
                        <p>Fill out the registration details below to join as a certified tour operator.</p>
                     </div>

                     <form action="#" method="POST" id="operatorRegisterForm" enctype="multipart/form-data">
                        <div class="contact-form mb-20">
                           <label class="contact-label">Company / Agency Name <span class="text-danger">*</span></label>
                           <input class="form-control contact-input" type="text" name="company_name" id="operatorCompanyName" placeholder="e.g. Royal Heritage Travels" required>
                        </div>

                        <div class="contact-form mb-20">
                           <label class="contact-label">Official Email Address <span class="text-danger">*</span></label>
                           <input class="form-control contact-input" type="email" name="email" id="operatorEmail" placeholder="info@agency.com" required>
                        </div>

                        <div class="row">
                           <div class="col-sm-6">
                              <div class="contact-form mb-20">
                                 <label class="contact-label">Password <span class="text-danger">*</span></label>
                                 <div class="position-relative">
                                    <input type="password" class="form-control contact-input password-input" name="password" id="txtPasswordOperator" placeholder="Create strong password" required>
                                    <i class="toggle-password ri-eye-line"></i>
                                 </div>

                                 <!-- Dynamic Strength Checklist -->
                                 <div class="password-strength-checker mt-2" id="strength-checker-operator" style="display: none;">
                                    <div class="strength-meter">
                                       <div class="strength-progress" id="strength-progress-operator"></div>
                                    </div>
                                    <p class="mb-1 text-muted fw-bold" style="font-size: 11px;">Password Requirements:</p>
                                    <ul class="list-unstyled mb-0 d-flex flex-column gap-1" style="padding-left: 0;">
                                       <li class="req-length text-muted" id="req-length-operator"><i class="ri-checkbox-blank-circle-line mr-1"></i> Min 8 characters</li>
                                       <li class="req-upper text-muted" id="req-upper-operator"><i class="ri-checkbox-blank-circle-line mr-1"></i> 1 uppercase letter (A-Z)</li>
                                       <li class="req-lower text-muted" id="req-lower-operator"><i class="ri-checkbox-blank-circle-line mr-1"></i> 1 lowercase letter (a-z)</li>
                                       <li class="req-number text-muted" id="req-number-operator"><i class="ri-checkbox-blank-circle-line mr-1"></i> 1 number (0-9)</li>
                                       <li class="req-special text-muted" id="req-special-operator"><i class="ri-checkbox-blank-circle-line mr-1"></i> 1 special char (@$!%*?&#)</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="contact-form mb-20">
                                 <label class="contact-label">Repeat Password <span class="text-danger">*</span></label>
                                 <div class="position-relative">
                                    <input type="password" class="form-control contact-input password-input" name="password_confirmation" id="txtConfirmPasswordOperator" placeholder="Repeat password" required>
                                    <i class="toggle-password ri-eye-line"></i>
                                 </div>
                                 <div id="password-match-msg-operator" class="mt-2 text-12 fw-bold" style="display: none;"></div>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-sm-6">
                              <div class="contact-form mb-20">
                                 <label class="contact-label">Country <span class="text-danger">*</span></label>
                                 <select class="form-select form-control contact-input" name="country" id="operatorCountry" required>
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
                                    <option value="BR">Brazil (+55)</option>
                                    <option value="MX">Mexico (+52)</option>
                                    <option value="PT">Portugal (+351)</option>
                                    <option value="AT">Austria (+43)</option>
                                    <option value="BE">Belgium (+32)</option>
                                    <option value="OTHER">Other Countries</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="contact-form mb-20">
                                 <label class="contact-label">Phone Number <span class="text-danger">*</span></label>
                                 <input class="form-control contact-input" type="tel" name="phone" id="operatorPhone" placeholder="1234567890" required>
                              </div>
                           </div>
                        </div>

                        <div class="form-check mb-3 d-flex align-items-start gap-2">
                           <input class="form-check-input flex-shrink-0" type="checkbox" id="termsCheck" required style="width: 18px; height: 18px; margin-top: 4px;">
                           <label class="form-check-label text-14" for="termsCheck" style="cursor: pointer; line-height: 1.4; color: var(--tp-grey-1);">
                              I have read and accept the <a href="#" class="text-primary fw-bold" style="color: var(--tp-theme-1) !important;">Terms and Conditions</a> & <a href="#" class="text-primary fw-bold" style="color: var(--tp-theme-1) !important;">Privacy Policy</a>
                           </label>
                        </div>

                        <div class="form-check mb-4 d-flex align-items-start gap-2">
                           <input class="form-check-input flex-shrink-0" type="checkbox" id="marketingCheck" style="width: 18px; height: 18px; margin-top: 4px;">
                           <label class="form-check-label text-14" for="marketingCheck" style="cursor: pointer; line-height: 1.4; color: var(--tp-grey-1);">
                              I agree to receive updates, news and special offers from TripInBlink.
                           </label>
                        </div>

                        <button type="button" class="btn-primary-fill w-100" id="btnOpenOperatorModal">
                           <span class="d-flex justify-content-center align-items-center gap-2">
                              <span>Continue to Agency Profile</span>
                              <i class="ri-arrow-right-line"></i>
                           </span>
                        </button>

                        <!-- Profile Building Modal Popup for Operator -->
                        <div class="modal fade profile-modal" id="operatorProfileModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
                           <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title">
                                       <i class="ri-building-line text-theme me-2"></i> Tour Agency Profile & Operations
                                    </h5>
                                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                                       <i class="ri-close-line"></i>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <div class="alert p-3 mb-4 rounded-3 d-flex align-items-center gap-3" style="background-color: #fff4f2; border: 1px solid #fed7d2; color: #b91c1c;">
                                       <i class="ri-information-line" style="font-size: 22px; color: var(--tp-theme-1);"></i>
                                       <span class="text-13 fw-semibold text-dark">Help admins and travelers understand your agency's scope, regions, and services.</span>
                                    </div>

                                    <div class="mb-20">
                                       <label class="form-label-custom">Primary Operating Regions & Destinations</label>
                                       <select class="form-select" name="operating_regions[]" id="operatorRegions" multiple="multiple" style="width: 100%;">
                                          <option value="Paris, France" selected>Paris, France</option>
                                          <option value="Rome, Italy" selected>Rome, Italy</option>
                                          <option value="London, United Kingdom">London, United Kingdom</option>
                                          <option value="Tokyo, Japan">Tokyo, Japan</option>
                                          <option value="New York, United States">New York, United States</option>
                                          <option value="Dubai, United Arab Emirates">Dubai, United Arab Emirates</option>
                                          <option value="Barcelona, Spain">Barcelona, Spain</option>
                                          <option value="Amsterdam, Netherlands">Amsterdam, Netherlands</option>
                                          <option value="Bali, Indonesia">Bali, Indonesia</option>
                                          <option value="Bangkok, Thailand">Bangkok, Thailand</option>
                                          <option value="Istanbul, Turkey">Istanbul, Turkey</option>
                                          <option value="Cairo, Egypt">Cairo, Egypt</option>
                                          <option value="Sydney, Australia">Sydney, Australia</option>
                                          <option value="Singapore, Singapore">Singapore, Singapore</option>
                                          <option value="New Delhi, India">New Delhi, India</option>
                                          <option value="Jaipur, India">Jaipur, India</option>
                                          <option value="Goa, India">Goa, India</option>
                                          <option value="Zurich, Switzerland">Zurich, Switzerland</option>
                                       </select>
                                    </div>

                                    <!-- License & Experience -->
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <div class="mb-20">
                                             <label class="form-label-custom">Upload Agency License / Registration <span class="text-muted fw-normal">(Image/PDF)</span></label>
                                             <div class="custom-file-dropzone" id="operatorDropzone" onclick="document.getElementById('operatorLicenseInput').click();">
                                                <input type="file" name="license_number" id="operatorLicenseInput" accept="image/*,.pdf" style="display: none;" onchange="handleFileSelected(this, 'operatorDropzone', 'operatorFileSubtitle')">
                                                <div class="upload-icon-circle">
                                                   <i class="ri-upload-cloud-2-line"></i>
                                                </div>
                                                <div class="dropzone-title">Click to upload document</div>
                                                <div class="dropzone-subtitle" id="operatorFileSubtitle">GST, Reg Certificate or License copy (max. 10MB)</div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="mb-20">
                                             <label class="form-label-custom">Years in Travel Business</label>
                                             <select class="form-select form-control-custom" name="experience_years">
                                                <option value="" selected>Select experience</option>
                                                <option value="New Startup (<1 Year)">New Startup (&lt;1 Year)</option>
                                                <option value="1 - 3 Years">1 - 3 Years</option>
                                                <option value="3 - 5 Years">3 - 5 Years</option>
                                                <option value="5 - 10 Years">5 - 10 Years</option>
                                                <option value="10+ Years Established">10+ Years Established</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- Languages Supported -->
                                    <div class="mb-20">
                                       <label class="form-label-custom">Supported Customer Languages</label>
                                       <select class="form-select select2-languages" name="languages[]" id="operatorLanguages" multiple="multiple" style="width: 100%;">
                                          <option value="English" selected>English</option>
                                          <option value="Hindi">Hindi</option>
                                          <option value="Spanish">Spanish</option>
                                          <option value="French">French</option>
                                          <option value="German">German</option>
                                          <option value="Italian">Italian</option>
                                          <option value="Japanese">Japanese</option>
                                          <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                          <option value="Arabic">Arabic</option>
                                          <option value="Russian">Russian</option>
                                          <option value="Portuguese">Portuguese</option>
                                          <option value="Bengali">Bengali</option>
                                          <option value="Punjabi">Punjabi</option>
                                          <option value="Gujarati">Gujarati</option>
                                          <option value="Marathi">Marathi</option>
                                          <option value="Tamil">Tamil</option>
                                          <option value="Telugu">Telugu</option>
                                          <option value="Malayalam">Malayalam</option>
                                          <option value="Turkish">Turkish</option>
                                          <option value="Dutch">Dutch</option>
                                          <option value="Korean">Korean</option>
                                          <option value="Thai">Thai</option>
                                          <option value="Indonesian">Indonesian</option>
                                       </select>
                                    </div>

                                    <!-- Tour Services Offered -->
                                    <div class="mb-20">
                                       <label class="form-label-custom">Services & Tour Types Offered</label>
                                       <div class="row g-2 pt-1">
                                          <div class="col-6 col-sm-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="services[]" value="Day Sightseeing Excursions" checked>
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Day Sightseeing Excursions</span>
                                                </div>
                                             </label>
                                          </div>
                                          <div class="col-6 col-sm-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="services[]" value="Multi-Day Tour Packages" checked>
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Multi-Day Tour Packages</span>
                                                </div>
                                             </label>
                                          </div>
                                          <div class="col-6 col-sm-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="services[]" value="Private Luxury Transfers">
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Private Luxury Transfers</span>
                                                </div>
                                             </label>
                                          </div>
                                          <div class="col-6 col-sm-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="services[]" value="Group & Custom Itineraries" checked>
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Group &amp; Custom Itineraries</span>
                                                </div>
                                             </label>
                                          </div>
                                          <div class="col-6 col-sm-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="services[]" value="Adventure & Trekking Safaris">
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Adventure &amp; Trekking Safaris</span>
                                                </div>
                                             </label>
                                          </div>
                                          <div class="col-6 col-sm-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="services[]" value="Cultural & Wildlife Experiences">
                                                <div class="skill-card-content">
                                                   <div class="skill-check-icon"><i class="ri-check-line"></i></div>
                                                   <span>Cultural &amp; Wildlife Experiences</span>
                                                </div>
                                             </label>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- Service Capabilities -->
                                    <div class="mb-20 pt-2 border-top">
                                       <label class="form-label-custom mb-1">Service Capabilities</label>
                                       <p class="text-muted text-13 mb-3">These help TripInBlink match traveler requests to the right providers. You can register even if you do not offer transport or accommodation.</p>

                                       <div class="form-check mb-3">
                                          <input class="form-check-input" type="checkbox" name="guiding_services" value="1" id="operator_guiding_services" checked>
                                          <label class="form-check-label fw-semibold text-dark" for="operator_guiding_services">We provide guiding services</label>
                                       </div>

                                       <div class="capability-card-wrapper mb-3">
                                          <div class="form-check mb-0">
                                             <input class="form-check-input" type="checkbox" name="provides_transportation" value="1" id="operator_provides_transportation">
                                             <label class="form-check-label" for="operator_provides_transportation">Do you provide transportation as part of your services?</label>
                                          </div>
                                          <div class="capability-details-box" id="operator_transport_details" style="display:none;">
                                             <div class="row g-2 mt-1">
                                                <div class="col-md-6">
                                                   <label class="form-label-custom text-13">Vehicle / transport type</label>
                                                   <input type="text" name="vehicle_type" class="form-control form-control-custom" placeholder="e.g. Sedan, SUV, Mini bus">
                                                </div>
                                                <div class="col-md-6">
                                                   <label class="form-label-custom text-13">Maximum passenger capacity</label>
                                                   <input type="number" min="1" max="100" name="max_passengers" class="form-control form-control-custom" placeholder="e.g. 8">
                                                </div>
                                                <div class="col-6 col-md-3">
                                                   <label class="skill-card-checkbox">
                                                      <input type="checkbox" name="airport_transfers" value="1">
                                                      <div class="skill-card-content"><div class="skill-check-icon"><i class="ri-check-line"></i></div><span>Airport transfers</span></div>
                                                   </label>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                   <label class="skill-card-checkbox">
                                                      <input type="checkbox" name="city_to_city" value="1">
                                                      <div class="skill-card-content"><div class="skill-check-icon"><i class="ri-check-line"></i></div><span>City-to-city</span></div>
                                                   </label>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                   <label class="skill-card-checkbox">
                                                      <input type="checkbox" name="full_day_with_driver" value="1">
                                                      <div class="skill-card-content"><div class="skill-check-icon"><i class="ri-check-line"></i></div><span>Full-day + driver</span></div>
                                                   </label>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                   <label class="skill-card-checkbox">
                                                      <input type="checkbox" name="transport_on_request" value="1">
                                                      <div class="skill-card-content"><div class="skill-check-icon"><i class="ri-check-line"></i></div><span>Add on request</span></div>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="capability-card-wrapper mb-3">
                                          <div class="form-check mb-0">
                                             <input class="form-check-input" type="checkbox" name="provides_accommodation" value="1" id="operator_provides_accommodation">
                                             <label class="form-check-label" for="operator_provides_accommodation">Can you arrange accommodation for travelers?</label>
                                          </div>
                                          <div class="capability-details-box" id="operator_accommodation_details" style="display:none;">
                                             <div class="row g-2 mt-1">
                                                <div class="col-12">
                                                   <label class="skill-card-checkbox">
                                                      <input type="checkbox" name="hotel_booking_assistance" value="1">
                                                      <div class="skill-card-content"><div class="skill-check-icon"><i class="ri-check-line"></i></div><span>Hotel booking assistance</span></div>
                                                   </label>
                                                </div>
                                                <div class="col-12 mt-2">
                                                   <label class="form-label-custom text-13 mb-1">Accommodation levels you can arrange</label>
                                                   <div class="row g-2">
                                                      <div class="col-4">
                                                         <label class="skill-card-checkbox">
                                                            <input type="checkbox" name="accommodation_categories[]" value="budget">
                                                            <div class="skill-card-content"><div class="skill-check-icon"><i class="ri-check-line"></i></div><span>Budget</span></div>
                                                         </label>
                                                      </div>
                                                      <div class="col-4">
                                                         <label class="skill-card-checkbox">
                                                            <input type="checkbox" name="accommodation_categories[]" value="standard">
                                                            <div class="skill-card-content"><div class="skill-check-icon"><i class="ri-check-line"></i></div><span>Standard</span></div>
                                                         </label>
                                                      </div>
                                                      <div class="col-4">
                                                         <label class="skill-card-checkbox">
                                                            <input type="checkbox" name="accommodation_categories[]" value="premium">
                                                            <div class="skill-card-content"><div class="skill-check-icon"><i class="ri-check-line"></i></div><span>Premium</span></div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                   <label class="form-label-custom text-13">Max rooms / group size you can arrange</label>
                                                   <input type="number" min="1" max="100" name="max_rooms" class="form-control form-control-custom" placeholder="e.g. 10">
                                                </div>
                                                <div class="col-md-6 mt-2 d-flex align-items-end">
                                                   <label class="skill-card-checkbox w-100">
                                                      <input type="checkbox" name="accommodation_on_request" value="1">
                                                      <div class="skill-card-content"><div class="skill-check-icon"><i class="ri-check-line"></i></div><span>Include when requested</span></div>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row g-2">
                                          <div class="col-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="group_tours" value="1" checked>
                                                <div class="skill-card-content"><div class="skill-check-icon"><i class="ri-check-line"></i></div><span>Group tours</span></div>
                                             </label>
                                          </div>
                                          <div class="col-6">
                                             <label class="skill-card-checkbox">
                                                <input type="checkbox" name="private_custom_tours" value="1" checked>
                                                <div class="skill-card-content"><div class="skill-check-icon"><i class="ri-check-line"></i></div><span>Private / custom tours</span></div>
                                             </label>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- Short Description -->
                                    <div class="mb-0">
                                       <label class="form-label-custom">Company Overview / Description</label>
                                       <textarea class="form-control form-control-custom" name="description" rows="3" placeholder="Briefly describe your agency, fleet size, specialties, and customer service commitments..."></textarea>
                                    </div>
                                 </div>
                                 <div class="modal-footer d-flex justify-content-between">
                                    <button type="button" class="btn-modal-back" data-bs-dismiss="modal">
                                       <i class="ri-edit-line me-1"></i> Back to Edit
                                    </button>
                                    <button type="submit" class="btn-modal-submit" id="btnSubmitFinalOperator">
                                       <span>Complete & Submit Application</span>
                                       <i class="ri-check-line ms-1"></i>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>

                     <div class="mt-4 pt-3 border-top text-center">
                        <p class="mb-2 text-muted">Already registered? <a href="login.php" class="text-primary fw-bold" style="color: var(--tp-theme-1) !important;">Login here</a></p>
                        <p class="mb-0 text-muted">Not an Operator? <a href="guide.php" class="text-primary fw-bold" style="color: var(--tp-theme-1) !important;">Sign up as a Tour Guide</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- 7. FAQ Section -->
      <section class="reg-faqs section-padding">
         <div class="container">
            <div class="section-title text-center mb-50">
               <span class="reg-section-subtitle">Got Questions?</span>
               <h2 class="reg-section-title">Frequently Asked Questions</h2>
            </div>
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="faq-accordion">
                     <div class="faq-item">
                        <button class="faq-trigger" type="button">
                           <span class="faq-question">How much does it cost to list my tours?</span>
                           <i class="ri-add-line faq-icon"></i>
                        </button>
                        <div class="faq-content">
                           <p>Listing is completely free. There are no monthly subscription fees or hidden costs. We only charge a small percentage-based booking commission on successful transactions.</p>
                        </div>
                     </div>
                     <div class="faq-item">
                        <button class="faq-trigger" type="button">
                           <span class="faq-question">How do I upload tours to the platform?</span>
                           <i class="ri-add-line faq-icon"></i>
                        </button>
                        <div class="faq-content">
                           <p>Once registered, you'll gain access to your Operator Dashboard. You can easily enter tour descriptions, upload photos, set custom pricing, and select available calendar slots.</p>
                        </div>
                     </div>
                     <div class="faq-item">
                        <button class="faq-trigger" type="button">
                           <span class="faq-question">What kind of support do you offer tour operators?</span>
                           <i class="ri-add-line faq-icon"></i>
                        </button>
                        <div class="faq-content">
                           <p>We offer round-the-clock email and phone support for booking revisions, customer queries, payment inquiries, and platform usage help.</p>
                        </div>
                     </div>
                     <div class="faq-item">
                        <button class="faq-trigger" type="button">
                           <span class="faq-question">How and when do I receive payouts for bookings?</span>
                           <i class="ri-add-line faq-icon"></i>
                        </button>
                        <div class="faq-content">
                           <p>Payouts are calculated automatically and transferred directly into your verified agency bank account every Friday for all completed tours during the week.</p>
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
