<?php

    $host = 'localhost';
    $dbname = 'like4hits';
    $username = 'root';
    $password = '';
        
    $dsn = "mysql:host=$host;dbname=$dbname"; 
    // récupérer tous les utilisateurs
    $sql = "SELECT * FROM fb_likes"; 
     
    try{      
     $pdo = new PDO($dsn, $username, $password);
     $stmt = $pdo->query($sql);
     
     if($stmt === false){
        die("Erreur");
     }
     
    }catch (PDOException $e){
        echo $e->getMessage();
    }
?>
<html>
<head>
  <title>Your Website Title</title>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '677693956781379',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v13.0'
    });
  };
</script>

 <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v13.0&appId=677693956781379&autoLogAppEvents=1" nonce="nrecm0Kp"></script>   
</head>
<body>
   <?php

     while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : 
         $tableau_php = array();
         $i=0;
         $tableau_php[$i]=$row['url'];
       foreach ($tableau_php as $i => $value) {
  
    echo "  $tableau_php[$i] ||importé depuis la base de données <br/>";
} 

    ?>
   
     <?php endwhile; 
     try

{

       $db = new PDO('mysql:host=localhost;dbname=like4hits', 'root', '');

}

catch(Exception $e)

{

       die('Erreur : '.$e->getMessage());

}
     


    
 
 
   echo "<script type='text/javascript'>";
    echo "var js_tableau = new Array;";
 
    foreach($tableau_php as $cle=>$valeur){
 
    echo "js_tableau[$cle] = '$valeur' ;";
    echo "document.write(js_tableau[$cle]);";

    }
 
    echo "</script>";
/*
    echo "<script type='text/javascript'>";
    echo "var js_tableau = new Array;";
 
    foreach($tableau_php as $cle=>$valeur){
 
    echo "js_tableau[$cle] = '$valeur' ;";
    echo "document.write(js_tableau[$cle]);";

    }
 
    echo "</script>";*/
 
 
    ?>
 <script>
let link = document.querySelector('#api');

if (link) {
            let target = link.getAttribute('data-href');
            console.log(target);
            document.write(target);
        }
        link = document.querySelector('#api');
        if (link) {
            link.removeAttribute('data-href');
               link.setAttribute('data-href','https://www.facebook.com/Eminemmtv');
              console.log(link.target);
            document.write(link.target);




</script>
<div class="fb-root">
   <h1>Facebook Likes </h1>
 <p><em><b>To get free points by liking other's Facebook Pages click on the ''like'' button, then the page will be opened with popUp and after like the page CLOSE the popUp yourself. The users who don't close manually the popUp, will not receive points.</b></em></p>

<div class="fb-like" data-href="https://www.facebook.com/Eminemmtv" data-width="500" data-layout="box_count" data-action="like" data-size="large" data-share="false" id="api"></div>


  <p>Wait 2-3 seconds after Follow/Like/Subscribe and then close popup.</p>
<input type="button" value="confirmer" onclick="function()"  >


</div>
</head>

</body>
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
</style>

</html>

