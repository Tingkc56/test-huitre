var content = '<div id="cookie-bar"><div class="cookie-container"><div class="cookie-content">Nous utilisons des cookies pour vous proposer une meilleure expérience. En cliquant sur OK, vous acceptez les <a class="cookie-link" href="index.php?action=mention">conditions</a> énoncées dans notre Politique en matière de cookies.</div><a class="cookie-close-link btn" href="javascript:cookieCheck();">OK</a></div></div>';


    document.body.innerHTML =  content + document.body.innerHTML;

if (!document.cookie.indexOf('cookie=-1')){
} else {
  document.getElementById('cookie-bar').style.display = 'none';
}


var cookieCheck = function () {
document.cookie="cookie=true;path=/;expires=Thu, 30 Dec 2111 00:00:00 UTC";
document.getElementById('cookie-bar').style.display = 'none';
}