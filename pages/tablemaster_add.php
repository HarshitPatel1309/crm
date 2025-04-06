<?php include '../config/core.php';?>
<?php include '../config/database.php';?>
<?php include '../login_checker.php';?>

<link rel="stylesheet" href="../dist/dropify/css/dropify.min.css">
<link rel="stylesheet" type="text/css" href="../assets/libs/summernote/dist/summernote-bs4.css">
<!-- MAIN CSS -->
<!-- ============================================================== -->
<!-- MASTER Add Form -->
<!-- ============================================================== -->
<form id="form1" method="post" enctype="multipart/form-data">
  <div class="box">
    <div class="row clearfix">
      <!-- <div class="spinner-border"></div> -->
        <div class="col-sm-2">
            <div class="form-group">
                
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <center>
              <label>Master Name<span class="required" style="color: red;">*</span></label>
              <input type="text" name="name" id="txtname" class="form-control" placeholder="Master Name">
              </center>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
              <center>
                    <br/>
                  <button type="submit" name="submit" id="add_master" class="btn btn-primary">Submit</button>
                  <a href="javascript:void(0);" onclick="viewmaster();" class="btn btn-outline-secondary"> Cancel</a>
                </center>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                
            </div>
        </div>
    </div>
  </div>
  <div class="clearfix">&nbsp;</div>
  <div class="row clearfix">                                
      <div class="col-sm-12">
          
      </div>
  </div>
</form>
<!-- ============================================================== -->
<!-- DOC MASTER Add Form -->
<!-- ============================================================== -->
<script type="text/javascript">
  // ADD MASTER CODE
$("#add_master").click(function(e) {
    e.preventDefault();
    document.getElementById("loaderaddedit").style.display = "block";
    var txtname_val = document.getElementById("txtname").value;

    if (txtname_val == '') {
        alert("Name field is required.");
        document.getElementById("loaderaddedit").style.display = "none";
    } else {

        $.post("../ajaxdata/pages/insert/ajax_master.php", {
            txtname_val1: txtname_val
        }, function(data) {
            alert(data);
            document.getElementById("loaderaddedit").style.display = "none";
            masterload();
            document.getElementById("form1").reset();
            document.getElementById("masteradd").style.display = "none";
            document.getElementById("mastertable").style.display = "block"; 
        });
    }
});



    
    // ADD MASTER CODE
</script>
<script src="../dist/dropify/js/dropify.min.js"></script>
<script src="../dist/dropify/js/dropify.js"></script>
<script src="../assets/libs/summernote/dist/summernote-bs4.min.js"></script>