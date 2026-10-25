/**
 * Guide Registration Interactivity Script
 * Turie / TripInBlink Theme
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
    const pwdInput = document.getElementById('txtPasswordGuide');
    const confirmInput = document.getElementById('txtConfirmPasswordGuide');
    const checkerContainer = document.getElementById('strength-checker-guide');
    const progressMeter = document.getElementById('strength-progress-guide');
    const matchMsg = document.getElementById('password-match-msg-guide');

    const reqs = {
        length: document.getElementById('req-length-guide'),
        upper: document.getElementById('req-upper-guide'),
        lower: document.getElementById('req-lower-guide'),
        number: document.getElementById('req-number-guide'),
        special: document.getElementById('req-special-guide')
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

        return passedCount >= 4; // allow strong or very strong
    }

    function checkMatch() {
        if (!confirmInput || !pwdInput || !matchMsg) return false;
        if (!confirmInput.value) {
            matchMsg.style.display = 'none';
            return false;
        }
        matchMsg.style.display = 'block';
        if (pwdInput.value === confirmInput.value) {
            matchMsg.textContent = 'Passwords match';
            matchMsg.className = 'mt-2 text-12 text-success fw-bold';
            return true;
        } else {
            matchMsg.textContent = 'Passwords do not match';
            matchMsg.className = 'mt-2 text-12 text-danger fw-bold';
            return false;
        }
    }

    if (pwdInput) {
        pwdInput.addEventListener('focus', () => {
            if (checkerContainer) checkerContainer.style.display = 'block';
        });

        pwdInput.addEventListener('input', () => {
            checkStrength(pwdInput.value);
            checkMatch();
        });
    }

    if (confirmInput) {
        confirmInput.addEventListener('input', checkMatch);
    }

    // 4. Modal Open & Step Validation
    const btnOpenProfileModal = document.getElementById('btnOpenProfileModal');
    let guideModalObj = null;

    function validateAndOpenModal() {
        const firstName = document.getElementById('guideFirstName');
        const lastName = document.getElementById('guideLastName');
        const email = document.getElementById('guideEmail');
        const country = document.getElementById('guideCountry');
        const phone = document.getElementById('guidePhone');
        const termsCheck = document.getElementById('termsCheck');

        if (firstName && !firstName.checkValidity()) { firstName.reportValidity(); return; }
        if (lastName && !lastName.checkValidity()) { lastName.reportValidity(); return; }
        if (email && !email.checkValidity()) { email.reportValidity(); return; }
        if (pwdInput && !pwdInput.checkValidity()) { pwdInput.reportValidity(); return; }
        if (confirmInput && !confirmInput.checkValidity()) { confirmInput.reportValidity(); return; }
        if (country && !country.checkValidity()) { country.reportValidity(); return; }
        if (phone && !phone.checkValidity()) { phone.reportValidity(); return; }

        if (pwdInput && pwdInput.value.length < 8) {
            if (checkerContainer) checkerContainer.style.display = 'block';
            pwdInput.focus();
            alert('Please create a password with at least 8 characters.');
            return;
        }

        if (confirmInput && pwdInput && pwdInput.value !== confirmInput.value) {
            confirmInput.focus();
            alert('Passwords do not match.');
            return;
        }

        if (termsCheck && !termsCheck.checked) {
            termsCheck.reportValidity();
            alert('Please accept the Terms and Conditions to proceed.');
            return;
        }

        // Open Modal using bootstrap
        const modalElement = document.getElementById('guideProfileModal');
        if (modalElement) {
            if (window.bootstrap && bootstrap.Modal) {
                if (!guideModalObj) {
                    guideModalObj = new bootstrap.Modal(modalElement);
                }
                guideModalObj.show();
            } else if (window.jQuery) {
                $('#guideProfileModal').modal('show');
            } else {
                modalElement.classList.add('show');
                modalElement.style.display = 'block';
            }
        }
    }

    if (btnOpenProfileModal) {
        btnOpenProfileModal.addEventListener('click', validateAndOpenModal);
    }

    // Initialize Select2 if present
    if (window.jQuery && typeof jQuery.fn.select2 === 'function') {
        $('#guideProfileModal').on('shown.bs.modal', function () {
            $('#guideLanguages').select2({
                placeholder: "Search & select languages spoken...",
                allowClear: true,
                dropdownParent: $('#guideProfileModal')
            });

            $('#guideMainArea').select2({
                placeholder: "Search & select primary city...",
                allowClear: true,
                dropdownParent: $('#guideProfileModal')
            });

            $('#guideOtherAreas').select2({
                placeholder: "Search & select other cities...",
                allowClear: true,
                dropdownParent: $('#guideProfileModal')
            });
        });
    }

    // 5. Final Form Submission
    const guideRegisterForm = document.getElementById('guideRegisterForm');
    if (guideRegisterForm) {
        guideRegisterForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const isMatched = checkMatch();
            if (!isMatched) {
                if (guideModalObj) guideModalObj.hide();
                confirmInput.focus();
                alert('Passwords do not match.');
                return;
            }

            // Close modal
            if (guideModalObj) {
                guideModalObj.hide();
            } else if (window.jQuery) {
                $('#guideProfileModal').modal('hide');
            }

            // Success feedback
            alert('Thank you! Your guide registration application has been submitted successfully. Our team will review your credentials and contact you within 24-48 hours.');
            window.location.href = 'index.html';
        });
    }
});
