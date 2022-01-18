<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe</title>
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
        

            
            <?php include('gerer_class.php'); ?>
            <div class="row  " style="padding:10px;   padding-top: 100px;  padding-bottom: 50px;">
                    <button type="button" class="btn btn-primary col-md-2  container" data-toggle="modal" data-target="#add_class">
                    Ajouter class
                    </button>
                    <input class="form-control col-md-4 container" type="text" id="search" onkeyup="search()" placeholder="Rechercher">
            </div>
            <div class="col-md-9 container" style="background-color:mintcream;">
        <table id="tab" class="table">
            <thead>
                <tr>
                    <th scope="col" class="tha">#</th>
                    <th scope="col" class="tha">Nom classe</th>
                    <th scope="col" class="tha"></th>
                    <th scope="col" class="tha"></th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'cnx.php';
                    $sql = "select * from classe ";
                    $t=$con->query($sql);
                    $a=1;  
                    foreach ($t as $row) { 
                ?>
                    <tr>
                        <td><?php echo $a;$a++; ?></td>
                    <td  ><?php echo $row['nom_classe']; ?></td>
                    <td><a  data-toggle="modal" data-target="#edit_<?php echo $row['nom_classe']; ?>" href="gerer_class.php?edit=<?php echo $row['nom_classe']; ?>" class="edit_btn" style="text-decoration: none; color: white;" ><i class="fas fa-edit" style="color: blue;"></i> </a></td>
                    <td><a data-toggle="modal" data-target="#del_<?php echo $row['nom_classe']; ?>" href="gerer_class.php?del=<?php echo $row['nom_classe']; ?>"><i class="fas fa-trash"></i></a>
                      
                    </td>
                </tr> 
                <?php include('gerer_class.php'); ?>
                
                <?php  }?>
            </tbody>
        </table>
    </div>
    <script>
    function search() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("tab");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>  
</div>
<?php include 'diconnect.php';?>
       </div>
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