

<div class="modal" id="add_cour" >
    <div  class="col-md-5 container my-5 " >
        <div class="card">  
            <div class="card-header text-center">
                    <h3>Ajouter Cour</h3>	
            </div>
            <div class=" card-body " >
                <form class="frmm" method="post" enctype="multipart/form-data">
                <div class=" form-group" >
                <label ></label>
                    <input type="file" name="cour">
                </div>
                    <div class=" form-group">
                        <label></label>
                        <input name="nom_cour" type="text" class="form-control" placeholder="Nom cour" required>
                    </div>
                    
                    <div class="card-footer">
                    <button type="submit" name="btnc" class="btn btn-primary container">Ajouter</button>
                    </div>
                </form>
            </div><br>
        </div>
    </div>
</div>

    <div class="modal" id="del_<?php echo $row['id_cour']; ?>">
                         <div class="col-md-3 container my-5" style="background-color:whitesmoke;     width: 350px; height: 150px;">
                             <div class=" card-body ">
 
                                         <form class="frmm" action="delete_cour.php?delc=<?php echo $row['id_cour'];?>" method="post">
                                        
                                             <center><h6>Confirmation de Suppression</h6>
                                             <br>
                                             <button style="text-align: center;" type="submit" name="btn2" class="btn btn-primary col-md-5 ">Supprimer</button></center>
                                            
                                         </form>
                             </div><br>
       </div>
     </div>
     <div class="modal" id="download_<?php echo $row['id_cour']; ?>">
                         <div class="col-md-3 container my-5" style="background-color:whitesmoke;     width: 350px; height: 150px;">
                             <div class=" card-body ">
 
                                         <form class="frmm">
                                             <center><h5><?php echo $row['nom_cour']; ?></h5>
                                             <br>
                                             <a href="http://localhost/gestion/files/<?php echo $row['file']; ?>" class="btn btn-primary col-md-5 "  download>Telecharger</a>
                                             
                                         </form>
                             </div><br>
       </div>
     </div>

   
    <?php

    if(isset($_POST['btnc'])){
        include 'cnx.php';
        
                            
       
        $sql = "SELECT * from utilisateur where id_utilisateur=".$_SESSION['id'];
        $t=$con->query($sql); 
        foreach ($t as $row) { 
       
                                        
if($_FILES['cour']['name']){
    $targetDir = "files/";
    $fileName = rand(1,300)."-".$_FILES['cour']['name'];
    $targetFilePath = $targetDir . $fileName;
    $extension = pathinfo($fileName, PATHINFO_EXTENSION);
    
    mysqli_query($con, "INSERT INTO cours (id_utilisateur,id_classe,nom_cour,matiere,
         file,date_cour)  VALUES('".$_SESSION['id']."','".$_SESSION["id_classe"]."','".$_POST["nom_cour"]."',
          '".$row['matiere']."', '".$fileName."' ,sysdate())");
    move_uploaded_file($_FILES['cour']['tmp_name'], $targetFilePath);
     }            
}
}

?>