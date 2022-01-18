<?php
session_start();
include 'cnx.php';
if($_GET["del"]){
    
    $id = $_GET["del"];
echo $id;
    mysqli_query($con, "DELETE FROM utilisateur WHERE id_utilisateur= ".$id."");
    }
    

        header('location:groupe_etud.php?id=0');
    


    ?>