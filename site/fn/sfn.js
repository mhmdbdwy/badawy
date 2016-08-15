     function createrequest(){
	

var xmlhttp;

	
if (window.XMLHttpRequest)


xmlhttp = new XMLHttpRequest();

else
{
xmlhttp = new ActiveXObject("Microsoft.xmlhttp");

if (!xmlhttp)
xmlhttp = new ActiveXObject("Msxml12.xmlhttp.3.0");

if (!xmlhttp)
xmlhttp = new ActiveXObject("Msxml12.xmlhttp.6.0");

}	
	
return xmlhttp;	
	
}





function doact() {
	
	document.getElementById("subs").innerHTML = '<center><img src="../assets/images/loader.gif" /></center>';
	
	if(this.readyState == 4 & this.status == 200)
	document.getElementById("subs").innerHTML = this.responseText;

}




function getsub(page) {
	
var xmlhttp;


xmlhttp = createrequest();



xmlhttp.onreadystatechange = doact;

//we make the value of form in JS variable in this step 

var email=document.getElementById("emails").value;


xmlhttp.open("POST",page,true);
xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


//then send the variables that you want in this way by the id in the form
xmlhttp.send("emails="+encodeURIComponent(email));

}
