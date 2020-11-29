function chkName(event){
    var CustName = event.currentTarget;
    var correct = CustName.value.search(/^[a-zA-Z ]+$/);
    if (correct!= 0) {
       alert("The name you entered(" + CustName.value + ") is not in the correct form. \n" + "Please enter alphabet characters");
       CustName.focus();
       CustName.select();
    }
}

function chkNumber(event){
    var PhoneNo = event.currentTarget;
    var correct = PhoneNo.value.search(/\s*\d+$/);
    if (correct!= 0) {
       alert("The mobile no. you entered(" + PhoneNo.value + ") is not in the correct form. \n" + "Please enterm pure numbers without spaces");
       PhoneNo.focus();
       PhoneNo.select();
    }
}

function chkEmail(event){
	  var CustEmail = event.currentTarget;
	  var correct = CustEmail.value.search(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/);
	  if (correct!= 0) {
       alert("The email you entered(" + CustEmail.value + ") is not in the correct form. \n" + "The domain name contains two to four address extensions.\n"
        );
       CustEmail.focus();
       CustEmail.select();
    }
}