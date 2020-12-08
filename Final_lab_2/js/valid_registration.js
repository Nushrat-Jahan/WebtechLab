function getElement(id){
	return document.getElementById(id);
}
function validate(){
	refresh();
	var hasErr=false;
	var e_name = getElement("name");
	var e_username = getElement("username");
	var e_password = getElement("password");
	var e_email = getElement("email");
	var e_phone = getElement("phone");
	
	var err_name = getElement("err_name");
	var err_username = getElement("err_username");
	var err_password = getElement("err_password");
	var err_email = getElement("err_email");
	var err_phone = getElement("err_phone");
	
	//Name
	if(e_name.value == ""){
		hasErr= true;
		err_name.innerHTML = "Name Required";
		e_name.focus();
		return !hasErr;
	}
	else if (e_name.search("0")!=-1 || e_name.search("1")!=-1 || e_name.search("2")!=-1 || e_name.search("3")!=-1 || e_name.search("4")!=-1 ||
	e_name.search("5")!=-1 || e_name.search("6")!=-1 || e_name.search("7")!=-1 || e_name.search("8")!=-1 || e_name.search("9")!=-1){
		hasErr= true;
		err_name.innerHTML = "Name must not contain numbers";
		e_name.focus();
		return !hasErr;
	}
	
	//Username
	if(e_username.value == ""){
		hasErr= true;
		err_username.innerHTML = "Username Required";
		e_username.focus();
		return !hasErr;
	}
	else if(e_username.search(" ")!=-1 || e_username.length<6){
		hasErr= true;
		err_username.innerHTML = "Username can not contain space and length must be 6 character long";
		e_username.focus();
		return !hasErr;
	}
	
	//Password
	if(e_password.value == ""){
		hasErr= true;
		err_password.innerHTML = "Password Required";
		e_password.focus();
		return !hasErr;
	}
	else if(e_password.length<8){
		hasErr= true;
		err_password.innerHTML = "Password must be 8 character long";
		e_password.focus();
		return !hasErr;
	}
	debugger;
	//Email
	if(e_email.value == ""){
		hasErr= true;
		err_email.innerHTML = "Email Required";
		e_email.focus();
		return !hasErr;
	}
	else if(e_email.search("@") && email.length<6){
		hasErr= true;
		err_email.innerHTML = "Invalid email";
		e_email.focus();
		return !hasErr;
	}
	
	//Phone
	if(e_phone.value == ""){
		hasErr= true;
		err_phone.innerHTML = "Phone number Required";
		e_phone.focus();
		return !hasErr;
	}
	else if(e_phone.length!=11){
		hasErr= true;
		err_phone.innerHTML = "Invalid phone number";
		e_phone.focus();
		return !hasErr;
	}
	return !hasErr;

}
function refresh(){
	var err_name = getElement("err_name");
	var err_username = getElement("err_username");
	var err_password = getElement("err_password");
	var err_email = getElement("err_email");
	var err_phone = getElement("err_phone");
	
	err_name.innerHTML = "";
	err_username.innerHTML = "";
	err_password.innerHTML = "";
	err_email.innerHTML = "";
	err_phone.innerHTML = "";
	
}
