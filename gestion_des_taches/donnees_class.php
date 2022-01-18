<?php
            include 'cnx.php';
        

            if($_GET["edit"]){
    
            $id = $_GET["edit"];
            $a=mysqli_query($con, "UPDATE  classe  SET  nom_classe='".$_POST["nom"]."' where nom_classe='".$id."' ");
               

            }
            if($_GET["del"]){
    
                $id = $_GET["del"];
            
            
                mysqli_query($con, "DELETE FROM classe WHERE nom_classe='".$id."'");
                }
           
                header('location: classe.php');
    ?>