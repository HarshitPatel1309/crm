<?php include '../config/core.php';?>
<?php include '../config/database.php';?>
<?php include '../login_checker.php';?>

<link rel="stylesheet" href="../dist/dropify/css/dropify.min.css">
<link rel="stylesheet" type="text/css" href="../assets/libs/summernote/dist/summernote-bs4.css">
<!-- MAIN CSS -->
<!-- ============================================================== -->
<!-- Slider Add Form -->
<!-- ============================================================== -->
<?php
  $result=mysqli_query($conn,"select * from tbl_users where users_id='".$_POST['sid']."'");
  while($r=mysqli_fetch_array($result))
  {
?>
<form id="form1" method="post" enctype="multipart/form-data">
    <div class="box">
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Full Name <span class="required" style="color: red;">*</span></label>
                    <input type="text" name="txtfullname" id="txtfullname" class="form-control" placeholder="Full Name" value="<?php echo $r['users_name']; ?>" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Email <span class="required" style="color: red;">*</span></label>
                    <input type="text" onkeypress="return validateEmail(event)" onkeydown="return validateEmail1(event)" name="txtemail" id="txtemail" class="form-control" placeholder="Email" value="<?php echo $r['users_email']; ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Phone <span class="required" style="color: red;">*</span></label>
                    <input type="text" name="txtphone" onkeypress="return isNumberKey(event)" id="txtphone" class="form-control" placeholder="Phone" value="<?php echo $r['users_phoneno']; ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Userid <span class="required" style="color: red;">*</span></label>
                    <input type="text" name="txtuserid" id="txtuserid" class="form-control" placeholder="Userid" value="<?php echo $r['userslogin_id']; ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Password <span class="required" style="color: red;">*</span></label>
                    <input type="Password" onkeypress="return validatePassword(event)" name="txtpassword" id="txtpassword" class="form-control" placeholder="Password" value="<?php echo $r['users_password']; ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Role <span class="required" style="color: red;">*</span></label>
                    <select class="form-control m-wrap" name="txtrole" id="txtrole">
                        <?php 
                        $result=mysqli_query($conn,"SELECT * FROM `tbl_role` WHERE `removedata` ='0' and status ='1'");
                        while($row=mysqli_fetch_array($result))
                        {?>
                            <option value="<?php echo $row['role_id'];?>"<?php if($row['role_id']==$r['role_id']){?> selected="selected" <?php } ?>><?php echo $row['role_name'];?></option>
                          <?php 
                        }
                        ?>
                      </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Address <span class="required" style="color: red;">*</span></label>
                    <textarea type="text" name="txtaddress" id="txtaddress" class="form-control" placeholder="Address"><?php echo $r['useraddress']; ?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">&nbsp;</div>
    <div class="row clearfix">                                
        <div class="col-sm-12">
            <center>
                <button type="submit" name="submit" id="edit_information" class="btn btn-primary">Update</button>
                <a href="javascript:void(0);" onclick="viewinformation();" class="btn btn-outline-secondary"> Cancel</a>
            </center>  
         </div>
     </div>
</form>
<?php } ?>
 
<!-- ============================================================== -->
<!-- Slider Add Form -->
<!-- ============================================================== -->

 <input type="hidden" id="informationeditid" name="informationeditid" value="<?php echo $_POST['sid']; ?>"> 
 <script src="../jquery.min.js"></script>
