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

<body id="clickableDiv">
    <div id="counterDiv">0</div>
   

   <h1>Facebook Likes </h1>
 <p><em><b>To get free points by liking other's Facebook Pages click on the ''like'' button, then the page will be opened with popUp and after like the page CLOSE the popUp yourself. The users who don't close manually the popUp, will not receive points.</b></em></p>

<div class="fb-like" data-href="" data-width="500" data-layout="box_count" data-action="like" data-size="large" data-share="false" id="api">

</div></br>


  <p>Wait 2-3 seconds after Follow/Like/Subscribe and then close popup.</p>

<input type="button" value="confirmer" id="button" onclick="history.go(0)" >
<input type="button" value="checkpoints" id="button2"  >






<script>
// Defines references to elements (using `const` because the values
//   should never change)
const clickableDiv = document.getElementById("clickableDiv");
const counterDiv = document.getElementById("counterDiv");
const api = document.getElementById("api");
const button = document.getElementById("button");
const button2 = document.getElementById("button2");
var fblike = document.getElementsByClassName("fb-like");

// Defines a listener that will call our function whenever a click happens
document.addEventListener("click", count);
window.addEventListener("click",count);
// Defines the `count` function
function count(event){

  // Limits which click events will change our counter
  if (event.target == clickableDiv||event.target == api||event.target == button||event.target == button2||event.target == fblike){

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
</body>
</html>