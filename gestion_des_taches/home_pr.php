


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CLOSSROOM</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <!-- Bootstrap core JavaScript-->
     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 

</head>

<body id="page-top" style="  background-color: #b3bfcc5c;">

    <!-- Page Wrapper -->
        <div id="wrapper">
        
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion col-md-2 col-sm-2" id="accordionSidebar">

                <?php include 'nav_pr.php';?>
                
                </ul>
            
                <div class="container-fluid col-md-10 col-sm-10">
                
                <center> 
           <!-- <marquee behavior="alternate" >  -->
                    <h1 class="display-2"  style="    margin-top: 80px; margin-bottom: 100px;"> 
                    Bienvenue <?php foreach ($t as $row) { echo $row['nom'];}?>
                  </h1>
        
                </center><br><br><br>
                    <!-- Content Row -->
                    <div class="row "  >

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4" style="    margin-right: 130px;">
                            <div class="card border-left-primary shadow h-100 py-2" style="width: 300px;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Les Etudiants</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php 
                            
                                                $req = "SELECT * FROM utilisateur where profession = 'Etudiant' and id_classe=".$_SESSION["id_classe"];
                                                $exec = mysqli_query($con,$req);
                                                $num = $exec->num_rows;
                                            
                                                echo $num; 
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4" style="    margin-right: 130px;">
                            <div class="card border-left-success shadow h-100 py-2"  style="width: 300px;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Les Taches</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php 
                            
                                                    $req = "SELECT * FROM taches where id_utilisateur=".$_SESSION["id"];
                                                    $exec = mysqli_query($con,$req);
                                                    $num = $exec->num_rows;
                                                
                                                    echo $num; 
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        
                                            <i class="fas fa-tasks fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2"  style="width: 300px;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Les Cours
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <?php 
                                                      include 'cnx.php';
                                                        $req = "SELECT * FROM cours  where id_utilisateur=".$_SESSION["id"];
                                                        $exec = mysqli_query($con,$req);
                                                        $num = $exec->num_rows;
                                                        echo $num; 
                                                    ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        
                    </div>

                    <!-- Content Row -->


                   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
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