<?php
include 'cnx.php';
 session_start();

   $pass=password_hash($_POST['pass'], PASSWORD_DEFAULT);
   $profession="Etudiant";
   $img="a.png";
    if(mysqli_query($con, "INSERT INTO utilisateur (mail,mot_pass,id_classe,nom,prenom,profession,image)  
    VALUES('".$_POST["mail"]."','".$pass."','".$_POST["classe"]."','".$_POST["nom"]."',
    '".$_POST["prenom"]."','".$profession."','".$img."')")){

      

       
   $_SESSION["msg"] = "Inscription bien effectuee";
    
    
    }
    else{
       
        $_SESSION["msg"] = "Echec inscription";
    }
    header('location: index.php');

    ?>