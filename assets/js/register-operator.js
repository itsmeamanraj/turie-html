/**
 * Tour Operator Registration Interactivity Script
 * TripInBlink Theme
 */

function handleFileSelected(input, dropzoneId, subtitleId) {
    const dropzone = document.getElementById(dropzoneId);
    const subtitle = document.getElementById(subtitleId);
    if (!dropzone || !subtitle) return;

    if (input.files && input.files[0]) {
        const file = input.files[0];
        dropzone.classList.add('has-file');
        const iconCircle = dropzone.querySelector('.upload-icon-circle');
        if (iconCircle) {
            iconCircle.innerHTML = '<i class="ri-checkbox-circle-line"></i>';
        }
        const titleEl = dropzone.querySelector('.dropzone-title');
        if (titleEl) {
            titleEl.textContent = file.name;
        }
        const fileSize = (file.size / (1024 * 1024)).toFixed(2);
        subtitle.textContent = `Selected (${fileSize} MB) - Click to replace`;
    }
}

document.addEventListener('DOMContentLoaded', function () {
    // 1. Password Eye Toggle
    const toggleIcons = document.querySelectorAll('.toggle-password');
    toggleIcons.forEach(icon => {
        icon.addEventListener('click', function () {
            const container = this.closest('.position-relative');
            const input = container ? container.querySelector('.password-input') : null;
            if (!input) return;

            if (input.type === 'password') {
                input.type = 'text';
                this.classList.remove('ri-eye-line');
                this.classList.add('ri-eye-off-line');
            } else {
                input.type = 'password';
                this.classList.remove('ri-eye-off-line');
                this.classList.add('ri-eye-line');
            }
        });
    });

    // 2. FAQ Accordion
    const triggers = document.querySelectorAll('.faq-trigger');
    triggers.forEach(trigger => {
        trigger.addEventListener('click', function () {
            const item = this.closest('.faq-item');
            if (!item) return;
            const content = item.querySelector('.faq-content');
            const isOpen = item.classList.contains('is-open');

            // Close all other items
            document.querySelectorAll('.faq-item').forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('is-open');
                    const otherContent = otherItem.querySelector('.faq-content');
                    if (otherContent) otherContent.style.maxHeight = '0';
                }
            });

            if (isOpen) {
                item.classList.remove('is-open');
                if (content) content.style.maxHeight = '0';
            } else {
                item.classList.add('is-open');
                if (content) content.style.maxHeight = content.scrollHeight + 'px';
            }
        });
    });

    // 3. Password Strength & Confirmation
    const pwdInput = document.getElementById('txtPasswordOperator');
    const confirmInput = document.getElementById('txtConfirmPasswordOperator');
    const checkerContainer = document.getElementById('strength-checker-operator');
    const progressMeter = document.getElementById('strength-progress-operator');
    const matchMsg = document.getElementById('password-match-msg-operator');

    const reqs = {
        length: document.getElementById('req-length-operator'),
        upper: document.getElementById('req-upper-operator'),
        lower: document.getElementById('req-lower-operator'),
        number: document.getElementById('req-number-operator'),
        special: document.getElementById('req-special-operator')
    };

    function checkStrength(value) {
        if (!pwdInput || !progressMeter) return false;

        const checks = {
            length: value.length >= 8,
            upper: /[A-Z]/.test(value),
            lower: /[a-z]/.test(value),
            number: /[0-9]/.test(value),
            special: /[@$!%*?&#]/.test(value)
        };

        let passedCount = 0;

        for (const [key, passed] of Object.entries(checks)) {
            const element = reqs[key];
            if (!element) continue;
            const icon = element.querySelector('i');
            if (passed) {
                passedCount++;
                element.classList.remove('text-muted', 'text-danger');
                element.classList.add('text-success');
                if (icon) icon.className = 'ri-checkbox-circle-fill mr-1';
            } else {
                element.classList.remove('text-success');
                element.classList.add('text-muted');
                if (icon) icon.className = 'ri-checkbox-blank-circle-line mr-1';
            }
        }

        const percent = (passedCount / 5) * 100;
        progressMeter.style.width = percent + '%';

        if (passedCount <= 2) {
            progressMeter.style.backgroundColor = '#ef4444'; // Red
        } else if (passedCount <= 4) {
            progressMeter.style.backgroundColor = '#f59e0b'; // Amber
        } else {
            progressMeter.style.backgroundColor = '#10b981'; // Green
        }

        return passedCount === 5;
    }

    function checkMatch() {
        if (!confirmInput || !matchMsg) return false;
        if (!confirmInput.value) {
            matchMsg.style.display = 'none';
            return false;
        }
        matchMsg.style.display = 'block';
        if (pwdInput && pwdInput.value === confirmInput.value) {
            matchMsg.textContent = 'Passwords match';
            matchMsg.className = 'mt-2 text-12 text-success fw-bold';
            return true;
        } else {
            matchMsg.textContent = 'Passwords do not match';
            matchMsg.className = 'mt-2 text-12 text-danger fw-bold';
            return false;
        }
    }

    if (pwdInput && checkerContainer) {
        pwdInput.addEventListener('focus', () => {
            checkerContainer.style.display = 'block';
        });

        pwdInput.addEventListener('input', () => {
            checkStrength(pwdInput.value);
            checkMatch();
        });
    }

    if (confirmInput) {
        confirmInput.addEventListener('input', checkMatch);
    }

    // 4. Modal & Select2 Initialization
    const btnOpenOperatorModal = document.getElementById('btnOpenOperatorModal');
    let operatorModalObj = null;

    if (typeof $ !== 'undefined' && $.fn.select2) {
        $('#operatorProfileModal').on('shown.bs.modal', function () {
            if (!$('#operatorLanguages').hasClass('select2-hidden-accessible')) {
                $('#operatorLanguages').select2({
                    placeholder: "Search & select supported languages...",
                    allowClear: true,
                    dropdownParent: $('#operatorProfileModal')
                });
            }

            if (!$('#operatorRegions').hasClass('select2-hidden-accessible')) {
                $('#operatorRegions').select2({
                    placeholder: "Search or type operating cities/regions...",
                    tags: true,
                    allowClear: true,
                    dropdownParent: $('#operatorProfileModal')
                });
            }
        });
    }

    function validateAndOpenOperatorModal() {
        const companyName = document.getElementById('operatorCompanyName');
        const email = document.getElementById('operatorEmail');
        const country = document.getElementById('operatorCountry');
        const phone = document.getElementById('operatorPhone');
        const termsCheck = document.getElementById('termsCheck');

        if (companyName && !companyName.checkValidity()) { companyName.reportValidity(); return; }
        if (email && !email.checkValidity()) { email.reportValidity(); return; }
        if (pwdInput && !pwdInput.checkValidity()) { pwdInput.reportValidity(); return; }
        if (confirmInput && !confirmInput.checkValidity()) { confirmInput.reportValidity(); return; }
        if (country && !country.checkValidity()) { country.reportValidity(); return; }
        if (phone && !phone.checkValidity()) { phone.reportValidity(); return; }

        const isStrong = pwdInput ? checkStrength(pwdInput.value) : true;
        const isMatched = confirmInput ? checkMatch() : true;

        if (!isStrong) {
            if (checkerContainer) checkerContainer.style.display = 'block';
            if (pwdInput) pwdInput.focus();
            alert('Please ensure your password meets all strength requirements.');
            return;
        }
        if (!isMatched) {
            if (confirmInput) confirmInput.focus();
            alert('Passwords do not match.');
            return;
        }
        if (termsCheck && !termsCheck.checked) {
            termsCheck.reportValidity();
            alert('Please accept the Terms and Conditions to proceed.');
            return;
        }

        const modalEl = document.getElementById('operatorProfileModal');
        if (modalEl) {
            if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
                if (!operatorModalObj) {
                    operatorModalObj = new bootstrap.Modal(modalEl);
                }
                operatorModalObj.show();
            } else if (typeof $ !== 'undefined') {
                $(modalEl).modal('show');
            }
        }
    }

    if (btnOpenOperatorModal) {
        btnOpenOperatorModal.addEventListener('click', validateAndOpenOperatorModal);
    }

    // 5. Capability Toggles
    const transportCheck = document.getElementById('operator_provides_transportation');
    const transportDetails = document.getElementById('operator_transport_details');
    if (transportCheck && transportDetails) {
        transportCheck.addEventListener('change', function () {
            transportDetails.style.display = this.checked ? 'block' : 'none';
        });
    }

    const accomCheck = document.getElementById('operator_provides_accommodation');
    const accomDetails = document.getElementById('operator_accommodation_details');
    if (accomCheck && accomDetails) {
        accomCheck.addEventListener('change', function () {
            accomDetails.style.display = this.checked ? 'block' : 'none';
        });
    }

    // 6. Form Submission Handling
    const form = document.getElementById('operatorRegisterForm');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const btnSubmit = document.getElementById('btnSubmitFinalOperator');
            if (btnSubmit) {
                btnSubmit.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Submitting Application...';
                btnSubmit.disabled = true;
            }

            setTimeout(function () {
                if (operatorModalObj) {
                    operatorModalObj.hide();
                } else if (typeof $ !== 'undefined') {
                    $('#operatorProfileModal').modal('hide');
                }
                alert('Thank you for registering your Tour Agency with TripInBlink! Your partnership application has been received and our operations team will review it within 24 hours.');
                window.location.href = 'index.php';
            }, 1200);
        });
    }
});
