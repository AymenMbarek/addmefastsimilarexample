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
<!doctype html>
  
<html>
<head>
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
  
<title> titre </title>
</head>
<body>
  <?php
  $j=0;
$i=0;

$pt=strtoupper("points a gagné avec cet url");
  $basetab=array();
    $cpctab=array();
          
          $tableau_php = array(); 
while($roww =  $cpcrequest->fetch(PDO::FETCH_ASSOC)) : //fetching the base points from the database
  
    $basetab[$j]=$roww['cpc'];
    $j++;
    foreach ($basetab as $j => $value) {
        
           echo " votre base points $basetab[$j]     importé depuis BD <br/>";  
       }?> <?php endwhile;
     while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : 
            
       
          $i++;
          $tableau_php[$i]=$row['url'];

          $cpctab[$i]=$row['cpc'];
  /*  
    foreach ($tableau_php as $i => $value) {
        
           echo "  $tableau_php[$i]  || $pt :  $cpctab[$i]   importé depuis BD <br/>";  
                                       
                                        } */
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
   var passedArray =   <?php echo json_encode($tableau_php); ?>;
   var cpcarray=  <?php echo json_encode($cpctab); ?>;
   var basetab= <?php echo json_encode($basetab); ?>;
 </script>
<div class="fb-like" data-href="" data-width="500" data-layout="box_count" data-action="like" data-size="large" data-lazy="false" data-share="false" id="api"></div>
<div id="clickableDiv" >Click me</div>
<div id="counterDiv">0</div>
<style>
di {
  float: left;
  width: 25%;
  height: 2em;
  padding: 1em;
  text-align: center;
  font-weight: bold;
  border: 1px solid grey;
  }
</style>
<script>
// Defines references to elements (using `const` because the values
//   should never change)
const clickableDiv = document.getElementById("clickableDiv");
const counterDiv = document.getElementById("counterDiv");

// Defines a listener that will call our function whenever a click happens
document.addEventListener("click", count);

// Defines the `count` function
function count(event){

  // Limits which click events will change our counter
  if (event.target == clickableDiv){

    // Declares variables to hold numbers (using `let` in case we 
    //   might want to change the values later)
    let oldCount;
    let newCount;

    // Assumes the HTML content of counterDiv looks like a number, 
    // gets that number, and stores it in oldCount
    oldCount = parseInt(counterDiv.innerHTML);

    // Adds 1 to the number stored in oldCount, and stores the result 
    //   in newCount
    newCount = oldCount + 1;

    // Makes a string from the number (not strictly necessary) 
    //   and replaces the HTML content of counterDiv with that string
    counterDiv.innerHTML = newCount.toString();

  }
}
</script>
<?php 
foreach ($tableau_php as $i => $value) {
        
           echo "  tu vas gagner  $cpctab[$i] points  pour liker cet url : $tableau_php[$i] <br/>";  
           }

       
      
   ?>

</body>