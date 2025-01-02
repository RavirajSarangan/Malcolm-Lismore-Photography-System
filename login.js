document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var messageBox = document.getElementById("messageBox");

    // Clear previous error messages
    messageBox.style.display = "none";
    messageBox.textContent = "";

    // Basic validation
    if (username.trim() === "" || password.trim() === "") {
        displayMessage("Please enter both username and password.");
        return;
    }

    // Validate password length


    // AJAX request to PHP script for server-side validation
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "validate_login.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.status === "error") {
                    // Display error message
                    displayMessage(response.message);
                } else if (response.status === "success") {
                    // Redirect to dashboard or wherever on successful login
                    window.location.href = "Material-Admin-master/template/index.php";
                }
            } else {
                // Display error message if server returns an error
                displayMessage("An error occurred. Please try again later.");
            }
        }
    };
    xhr.send("username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password));
});

function displayMessage(message) {
    var messageBox = document.getElementById("messageBox");
    messageBox.style.display = "block";
    messageBox.textContent = message;
}
