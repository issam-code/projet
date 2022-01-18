<?php
            include 'cnx.php';
        
            session_start();
           
        if($_GET["del"]){
    
              $id = $_GET["del"];
          
          echo $id;
              mysqli_query($con, "DELETE FROM taches WHERE id_tache='".$id."'");
              } 
              else{
                     
                     
                     
                     
                     
                     mysqli_query($con, "INSERT INTO taches (id_utilisateur,id_classe,nom_tache,description,matiere,
                        date_pub)  VALUES('".$_SESSION['id']."','".$_SESSION["id_classe"]."','".$_POST["nomt"]."',
                           '".$_POST["description"]."' , '".$_SESSION['mat']."', sysdate())");
                    
                                  
            }
            
              
            header('location:taches.php');

    ?>