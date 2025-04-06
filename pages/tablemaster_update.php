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
            <div class="col-sm-2">
                <div class="form-group">
                    
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Name <span class="required" style="color: red;">*</span></label>
                    <input type="text" name="name" id="txtname" class="form-control" placeholder="Name" value="<?php echo $_POST['sid']; ?>" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <br/>
                    <button type="submit" name="submit" id="edit_staff" class="btn btn-primary">Update</button>
                    <a href="javascript:void(0);" onclick="viewmaster();" class="btn btn-outline-secondary"> Cancel</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    
                </div>
            </div>
        </div>
    </div>
</form>
 
<!-- ============================================================== -->
<!-- MASTER Add Form -->
<!-- ============================================================== -->

 <input type="hidden" id="tablenameold" name="tablenameold" value="<?php echo $_POST['sid']; ?>"> 
 <script src="../jquery.min.js"></script>
<script type="text/javascript">
    $("#edit_staff").click(function(e) {
        e.preventDefault();
        document.getElementById("loaderaddedit").style.display = "block";
        var txtname_val = document.getElementById("txtname").value;
        var tablenameold_val = document.getElementById("tablenameold").value;
        if (txtname_val == '') {
            alert("Name field is required.");
            document.getElementById("loaderaddedit").style.display = "none";
        }else {
            $.post("../ajaxdata/pages/update/ajax_master.php", {
                txtname_val1: txtname_val,
                tablenameold_val1: tablenameold_val
                }, function(data) {
                  document.getElementById("loaderaddedit").style.display = "none";
                  //alert(data);
                  document.getElementById("form1").reset();
                  masterload();
                  document.getElementById("masteradd").style.display = "none"; 
                  document.getElementById("masteredit").style.display = "none"; 
                  document.getElementById("mastertable").style.display = "block"; 
                }); 
        }
    }); 
</script>
<script src="../dist/dropify/js/dropify.min.js"></script>
<script src="../dist/dropify/js/dropify.js"></script>
<script src="../assets/libs/summernote/dist/summernote-bs4.min.js"></script>