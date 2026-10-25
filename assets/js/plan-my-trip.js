/*-----------------------------------------------------------------------------------
    Plan My Trip - Multi-Step Interactive Form Logic
-----------------------------------------------------------------------------------*/

(function ($) {
  "use strict";

  const CITIES_DB = [
    { city: "Paris", country: "France" },
    { city: "Rome", country: "Italy" },
    { city: "Tokyo", country: "Japan" },
    { city: "London", country: "United Kingdom" },
    { city: "New York", country: "United States" },
    { city: "Dubai", country: "United Arab Emirates" },
    { city: "Barcelona", country: "Spain" },
    { city: "Bali", country: "Indonesia" },
    { city: "Amsterdam", country: "Netherlands" },
    { city: "Bangkok", country: "Thailand" },
    { city: "Singapore", country: "Singapore" },
    { city: "Sydney", country: "Australia" },
    { city: "Cairo", country: "Egypt" },
    { city: "Mumbai", country: "India" },
    { city: "Delhi", country: "India" },
    { city: "Kyoto", country: "Japan" },
    { city: "Berlin", country: "Germany" },
    { city: "Istanbul", country: "Turkey" },
    { city: "Prague", country: "Czech Republic" },
    { city: "Vienna", country: "Austria" },
    { city: "Zurich", country: "Switzerland" },
    { city: "Florence", country: "Italy" },
    { city: "Venice", country: "Italy" },
    { city: "Toronto", country: "Canada" },
    { city: "Vancouver", country: "Canada" },
    { city: "Cape Town", country: "South Africa" },
    { city: "Rio de Janeiro", country: "Brazil" },
    { city: "Buenos Aires", country: "Argentina" },
    { city: "Athens", country: "Greece" },
    { city: "Santorini", country: "Greece" }
  ];

  let selectedCities = ["Paris, France"];
  let currentStep = 1;

  $(document).ready(function () {
    initCityAutocomplete();
    initDateRangePicker();
    initTimeToggles();
    initTravelerCounters();
    initChips();
    initStepperNavigation();
  });

  // 1. City Autocomplete & Tags
  function initCityAutocomplete() {
    const $input = $("#pmtCityInput");
    const $dropdown = $("#pmtCityDropdown");
    const $tagsContainer = $("#pmtSelectedCities");

    renderCityTags();

    $input.on("focus input", function () {
      const query = $(this).val().toLowerCase().trim();
      let matches = CITIES_DB;
      if (query.length > 0) {
        matches = CITIES_DB.filter(item => 
          item.city.toLowerCase().includes(query) || 
          item.country.toLowerCase().includes(query)
        );
      }

      if (matches.length > 0) {
        let html = "";
        matches.slice(0, 8).forEach(item => {
          const val = `${item.city}, ${item.country}`;
          html += `
            <div class="pmt-dropdown-item" data-val="${val}">
              <span><i class="fa-light fa-location-dot me-2 text-muted"></i><strong>${item.city}</strong></span>
              <span class="pmt-dropdown-country">${item.country}</span>
            </div>
          `;
        });
        $dropdown.html(html).show();
      } else {
        $dropdown.html(`<div class="pmt-dropdown-item text-muted">Press Enter to add "${query}"</div>`).show();
      }
    });

    $(document).on("click", ".pmt-dropdown-item", function () {
      const val = $(this).data("val");
      if (val && !selectedCities.includes(val)) {
        selectedCities.push(val);
        renderCityTags();
      }
      $input.val("");
      $dropdown.hide();
    });

    $input.on("keydown", function (e) {
      if (e.key === "Enter") {
        e.preventDefault();
        const val = $(this).val().trim();
        if (val && !selectedCities.includes(val)) {
          selectedCities.push(val);
          renderCityTags();
        }
        $(this).val("");
        $dropdown.hide();
      }
    });

    $(document).on("click", function (e) {
      if (!$(e.target).closest(".pmt-city-wrapper").length) {
        $dropdown.hide();
      }
    });

    $tagsContainer.on("click", ".pmt-city-tag-remove", function () {
      const index = $(this).data("index");
      selectedCities.splice(index, 1);
      renderCityTags();
    });
  }

  function renderCityTags() {
    const $tagsContainer = $("#pmtSelectedCities");
    let html = "";
    selectedCities.forEach((city, index) => {
      html += `
        <span class="pmt-city-tag">
          <i class="fa-solid fa-location-dot"></i> ${city}
          <button type="button" class="pmt-city-tag-remove" data-index="${index}" aria-label="Remove city">&times;</button>
        </span>
      `;
    });
    $tagsContainer.html(html);
  }

  // 2. Date Range Picker
  function initDateRangePicker() {
    const $dateInput = $("#pmtDateRange");
    if ($.fn.daterangepicker && typeof moment !== "undefined") {
      const start = moment().add(7, "days");
      const end = moment().add(12, "days");
      $dateInput.daterangepicker({
        startDate: start,
        endDate: end,
        minDate: moment(),
        locale: {
          format: "DD/MM/YYYY",
          separator: " to "
        }
      });
      $dateInput.val(start.format("DD/MM/YYYY") + " to " + end.format("DD/MM/YYYY"));
    } else {
      // Fallback
      const today = new Date();
      const inSevenDays = new Date(today.getTime() + 7 * 24 * 60 * 60 * 1000);
      const inTwelveDays = new Date(today.getTime() + 12 * 24 * 60 * 60 * 1000);
      const formatDate = (d) => ("0" + d.getDate()).slice(-2) + "/" + ("0" + (d.getMonth() + 1)).slice(-2) + "/" + d.getFullYear();
      $dateInput.val(formatDate(inSevenDays) + " to " + formatDate(inTwelveDays));
    }
  }

  // 3. Time Toggles & Not Sure Checkbox
  function initTimeToggles() {
    $(".pmt-ampm-btn").on("click", function () {
      $(this).siblings(".pmt-ampm-btn").removeClass("active");
      $(this).addClass("active");
    });

    $("#pmtNotSureTimings").on("change", function () {
      const disabled = $(this).is(":checked");
      $(".pmt-time-box select").prop("disabled", disabled);
      $(".pmt-ampm-btn").prop("disabled", disabled);
      if (disabled) {
        $(".pmt-time-box").css("opacity", "0.5");
      } else {
        $(".pmt-time-box").css("opacity", "1");
      }
    });
  }

  // 4. Traveler Counters
  function initTravelerCounters() {
    $(".pmt-counter-btn").on("click", function () {
      const type = $(this).data("type");
      const action = $(this).data("action");
      const $val = $("#pmt" + type + "Val");
      let currentVal = parseInt($val.text(), 10) || 0;

      if (action === "plus") {
        currentVal++;
      } else if (action === "minus") {
        const min = (type === "Adults") ? 1 : 0;
        if (currentVal > min) {
          currentVal--;
        }
      }
      $val.text(currentVal);
    });
  }

  // 5. Selectable Chips (Assistance & Languages)
  function initChips() {
    $(".pmt-assistance-card").on("click", function () {
      $(this).toggleClass("active");
    });

    $(".pmt-lang-pill").on("click", function () {
      $(this).toggleClass("active");
    });
  }

  // 6. Multi-Step Navigation
  function initStepperNavigation() {
    $("#pmtBtnToStep2").on("click", function () {
      // Validate Step 1
      const typedCity = $("#pmtCityInput").val().trim();
      if (typedCity && !selectedCities.includes(typedCity)) {
        selectedCities.push(typedCity);
        renderCityTags();
        $("#pmtCityInput").val("");
      }

      if (selectedCities.length === 0) {
        alert("Please select at least one destination city.");
        $("#pmtCityInput").focus();
        return;
      }

      const dateVal = $("#pmtDateRange").val().trim();
      if (!dateVal) {
        alert("Please select your travel date range.");
        $("#pmtDateRange").focus();
        return;
      }

      // Update right sidebar guide preview for selected city
      const primaryCity = selectedCities[0].split(",")[0];
      $("#pmtSidebarCityName").text(primaryCity);

      goToStep(2);
    });

    $("#pmtBtnBackToStep1").on("click", function () {
      goToStep(1);
    });

    $("#pmtFormStep2").on("submit", function (e) {
      e.preventDefault();

      const firstName = $("#pmtFirstName").val().trim();
      const email = $("#pmtEmail").val().trim();

      if (!firstName) {
        alert("Please enter your First Name.");
        $("#pmtFirstName").focus();
        return;
      }

      if (!email) {
        alert("Please enter a valid Email Address.");
        $("#pmtEmail").focus();
        return;
      }

      // Populate Summary
      $("#pmtSumDestination").text(selectedCities.join(" & "));
      $("#pmtSumDates").text($("#pmtDateRange").val());
      
      const adults = $("#pmtAdultsVal").text();
      const children = $("#pmtChildVal").text();
      let travText = `${adults} Adult(s)`;
      if (parseInt(children, 10) > 0) {
        travText += `, ${children} Child(ren)`;
      }
      $("#pmtSumTravelers").text(travText);

      const fullName = firstName + " " + $("#pmtLastName").val().trim();
      $("#pmtSumName").text(fullName);
      $("#pmtSumEmail").text(email);

      const phone = $("#pmtPhone").val().trim();
      if (phone) {
        const countryCode = $("#pmtCountryCode").val();
        $("#pmtSumPhone").text(`${countryCode} ${phone}`).parent().show();
      } else {
        $("#pmtSumPhone").parent().hide();
      }

      // Assistance tags
      const assistanceArr = [];
      $(".pmt-assistance-card.active").each(function () {
        assistanceArr.push($(this).find(".pmt-assistance-text").text().trim());
      });
      if (assistanceArr.length > 0) {
        $("#pmtSumAssistance").text(assistanceArr.join(", ")).parent().show();
      } else {
        $("#pmtSumAssistance").parent().hide();
      }

      goToStep(3);
    });

    $("#pmtBtnReset").on("click", function () {
      selectedCities = ["Paris, France"];
      renderCityTags();
      $("#pmtFirstName").val("");
      $("#pmtLastName").val("");
      $("#pmtEmail").val("");
      $("#pmtPhone").val("");
      $("#pmtNotes").val("");
      goToStep(1);
    });
  }

  function goToStep(step) {
    currentStep = step;

    // Hide all step contents
    $(".pmt-step-content").removeClass("active");
    $("#pmtStep" + step).addClass("active");

    // Stepper header numbers & dividers
    $(".pmt-step-item").removeClass("active completed");
    $(".pmt-step-divider").removeClass("active");

    if (step === 1) {
      $("#stepIndicator1").addClass("active");
      $("#stepIndicator1 .pmt-step-number").html("1");
      $("#stepIndicator2 .pmt-step-number").html("2");
      $("#stepIndicator3 .pmt-step-number").html("3");
      $("#pmtSidebarDefault").show();
      $("#pmtSidebarStep2").hide();
    } else if (step === 2) {
      $("#stepIndicator1").addClass("completed");
      $("#stepIndicator1 .pmt-step-number").html('<i class="fa-solid fa-check"></i>');
      $("#divider1").addClass("active");
      $("#stepIndicator2").addClass("active");
      $("#stepIndicator2 .pmt-step-number").html("2");
      $("#stepIndicator3 .pmt-step-number").html("3");
      $("#pmtSidebarDefault").hide();
      $("#pmtSidebarStep2").show();
    } else if (step === 3) {
      $("#stepIndicator1").addClass("completed");
      $("#stepIndicator1 .pmt-step-number").html('<i class="fa-solid fa-check"></i>');
      $("#divider1").addClass("active");
      $("#stepIndicator2").addClass("completed");
      $("#stepIndicator2 .pmt-step-number").html('<i class="fa-solid fa-check"></i>');
      $("#divider2").addClass("active");
      $("#stepIndicator3").addClass("active");
      $("#stepIndicator3 .pmt-step-number").html("3");
      $("#pmtSidebarDefault").show();
      $("#pmtSidebarStep2").hide();
    }

    // Scroll smoothly to form top if scrolled down
    const formTop = $(".pmt-main-section").offset().top - 90;
    $("html, body").animate({ scrollTop: formTop }, 300);
  }

})(jQuery);
