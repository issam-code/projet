

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CLOSSROOM</title>
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
  <script src="style/jquery.min.js"></script>
  <script src="style/bootstrap/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="style/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="style/css/adminlte.min.css">


 

</head>

<body id="page-top" style="  background-color: #b3bfcc5c;">

    <!-- Page Wrapper -->
        <div id="wrapper">
        
          <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion col-md-2 col-sm-2" id="accordionSidebar">

            <?php include 'nav_etud.php';?>
           
            </ul>

            <div class="container-fluid col-md-10 col-sm-10">
              

            <div style=" padding-top: 65px;">
            
            <!-- USERS LIST -->
            <div class="card container" style="padding-top:7px; height: auto; width:100%">
              <div class="  card-header ">
              <h3 class="card-title col-md-6 col-sm-6 " style="padding-top:7px;">
                    Etudiants 
                    <?php  
                    $req = "SELECT * FROM classe where id_classe=".$_SESSION['id_classe'];
                    $t = mysqli_query($con,$req);
                    foreach($t as $row) { echo $row['nom_classe']; }
                     ?>
              </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="users-list clearfix" id="tab">
                <?php
                include 'cnx.php';
                
                    $req = "SELECT * FROM utilisateur where profession = 'Etudiant' and id_classe=".$_SESSION['id_classe'];
                    $t = mysqli_query($con,$req);
                      foreach($t as $row) { 
                        ?>
                <li>
            
                   <img src="images/<?php echo $row['image'] ;?>" style="width: 90px;" alt="User Image">
                      <a class="users-list-name" ><?php echo $row['nom'] ." ".$row['prenom'];?></a>
                 </li>

                
                
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

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <?php include 'diconnect.php';?>
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