<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CLOSSROOM</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <!-- Bootstrap core JavaScript-->
     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 

</head>

<body id="page-top" style="  background-color: #b3bfcc5c;">

    <!-- Page Wrapper -->
        <div id="wrapper">
        
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion col-md-2 col-sm-2" id="accordionSidebar">

                <?php include 'nav_etud.php';?>
                
                </ul>
            
                <div class="container-fluid col-md-10 col-sm-10">
        

            
       
        <div class="col-md-8 container" style="background-color:mintcream; margin-top: 70px;">
    <table id="tab" class="table">
        <thead>
            <tr>
                <th scope="col" class="tha">#</th>
                <th scope="col" class="tha">Nom cour</th>
                <th scope="col" class="tha">Matiere</th>
                <th scope="col" class="tha"></th>
                <th scope="col" class="tha"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'cnx.php';
                $sql = "select * from cours where id_classe=".$_SESSION["id_classe"]." ORDER BY date_cour DESC";
                $t=$con->query($sql);
                $a=1;  
                foreach ($t as $row) { 
            ?>
                <tr>
                    <td><?php echo $a;$a++; ?></td>
                <td  ><?php echo $row['nom_cour']; ?></td>
                <td  ><?php echo $row['matiere']; ?></td>
                <td><a data-toggle="modal" data-target="#download_<?php echo $row['id_cour']; ?>" href="gere_cour.php?idd=<?php echo $row['id_cour']; ?>"><i  class="fas fa-file-download"></i></a>

                </td>
            </tr> 
            <?php include('gere_cour.php'); ?>
            
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