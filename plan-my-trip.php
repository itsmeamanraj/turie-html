<?php
$page_title = "Plan My Custom Trip – TripInBlink";
$current_page = "plan-my-trip";
$extra_css = <<<'EOCSS'
<link rel="stylesheet" href="assets/css/plan-my-trip.css">
EOCSS;
$extra_js = <<<'EOJS'
<script src="assets/js/plan-my-trip.js"></script>
EOJS;

include 'include/header.php';
?>

<main>
      <!-- ================= Hero Area ================= -->
      <section class="pmt-hero-area text-center">
         <div class="pmt-hero-overlay"></div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-8 col-lg-10">
                  <span class="tp-section-5-subtitle fw-700 d-inline-block mb-10">Plan Your Journey</span>
                  <h1 class="pmt-hero-title">Plan My Trip</h1>
                  <p class="pmt-hero-subtitle">Connect with verified local experts to customize your private journey.
                     Fill out your details in 3 quick steps!</p>
               </div>
            </div>
         </div>
      </section>

      <!-- ================= Multi-Step Form Section ================= -->
      <section class="pmt-main-section">
         <div class="container">
            <div class="row">
               <!-- Left Column: Form Card -->
               <div class="col-lg-8">
                  <div class="pmt-card">
                     <!-- Stepper Header -->
                     <div class="pmt-stepper">
                        <div class="pmt-step-item active" id="stepIndicator1">
                           <span class="pmt-step-number">1</span>
                           <span class="pmt-step-label">1. Trip Details</span>
                        </div>
                        <div class="pmt-step-divider" id="divider1"></div>
                        <div class="pmt-step-item" id="stepIndicator2">
                           <span class="pmt-step-number">2</span>
                           <span class="pmt-step-label">2. Contact Info</span>
                        </div>
                        <div class="pmt-step-divider" id="divider2"></div>
                        <div class="pmt-step-item" id="stepIndicator3">
                           <span class="pmt-step-number">3</span>
                           <span class="pmt-step-label">3. Summary</span>
                        </div>
                     </div>

                     <!-- STEP 1: Trip Details -->
                     <div class="pmt-step-content active" id="pmtStep1">
                        <!-- Destination Field -->
                        <div class="pmt-form-group">
                           <label class="pmt-label" for="pmtCityInput">
                              I am travelling to <span class="pmt-required">*</span>
                              <span class="pmt-label-help">(Select one or multiple cities from the same country)</span>
                           </label>
                           <div class="pmt-city-wrapper">
                              <div class="pmt-selected-cities" id="pmtSelectedCities"></div>
                              <input type="text" id="pmtCityInput" class="pmt-input"
                                 placeholder="Type A City (E.G. Berlin, Mumbai, Paris)..." autocomplete="off">
                              <div class="pmt-dropdown-menu" id="pmtCityDropdown"></div>
                           </div>
                        </div>

                        <!-- Date Range & Arrival / Departure Times -->
                        <div class="row g-3 pmt-form-group">
                           <div class="col-md-4">
                              <label class="pmt-label" for="pmtDateRange">
                                 Select Date Range <span class="pmt-required">*</span>
                              </label>
                              <div class="position-relative">
                                 <input type="text" id="pmtDateRange" class="pmt-input pe-5"
                                    placeholder="DD/MM/YYYY to DD/MM/YYYY" readonly>
                                 <i
                                    class="fa-regular fa-calendar-days position-absolute top-50 end-0 translate-middle-y me-3 text-muted"></i>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <label class="pmt-label">Arrival Time</label>
                              <div class="pmt-time-box">
                                 <select class="pmt-time-select" id="pmtArrivalHour" aria-label="Arrival Hour">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10" selected>10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                 </select>
                                 <span class="pmt-time-colon">:</span>
                                 <select class="pmt-time-select" id="pmtArrivalMin" aria-label="Arrival Minute">
                                    <option value="00" selected>00</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                 </select>
                                 <div class="pmt-ampm-toggle">
                                    <button type="button" class="pmt-ampm-btn active" data-period="AM">AM</button>
                                    <button type="button" class="pmt-ampm-btn" data-period="PM">PM</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <label class="pmt-label">Departure Time</label>
                              <div class="pmt-time-box">
                                 <select class="pmt-time-select" id="pmtDeptHour" aria-label="Departure Hour">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06" selected>06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                 </select>
                                 <span class="pmt-time-colon">:</span>
                                 <select class="pmt-time-select" id="pmtDeptMin" aria-label="Departure Minute">
                                    <option value="00" selected>00</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                 </select>
                                 <div class="pmt-ampm-toggle">
                                    <button type="button" class="pmt-ampm-btn" data-period="AM">AM</button>
                                    <button type="button" class="pmt-ampm-btn active" data-period="PM">PM</button>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- Not yet sure about my timings Checkbox -->
                        <div class="form-check mb-4">
                           <input class="form-check-input" type="checkbox" id="pmtNotSureTimings">
                           <label class="form-check-label fs-14 fw-500 text-muted ms-1" for="pmtNotSureTimings">
                              Not yet sure about my timings
                           </label>
                        </div>

                        <!-- Traveler Counters -->
                        <div class="row g-3 pmt-form-group">
                           <div class="col-sm-6">
                              <div class="pmt-counter-card">
                                 <span class="pmt-counter-title">Adults</span>
                                 <div class="pmt-counter-actions">
                                    <button type="button" class="pmt-counter-btn" data-type="Adults" data-action="minus"
                                       aria-label="Decrease Adults">&minus;</button>
                                    <span class="pmt-counter-val" id="pmtAdultsVal">1</span>
                                    <button type="button" class="pmt-counter-btn" data-type="Adults" data-action="plus"
                                       aria-label="Increase Adults">&plus;</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="pmt-counter-card">
                                 <span class="pmt-counter-title">Child (0–12y)</span>
                                 <div class="pmt-counter-actions">
                                    <button type="button" class="pmt-counter-btn" data-type="Child" data-action="minus"
                                       aria-label="Decrease Children">&minus;</button>
                                    <span class="pmt-counter-val" id="pmtChildVal">0</span>
                                    <button type="button" class="pmt-counter-btn" data-type="Child" data-action="plus"
                                       aria-label="Increase Children">&plus;</button>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- Languages -->
                        <div class="pmt-form-group">
                           <label class="pmt-label">I need a guide who speaks</label>
                           <div class="pmt-lang-chips">
                              <span class="pmt-lang-pill active">English</span>
                              <span class="pmt-lang-pill">French</span>
                              <span class="pmt-lang-pill">Spanish</span>
                              <span class="pmt-lang-pill">German</span>
                              <span class="pmt-lang-pill">Italian</span>
                              <span class="pmt-lang-pill">Hindi</span>
                              <span class="pmt-lang-pill">Japanese</span>
                              <span class="pmt-lang-pill">Arabic</span>
                              <span class="pmt-lang-pill">Mandarin</span>
                           </div>
                        </div>

                        <!-- Assistance Options -->
                        <div class="pmt-form-group">
                           <label class="pmt-label">I need assistance with</label>
                           <div class="pmt-assistance-grid">
                              <div class="pmt-assistance-card active">
                                 <span class="pmt-assistance-icon">
                                    <i class="fa-solid fa-car-side"></i>
                                 </span>
                                 <span class="pmt-assistance-text">Transportation</span>
                              </div>
                              <div class="pmt-assistance-card">
                                 <span class="pmt-assistance-icon">
                                    <i class="fa-solid fa-plane-departure"></i>
                                 </span>
                                 <span class="pmt-assistance-text">Airport transfer</span>
                              </div>
                              <div class="pmt-assistance-card">
                                 <span class="pmt-assistance-icon">
                                    <i class="fa-solid fa-hotel"></i>
                                 </span>
                                 <span class="pmt-assistance-text">Accommodation</span>
                              </div>
                              <div class="pmt-assistance-card active">
                                 <span class="pmt-assistance-icon">
                                    <i class="fa-solid fa-user-check"></i>
                                 </span>
                                 <span class="pmt-assistance-text">Local guide only</span>
                              </div>
                           </div>
                        </div>

                        <!-- Step 1 Footer -->
                        <div class="d-flex justify-content-end mt-4 pt-2">
                           <button type="button" class="pmt-btn-primary" id="pmtBtnToStep2">
                              Next <i class="fa-regular fa-arrow-right-long"></i>
                           </button>
                        </div>
                     </div>

                     <!-- STEP 2: Contact Info -->
                     <div class="pmt-step-content" id="pmtStep2">
                        <form id="pmtFormStep2">
                           <div class="pmt-step2-header">
                              <div class="pmt-step2-header-icon">
                                 <i class="fa-solid fa-user-pen"></i>
                              </div>
                              <div>
                                 <h2 class="pmt-step2-title">Contact &amp; Traveller Details</h2>
                                 <p class="pmt-step2-subtitle">Local guides will send custom proposals directly to your
                                    email or WhatsApp.</p>
                              </div>
                           </div>

                           <div class="row g-3 pmt-form-group">
                              <div class="col-md-6">
                                 <label class="pmt-label" for="pmtFirstName">
                                    First Name <span class="pmt-required">*</span>
                                 </label>
                                 <input type="text" id="pmtFirstName" class="pmt-input" placeholder="e.g. John"
                                    required>
                              </div>
                              <div class="col-md-6">
                                 <label class="pmt-label" for="pmtLastName">Last Name</label>
                                 <input type="text" id="pmtLastName" class="pmt-input" placeholder="e.g. Doe">
                              </div>
                           </div>

                           <div class="row g-3 pmt-form-group">
                              <div class="col-md-6">
                                 <label class="pmt-label" for="pmtEmail">
                                    Email Address <span class="pmt-required">*</span>
                                 </label>
                                 <input type="email" id="pmtEmail" class="pmt-input" placeholder="john.doe@example.com"
                                    required>
                              </div>
                              <div class="col-md-6">
                                 <label class="pmt-label" for="pmtPhone">Phone / WhatsApp Number</label>
                                 <div class="pmt-phone-group">
                                    <select class="pmt-select pmt-country-select" id="pmtCountryCode"
                                       aria-label="Country Code">
                                       <option value="+91 (IN)" selected>+91 (IN)</option>
                                       <option value="+1 (US)">+1 (US)</option>
                                       <option value="+44 (UK)">+44 (UK)</option>
                                       <option value="+33 (FR)">+33 (FR)</option>
                                       <option value="+49 (DE)">+49 (DE)</option>
                                       <option value="+81 (JP)">+81 (JP)</option>
                                       <option value="+971 (AE)">+971 (AE)</option>
                                       <option value="+61 (AU)">+61 (AU)</option>
                                    </select>
                                    <input type="tel" id="pmtPhone" class="pmt-input" placeholder="9876543210"
                                       pattern="[0-9]{10}">
                                 </div>
                                 <span class="d-block text-muted fs-12 mt-1">Optional. Exactly 10 digits if
                                    provided.</span>
                              </div>
                           </div>

                           <div class="pmt-form-group">
                              <label class="pmt-label" for="pmtNotes">Special Requirements / Notes (Optional)</label>
                              <textarea id="pmtNotes" class="pmt-textarea" rows="4"
                                 placeholder="Looking forward to exploring with a local guide, preferred attractions, dietary preferences..."></textarea>
                           </div>

                           <div class="d-flex justify-content-between align-items-center mt-4 pt-2">
                              <button type="button" class="pmt-btn-outline" id="pmtBtnBackToStep1">
                                 <i class="fa-regular fa-arrow-left-long"></i> Back
                              </button>
                              <button type="submit" class="pmt-btn-primary" id="pmtBtnSubmit">
                                 <i class="fa-solid fa-check-double"></i> Submit Request
                              </button>
                           </div>
                        </form>
                     </div>

                     <!-- STEP 3: Summary & Success -->
                     <div class="pmt-step-content" id="pmtStep3">
                        <div class="pmt-success-box">
                           <div class="pmt-success-badge">
                              <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                 <polyline points="20 6 9 17 4 12"></polyline>
                              </svg>
                           </div>
                           <h2 class="pmt-success-title">Trip Request Submitted!</h2>
                           <p class="pmt-success-desc">Thank you! We have received your travel request. Verified local
                              expert guides will craft custom proposals for you shortly.</p>

                           <!-- Summary Card -->
                           <div class="pmt-summary-card">
                              <div class="pmt-summary-header">
                                 <i class="fa-solid fa-clipboard-list text-primary"></i>
                                 <span>Request Summary</span>
                              </div>
                              <div class="pmt-summary-row">
                                 <span class="pmt-summary-label">Destination:</span>
                                 <span class="pmt-summary-value" id="pmtSumDestination">Paris, France</span>
                              </div>
                              <div class="pmt-summary-row">
                                 <span class="pmt-summary-label">Travel Dates:</span>
                                 <span class="pmt-summary-value" id="pmtSumDates">--</span>
                              </div>
                              <div class="pmt-summary-row">
                                 <span class="pmt-summary-label">Travelers:</span>
                                 <span class="pmt-summary-value" id="pmtSumTravelers">1 Adult(s)</span>
                              </div>
                              <div class="pmt-summary-row">
                                 <span class="pmt-summary-label">Contact Name:</span>
                                 <span class="pmt-summary-value" id="pmtSumName">--</span>
                              </div>
                              <div class="pmt-summary-row">
                                 <span class="pmt-summary-label">Email:</span>
                                 <span class="pmt-summary-value" id="pmtSumEmail">--</span>
                              </div>
                              <div class="pmt-summary-row">
                                 <span class="pmt-summary-label">Phone:</span>
                                 <span class="pmt-summary-value" id="pmtSumPhone">--</span>
                              </div>
                              <div class="pmt-summary-row">
                                 <span class="pmt-summary-label">Assistance:</span>
                                 <span class="pmt-summary-value" id="pmtSumAssistance">Transportation, Local guide
                                    only</span>
                              </div>
                           </div>

                           <div class="pmt-success-actions">
                              <button type="button" class="pmt-btn-outline" id="pmtBtnReset">
                                 <i class="fa-solid fa-arrows-rotate"></i> Plan Another Trip
                              </button>
                              <a href="index.php" class="pmt-btn-primary">
                                 <i class="fa-solid fa-house"></i> Back to Home
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Right Column: How Plan My Trip Works Sidebar -->
               <div class="col-lg-4 mt-4 mt-lg-0">
                  <div class="pmt-sidebar-card">
                     <!-- Default Sidebar (Steps 1 & 3) -->
                     <div id="pmtSidebarDefault">
                        <h3 class="pmt-sidebar-title">How Plan My Trip Works</h3>
                        <p class="pmt-sidebar-subtitle">3 simple steps to your dream private tour.</p>

                        <div class="pmt-timeline">
                           <div class="pmt-timeline-item">
                              <span class="pmt-timeline-num">1</span>
                              <div class="pmt-timeline-content">
                                 <h5>Submit Your Request</h5>
                                 <p>Share your destination, dates, arrival/departure timings, and traveler count.</p>
                              </div>
                           </div>
                           <div class="pmt-timeline-item">
                              <span class="pmt-timeline-num">2</span>
                              <div class="pmt-timeline-content">
                                 <h5>Get Custom Proposals</h5>
                                 <p>Verified local guides create custom itineraries tailored specifically for you.</p>
                              </div>
                           </div>
                           <div class="pmt-timeline-item">
                              <span class="pmt-timeline-num">3</span>
                              <div class="pmt-timeline-content">
                                 <h5>Customize &amp; Book Safely</h5>
                                 <p>Chat directly with your guide, fine-tune the details, and confirm when ready.</p>
                              </div>
                           </div>
                        </div>

                        <div class="pmt-features-list">
                           <div class="pmt-feature-item">
                              <i class="fa-solid fa-circle-check pmt-feature-icon"></i>
                              <span>100% Free &amp; Zero Obligation</span>
                           </div>
                           <div class="pmt-feature-item">
                              <i class="fa-solid fa-user-shield pmt-feature-icon"></i>
                              <span>Verified Local Expert Guides</span>
                           </div>
                           <div class="pmt-feature-item">
                              <i class="fa-solid fa-comments pmt-feature-icon"></i>
                              <span>Direct Chat &amp; Custom Itineraries</span>
                           </div>
                           <div class="pmt-feature-item">
                              <i class="fa-solid fa-lock pmt-feature-icon"></i>
                              <span>Secure Booking &amp; Fair Prices</span>
                           </div>
                        </div>
                     </div>

                     <!-- Step 2 Sidebar View: Top Recommended Guides Preview -->
                     <div id="pmtSidebarStep2" style="display: none;">
                        <div class="pmt-guides-preview-box">
                           <h5>Top Recommended Guides</h5>
                           <p>Our top certified guides in <strong id="pmtSidebarCityName">your destination</strong> are
                              ready to craft your private itinerary once you submit!</p>
                        </div>
                        <div class="pmt-features-list">
                           <div class="pmt-feature-item">
                              <i class="fa-solid fa-circle-check pmt-feature-icon"></i>
                              <span>100% Free &amp; Zero Obligation</span>
                           </div>
                           <div class="pmt-feature-item">
                              <i class="fa-solid fa-user-shield pmt-feature-icon"></i>
                              <span>Verified Local Expert Guides</span>
                           </div>
                           <div class="pmt-feature-item">
                              <i class="fa-solid fa-comments pmt-feature-icon"></i>
                              <span>Direct WhatsApp / Email Chat</span>
                           </div>
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
