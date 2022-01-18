

<div class="modal" id="add_class" >
    <div  class="col-md-5 container my-5 " >
        <div class="card">  
            <div class="card-header text-center">
                    <h3>Ajouter Classe</h3>	
            </div>
            <div class=" card-body " >
                <form class="frmm" method="post">
                    <div class=" form-group">
                        <label></label>
                        <input name="nom_class" type="text" class="form-control" placeholder="Name Class" required>
                    </div>
                    <div class="card-footer">
                    <button type="submit" name="btn1" class="btn btn-primary container">Ajouter</button>
                    </div>
                </form>
            </div><br>
        </div>
    </div>
</div>

    <div class="modal" id="del_<?php echo $row['nom_classe']; ?>">
                         <div class="col-md-3 container my-5" style="background-color:whitesmoke;     width: 350px; height: 150px;">
                             <div class=" card-body ">
 
                                         <form class="frmm" action="donnees_class.php?del=<?php echo $row['nom_classe'];?>" method="post">
                                             <center><h6>Confirmation de Suppression</h6>
                                             <br>
                                             <button style="text-align: center;" type="submit" name="btn2" class="btn btn-primary col-md-5 ">Supprimer</button></center>
                                         </form>
                             </div><br>
       </div>
     </div>

    <div class="modal" id="edit_<?php echo $row['nom_classe']; ?>" >
        <div class="col-md-5 container my-5" style="background-color:whitesmoke">
            <div class=" card-body ">

                <form class="frmm" action="donnees_class.php?edit=<?php echo $row['nom_classe'];?>" method="post">
                    <h1>Update Informations</h1>
                    
                    <div class=" form-group">
                        <label></label>
                        <input name="nom" type="text" class="form-control"  value="<?php echo $row['nom_classe']; ?>" required>
                    </div>
                   

                    <button type="submit" name="btn3" class="btn btn-primary container">Update</button>
                </form>
            </div><br>
        </div>
    </div>


    <?php
    
    if(isset($_POST['btn1'])){
        include 'cnx.php';

mysqli_query($con, "INSERT INTO classe (nom_classe)  VALUES('".$_POST["nom_class"]."')");


}
?>