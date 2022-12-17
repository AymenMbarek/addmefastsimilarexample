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
  <div id="fb-root"></div>
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
     


    
 

    ?>

<script>
  
// Access the array elements


   var passedArray =   <?php echo json_encode($tableau_php); ?>;
// Display the array elements
for(var i = 0; i < passedArray.length; i++){
    document.write(passedArray[i]);
}
</script>
  <div class="fb-root">
   <h1>Facebook Likes </h1>
 <p><em><b>To get free points by liking other's Facebook Pages click on the ''like'' button, then the page will be opened with popUp and after like the page CLOSE the popUp yourself. The users who don't close manually the popUp, will not receive points.</b></em></p>

<div class="fb-like" data-href="https://www.facebook.com/Eminemmtv" data-width="500" data-layout="box_count" data-action="like" data-size="large" data-share="false" id="api"></div>


  <p>Wait 2-3 seconds after Follow/Like/Subscribe and then close popup.</p>
<input type="button" value="confirmer" id="button"  >


</div>
</head>

</body>

<script>
     
         
        
 // get set attribute base code 

 
   div1 = document.getElementById("api");
   attributID = div1.getAttribute("data-href"); 
        div1.removeAttribute('data-href');
       i=1;
 for(var i = 0; i < passedArray.length; i++){ 
            var ch=(passedArray[i]);
           div1.setAttribute('data-href',ch);
    
  } 
             newid = div1.getAttribute("data-href");
            console.log(newid);
            document.write(newid);
            

       
// Display the array elements

</script>
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

