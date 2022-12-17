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
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v13.0&appId=677693956781379&autoLogAppEvents=1" nonce="nrecm0Kp"></script> 

  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

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

  echo "Le tableau contient ".count($tableau_php)." éléments";


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
var t= <?php echo json_encode(count($tableau_php)); ?>;
console.log(t);
   var cpcarray=  <?php echo json_encode($cpctab); ?>;
   var basetab= <?php echo json_encode($basetab); ?>;
// Display the array elements

   //document.write(passedArray[1]);
  //  document.write(cpcarray[0]);
  //  document.write(basetab[0]);



    

</script>
  <div class="fb-root" >
   <h2>Facebook Likes </h2>
 <p><em><b>To get free points by liking other's Facebook Pages click on the ''like'' button, then the page will be opened with popUp and after like the page CLOSE the popUp yourself. The users who don't close manually the popUp, will not receive points.</b></em></p>

<div class="fb-like" data-href="" data-width="500" data-layout="box_count" data-action="like" data-size="large" data-lazy="false" data-share="false" id="api"></div> </br><?php /*
foreach ($tableau_php as $i => $value) {
        
           echo "  tu vas gagner  $cpctab[$i] points  pour liker cet url : $tableau_php[$i] <br/>";  
           }

       
      
 */  ?>
</br>
      

<?php  foreach ($basetab as $j => $value) {
        
           echo " votre nouveau base  points est de $basetab[$j]     importé depuis BD <br/>";  
       } ?>
  <p>Wait 2-3 seconds after Follow/Like/Subscribe and then close popup.</p></br>
<input type="button" value="confirmer" id="refreshbtn" onclick="history.go(0)" ></br>

</div>
</head>
<button id="h" onclick="reveal()"> Increment</button>
 <table>
        <tr><td><textarea id="z">1</textarea></td></tr>
    </table>

</body>
<footer><h3>  <a href="../acceuil.php"> return home </h3></footer>
    <script type="text/javascript">
  var passedArray =   <?php echo json_encode($tableau_php); ?>;
var t= <?php echo json_encode(count($tableau_php)); ?>;
console.log(t);
    //Get the last value
    var current = parseInt(location.hash.slice(1));
    //If it is set, increment it
    if(current){
        document.getElementById("z").value = current ;
        location.hash = '#' + (current+1);
    } if ( current >= parseInt(t))
    {
         document.getElementById("z").value = 0;
          location.hash = '#' - (t);
    }

    function reveal() {

        var val = document.getElementById("z").value;
        var result = parseInt(val) + parseInt(1);

        document.getElementById("z").value = result;
        //Set the value
        location.hash = '#' + result;

  div1 = document.getElementById("api");  //change the data href base from the api with database url
   attributID = div1.getAttribute("data-href"); 
     var passedArray =   <?php echo json_encode($tableau_php); ?>;
     


    div1.removeAttribute('data-href');

var    ch=(passedArray[result]);

           div1.setAttribute('data-href',ch);
           newid = div1.getAttribute("data-href");
         
        console.log("indice de lien ",result);
    }

    </script>
<script>/*
   FB.api('/me', {fields: 'last_name'}, function(response) {
  console.log(response);
});*/
</script>


<script>
    
    function addpoints()// affichage de base points synchroniées avec l'id d'utilisateur , username
    {

   var cpcarray=  <?php echo json_encode($cpctab); ?>;
   var basetab= <?php echo json_encode($basetab); ?>;

  var y= basetab[0]+cpcarray[0];
  <?php $sql3="UPDATE basepoints SET cpc=cpc+1";
   $pdo = new PDO($dsn, $username, $password);
   $pdo->query($sql3);
   echo " $basetab[0] ";
    ?>
    alert("points ajouté avec succes")
    }
    
</script>
<script>
     

        
 // get set attribute base code 

   //div1 = document.getElementById("api");  //change the data href base from the api with database url
   //attributID = div1.getAttribute("data-href"); 
       // div1.removeAttribute('data-href');
      



   //let x=0;
//window.addEventListener("load", function() {
   // alert(' points ajouté avec succes');
 
 // x++;
            //var ch=(passedArray[x]);
          // div1.setAttribute('data-href',ch);
    
  
           //  newid = div1.getAttribute("data-href");
            //console.log(newid);
            //document.write(newid);
            // Display the array elements


//});  
</script>
<script>



   /*  div1 = document.getElementById("api");  //change the data href base from the api with database url
   attributID = div1.getAttribute("data-href"); 
    
    div1.removeAttribute('data-href');*/
     window.addEventListener("load", reveal); 
 var passedArray =   <?php echo json_encode($tableau_php); ?>;
 console.log(passedArray.length);
    alert(' points ajouté avec succes');
 



/*
 //check for Navigation Timing API support
if (window.performance) {
   
console.info("window.performance works fine on this browser");
} 
console.info(performance.navigation.type);
if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
console.info( "This page is reloaded" );



     
 var    ch=(passedArray[z]);

           div1.setAttribute('data-href',ch);
           newid = div1.getAttribute("data-href");
         
        console.log("indice de lien ",z);

        //document.write(newid);
        // Display the array elements
} else {
console.info( "This page is not reloaded");
ch=(passedArray[z]);
         //  div1.setAttribute('data-href',ch);
         //  newid = div1.getAttribute("data-href");
}
*/
</script>
    
<?php

  /*
 foreach ($tableau_php as $i => $value) {
        
           echo "  $tableau_php[$i]  | <br/>"; 
            }*/ ?>
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
#h,#z {
    visibility: hidden;
}
</style>

</html>

