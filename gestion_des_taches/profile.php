<!-- The Modal -->
<div class="modal" id="profil">
<div class="card" style="height: 610px; width:500px; margin-left: auto; margin-right: auto; margin-top:20px;">
            <div class="card-header text-center">
            <h3>Modifier profile</h3>   
            </div>
        <div class=" card-body ">
        <form  method="post"  enctype="multipart/form-data">
                    <?php
                    include 'cnx.php';
                    $sql = "SELECT * from utilisateur where id_utilisateur='".$_SESSION['id']."' ";
                    $t=$con->query($sql); 
                    foreach ($t as $row) { 
                ?><br>
                <div class=" form-group" >
                <label ></label>
                    <input type="file" name="img">
                </div>
                    <div class=" form-group">
                        <label></label>
                        <input name="mail" type="text" class="form-control"  value="<?php echo $row['mail']; ?>" >
                    </div>
                    <div class="form-group">
                        <label></label>
                        <input name="nom" type="text" class="form-control" value="<?php echo $row['nom']; ?>" >
                    </div>
                    <div class="form-group">
                        <label></label>
                        <input name="prenom" type="text" class="form-control" value="<?php echo $row['prenom']; ?>" >
                    </div>
                    <div class="form-group">
                        <label></label>
                        <input  name="passn" placeholder="nouveau mot de passe" type="password" class="form-control" >
                    </div>
                     <div class="form-group">
                        <label></label>
                        <input  name="passo" placeholder="mot de passe" type="password" class="form-control" required >
                    </div>
                    <?php } ?>
                    <button type="submit" name="btna" class="btn btn-primary container">Modifier</button>
                </form>
        </div>
        </div>
    </div>
    <?php 
            if(isset($_POST['btna'])){
                include 'cnx.php';
                $targetDir = "images/";
                $fileName = $_SESSION['id'].".png";
                $targetFilePath = $targetDir . $fileName;
                $passn=password_hash($_POST['passn'], PASSWORD_DEFAULT);
                $passo=$_POST['passo'];
                $result = mysqli_query($con,"SELECT * FROM utilisateur ");  
                while($ligne = mysqli_fetch_array($result))
                            {
				if(password_verify($passo,$ligne[2])){
                mysqli_query($con, "UPDATE  utilisateur  SET  image='".$fileName."',mail='".$_POST["mail"]."',
                nom='".$_POST["nom"]."',prenom='".$_POST["prenom"]."' where id_utilisateur=".$_SESSION['id']);
                move_uploaded_file($_FILES['img']['tmp_name'], $targetFilePath);
                if($_POST['passn']){
                    mysqli_query($con, "UPDATE  utilisateur  SET mot_pass='".$passn."' where id_utilisateur=".$_SESSION['id']);
                }
                if($ligne[2]=='Admin'){header('loction:home.php');}
                if($ligne[2]=='Etudiant'){header('loction:home_etud.php');}
                if($ligne[2]=='Professeur'){header('loction:home_pr.php');}
                            }
                        }
            }
    ?>