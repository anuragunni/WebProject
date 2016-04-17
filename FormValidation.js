var val=[false,false,false,false];

function validate_name() {
	var str=document.getElementById("name").value;
	var p=document.getElementById("errorText1");
	if(str.length==0){
		p.style.visibility="visible";
	}
	else{
		p.style.visibility="hidden";
		p=document.getElementById("_name");
		var pat= /^[A-Z][a-z]*(\s[A-Z][a-z]*)*$/;
		var valid=str.search(pat);
		if(valid !=0){
			p.style.visibility="visible";
			val[0]=false;
		}
		else{
			p.style.visibility="hidden";
			val[0]=true;
		}
	}
}
function validate_email() {
	var str=document.getElementById("email").value;
	var p=document.getElementById("errorText2");
	if(str.length==0){
		p.style.visibility="visible";
	}
	else{
		p.style.visibility="hidden";
		var p2 = document.getElementById("mail");
		var pat= /^[A-Za-z0-9\._]+@[A-Za-z]+(.com)$/;//^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;/
		var valid=str.search(pat);
		if(valid !=0){
			p2.style.visibility="visible";
			val[1]=false;
		}
		else{
			p2.style.visibility="hidden";
			val[1]=true;
		}
	}
}
function validate_pwd() {
	var str=document.getElementById("pwd").value;
	var p=document.getElementById("errorText3");
	if(str.length==0){
		p.style.visibility="visible";
	}
	else{
		p.style.visibility="hidden";
		p=document.getElementById("pass");
		if(str.length < 8){
			p.style.visibility="visible";

			val[2]=false;
		}
		else {
			p.style.visibility="hidden";
			val[2]=true;
		}
	}
}
function validate_pwd2() {
	var pd1=document.getElementById("pwd").value;
	var pd2=document.getElementById("cpwd").value;
	var p=document.getElementById("errorText4");
	if(pd2.length==0){
		p.style.visibility="visible";
	}
	else {
		p.style.visibility="hidden";
		p=document.getElementById("cpd");
		var isequal= pd1.localeCompare(pd2);
		if( isequal != 0) {
			p.style.visibility="visible";
			val[3]=false;
		}
		else{
			p.style.visibility="hidden";
			val[3]=true;
		}
	}
}
function check_valid_all(){

		for(var i=0;i<4;i++)
		{
			if(val[i]==false){
				return false;
		}


}
}
