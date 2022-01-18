<?php
include 'cnx.php';
if($_GET["del"]){
    
    $id = $_GET["del"];

echo $id;
    mysqli_query($con, "DELETE FROM utilisateur WHERE id_utilisateur='".$id."'");
    }
    if($_GET["edit"]){
    
        $id = $_GET["edit"];
        $a=mysqli_query($con, "UPDATE  utilisateur  SET  nom='".$_POST["nom"]."',prenom='".$_POST["prenom"]."',mail='".$_POST["mail"]."',matiere='".$_POST["matiere"]."' where id_utilisateur='".$id."' ");
           

        }

header('location:profs.php');
    ?>