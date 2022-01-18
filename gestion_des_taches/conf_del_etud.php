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