<script type="text/javascript">
    $("#edit_information").click(function(e) {
      e.preventDefault();
          document.getElementById("loaderaddedit").style.display = "block";
          var txtfullname_val =document.getElementById("txtfullname").value;
          var txtemail_val =document.getElementById("txtemail").value;
          var txtphone_val =document.getElementById("txtphone").value;
          var txtuserid_val =document.getElementById("txtuserid").value;
          var txtpassword_val =document.getElementById("txtpassword").value;
          var txtrole_val =document.getElementById("txtrole").value;
          var txtaddress_val =document.getElementById("txtaddress").value;
          var informationeditid =document.getElementById("informationeditid").value;

          if (txtfullname_val == '' || txtemail_val == '' || txtphone_val == '' || txtuserid_val == '' || txtpassword_val == '' || txtrole_val == '') {
              alert("Insertion Failed Some Fields are Blank....!!");
              document.getElementById("loaderaddedit").style.display = "none";
              // =================================================================
                        Applicationvalidate();
                // ==================================================================
            } else {
              $.post("../ajaxdata/pages/update/ajax_users.php", {
                txtfullname_val1: txtfullname_val,
                txtemail_val1: txtemail_val,
                txtphone_val1: txtphone_val,
                txtuserid_val1: txtuserid_val,
                txtpassword_val1: txtpassword_val,
                txtrole_val1: txtrole_val,
                txtaddress_val1: txtaddress_val,
                informationeditid: informationeditid
                }, function(data) {
                  document.getElementById("loaderaddedit").style.display = "none";
                  //alert(data);
                  document.getElementById("form1").reset();
                  informationload();
                  document.getElementById("informationadd").style.display = "none"; 
                  document.getElementById("informationedit").style.display = "none"; 
                  document.getElementById("informationtable").style.display = "block"; 
                });  
          }
            
    });

    // VALIDATION FILED
    function Applicationvalidate(){

      var txtfullname_val = document.getElementById("txtfullname").value;
      var txtemail_val = document.getElementById("txtemail").value;
      var txtphone_val = document.getElementById("txtphone").value;
      var txtuserid_val = document.getElementById("txtuserid").value;
      var txtpassword_val = document.getElementById("txtpassword").value;
      
      if(txtfullname_val == ''){
        document.getElementById("txtfullname").style.borderColor = "red"; 
      }else{
         document.getElementById("txtfullname").style.borderColor = "#e9ecef"; 
      }

      if(txtemail_val == ''){
        document.getElementById("txtemail").style.borderColor = "red"; 
      }else{
         document.getElementById("txtemail").style.borderColor = "#e9ecef"; 
      }

      if(txtphone_val == ''){
        document.getElementById("txtphone").style.borderColor = "red"; 
      }else{
         document.getElementById("txtphone").style.borderColor = "#e9ecef"; 
      }

      if(txtuserid_val == ''){
        document.getElementById("txtuserid").style.borderColor = "red"; 
      }else{
         document.getElementById("txtuserid").style.borderColor = "#e9ecef"; 
      }
      if(txtpassword_val == ''){
        document.getElementById("txtpassword").style.borderColor = "red"; 
      }else{
         document.getElementById("txtpassword").style.borderColor = "#e9ecef"; 
      }
    }
    // VALIDATION FILED

    // PASSWORD VALIDATION
        function validatePassword(evt) {
            var password = document.getElementById("txtpassword").value;

            // Regular expressions for password validation
            var minLength = /.{8,}/; // At least 8 characters
            var hasUpperCase = /[A-Z]/; // At least one uppercase letter
            var hasLowerCase = /[a-z]/; // At least one lowercase letter
            var hasNumbers = /\d/; // At least one number
            var hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/; // Special character

            // Check if password meets all conditions
            if (minLength.test(password) && hasUpperCase.test(password) && hasLowerCase.test(password) && hasNumbers.test(password) && hasSpecialChar.test(password)) {
                document.getElementById("txtpassword").style.borderColor = "#e9ecef";
                var button = document.getElementById("edit_information");
                button.disabled = false;
            } else { 
                document.getElementById("txtpassword").style.borderColor = "red";
                var button = document.getElementById("edit_information");
                button.disabled = true;
            }
        }
    // PASSWORD VALIDATION

    // NUMBER VALUE VALIDATION
        function isNumberKey(evt) {
           var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
              return false;

           return true;
        }
     // NUMBER VALUE VALIDATION  

        // EMAIL VALIDATION
        function validateEmail(evt) {
            var email = document.getElementById("txtemail").value;

            // Simple email regex for basic validation
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            // Test if email matches the pattern
            if (emailPattern.test(email)) {
                document.getElementById("txtemail").style.borderColor = "#e9ecef";
                var button = document.getElementById("edit_information");
                button.disabled = false;
            } else {
               document.getElementById("txtemail").style.borderColor = "red";
                var button = document.getElementById("edit_information");
                button.disabled = true;
            }
        }
        function validateEmail1(evt) {
            var email = document.getElementById("txtemail").value;

            // Simple email regex for basic validation
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            // Test if email matches the pattern
            if (emailPattern.test(email)) {
                document.getElementById("txtemail").style.borderColor = "#e9ecef";
                var button = document.getElementById("edit_information");
                button.disabled = false;
            } else {
               document.getElementById("txtemail").style.borderColor = "red";
                var button = document.getElementById("edit_information");
                button.disabled = true;
            }
        }
        // EMAIL VALIDATION
</script>
<script src="../dist/dropify/js/dropify.min.js"></script>
<script src="../dist/dropify/js/dropify.js"></script>
<script src="../assets/libs/summernote/dist/summernote-bs4.min.js"></script>