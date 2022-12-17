<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: acceuil.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>

		<h2>C'est votre tableau de bord.</h2>
		<h3> felicitations t'as gagné un bonus d'inscription </h3>
		<h3> votre base points est de : 50 </h3>

		<a href="logout.php">Déconnexion</a> </br>
		<a href=" acceuil.php")>continuer vers like4hits</a>
		
		</div>
	</body>
</html>