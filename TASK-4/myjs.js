function validateForm() {
  let valid = true;

  let firstName = document.getElementById("firstName").value;
  let lastName = document.getElementById("lastName").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let phone = document.getElementById("phone").value;
  let genre = document.getElementById("genre").value;

  document.getElementById("firstNameError").innerHTML = "";
  document.getElementById("lastNameError").innerHTML = "";
  document.getElementById("emailError").innerHTML = "";
  document.getElementById("passwordError").innerHTML = "";
  document.getElementById("phoneError").innerHTML = "";
  document.getElementById("genreError").innerHTML = "";

  if (firstName === "") {
    document.getElementById("firstNameError").innerHTML = "First name required";
    valid = false;
  }
  if (lastName === "") {
    document.getElementById("lastNameError").innerHTML = "Last name required";
    valid = false;
  }
  if (email === "") {
    document.getElementById("emailError").innerHTML = "Email required";
    valid = false;
  }
  if (password.length < 6) {
    document.getElementById("passwordError").innerHTML =
      "Password must be at least 6 characters long.";
    valid = false;
  }
  if (phone === "") {
    document.getElementById("phoneError").innerHTML = "Phone number required";
    valid = false;
  }
  if (genre === "") {
    document.getElementById("genreError").innerHTML = "Please Select a genre";
    valid = false;
  }

  return valid;
}
