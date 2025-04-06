<?php include 'config/core.php';?>
<?php include 'config/database.php';?>
<?php include 'login_checker.php';?>
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
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    
</head>
<?php $currentPage = ''; ?>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include 'includes/header.php'; ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include 'includes/sidemenu.php'; ?>
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
                        <h4 class="page-title">Dashboard </h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Role Master</li>
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
                              <h4 class="card-title">Role Master</h4>
                              <!-- ============================================================== -->
                              <!-- Form Data -->
                              <!-- ============================================================== -->
                              <form id="form1" method="post" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="txtrolename" id="txtrolename" placeholder="Role Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12">
                                       <div class="form-group">                       
                                            <input type="text" class="form-control" name="txtroleshortname" id="txtroleshortname" placeholder="Role Short Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12">
                                        <button type="submit" name="submit" id="add_role" class="btn btn-primary">Submit</button>
                                        <button type="submit" name="submit" id="edit_role" class="btn btn-primary" style="display: none;">Update</button>
                                    </div>
                                </div>
                              </form>
                              <!-- ============================================================== -->
                              <!-- Form Data -->
                              <!-- ============================================================== -->
                              <hr><br>

                              <!-- ============================================================== -->
                              <!-- Table Data -->
                              <!-- ============================================================== -->
                              <div id="rolemastertable"></div>
                              <!-- ============================================================== -->
                              <!-- Table Data -->
                              <!-- ============================================================== -->
                            </div>
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
            <?php include 'includes/footer.php'; ?>
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
    <script src="jquery.min.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {
        roleload();
          
          // INSERT DATA
          $("#add_role").click(function(e) {
            e.preventDefault();
                
                var txtrolename_vals = document.getElementById("txtrolename").value;
                var txtroleshortname_vals = document.getElementById("txtroleshortname").value;
                var action = 'INSERTDATA';

                if(txtrolename_vals == ''){
                    alert("Insertion Failed Some Fields are Blank....!!");
                }else{

                    $.post("ajaxdata/ajax_role.php", {
                      txtrolename_vals1: txtrolename_vals,
                      txtroleshortname_vals1: txtroleshortname_vals,
                      action1: action

                      }, function(data) {
                        alert(data);
                        document.getElementById("form1").reset();
                        roleload();
                      });
                }
          });
          // INSERT DATA

          // UPDATE DATA
          $("#edit_role").click(function(e) {
            e.preventDefault();
                
                var txtrolename_vals = document.getElementById("txtrolename").value;
                var txtroleshortname_vals = document.getElementById("txtroleshortname").value;
                var action = 'UPDATEDATA';
                var hiddenids_vals = document.getElementById("hiddenids").value;

                if(txtrolename_vals == ''){
                    alert("Insertion Failed Some Fields are Blank....!!");
                }else{
                  $.post("ajaxdata/ajax_role.php", {
                    txtrolename_vals1: txtrolename_vals,
                    txtroleshortname_vals1: txtroleshortname_vals,
                    hiddenids_vals1: hiddenids_vals,
                    action1: action

                    }, function(data) {
                      alert(data);
                      document.getElementById("form1").reset();
                      roleload();
                      document.getElementById("add_role").style.display = "block"; 
                      document.getElementById("edit_role").style.display = "none"; 
                    });
                }
          });
          // UPDATE DATA
      });

      // ROLE DATA SEARCH
      function roleload(){
        $.ajax({
            type:'POST',
            url:'tabledisplay/role.php',
            success:function(html){
              $('#rolemastertable').html(html);              
            }
        }); 
      }
      // ROLE DATA SEARCH

      // ROLE DATA STATUS ACTIVE INACTIVE
      function roleinac(aci,catid){
        var action = 'STATUSDATA';
        $.ajax({
            type:'POST',
            url:'ajaxdata/ajax_role.php',
            data:{ aci_id: aci , catids: catid , action1: action },
            success:function(html){
                  roleload();
            }
        }); 
      }
      // ROLE DATA STATUS ACTIVE INACTIVE

      // ROLE DATA UPDATE SET
      function editload(cmid){    
        var txtdept = cmid;        
        $.ajax({
            type:'POST',
            url:'ajaxdata/Get_datadetails.php',
            data:'role_ids='+txtdept,
            success:function(html){
              var json = html;
              obj = jQuery.parseJSON(json);
              var output_sn = obj.output_sn;
              var role_id_sn = obj.role_id_sn;
              var role_name_sn = obj.role_name_sn;
              var role_shortname_sn = obj.role_shortname_sn;

              if(output_sn == '00000'){
                document.getElementById("txtrolename").value='';
                document.getElementById("txtroleshortname").value = '';

                document.getElementById("add_role").style.display = "block"; 
                document.getElementById("edit_role").style.display = "none"; 
              }else{
                document.getElementById("hiddenids").value=role_id_sn;
                document.getElementById("txtrolename").value=role_name_sn;
                document.getElementById("txtroleshortname").value = role_shortname_sn;

                document.getElementById("add_role").style.display = "none"; 
                document.getElementById("edit_role").style.display = "block"; 
              }
            }
        });
      }
      // ROLE DATA UPDATE SET

      // ROLE DATA DELETE
      function deleteload(sid){
        var action = 'DELETEDATA';
        var result = confirm("Want to delete?");
        if (result) {     
          $.ajax({
              type:'POST',
              url:'ajaxdata/ajax_role.php',
              data:{ sid: sid , action1: action },
              success:function(html){
                    roleload();
              }
          }); 
        }
      }
      // ROLE DATA DELETE
    </script>
    <!-- ============================================================== -->
    <!-- Data Insert Update Delete Search -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/app.init.horizontal.js"></script>
    <script src="dist/js/app-style-switcher.horizontal.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    
</body>


</html>