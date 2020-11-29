  var nameNode = document.getElementById("CustName");
  var numberNode = document.getElementById("PhoneNo");
  var emailNode = document.getElementById("CustEmail");
  nameNode.addEventListener("change", chkName, false);
  numberNode.addEventListener("change", chkNumber, false);
  emailNode.addEventListener("change", chkEmail, false);