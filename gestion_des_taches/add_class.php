

<div class="modal" id="add_class">
    <div  class="col-md-5 container my-5 " >
        <div class="card">  
            <div class="card-header text-center">
                    <h3>Add Class</h3>	
            </div>
            <div class=" card-body ">
                <form class="frmm" method="post">
                    
                    <div class=" form-group">
                        <label></label>
                        <input name="nom_class" type="text" class="form-control" placeholder="Name Class" required>
                    </div>
                    <div class="card-footer">
                    <button type="submit" name="btn" class="btn btn-primary container">Add</button>
                    </div>
                </form>
            </div><br>
        </div>
    </div>
</div>



    <?php
            include 'cnx.php';
        

            if(isset($_POST['btn'])){

            mysqli_query($con, "INSERT INTO classe (id_utilisateur,nom_classe)  VALUES(15,'".$_POST["nom_class"]."')");
        

            }

    ?>