var customerName = document.getElementById("name");
var customerEmail = document.getElementById("email");
var customerPassword = document.getElementById("password");
var customerPassword2 = document.getElementById("password2");

customerName.addEventListener("change", checkName, false);
customerEmail.addEventListener("change", checkEmail, false);
customerPassword.addEventListener("change", checkPassword, false);
customerPassword2.addEventListener("change", checkPassword2, false);