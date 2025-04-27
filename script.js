document.addEventListener('DOMContentLoaded', function() {
    // Client-side validation for intake forms
    function validateForm(form) {
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                field.classList.add('error');
            } else {
                field.classList.remove('error');
            }
        });
        return isValid;
    }

    // Add event listeners to intake forms
    const intakeForms = document.querySelectorAll('.intake-form');
    intakeForms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!validateForm(form)) {
                event.preventDefault();
                alert('Please fill in all required fields.');
            }
        });
    });

    // Interactive tutorials and walkthroughs for user onboarding
    function showTutorialStep(step) {
        const steps = document.querySelectorAll('.tutorial-step');
        steps.forEach((stepElement, index) => {
            if (index === step) {
                stepElement.classList.add('active');
            } else {
                stepElement.classList.remove('active');
            }
        });
    }

    let currentStep = 0;
    const nextButton = document.querySelector('#next-step');
    const prevButton = document.querySelector('#prev-step');

    nextButton.addEventListener('click', function() {
        currentStep++;
        showTutorialStep(currentStep);
    });

    prevButton.addEventListener('click', function() {
        currentStep--;
        showTutorialStep(currentStep);
    });

    // Initialize the first tutorial step
    showTutorialStep(currentStep);
});
