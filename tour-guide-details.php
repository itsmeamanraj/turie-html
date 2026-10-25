<?php
$guide_name = isset($_GET['name']) && !empty($_GET['name']) ? htmlspecialchars($_GET['name']) : "Ezeewear";
$page_title = "$guide_name – Verified Tour Operator & Guide Profile – TripInBlink";
$current_page = "tour-guide-details";
$extra_css = <<<'EOCSS'
<link rel="stylesheet" href="assets/css/tour-guide-details.css">
EOCSS;

include 'include/header.php';
?>

<main class="guide-profile-wrapper">
   <!-- Cover Banner -->
   <div class="guide-cover-banner" style="background-image: url('assets/img/hero/guide_hero_graphics.png');"></div>

   <div class="container">
      <!-- Hero Profile Header Card -->
      <div class="guide-hero-card">
         <div class="guide-hero-header-row">
            <div class="guide-hero-info-group">
               <div class="guide-avatar-box">
                  <img src="assets/img/testimonial/user-1.jpeg" alt="<?= $guide_name ?>" class="guide-avatar-img">
                  <div class="guide-verified-badge" title="Verified Tour Operator">
                     <i class="ri-check-line"></i>
                  </div>
               </div>

               <div class="guide-details-box">
                  <h1 class="guide-hero-name"><?= $guide_name ?></h1>
                  <p class="guide-hero-subtitle">
                     <i class="ri-shield-star-line"></i> Verified Tour Operator &amp; Local Guide
                  </p>

                  <div class="guide-meta-row">
                     <div class="guide-meta-item">
                        <i class="ri-map-pin-line"></i>
                        <span>Delhi, India</span>
                     </div>
                     <div class="guide-meta-item">
                        <i class="ri-translate-2"></i>
                        <span>Hindi, English, German, Tamil</span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="guide-hero-actions-group">
               <a href="plan-my-trip.php?host=<?= urlencode($guide_name) ?>" class="btn-plan-trip">
                  <i class="ri-calendar-check-line"></i> Plan Your Trip
               </a>
               <a href="#toursGrid" class="btn-ask-custom">
                  <i class="ri-compass-3-line"></i> View Private Tours
               </a>
            </div>
         </div>

         <!-- Stats Strip -->
         <div class="guide-stats-strip">
            <span class="stat-chip">
               <i class="ri-star-fill"></i> 4.9/5 (128 Reviews)
            </span>
            <span class="stat-chip">
               <i class="ri-flag-2-line text-coral"></i> 3 Itineraries Listed
            </span>
            <span class="stat-chip">
               <i class="ri-calendar-check-line text-teal"></i> Operator Since 2024
            </span>
            <span class="stat-chip">
               <i class="ri-user-star-line text-coral"></i> Top Rated Partner
            </span>
         </div>
      </div>

      <!-- Main Profile Body Layout -->
      <div class="row g-4">
         <!-- Left Column: Guide Details & Tours -->
         <div class="col-lg-8">
            <!-- 1. About Card -->
            <div class="profile-section-card">
               <h3 class="section-card-title">
                  <i class="ri-user-heart-line"></i> About <?= $guide_name ?>
               </h3>
               <p class="bio-paragraph mb-3">
                  Welcome to <strong><?= $guide_name ?></strong>! We are a government-registered tour agency and local guiding collective dedicated to bringing travelers authentic, safe, and deeply immersive journeys across Delhi, Agra, Jaipur, and beyond.
               </p>
               <p class="bio-paragraph">
                  With over 5 years of operating experience, our certified guides speak multiple international languages including English, German, and Hindi. Whether you want to explore hidden street food alleys in Old Delhi, witness the sunrise at the Taj Mahal, or organize custom multi-day excursions with luxury private chauffeur vehicles, our priority is always your safety, delight, and peace of mind.
               </p>
            </div>

            <!-- 2. Verified Credentials & Qualifications -->
            <div class="profile-section-card">
               <h3 class="section-card-title">
                  <i class="ri-shield-check-line"></i> Verified Credentials &amp; Qualifications
               </h3>
               <ul class="credentials-list">
                  <li>
                     <i class="ri-checkbox-circle-fill"></i>
                     <span>Verified Tour Operator &amp; Agency</span>
                  </li>
                  <li>
                     <i class="ri-checkbox-circle-fill"></i>
                     <span>Licensed Government Tourism Board Guide</span>
                  </li>
                  <li>
                     <i class="ri-checkbox-circle-fill"></i>
                     <span>1 - 3 Years Operating Experience</span>
                  </li>
                  <li>
                     <i class="ri-checkbox-circle-fill"></i>
                     <span>Insured Fleet with Background-Checked Drivers</span>
                  </li>
               </ul>
            </div>

            <!-- 3. Areas of Expertise & Specialties -->
            <div class="profile-section-card">
               <h3 class="section-card-title">
                  <i class="ri-sparkles-line"></i> Areas of Expertise &amp; Specialties
               </h3>
               <div>
                  <span class="specialty-tag"># Day Sightseeing Excursions</span>
                  <span class="specialty-tag"># Multi-Day Tour Packages</span>
                  <span class="specialty-tag"># Private Luxury Transfers</span>
                  <span class="specialty-tag"># Group &amp; Custom Itineraries</span>
                  <span class="specialty-tag"># Adventure &amp; Trekking Safaris</span>
                  <span class="specialty-tag"># Cultural &amp; Wildlife Experiences</span>
                  <span class="specialty-tag"># Delhi, India</span>
                  <span class="specialty-tag"># Golden Triangle Excursions</span>
                  <span class="specialty-tag"># Heritage Food Walks</span>
               </div>
            </div>

            <!-- 4. Private Tours Offered -->
            <div class="profile-section-card" id="toursGrid">
               <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                  <h3 class="section-card-title mb-0">
                     <i class="ri-map-2-line"></i> Private Tours Offered by <?= $guide_name ?>
                  </h3>
                  <a href="plan-my-trip.php?host=<?= urlencode($guide_name) ?>" class="text-coral fw-bold text-14" style="color: var(--tp-theme-1); text-decoration: none;">
                     Need Custom Plan? <i class="ri-arrow-right-line"></i>
                  </a>
               </div>

               <div class="row g-4 mt-1">
                  <!-- Tour Card 1 -->
                  <div class="col-md-6 col-sm-12">
                     <div class="guide-tour-card">
                        <div class="guide-tour-thumb">
                           <img src="assets/img/tour/01.jpg" alt="Old & New Delhi Heritage Tour">
                           <span class="guide-tour-badge"><i class="ri-time-line"></i> 6 Hours</span>
                        </div>
                        <div class="guide-tour-content">
                           <h4 class="guide-tour-title">
                              <a href="tour-details.php" style="color: inherit; text-decoration: none;">Old &amp; New Delhi Heritage Walk &amp; Street Food</a>
                           </h4>
                           <div class="guide-tour-meta">
                              <span><i class="ri-map-pin-line"></i> Delhi</span>
                              <span><i class="ri-star-fill text-warning"></i> 4.9 (48)</span>
                           </div>
                           <div class="guide-tour-footer">
                              <div class="guide-tour-price">$45 <small>/ person</small></div>
                              <a href="plan-my-trip.php?tour=Delhi+Heritage" class="btn btn-sm btn-outline-dark rounded-pill px-3 fw-bold">Book Tour</a>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Tour Card 2 -->
                  <div class="col-md-6 col-sm-12">
                     <div class="guide-tour-card">
                        <div class="guide-tour-thumb">
                           <img src="assets/img/tour/02.jpg" alt="Taj Mahal & Agra Day Trip">
                           <span class="guide-tour-badge"><i class="ri-time-line"></i> Full Day</span>
                        </div>
                        <div class="guide-tour-content">
                           <h4 class="guide-tour-title">
                              <a href="tour-details.php" style="color: inherit; text-decoration: none;">Private Day Excursion: Sunrise Taj Mahal &amp; Agra Fort</a>
                           </h4>
                           <div class="guide-tour-meta">
                              <span><i class="ri-map-pin-line"></i> Agra</span>
                              <span><i class="ri-star-fill text-warning"></i> 5.0 (62)</span>
                           </div>
                           <div class="guide-tour-footer">
                              <div class="guide-tour-price">$95 <small>/ person</small></div>
                              <a href="plan-my-trip.php?tour=Taj+Mahal+Agra" class="btn btn-sm btn-outline-dark rounded-pill px-3 fw-bold">Book Tour</a>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Tour Card 3 -->
                  <div class="col-md-6 col-sm-12">
                     <div class="guide-tour-card">
                        <div class="guide-tour-thumb">
                           <img src="assets/img/tour/03.jpg" alt="Golden Triangle 3-Day Journey">
                           <span class="guide-tour-badge"><i class="ri-calendar-line"></i> 4 Days</span>
                        </div>
                        <div class="guide-tour-content">
                           <h4 class="guide-tour-title">
                              <a href="tour-details.php" style="color: inherit; text-decoration: none;">Golden Triangle Odyssey: Delhi, Agra &amp; Pink City Jaipur</a>
                           </h4>
                           <div class="guide-tour-meta">
                              <span><i class="ri-map-pin-line"></i> Golden Triangle</span>
                              <span><i class="ri-star-fill text-warning"></i> 4.9 (35)</span>
                           </div>
                           <div class="guide-tour-footer">
                              <div class="guide-tour-price">$280 <small>/ package</small></div>
                              <a href="plan-my-trip.php?tour=Golden+Triangle" class="btn btn-sm btn-outline-dark rounded-pill px-3 fw-bold">Book Tour</a>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Tour Card 4: Custom Inquiry Card -->
                  <div class="col-md-6 col-sm-12">
                     <div class="guide-tour-card p-4 d-flex flex-column justify-content-center text-center" style="background: #fff8f7; border: 2px dashed rgba(253, 70, 33, 0.4);">
                        <i class="ri-compass-3-line text-coral mb-3" style="font-size: 42px; color: var(--tp-theme-1);"></i>
                        <h4 class="guide-tour-title mb-2">Want a Tailor-Made Private Tour?</h4>
                        <p class="text-muted text-14 mb-4">Tell <?= $guide_name ?> your dream destinations, dates, and group size. Get a completely bespoke itinerary within hours.</p>
                        <a href="plan-my-trip.php?host=<?= urlencode($guide_name) ?>" class="btn-plan-trip justify-content-center w-100">
                           <i class="ri-send-plane-line"></i> Request Custom Itinerary
                        </a>
                     </div>
                  </div>
               </div>
            </div>

            <!-- 5. What Travelers Say About Ezeewear -->
            <div class="profile-section-card">
               <h3 class="section-card-title">
                  <i class="ri-chat-smile-2-line"></i> What Travelers Say About <?= $guide_name ?>
               </h3>

               <!-- Review 1 -->
               <div class="guide-review-item">
                  <div class="guide-review-header">
                     <div class="reviewer-info">
                        <img src="assets/img/testimonial/user-3.png" alt="Sarah & David" class="reviewer-avatar">
                        <div>
                           <h5 class="reviewer-name">Sarah &amp; David M.</h5>
                           <span class="reviewer-origin">Traveled from San Francisco, USA</span>
                        </div>
                     </div>
                     <div class="text-end">
                        <div class="ratings text-warning mb-1">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                        </div>
                        <span class="text-muted text-12">3 days ago</span>
                     </div>
                  </div>
                  <p class="review-comment-text">
                     "Our day tour through Old Delhi and Taj Mahal with <?= $guide_name ?> was the highlight of our two weeks in India! The guide's knowledge of history was astounding, and the private car was spotlessly clean and comfortable."
                  </p>
               </div>

               <!-- Review 2 -->
               <div class="guide-review-item">
                  <div class="guide-review-header">
                     <div class="reviewer-info">
                        <img src="assets/img/testimonial/user-4.jpeg" alt="Marcus & Elena" class="reviewer-avatar">
                        <div>
                           <h5 class="reviewer-name">Marcus &amp; Elena K.</h5>
                           <span class="reviewer-origin">Traveled from Berlin, Germany</span>
                        </div>
                     </div>
                     <div class="text-end">
                        <div class="ratings text-warning mb-1">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                        </div>
                        <span class="text-muted text-12">1 week ago</span>
                     </div>
                  </div>
                  <p class="review-comment-text">
                     "Outstanding service from start to finish. We appreciated the German-speaking guide option, which made my parents feel completely at ease. Punctual, polite, and extremely trustworthy!"
                  </p>
               </div>

               <!-- Review 3 -->
               <div class="guide-review-item">
                  <div class="guide-review-header">
                     <div class="reviewer-info">
                        <img src="assets/img/testimonial/user-2.png" alt="Chloe Laurent" class="reviewer-avatar">
                        <div>
                           <h5 class="reviewer-name">Chloe Laurent</h5>
                           <span class="reviewer-origin">Traveled from Lyon, France</span>
                        </div>
                     </div>
                     <div class="text-end">
                        <div class="ratings text-warning mb-1">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                        </div>
                        <span class="text-muted text-12">2 weeks ago</span>
                     </div>
                  </div>
                  <p class="review-comment-text">
                     "Booking through TripInBlink directly with <?= $guide_name ?> gave us total peace of mind. Flexible itinerary, wonderful photo recommendations, and genuine local food tasting. 10/10 recommended!"
                  </p>
               </div>
            </div>
         </div>

         <!-- Right Column: Sticky Booking & Inquiry Card -->
         <div class="col-lg-4">
            <div class="sticky-guide-sidebar">
               <h4 class="sidebar-title">Book or Plan with <?= $guide_name ?></h4>
               <p class="sidebar-subtitle">Direct, verified partnership guaranteed by TripInBlink.</p>

               <div class="mb-3">
                  <label class="form-label text-13 fw-bold text-dark">Starting From</label>
                  <div class="d-flex align-items-baseline gap-2">
                     <span class="display-6 fw-800 text-coral" style="color: var(--tp-theme-1); font-weight: 850;">$45</span>
                     <span class="text-muted text-14">/ person for private tours</span>
                  </div>
               </div>

               <div class="d-grid gap-2 mb-3">
                  <a href="plan-my-trip.php?host=<?= urlencode($guide_name) ?>" class="btn-plan-trip justify-content-center w-100 py-3">
                     <i class="ri-calendar-check-line"></i> Plan Custom Trip Now
                  </a>
                  <a href="contact.php" class="btn-ask-custom justify-content-center w-100 py-2">
                     <i class="ri-chat-1-line"></i> Send Direct Message
                  </a>
               </div>

               <div class="sidebar-trust-box">
                  <div class="sidebar-trust-item">
                     <i class="ri-checkbox-circle-fill text-success"></i>
                     <span>Verified Local Tour Partner</span>
                  </div>
                  <div class="sidebar-trust-item">
                     <i class="ri-time-line"></i>
                     <span>Fast response (avg. 45 mins)</span>
                  </div>
                  <div class="sidebar-trust-item">
                     <i class="ri-shield-check-line"></i>
                     <span>100% Payment Protection</span>
                  </div>
                  <div class="sidebar-trust-item">
                     <i class="ri-exchange-line"></i>
                     <span>Free cancellation up to 48 hrs</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>

<?php
include 'include/footer.php';
?>
