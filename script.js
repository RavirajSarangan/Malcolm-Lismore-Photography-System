// Function to toggle share area visibility
function toggleShareArea(shareArea) {
    shareArea.classList.toggle('active');
}

// Get all share icon elements
var shareIcons = document.querySelectorAll('.share-icon');

// Add click event listener to each share icon
shareIcons.forEach(function(shareIcon) {
    shareIcon.addEventListener('click', function() {
        // Get the corresponding share area element
        var shareArea = this.parentElement.nextElementSibling;
        toggleShareArea(shareArea);
    });
});

// Hide share area when clicking outside of it
document.addEventListener('click', function(event) {
    var shareAreas = document.querySelectorAll('.share-area');
    shareAreas.forEach(function(shareArea) {
        if (!shareArea.contains(event.target)) {
            shareArea.classList.remove('active');
        }
    });
});
