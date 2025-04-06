<?php include 'config/core.php';?>
<?php include 'config/database.php';?>

<!DOCTYPE html>
<html dir="ltr">

<head>
    <title>:: CRM ::</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CRM Panel">
    <meta name="author" content="CRM, design by: ">
    <!-- Favicon icon -->
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">

</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(assets/images/big/3409297.jpg) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img src="assets/images/logo-iconcrmj.png" alt="logo" /></span>
                        <h4 class="header blue lighter bigger">
                                                <i class="ace-icon fa fa-coffee green"></i>
                                                Please Enter Your Information
                                            </h4>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                          <div class="alert alert-danger alert-dismissible" role="alert" id="loginerror" style="display: none">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            <strong>Wrong Username or Password</strong><br> Please Check It
                          </div>  
                            <form class="form-horizontal mt-3" id="loginform" method="post">  
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" id="Username" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <!-- <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                                            <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock mr-1"></i> Forgot pwd?</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 pb-3">
                                        <button id="btnsubmit" name="btnsubmit" class="btn btn-block btn-lg btn-info" type="submit">Log In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="recoverform">
                    <div class="logo">
                        <span class="db"><img src="assets/images/logo-icon.png" alt="logo" /></span>
                        <h5 class="font-medium mb-3">Recover Password</h5>
                        <span>Enter your Email and instructions will be sent to you!</span>
                    </div>
                    <div class="row mt-3">
                        <!-- Form -->
                        <form class="col-12" action="https://wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/index.html">
                            <!-- email -->
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="email" required="" placeholder="Username">
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row mt-3">
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGIN CODE  -->
    <?php
      if(isset($_REQUEST['btnsubmit']))
      {
        $password = mysqli_real_escape_string($conn, $_POST["password"]);  
        $password = md5($password);  
           

        $sql = "select * from tbl_login where username='".$_REQUEST['username']."' and password='".$password."'";
        $result = $conn->query($sql);

        if ($result->num_rows <= 0) {
            echo "error";
            echo "<script>document.getElementById('loginerror').style.display = 'block';</script>";
        } else {
            while($row = $result->fetch_assoc()) {
                $user=$row["username"];
                $psw=$row["password"];
                if($user==$_REQUEST["username"] && $psw==$password)
                {
                  $_SESSION["username"]=$_REQUEST["username"];
                  $_SESSION["userloginid"]=$_REQUEST["username"];
                  echo "<script>window.location='dashboard'</script>";
                }
                else
                {
                  echo "Sql Injection"; 
                }
            }
        }    
      }
    ?>
    <!-- LOGIN CODE -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>
</body>

</html>