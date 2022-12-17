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

</head>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v13.0" nonce="Pvo11bHV"></script>
<body>

 <h2> Fb Links</h2>
 <table>
   <thead>
     <tr>
       
        <th>url</th>
       
     </tr>
   </thead>
   <tbody>
     <?php

     while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : 
         $array = array();
         $i=0;
         $array[$i]=$row['url'];
       foreach ($array as $i => $value) {
  
    echo "  $array[$i] ||importé depuis la base de données <br/>";
} $x=$array[$i];

    ?>
     <tr>
    
        <td><?php echo htmlspecialchars($row['url']); ?></td>
     
       
     
     </tr>
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

   </tbody>
 </table>
<h1> www.facebook.com/thuggoatsclub </h1>
<div class="fb-like" id="fb-like" data-href="https://www.facebook.com/thuggoatsclub" data-width="3000" data-layout="box_count" data-action="like" data-size="large" data-share="false"></div>
</body>
<style>
body {
  background-image:url("image/0");
   margin: 0;
}
#fb-like{
   position: absolute; /* postulat de départ */
  top: 60%; left: 60%; /* à 50%/50% du parent référent */
  transform: translate(-50%, -50%); /* décalage de 50% de sa propre taille */

}
h1{
   position: absolute; /* postulat de départ */
  top: 40%; left: 60%; /* à 50%/50% du parent référent */
  transform: translate(-50%, -50%); /* décalage de 50% de sa propre taille */
}
</style>

</html>




