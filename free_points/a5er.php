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
      version          : 'v2.0'
    });
  };
</script>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v13.0&appId=677693956781379&autoLogAppEvents=1" nonce="nrecm0Kp"></script>   
  </head>
<body>
<?php

$i=0;
$pt=strtoupper("points a gagné avec cet url");
     while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : 

          $cpctab=array();
          
          $tableau_php = array();
          
          $tableau_php[$i]=$row['url'];
          $cpctab[$i]=$row['cpc'];
    foreach ($tableau_php as $i => $value) {
        
           echo "  $tableau_php[$i]  || $pt :  $cpctab[$i]   importé depuis BD <br/>";  
                                       
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
   var cpcarray=  <?php echo json_encode($cpctab); ?>;
// Display the array elements

  //  document.write(passedArray[0]);
  //  document.write(cpcarray[0]);



    

</script>
  <div class="fb-root">
   <h1>Facebook Likes </h1>
 <p><em><b>To get free points by liking other's Facebook Pages click on the ''like'' button, then the page will be opened with popUp and after like the page CLOSE the popUp yourself. The users who don't close manually the popUp, will not receive points.</b></em></p>

<div class="fb-like" data-href="" data-width="500" data-layout="box_count" data-action="like" data-size="large" data-share="false" id="api"></div>


  <p>Wait 2-3 seconds after Follow/Like/Subscribe and then close popup.</p>
<input type="button" value="confirmer" id="button" onclick="history.go(0)" >
<input type="button" value="testapi" id="button2" onclick="testapi()" >


</div>
<script>
function testapi()
{
FB.Event.subscribe('auth.authResponseChange', function(response) {
        FB.api('/me/likes/103036302283930',
          function(response) {
               console.log(response); 
              if(response.data[0])
                //use script to display your content 
            alert("not Liked");
              else
                //just do nothing, display like button alert("Not yet liked");
            alert("Liked");
          }
        );

    });

}

</script>

</body>

<script>
     

        
 // get set attribute base code 

   div1 = document.getElementById("api");
   attributID = div1.getAttribute("data-href"); 
        div1.removeAttribute('data-href');
      
;
 var i=0;
            var ch=(passedArray[i]);
           div1.setAttribute('data-href',ch);
    
  
             newid = div1.getAttribute("data-href");
            //console.log(newid);
            //document.write(newid);
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

