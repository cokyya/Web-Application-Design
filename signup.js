// signup.js
// Validate the input in the signup form

function checkName(event) {
	var myName = event.currentTarget;
	var result = myName.value.search(/^[A-Za-z]+(\s[A-Za-z]+)/);
	if (result != 0) {
		alert("The name you entered (" + myName.value + ") is not valid. \n\n" +
			  "*The correct form is: Last-name First-name");
		myName.focus();
		myName.select();
		myName.value = "";
		return false;
	}
}

function checkEmail(event) {
	var myEmail = event.currentTarget;
	var result = myEmail.value.search(/^[\w][\w.-]+@[\w][.]?[\w]*[.]?[\w]*[.]?[\w]*\.[\w]{2,3}$/);
	if (result != 0) {
		alert("The Email you entered (" + myEmail.value + ") is not valid. \n\n" +
		  "*The correct form is: username@domain.com \n" +
		  "*It is allowed to use . and - in username part \n" +
		  "*Domain part contains 2-4 address extensions \n" +
		  "*Last extension must have 2-3 characters");
		myEmail.focus();
		myEmail.select();
		myEmail.value = "";
		return false;
	}
}

function checkUsername(event) {
	var myUsername = event.currentTarget;
	var result = myUsername.value.search(/^[A-Za-z]/);
	if (result != 0) {
		alert("The Username you entered is not valid. \n\n" +
			"*The correct form should start with a letter");
		myUsername.focus();
		myUsername.select();
		myUsername.value = "";
		return false;
	}
}

function checkPassword(event) {
	result = 0;
	passwordObject = event.currentTarget;
	var myPassword = passwordObject.value;
	if (myPassword.length < 8)
		result = -1;
	else if (myPassword.length > 16)
		result = -1;
	else if (myPassword.search(/\d/) == -1)
		result = -1;
	else if (myPassword.search(/[a-z]/) == -1)
		result = -1;
	else if (myPassword.search(/[A-Z]/) == -1)
		result = -1;

	if (result != 0) {
		alert("The password you entered is not valid. \n\n" +
			"*The correct form should include at least one CAPITAL LETTER, one small letter and one number. At least 8 characters and not exceed 16 characters.");
		passwordObject.focus();
		passwordObject.select();
		myPassword = "";
		return false;
	}
}

function checkPassword2(event) {
	var password1 = document.getElementById("password").value;
	var passwordObject = event.currentTarget;
	var password2 = passwordObject.value;

	if (password2 != password1) {
		alert("The password you entered is not matching with previous one. \n\n" +
			"*Please try again");
		passwordObject.focus();
		passwordObject.select();
		password2 = "";
		return false;
	}
}