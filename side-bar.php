
<div class="sidebar">
<p id="sidebar-title">    </p>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "loginsysteme";
$db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$select = $db->prepare("SELECT *FROM `products` ORDER BY id DESC LIMIT 0,2");
$select->execute(); 
while($s=$select->fetch(PDO::FETCH_OBJ)){
    $lenght=30;
      $description = $s->description;
      $new_description = substr($description,0,$lenght)."...";
      $description_finale = wordwrap($new_description,20,'<br/>',true); 
     ?>
     
     <img src="image/<?php echo $s->title;?>.jpg"/>
 <h2> <?php echo $s->title;?> 
  <?php echo $description_finale;?>
  <?php echo $s->price;?> DT </h2>
    <?php
}
?>
</div>
<style>
.sidebar{
    margin-top: 20px;
    height: 10px;
    width: 300px;

    margin-left : 200px;
}
#sidebar-title{
    font-family : Brush Script MT, Brush Script Std, cursive;
    font-size : 50px;
    text-align:center;
}
img{
    height: 100px;
}
</style>
 


