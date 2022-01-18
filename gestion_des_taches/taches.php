
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
                    
          <div class="row  " style="padding:10px;   padding-top: 50px;  padding-bottom: 50px;">
                <button type="button" class="btn btn-primary col-md-2  container" data-toggle="modal" data-target="#add_tache">
                    Ajouter Tache
                </button>
                <div class="modal" id="add_tache">
                      <div  class="col-md-5 container my-5 " >
                          <div class="card" style="height:auto; ">  
                              <div class="card-header text-center">
                                      <h3>Ajouter tache</h3>	
                              </div>
                              <div class=" card-body ">
                                  <form  method="post" action="ger_tache.php"  enctype="multipart/form-data">
                                      <div class=" form-group">
                                          <label></label>
                                          <input name="nomt" type="text" class="form-control" placeholder="Nom du tache" required>
                                      </div>
                                      
                                      <div class=" form-group">
                                          <label></label>
                                          <textarea name="description" style="width:100%; " placeholder="Description"></textarea> 
                                      </div><br>
                                      <div class="card-group">
                                      <button type="submit" name="addt" class="btn btn-primary container">Ajouter</button>
                                      </div>
                                  </form>
                              </div><br>
                          </div>
                      </div>
                  </div>
          </div>
          
          <div class="card-columns col-md-11 container " >
            <?php
                    include 'cnx.php';
                    $req = "SELECT * FROM taches where id_classe=".$_SESSION['id_classe']." and id_utilisateur = ".$_SESSION['id']." ORDER BY date_pub DESC";
                        $t = mysqli_query($con,$req);
                          foreach($t as $row) { 
                            ?>
         
              <div class="card" style=" width: 100%; height:10%; margin:20px;"  >
                <div class="card-header text-center" style="height: 70px;">
                    <p class="card-text "><h5><?php echo $row['matiere'] ;?></h5> </p>
                </div>
                <div class="card-body" style="height:180px;">
                  <h5 class="card-title"><h4 style=" text-align-last: center;"><?php echo $row['nom_tache'] ;?></h4> </h5>
                  <br>
                  <p style="  overflow: hidden; text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */-webkit-box-orient: vertical; " class="card-text" id="text"><?php echo $row['description'] ;?></p>
                    <a data-toggle="modal" data-target="#tache_<?php echo $row['id_tache']; ?>" href=""><p>Détails</p></a>
                </div>
                <div class="card-footer" style="height: 55px;">
                    
                </div>
              </div>
              
                  <div class="modal" id="tache_<?php echo $row['id_tache']; ?>">
                      <div  class="col-md-5 container my-5 "  >
                              <div class="card" style="width: 600px; height:auto; margin:20px;" >
                                  <div class="card-header text-center">
                                      <p class="card-text"> <?php echo $row['matiere'] ;?></p>
                                  </div>
                                  <div class="card-body" style="height:auto;">
                                    <h5 class="card-title"><h3 style=" text-align-last: center;"><?php echo $row['nom_tache'] ;?></h3> </h5>
                                    <br>
                                    <p class="card-text" id="text"><?php echo $row['description'] ;?></p>
                              
                                  </div>
                                  <div class="card-footer" style="text-align: center;">
                                  <center><a data-toggle="modal" data-target="#del_<?php echo $row['id_tache']; ?>"   style=""><i class="fas fa-trash"></i></a></center>

                                  </div>
                              </div>
                      </div>
                  </div>


                  <div class="modal" id="del_<?php echo $row['id_tache']; ?>">
                         <div class="col-md-3 container my-5" style="background-color:whitesmoke;     width: 350px; height: 150px;">
                                <div class=" card-body ">
 
                                        <form class="frmm" action="ger_tache.php?del=<?php echo $row['id_tache'];?>" method="post">
                                            <center><h6>Confirmation de Suppression</h6>
                                            <br>
                                            <button style="text-align: center;" type="submit" name="btn2" class="btn btn-primary col-md-4 ">supprimer</button>
                                            </center>
                                        </form>
                                </div><br>
                    </div>
                  </div>
                <?php } ?>
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