
<!doctype html>
<html> 
<head> <title> Add </title> </head>
<script type="text/javascript" src="controle.js"></script>
<body>

<?php
session_start();
    // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
    if(!isset($_SESSION["username"])){
        header("Location: login.php");
        exit(); 
}
require('config.php');


if (isset($_POST['type'],$_POST['title'],$_POST['url'],$_POST['totalclicks'],$_POST['dailyclicks'],$_POST['email']
    ,$_POST['cpc']))
 
    {


    
 
    //requéte SQL + mot de passe crypté

                $title = $_POST['title'];
                $url = $_POST['url'];
                $totalclicks = $_POST['totalclicks'];
                $dailyclicks = $_POST['dailyclicks'];
                $cpc = $_POST['cpc'];
                $title = mysqli_real_escape_string($conn, $title);
                $url = mysqli_real_escape_string($conn, $url);
                $totalclicks = mysqli_real_escape_string($conn, $totalclicks);
                $dailyclicks = mysqli_real_escape_string($conn, $dailyclicks);
                $url = mysqli_real_escape_string($conn, $url);
                $username=$_SESSION['username'];
                 $username = mysqli_real_escape_string($conn, $username);
                 $email=$_POST['email'];
                 $email = mysqli_real_escape_string($conn, $email);
                

 $query = "INSERT into `fb_likes` (email,username,title,url,totalclicks,dailyclicks,cpc)
              VALUES ('$email',' $username', '$title','$url','$totalclicks','$dailyclicks','$cpc')";
            
    // Exécuter la requête sur la base de données
    
    $res = mysqli_query($conn, $query);
   if($res){
       echo "<div class='sucess'>
             <h3>felecitations , lien ajouté avec succes</h3>
             <p>  <a href='acceuil.php'>Go Home</a></p>
             </div>";
    }
    


 } ?>
    <h1> ajouter des liens </h1>
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>


 
<form action="" method="POST" >
  <div class="form">
    <label for="email">Enter  email:</label>

<input type="email" id="email" name="email"
        size="30" required>
    <label for="type">Type:</label>

<select name="type" id="type"> 
    <option value="">--Please choose an option--</option>
    <option value="fb likes ">fb likes</option>
    <option value="fb share">fb shares </option>

    <option value="instagram followers">instagram followers</option>
    <option value="instagram likes ">instagram likes </option>

    <option value="twitter followers ">twitter followers </option>
    <option value="twitter tweets ">twitter tweets </option>
 

     <option value="youtube likes ">youtube likes</option>
     <option value="youtube views ">youtube subs </option>
</select> 

<br />
 <label for="title"> title: </label>
    <input type="text" name="title" id="title" required>
<label for="url"> page url: </label>
    <input type="text" name="url" id="url" required>
<label for="totalclicks"> total clicks: </label>
    <input type="text" name="totalclicks" id="totalclicks" required><button class="onoff" onclick="onoff(this)"><div>off</div></button>
      <label for="dailyclicks"> daily clicks: </label>
    <input type="text" name="dailyclicks" id="dailyclicks" required><button class="onoff" onclick="onoff(this)"><div>off</div></button>

<label for ="cpc" name="cpc" value="cpc" /> cpc </label>
<input type="number" name="cpc" placeholder="Cost (points) Per Click for your Site/Page - min=5 and max=50" />
   
  </div>  
 
    <input type="submit" value="save "> <input type="reset" value="cancel">
 
</form>

    <p>   <a href='acceuil.php'>Go Home </p>
</body>
<style>
label,
footer {
    font-family: sans-serif;
}

label {
    font-size: 1rem;
    padding-right: 10px;
}

select {
    font-size: .9rem;
    padding: 2px 5px;
}

footer {
    font-size: .8rem;
    position: absolute;
    bottom: 30px;
    left: 30px;
}

.output {
    background: center/cover no-repeat url('/media/cc0-images/hamster.jpg');
    position: relative;
}

form.form {
    display: table;
}

div.form-example {
    display: table-row;
}

label, input {
    display: table-cell;
    margin-bottom: 10px;
}

label {
    padding-right: 10px;
}
.onoff
{
  width:32px;
  height:32px;
  padding:1px 2px 3px 3px;  
  font-size:12px;
  background:lightgray;
  text-align:center;    
}
.onoff div
{
  width:18px;
  height:18px;
  min-height:18px;  
  background:lightgray;
  overflow:hidden;
  border-top:1px solid gray;
  border-right:1px solid white;
  border-bottom:1px solid white;
  border-left:1px solid gray;           
  margin:0 auto;
  color:gray;
}
input:valid {
  background-color: #ddffdd;
}
input:invalid {
  background-color: #ffdddd;
}

form:invalid {
  border: 5px solid #ffdddd;
}

input:valid {
  background-color: #ddffdd;
}

form:valid {
  border: 5px solid #ddffdd;
}

input:required {
  border-color: #800000;
  border-width: 3px;
}

input:required:valid {
  border-color: #008000;
}
</style>

</html> 