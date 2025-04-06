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
                        <h4 class="page-title">Permission Details </h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Permission Details</li>
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
                                    <h4 class="card-title">Permission</h4>
                                </div>            
                                <div class="col-lg-6 col-md-4 col-sm-12 text-right smalloncheck">
                                  <div class="bh_chart hidden-sm">
                                      <div class="float-right m-r-15">
                                          <h4 class="card-title">
                                            <small onclick="addinformation();" id="addinformationid"><i class="icon-plus"></i> &nbsp; Add Permission</small>
                                          </h4>
                                      </div>
                                  </div>
                                  <div class="bh_chart hidden-xs">
                                      <div class="float-right m-r-15">
                                          <h4 class="card-title">
                                            <small onclick="viewinformation();" id="viewinformationid"><i class="icon-eye"></i> &nbsp; View Permission</small>
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
                            <div class="card-body" id="informationtable">
                              <div id="informationidtable"></div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Table Data -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- Add HOSTEL Data -->
                            <!-- ============================================================== -->
                            <div class="card-body" id="informationadd">
                              <div id="addinformationiddetails"></div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Add HOSTEL Data -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- Edit HOSTEL Data -->
                            <!-- ============================================================== -->
                            <div class="card-body" id="informationedit">
                              <div id="editinformationidtable"></div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Edit HOSTEL Data -->
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
          // INFORMATION DATA GET
            informationload();
            document.getElementById("informationadd").style.display = "none"; 
          // INFORMATION DATA GET
      });

      // VIEW INFORMATION DATA ACTION
      function viewinformation() {
        var element = document.getElementById("viewinformationid").classList.add("activepage");
        var element = document.getElementById("addinformationid").classList.remove("activepage");
        document.getElementById("informationtable").style.display = "block"; 
        document.getElementById("informationadd").style.display = "none";
        document.getElementById("informationedit").style.display = "none"; 
      }
      // VIEW INFORMATION DATA ACTION

      // ADD INFORMATION DATA ACTION
      function addinformation() {
        var element = document.getElementById("addinformationid").classList.add("activepage");
        var element = document.getElementById("viewinformationid").classList.remove("activepage");
        document.getElementById("informationtable").style.display = "none"; 
        document.getElementById("informationadd").style.display = "block";
        document.getElementById("informationedit").style.display = "none";
        addload();
      }
      // ADD INFORMATION DATA ACTION

      // ADD INFORMATION LOAD
      function addload(){
        $('#addinformationiddetails').html('');              
        $.ajax({
            type:'POST',
            url:'tablepermission_add.php',
            success:function(html){
                  $('#addinformationiddetails').html(html);              
            }
        }); 
      }
      // ADD INFORMATION LOAD

      // INFORMATION DATA LOAD
      function informationload(){
        $.ajax({
            type:'POST',
            url:'tablepermission_view.php',
            success:function(html){
                  $('#informationidtable').html(html);             
            }
        });
      }
      // INFORMATION DATA LOAD

      // INFORMATION ACTIVE/INACTIVE DATA
      function usersinac(aci,catid){
        $.ajax({
            type:'POST',
            url:'../tabledisplay/pages/users_inactive.php',
            data:{ aci_id: aci , catids: catid },
            success:function(html){
                  informationload();
            }
        }); 
      }
      // INFORMATION ACTIVE/INACTIVE DATA

      // EDIT INFORMATION DATA
      function editload(sid) {
        document.getElementById("informationtable").style.display = "none"; 
        document.getElementById("informationadd").style.display = "none";
        document.getElementById("informationedit").style.display = "block"; 
        $('#editinformationidtable').html('');              
        $.ajax({
            type:'POST',
            url:'users_update.php',
            data:'sid='+sid,
            success:function(html) {
                  $('#editinformationidtable').html(html);              
            }
        }); 
      }
      // EDIT INFORMATION DATA

      // DELETE INFORMATION DATA
      function deleteload(sid) {
        var result = confirm("Want to delete?");
        if (result) {     
          document.getElementById("informationtable").style.display = "block"; 
          document.getElementById("informationadd").style.display = "none";
          document.getElementById("informationedit").style.display = "none";         
          $.ajax({
              type:'POST',
              url:'../tabledisplay/pages/users_delete.php',
              data:'sid='+sid,
              success:function(html) {
                    informationload();
              }
          }); 
        }
      }
      // DELETE INFORMATION DATA

      
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
      .bordered {
            border: 2px solid #000; 
            padding: 5px;  
            text-align: center;
        }
        .bordered label{
              margin-bottom: .1rem;
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