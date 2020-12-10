function getElement(id){
	return document.getElementById(id);
}
function validate(){
	refresh();
	var hasErr=false;
	var e_username = getElement("username");
	var e_password = getElement("password");
	
	var err_username = getElement("err_username");
	var err_password = getElement("err_password");
	
	if(e_username.value == ""){
		
		err_username.innerHTML = "*Username Required";
		err_username.style.color = "red";
		hasErr= true;
		
	}
	if(e_password.value == ""){
		
		err_password.innerHTML = "*Password Required";
		err_password.style.color = "red";
		hasErr= true;
	
	}
	return !hasErr;

}
function refresh(){
	var err_username = getElement("err_username");
	var err_password = getElement("err_password");
	
	err_username.innerHTML = "";
	err_password.innerHTML = "";
	
}
