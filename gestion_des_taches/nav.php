<?php session_start(); 
if(!isset($_SESSION['id'])){
    header('location: index.php');
}

                    
        include 'cnx.php';
        $sql = "SELECT * from utilisateur where id_utilisateur=".$_SESSION['id'];
        $t=$con->query($sql); 
        
                
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CLOSSROOM</title>
    
     <!-- Bootstrap core JavaScript-->
     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom fonts for this template-->

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-text mx-3">Class<sup>room</sup></div>
            </a>
            <div class="sidebar-brand-icon ">
       
                                <div class="container"><center><img class="img-profile rounded-circle" src="images/<?php foreach ($t as $row) { echo $row['image'];}?>" width="60%"></center></div><br>
                                    <span class="sidebar-brand-text mx-3" style="color:white;"><center><h4><?php foreach ($t as $row) { echo $row['nom'];}?></h4></center></span>
                            
                            <br>
            
            </div>
            <br>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Accueil</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
          
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Gestions</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="profs.php"> Professeurs</a>
                        <a class="collapse-item" href="groupes_etud.php?id=0">Etudiants</a>
                        <a class="collapse-item" href="classe.php">Classes</a>
                    </div>
                </div>
            </li>
            <?php include('profile.php'); ?>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Les Paramétres</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                   
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#profil"  data-toggle="modal"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile</a>
                        <a class="collapse-item active" href="#deconnect" data-toggle="modal" data-target="#deconnect">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                   Déconnexion
                                </a>
                        
                    </div>
                     </div>




                     
                 
            </li>


            <hr class="sidebar-divider">
           


 
 
            
            </body>

</html>