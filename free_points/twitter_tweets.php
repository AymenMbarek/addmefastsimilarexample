<?php

    $host = 'localhost';
    $dbname = 'like4hits';
    $username = 'root';
    $password = '';   
    $dsn = "mysql:host=$host;dbname=$dbname"; 
    // récupérer tous les utilisateurs
    $sql = "SELECT * FROM fb_likes"; 
    $sql2="SELECT * FROM basepoints ";
        try{      
     $pdo = new PDO($dsn, $username, $password);
     $stmt = $pdo->query($sql);
     $cpcrequest=$pdo->query($sql2);
     if($stmt === false ){
        die("Erreur");
     }
     
        }catch (PDOException $e){
        echo $e->getMessage();
    }
?>

<html>
<head>
  <title>Your Website Title</title>
<div id="fb-root"></div>
  <script>
      window.fbAsyncInit = function() {
    FB.init({
      appId            : '677693956781379',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.0'
    });
  };
    </script>
</head>
<div id="fb-root"></div>
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>


<body>
   <h2>Twitter Tweets </h2>
 <p><em><b>To get free points by sharing other's tweets click on the ''tweet'' button, then the page will be opened with popUp and after like the page CLOSE the popUp yourself. The users who don't close manually the popUp, will not receive points.</b></em></p>

   <div class="twitter-share-button" id="twitter-share-button">
<a class="twitter-share-button" id="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=Hello%20world" >
Tweet</a>
</div>
  <p>Wait 2-3 seconds after Follow/Like/Subscribe and then close popup.</p></br>
<input type="button" value="confirmer" id="refreshbtn" onclick="history.go(0)" ></br>

</body>
<style>
body {
  background-image:url("../image/50");
   margin: 0;
}
#twitter-share-button{
  position: absolute; /* postulat de départ */
  top: 50%; left: 50%; /* à 50%/50% du parent référent */
  transform: translate(-50%, -50%); /* décalage de 50% de sa propre taille */

}

</style>
<style>


.x{
   position: absolute; /* postulat de départ */
  top: 50%; left: 50%; /* à 50%/50% du parent référent */
  transform: translate(-50%, -50%); /* décalage de 50% de sa propre taille */

}

h1{
   position: absolute; /* postulat de départ */
  top: 40%; left: 40%; /* à 50%/50% du parent référent */
  transform: translate(-50%, -50%); /* décalage de 50% de sa propre taille */
}
body
{
    margin: 10px 0 ;
    padding: 0 ;
    text-align: center ;
    font: 0.8em "Trebuchet MS", helvetica, sans-serif ;
    background: 
#dea ;
}
div#conteneur
{
    width: 770px ;
    margin: 0 auto ;
    text-align: left ;
    border: 2px solid 
#ab4 ;
    background: 
#fff ;
}
h1#header
{
    height: 258px;
    background: url(apple.jpg) no-repeat left top;
}
div#contenu
{
    padding: 0 30px 0 100px ;
    background: url(bg_page.gif) no-repeat 15px 15px ;
}
div#contenu h2
{
    padding-left: 25px ;
    line-height: 25px ;
    font-size: 1.4em ;
    background: url(little_apple.gif) no-repeat left bottom ;
    color: 
#9b2 ;
    border-bottom: 1px solid 
#9b2 ;
}
div#contenu h3
{
    margin-left: 15px ;
    padding-left: 5px ;
    border-bottom: 1px solid 
#9b2 ;
    border-left: 3px solid 
#9b2 ;
    color: 
#9b2 ;
}
div#contenu p
{
    text-align: justify ;
    text-indent: 2em ;
    line-height: 1.7em ;
}
div#contenu a
{
    color: 
#8a0 ;
}

div#contenu a:hover
{
    color: 
#9b2;
}
p#footer
{
    margin: 0 ;
    padding-right: 10px ;
    line-height: 30px ;
    text-align: right ;
    color: 
#8a0 ;
}
pre
{
    overflow: auto ;
    background: 
#dea ;
    border: 2px solid 
#9b2 ;
    padding: 5px 0 0 5px ;
    font-size: 1.2em ;
}
pre span
{
    color: 
#560 ;
}
pre span.comment
{
    color: 
#b30000 ;
}
</style>
</html>