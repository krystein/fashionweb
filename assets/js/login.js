document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    // Get input values
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Perform login validation
    if (username === "admin" && password === "password") {
      var statusDiv = document.getElementById("status");

      // Display "Logging in..." message
      statusDiv.textContent = "Logging in...";
      statusDiv.classList.remove("hidden");

      // Simulate a successful login after 2 seconds (2000 milliseconds)
      setTimeout(function () {
        // Update message to "Login successful!"
        statusDiv.textContent = "Login successful!";
        // Redirect to the home page or perform other actions
        window.location.href = "add-product.php";
      }, 2000);
    } else {
      statusDiv.textContent = "Logging in...";
      statusDiv.classList.remove("hidden");
      statusDiv.textContent = "Invalid username or password. Please try again.";
      window.location.href = "../add-product.php";
    }
  });
