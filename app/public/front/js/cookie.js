// //All the cookie setting stuff
// function SetCookie(cookieName, cookieValue, nDays) {
//     "use strict";
//     var today = new Date();
//     var expire = new Date();
//     if (nDays == null || nDays == 0) nDays = 1;
//     expire.setTime(today.getTime() + 3600000 * 24 * nDays);
//     document.cookie = cookieName + "=" + escape(cookieValue) + ";expires=" + expire.toGMTString() + "; path=/";
//     }
//     function ReadCookie(cookieName) {
//     "use strict";
//     var theCookie = " " + document.cookie;
//     var ind = theCookie.indexOf(" " + cookieName + "=");
//     if (ind == -1) ind = theCookie.indexOf(";" + cookieName + "=");
//     if (ind == -1 || cookieName == "") return "";
//     var ind1 = theCookie.indexOf(";", ind + 1);
//     if (ind1 == -1) ind1 = theCookie.length;
//     return unescape(theCookie.substring(ind + cookieName.length + 2, ind1));
//     }
//     function DeleteCookie(cookieName){
//     "use strict";
//     var today = new Date();
//     var expire = new Date() - 30;
//     expire.setTime(today.getTime() - 3600000 * 24 * 90);
//     document.cookie = cookieName + "=" + escape(cookieValue) + ";expires=" + expire.toGMTString();
//     }
//     function AcceptCookies() {
//     SetCookie('sgCookies', true, 30);
//     jQuery("#cookie-bar").hide();
//     }
//     $(document).ready(function (e) {  
//     var toTop = $("<div id='cookie-bar'><div id='contentcookie'><p>We use cookies and similar technologies to recognize your repeat visits and preferences, to measure the effectiveness of campaigns, and improve our websites. For settings and more information about cookies, view our <a href='#'>Cookie Policy</a>. By clicking “I accept” on this banner or using our site, you consent to the use of cookies.</p><button id='Cookie' tabindex=1 onclick='AcceptCookies();'>I accept </button><div class='clear'></div></div></div>").appendTo("body");
//     if (!ReadCookie("sgCookies")) { //If the cookie has not been set
//     jQuery("#cookie-bar").show();
//     } else {
//     jQuery("#cookie-bar").hide();
//     }
//     });

var initCookiebar = function() {

var content = '<div id="cookie-bar"><div class="cookie-container"><div class="cookie-content">Nous utilisons des cookies pour vous proposer une meilleure expérience. En cliquant sur OK, vous acceptez les <a class="cookie-link" href="index.php?action=mention">conditions</a> énoncées dans notre Politique en matière de cookies.</div><a class="cookie-close-link btn" href="javascript:cookieCheck();">OK</a></div></div>';


    document.body.innerHTML =  content + document.body.innerHTML;

if (document.cookie.indexOf('cookie=')== -1){
} else {
  document.getElementById('cookie-bar').style.display = 'block';
}

}();

var cookieCheck = function () {
document.cookie="cookie=true;path=/;expires=Thu, 30 Dec 2111 00:00:00 UTC";
document.getElementById('cookie-bar').style.display = 'none';
}