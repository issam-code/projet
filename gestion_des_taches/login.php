<?php
include 'cnx.php';
session_start();
$user=$_POST['mail'];
$pass=$_POST['pass'];

$requet="SELECT * FROM utilisateur ";
$result = mysqli_query($con,$requet);  
$test='false';
while($ligne = mysqli_fetch_array($result))
			{
				
				if(($user==$ligne[1])&&(password_verify($pass,$ligne[2])))
				{
					
					$test="true";
    
					$_SESSION["id"]=$ligne[0];
					$_SESSION["id_classe"]=$ligne[7];
					$_SESSION["nom"]=$ligne[3];
					$_SESSION["prenom"]=$ligne[4];
					$_SESSION["mat"]=$ligne[5];
					if($ligne[8]=='Admin'){
						header('location:home.php');
					}
					if($ligne[8]=='Professeur'){
						header('location:home_pr.php');
					}
					if($ligne[8]=='Etudiant'){
						header('location:home_etud.php');
					}
					
				}
			}
		if($test=="false")
		{
			$_SESSION["login"]="email ou mot de passe incorrect !";
			header('location:index.php');
		}
	


?>
