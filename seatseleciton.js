var button=document.getElementById("confirm");
button.onclick = function(){
	var div=document.getElementById("submit");
	if (div.style.display !== 'none') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
};
