<?php
 include 'cnx.php';
if(isset($_GET['delc'])){
    
    $id = $_GET['delc'];


    mysqli_query($con, "DELETE FROM cours WHERE id_cour=$id");
    header('location: cours.php');
    }

?>