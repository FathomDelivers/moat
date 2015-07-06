//
//Pass.js - http://garybunofsky.github.io/pass.js
//Licensed under the MIT license - http://opensource.org/licenses/MIT
//Copyright (c) 2015 Gary Bunofsky
//

//Checks if cookie is set.

function main() {
   if (document.cookie.indexOf("source") >= 0) {
     //If cookie is set do nothing.
     //
   }
   else {
     //If cookie is not set parse url.
     //Set expiration as variables.
     var today = new Date();
     var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

     document.cookie="utm_source=" + getParameter('utm_source') + "; path=/; expires=" + expiry.toGMTString();
     document.cookie="utm_medium=" + getParameter('utm_medium') + "; path=/; expires=" + expiry.toGMTString();
     document.cookie="utm_campaign=" + getParameter('utm_campaign') + "; path=/; expires=" + expiry.toGMTString();
   }
}

//After DOM is loaded, get cookie and place in field value.

document.addEventListener('DOMContentLoaded',function(){
  main();

  document.getElementById('utm_source').value = getCookie('utm_source');
  document.getElementById('utm_medium').value = getCookie('utm_medium');
  document.getElementById('utm_campaign').value = getCookie('utm_campaign');
});

function getCookie(cname) {
   var name = cname + "=";
   var ca = document.cookie.split(';');
   for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
   }
   return "";
}

function getParameter(source) {
   source = source.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
   var regexS = "[\\?&]" + source + "=([^&#]*)";
   var regex = new RegExp(regexS);
   var results = regex.exec(window.location.href);
   if (results == null)
      return "undefined";
   else
      return results[1];
}

