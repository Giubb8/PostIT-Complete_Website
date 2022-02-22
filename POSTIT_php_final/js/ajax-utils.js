(function (global) {

//Setto un namespace per utilizzarlo fuori  
var ajaxUtils = {};


//Fa un return di un oggetto requestHTTP
function getRequestObject() {
  //per browser nuovi
  if (global.XMLHttpRequest) {
    return (new XMLHttpRequest());
  } 
  else if (global.ActiveXObject) {
    // Per Browser vecchi
    return (new ActiveXObject("Microsoft.XMLHTTP"));
  } 
  else {
    global.alert("Ajax is not supported!");
    return(null); 
  }
}


//Effettua una richiesta Ajax Get all'indirizzo requestUrl 
ajaxUtils.sendGetRequest = function(requestUrl, responseHandler, isJsonResponse) {
    var request = getRequestObject();
    request.onreadystatechange = 
      function() { 
        handleResponse(request, responseHandler,isJsonResponse); 
      };
    request.open("GET", requestUrl, true);
    request.send(null); 
  };
//Effettua una richiesta Ajax Post all'indirizzo requestUrl 
  ajaxUtils.sendPostRequest = function(requestUrl, responseHandler, isJsonResponse,postData) {
    var request = getRequestObject();
    request.onreadystatechange = //onreadystatechange fa partire un evento quando la richiesta http si trova nello stato di pronto
      function() { 
        handleResponse(request, responseHandler,isJsonResponse); 
      };
    request.open("POST", requestUrl, true);
    request.setRequestHeader("Content-Type","application/json");//setta header del pacchetto e dice che c'e' un json
    request.send(postData); 
  };


function handleResponse(request,responseHandler, isJsonResponse) {
  if ((request.readyState == 4) &&
     (request.status == 200)) {

    if (isJsonResponse == undefined) {
      isJsonResponse = true;
    }

    if (isJsonResponse) {
      responseHandler(JSON.parse(request.responseText));
    }
    else {
      responseHandler(request.responseText);
    }
  }
}


// espone ajaxutils all'esterno
global.ajaxUtils = ajaxUtils;


})(window);







