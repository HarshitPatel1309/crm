<?php include '../config/core.php';?>
<?php include '../config/database.php';?>
<?php include '../login_checker.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CRM Panel">
    <meta name="author" content="CRM, design by: ">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>:: CRM ::</title>
    <!-- Custom CSS -->
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/libs/summernote/dist/summernote-bs4.css">
</head>

<body>
  <?php $currentPage = '../'; ?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="loaderaddedit"></div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include '../includes/header.php'; ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include '../includes/sidemenu.php'; ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Master Filed Details </h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Master Filed Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <!-- ============================================================== -->
                <!-- Form Data -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                              <!-- ============================================================== -->
                              <!-- Form Data Menu -->
                              <!-- ============================================================== -->
                              <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-12">
                                    <h4 class="card-title">Master Filed</h4>
                                </div>            
                                <div class="col-lg-6 col-md-4 col-sm-12 text-right smalloncheck">
                                  <div class="bh_chart hidden-sm">
                                      <div class="float-right m-r-15">
                                          <h4 class="card-title">
                                            <small onclick="addfiled();" id="addfiledid"><i class="icon-plus"></i> &nbsp; Add/View Master Filed</small>
                                          </h4>
                                      </div>
                                  </div>
                                  <div class="bh_chart hidden-xs">
                                      <div class="float-right m-r-15">
                                          <h4 class="card-title">
                                            <small onclick="viewfiled();" id="viewfiledid"><i class="icon-eye"></i> &nbsp; View Master Filed</small>
                                          </h4>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              
                              <!-- ============================================================== -->
                              <!-- Form Data Menu -->
                              <!-- ============================================================== -->
                              <hr>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Table Data -->
                            <!-- ============================================================== -->
                            <div class="card-body" id="filedtable">
                              <div id="filedidtable"></div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Table Data -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- Add FILED Data -->
                            <!-- ============================================================== -->
                            <div class="card-body" id="filedadd">
                              <div id="addfilediddetails"></div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Add FILED Data -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- Edit FILED Data -->
                            <!-- ============================================================== -->
                            <div class="card-body" id="filededit">
                              <div id="editfiledidtable"></div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Edit FILED Data -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Form Data -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include '../includes/footer.php'; ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Data Insert Update Delete Search -->
    <!-- ============================================================== -->
    <input type="hidden" id="hiddenids" name="hiddenids" value="">
    <script src="../jquery.min.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {

          // FILED DATA GET
            filedload();
            document.getElementById("filedadd").style.display = "none"; 
          // FILED DATA GET
      });

      // VIEW FILED DATA ACTION
      function viewfiled() {
        var element = document.getElementById("viewfiledid").classList.add("activepage");
        var element = document.getElementById("addfiledid").classList.remove("activepage");
        document.getElementById("filedtable").style.display = "block"; 
        document.getElementById("filedadd").style.display = "none";
        document.getElementById("filededit").style.display = "none"; 
      }
      // VIEW FILED DATA ACTION

      // ADD FILED DATA ACTION
      function addfiled() {
        var element = document.getElementById("addfiledid").classList.add("activepage");
        var element = document.getElementById("viewfiledid").classList.remove("activepage");
        document.getElementById("filedtable").style.display = "none"; 
        document.getElementById("filedadd").style.display = "block"; 
        document.getElementById("filededit").style.display = "none"; 
        addload();
      }
      // ADD FILED DATA ACTION

      // ADD FILED LOAD
      function addload(){
        $('#addfilediddetails').html('');              
        $.ajax({
            type:'POST',
            url:'tablefiled_add.php',
            success:function(html){
                  $('#addfilediddetails').html(html);              
            }
        }); 
      }
      // ADD FILED LOAD

      // FILED DATA LOAD
      function filedload(){
        $.ajax({
            type:'POST',
            url:'../tabledisplay/pages/tablefiled.php',
            success:function(html){
                  $('#filedidtable').html(html);              
            }
        }); 
      }
      // FILED DATA LOAD

      </script>
    <!-- ============================================================== -->
    <!-- Data Insert Update Delete Search -->
    <!-- ============================================================== -->

    <style type="text/css">
      .box{
        border: 2px solid aliceblue;
        padding: 25px;
        border-radius: 5px;
        background-color: white;
        display: inline-block;
        box-shadow: 0 7px 19px rgba(0,0,0,0.2);
        width: 100%;
      }
      .activepage{
        color: #437ac7;
      }
      .smalloncheck small{
        cursor: pointer;
      }

      #loaderaddedit {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        background: rgba(0,0,0,0.75) url(../upload/loading2.gif) no-repeat center center;
        z-index: 10000;
      }
    </style>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="../dist/js/app.min.js"></script>
    <script src="../dist/js/app.init.horizontal.js"></script>
    <script src="../dist/js/app-style-switcher.horizontal.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/libs/summernote/dist/summernote-bs4.min.js"></script>
</body>


</html>