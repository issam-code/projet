<div class="modal" id="add_prof">
    <div  class="col-md-5 container my-5 " >
    <div class="card" style="height: 650px; width: 530px;">
            <div class="card-header text-center"> 
                <h3>Ajouter Prof</h3>   
            </div>
        <div class=" card-body ">
            <form   method="post">
                <div class=" form-group">
                    <label></label>
                    <input name="mail1" type="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label></label>
                    <input name="nom1" type="text" class="form-control" placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <label></label>
                    <input name="prenom1" type="text" class="form-control" placeholder="Prenom" required>
                </div>
                <div class="form-group">
                    <label></label>
                    <input name="matiere1" type="text" class="form-control" placeholder="Matiere" required>
                </div>
                <div class="form-group"><br>
                    <select class="form-control"  name="classe1" >
                    <option selected>Choisir un classe</option>
                    <?php
                    include 'cnx.php';
                    $sql = "select * from classe ";
                    $t=$con->query($sql);
                      
                    foreach ($t as $row) { 
                ?>
                            <option value="<?php echo $row['id_classe']; ?>"><?php echo $row['nom_classe']; ?></option>
                            <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label></label>
                    <input name="pass1" type="password" class="form-control" placeholder="Mot de passe" required>
                    <label></label>
                </div>
                <button type="submit" name="btn" class="btn btn-primary container">Ajouter</button>
            </form>
        </div>
        </div>
</div>
</div>





<div class="modal" id="del_<?php echo $row['id_utilisateur']; ?>">
                        <div class="col-md-5 container my-5" style="background-color:whitesmoke">
                            <div class=" card-body ">

                                        <form class="frmm" action="del_etud.php?del=<?php echo $row['id_utilisateur'];?>" method="post">
                                            <h1>Confirmation de Suppression</h1>
                                            <br><br><br>
                                            <button type="submit" name="btn2" class="btn btn-primary col-md-3 ">Delete</button>
                                        </form>
                            </div><br>
                    </div>
                </div>

    <?php
            include 'cnx.php';
 
            if(isset($_POST['btn'])){
            $pass=password_hash($_POST['pass1'], PASSWORD_DEFAULT);
                $profession='Professeur';
                $img="a.png";
                mysqli_query($con, "INSERT INTO utilisateur (id_classe,mail,mot_pass,matiere,nom,prenom,profession,image)
                  VALUES('".$_POST["classe1"]."','".$_POST["mail1"]."','".$pass."','".$_POST["matiere1"]."','".$_POST["nom1"]."',
                  '".$_POST["prenom1"]."','".$profession."','".$img."')");
            }

   

    ?>