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
<!DOCTYPE html>
<html>
<head>Bonsoir</head>

<body>

 <h1>Users / Fb Links</h1>
 <table>
   <thead>
     <tr>
       <th>email</th>
       <th>username</th>
        <th>title</th>
        <th>url</th>
       <th> totalclicks </th>
       <th> dailyclicks </th>
         <th> cpc </th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
        <td><?php echo htmlspecialchars($row['email']); ?></td>
        <td><?php echo htmlspecialchars($row['username']); ?></td>
        <td><?php echo htmlspecialchars($row['title']); ?></td>
        <td><?php echo htmlspecialchars($row['url']); ?></td>
        <td><?php echo htmlspecialchars($row['totalclicks']); ?></td>
        <td><?php echo htmlspecialchars($row['dailyclicks']); ?></td>
        <td><?php echo htmlspecialchars($row['cpc']); ?></td>
       
     
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
</body>
</html


