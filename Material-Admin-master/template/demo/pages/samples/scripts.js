document.addEventListener("DOMContentLoaded", function() {
    // Add Photographer Form
    document.getElementById("addTrainerForm").addEventListener("submit", function(event) {
        event.preventDefault();
        var form = event.target;
        var formData = new FormData(form);
        sendData(form.action, formData, "New photographer is added successfully.");
    });

    // Update Photographer Form
    document.getElementById("updateTrainerForm").addEventListener("submit", function(event) {
        event.preventDefault();
        var form = event.target;
        var formData = new FormData(form);
        sendData(form.action, formData, "Photographer information is updated successfully.");
    });

    // Delete Photographer Form
    document.getElementById("deleteTrainerForm").addEventListener("submit", function(event) {
        event.preventDefault();
        var form = event.target;
        var formData = new FormData(form);
        sendData(form.action, formData, "Photographer is deleted successfully.");
    });

    function sendData(url, formData, successMessage) {
        fetch(url, {
            method: "POST",
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then(data => {
            // Handle response data
            console.log(data);
            alert(successMessage); // Display success message as an alert
            // Optionally, you can update the UI based on the response
        })
        .catch(error => {
            // Handle errors
            console.error('Error:', error);
            alert("Failed to perform the operation. Please try again."); // Display error message as an alert
        });
    }
});
