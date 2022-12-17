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
<!doctype html>
	<html>
	<head>
		<meta charset="utf-8">
		<script type="text/javascript"></script>
     <title>test fetching </title>
     
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
 
 

<p> celui qui ne fonctionne pas : (avec</p></br>



     </body>
</html>