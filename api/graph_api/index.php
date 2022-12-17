<!doctype html>
<html>
<head>
<title> test    </title>
</head>
<body>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v13.0&appId=677693956781379&autoLogAppEvents=1" nonce="DHPCaOA6"></script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '677693956781379',
      cookie     : true,
      xfbml      : true,
      version    : 'V2.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<script>
FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});
</script>


<fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>
<script >
  function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}


</script>
<div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="true"></div>
</body>
</html>