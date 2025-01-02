
// Add event listeners to form inputs
document.querySelectorAll('input[type="text"], input[type="number"], textarea').forEach(function(input) {
    input.addEventListener('input', function() {
        this.setCustomValidity('');
    });
});

// Add form validation
document.querySelectorAll('form').forEach(function(form) {
    form.addEventListener('submit', function(event) {
        // Reset custom validity
        this.querySelectorAll('input[type="text"], input[type="number"], textarea').forEach(function(input) {
            input.setCustomValidity('');
        });

        // Validate required fields
        let isValid = true;
        this.querySelectorAll('input[required], textarea[required]').forEach(function(input) {
            if (input.value.trim() === '') {
                input.setCustomValidity('This field is required');
                isValid = false;
            }
        });

        // Validate numeric fields
        this.querySelectorAll('input[type="number"]').forEach(function(input) {
            if (isNaN(input.value) || input.value < 0) {
                input.setCustomValidity('Please enter a valid positive number');
                isValid = false;
            }
        });

        // Prevent form submission if validation fails
        if (!isValid) {
            event.preventDefault();
        }
    });
});