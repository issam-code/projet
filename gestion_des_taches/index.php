<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Imfo Classe</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center ">

            <div class="col-xl-10 col-lg col-md-12 " style="    margin-top: 50px;">

                <div class="card o-hidden border-0 shadow-lg my-5 container" style="    width: 600px; height: 420px;">
                    <div class="card-body p-2">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5 justify-content-center">
                                    <div class="text-center">
                                        <div class="sidebar-brand-text mx-3 " style="font-size: 30px;">Class<sup style="color: #36b9cc">room</sup></div>
                                    </div>
                                    <div class=" text-center">
                                        <?php if(isset($_SESSION["msg"]) ){?>
                                            <h6 class="text-info"> <?php echo $_SESSION["msg"];  ?></h6>
                                        <?php }  ?>
                                        <?php if(isset($_SESSION["login"]) ){?>
                                            <h6 class="text-danger"> <?php echo $_SESSION["login"];  ?></h6>
                                        <?php }  ?>
			                        </div>
                                    <form class="user" method="POST" action=" login.php" >
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" required
                                               name="mail"
                                                placeholder="Enter Email...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" required
                                               name="pass"  placeholder="Mot de passe">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                
                                            </div>
                                        </div>
                                        <button  class="btn btn-info btn-user btn-block">
                                            Connection
                                        </button>
                                        <hr>
                                        
                                    </form>
                                    <div class="text-center">
                                        <a class="big" style="color: #5a5c69" href="registre.php">Créer un compte!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

 

</body>

</html>
<?php session_destroy()?>