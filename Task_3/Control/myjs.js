document.getElementById("registrationForm").addEventListener("submit", function (e) {
  e.preventDefault();

      let isValid = true;

      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;
      const email = document.getElementById("email").value;
      const artist = document.getElementById("artist").value;
      const genre = document.getElementById("genre").value;
  
      if (username.length < 5) {
        document.getElementById("usernameError").innerHTML = "Username must be at least 5 characters.";
        isValid = false;
      } 
      else {
        document.getElementById("usernameError").innerHTML = "";
      }
  
      const passwordPattern = /^(?=.*\d).{6,}$/;
      if (!passwordPattern.test(password)) {
        document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters and contain a number.";
        isValid = false;
      } 
      else {
        document.getElementById("passwordError").innerHTML = "";
      }
  
      const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
      if (!emailPattern.test(email)) {
        document.getElementById("emailError").innerHTML = "Enter a valid email address.";
        isValid = false;
      } 
      else {
        document.getElementById("emailError").innerHTML = "";
      }
  
      if (artist === "") {
        document.getElementById("artistError").innerHTML = "Please select an artist.";
        isValid = false;
      } 
      else {
        document.getElementById("artistError").innerHTML = "";
      }
  
      if (genre === "") {
        document.getElementById("genreError").innerHTML = "Please select a genre.";
        isValid = false;
      } 
      else {
        document.getElementById("genreError").innerHTML = "";
      }
  
      if (isValid) {
        alert("Form submitted successfully!");
        this.submit();
      }
    });
