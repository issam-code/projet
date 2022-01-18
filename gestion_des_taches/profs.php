<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professeurs</title>
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
  <script src="style/jquery.min.js"></script>
  <script src="style/bootstrap/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="style/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="style/css/adminlte.min.css">
</head>
<body  id="page-top"  style="  background-color: #b3bfcc5c;">
<div id="wrapper">
        
          <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion col-md-2 col-sm-2" id="accordionSidebar">

          <?php include 'nav.php';?>
         
          </ul>

          <div class="container-fluid col-md-10 col-sm-10">
                      
            <?php include('gerer_prof.php'); ?>
            
            <div style=" padding-top: 65px;" >
                <!-- USERS LIST -->
                <div class="card container" style="padding-top:7px; height: auto; width:100%;">
                  <div class="  card-header "  >
                  <h3 class="card-title col-md-6 col-sm-6 " style="padding-top:7px;">Professeurs</h3>
                
                    <button style="float:right;" type="button" class="btn btn-primary col-md-6 col-sm-6  container" data-toggle="modal" data-target="#add_prof">
                    Ajouter Prof
                    </button>

                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0" >
                    <ul class="users-list clearfix" id="tab">
                    <?php
                    include 'cnx.php';
                        $req = "SELECT * FROM utilisateur where profession = 'Professeur'";
                        $t = mysqli_query($con,$req);
                          foreach($t as $row) { 
                            ?>
                    <li>
                    
                       <img src="images/<?php echo $row['image'];?>" style="width: 90px;" alt="User Image">
                          <a class="users-list-name" >
                            <?php echo $row['nom'] ." ".$row['prenom'];?>
                          </a>
                   
                            <span class="users-list-date"><?php echo $row['matiere'];?></span>
                       
                          <a data-toggle="modal" data-target="#del_<?php echo $row['id_utilisateur']; ?>" href="#del_<?php echo $row['id_utilisateur']; ?>" ><img src="images/delete.png" style="width: 30px;"></a>
                      </li>
                      <div class="modal" id="del_<?php echo $row['id_utilisateur']; ?>">
                         <div class="col-md-3 container my-5" style="background-color:whitesmoke;     width: 350px; height: 150px;">
                             <div class=" card-body ">
 
                             <form class="frmm" action="del_pr.php?del=<?php echo $row['id_utilisateur'];?>" method="post">                                             <center><h6>Confirmation de Suppression</h6>
                                             <br>
                                             <button style="text-align: center;" type="submit" name="btn2" class="btn btn-primary col-md-5 ">Supprimer</button></center>
                                         </form>
                             </div><br>
                        </div>
                      </div>
                      <?php include('gerer_prof.php'); ?>
                      <?php }?>
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              
              </div>
    </div>
    <?php include 'diconnect.php';?>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
</body>
</html>
