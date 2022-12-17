<html>
  <head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <style type="text/css">
      div#container_notlike, div#container_like {
        display: none;
      }
    </style>
  </head>
  <body>
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '677693956781379', // App ID
          channelUrl : 'https://like4hits.000webhostapp.com/index.html', // Channel File
          status     : true, // check login status
          cookie     : true, // enable cookies to allow the server to access the session
          xfbml      : true  // parse XFBML
        });

        FB.getLoginStatus(function(response) {
          var page_id = "103036302283930";
          if (response && response.authResponse) {
            var user_id = response.authResponse.userID;
            var fql_query = "SELECT uid FROM page_fan WHERE page_id = "+page_id+"and uid="+user_id;
            FB.Data.query(fql_query).wait(function(rows) {
              if (rows.length == 1 && rows[0].uid == user_id) {
                console.log("LIKE");
                $('#container_like').show();
              } else {
                console.log("NO LIKEY");
                $('#container_notlike').show();
              }
            });
          } else {
            FB.login(function(response) {
              if (response && response.authResponse) {
                var user_id = response.authResponse.userID;
                var fql_query = "SELECT uid FROM page_fan WHERE page_id = "+page_id+"and uid="+user_id;
                FB.Data.query(fql_query).wait(function(rows) {
                  if (rows.length == 1 && rows[0].uid == user_id) {
                    console.log("LIKE");
                    $('#container_like').show();
                  } else {
                    console.log("NO LIKEY");
                    $('#container_notlike').show();
                  }
                });
              } else {
                console.log("NO LIKEY");
                $('#container_notlike').show();
              }
            }, {scope: 'user_likes'});
          }
        });
      };

      // Load the SDK Asynchronously
      (function(d){
        var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
        js = d.createElement('script'); js.id = id; js.async = true;
        js.src = "//connect.facebook.net/en_US/all.js";
        d.getElementsByTagName('head')[0].appendChild(js);
      }(document));
    </script>

    <div id="container_notlike">
      YOU DON'T LIKE ME :(
    </div>

    <div id="container_like">
      YOU LIKE ME :)
    </div>

  </body>
</html>