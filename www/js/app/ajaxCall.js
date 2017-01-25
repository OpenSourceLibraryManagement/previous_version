<!-- 
//Browser Support Code
function ajaxCall (data, path, method, callback){
  //Creating the Request
  var ajaxRequest;
  try{
    // Opera 8.0+, Firefox, Safari
    ajaxRequest = new XMLHttpRequest();
  }catch (e){
    // Internet Explorer Browsers
    try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    }catch (e){
      try{
        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
        console.log("Your browser broke!");
        return false;
      }
    }
  }
  //Working with return value
  ajaxRequest.onreadystatechange = function(){
    if(ajaxRequest.readyState == 4){
	  callback(ajaxRequest.responseText);
    }
  }
  // Send Data to Path
  if(method == 'GET'){
   	ajaxRequest.open("GET", path + "?" + data, true);
	ajaxRequest.send(null);
  }
  else if(method == 'POST'){
    ajaxRequest.open("POST", path, true);
	ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajaxRequest.send(data);
  }
  else{
	console.log('Wrong Method Implemented!');
  }
}
//-->