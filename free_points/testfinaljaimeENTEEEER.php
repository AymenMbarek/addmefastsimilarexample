
<script>

FB.Event.subscribe('auth.authResponseChange', function(response) {
        FB.api('/me/likes/[page_id]',
          function(response) {
              //console.log(response); - see what the response is on your console.
              if(response.data[0])
                //use script to display your content alert("Liked");
              else
                //just do nothing, display like button alert("Not yet liked");
          }
        );

    });
</script>