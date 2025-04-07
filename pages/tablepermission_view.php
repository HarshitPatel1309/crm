<?php include '../config/core.php';?>
<?php include '../config/database.php';?>
<?php include '../login_checker.php';?>


<!-- ============================================================== -->
<!-- Add Form -->
<!-- ============================================================== -->

<?php
  $result=mysqli_query($conn,"SHOW TABLES");
  while($row=mysqli_fetch_array($result)) {
?>

  <form id="form1" method="post" enctype="multipart/form-data">
      <h3>
        <div class="box">
        <div class="row clearfix">
          <div class="col-sm-3" style="text-align:center;">
            <div class="form-group">
              <label>Select Table :</label>
            </div>
          </div>
          <div class="col-sm-9">
            <div class="form-group">
              <select class="form-control m-wrap" name="txttablenameview" id="txttablenameview" onchange="tabletypeloadview()">
                <option value='0'>Select Table</option>
                <?php 
                  $result=mysqli_query($conn,"SHOW TABLES");
                  while($row=mysqli_fetch_array($result))
                  {
                      if ('tbl_role' === $row['Tables_in_' . $dbname] || 'tbl_users' === $row['Tables_in_' . $dbname] || 'tbl_login' === $row['Tables_in_' . $dbname] || 'tbl_filedset' === $row['Tables_in_' . $dbname] || 'tbl_showhide' === $row['Tables_in_' . $dbname] || 'tbl_Payment_Type' === $row['Tables_in_' . $dbname] || 'tbl_relationship' === $row['Tables_in_' . $dbname]) {
                      }else{
                        ?>
                          <option value='<?php echo $row['Tables_in_' . $dbname]; ?>'><?php echo $row['Tables_in_' . $dbname]; ?></option>
                        <?php
                      }
                  }
                ?>
              </select>
            </div>
          </div>
        </div>
      </div>
      </h3>
      <hr>
      
      <div id="getfileddetailsview"></div>
      <div class="clearfix">&nbsp;</div>
      <div class="row clearfix" id="buttonshowhide">                                
          <div class="col-sm-12">
            <center>
              <button type="submit" name="submit" id="update_filed" class="btn btn-primary">Update</button>
              <a href="javascript:void(0);" onclick="viewexam();" class="btn btn-outline-secondary"> Cancel</a>
            </center>  
          </div>
      </div>
    
  </form>

<?php } ?>

<!-- ============================================================== -->
<!-- Add Form -->
<!-- ============================================================== -->

<script type="text/javascript">

      // ADD FILED CODE
    $("#update_filed").click(function(e) {
        e.preventDefault();
        
            document.getElementById("loaderaddedit").style.display = "block";
            

            var txttablenameview_val =document.getElementById("txttablenameview").value;

            if (document.getElementById('txtmenushowview').checked) {
              var tablemenuview_val = document.getElementById('txtmenushowview').value;
            }
            if (document.getElementById('txtmenuhideview').checked) {
              var tablemenuview_val = document.getElementById('txtmenuhideview').value;
            }

            if (txttablenameview_val == '') {
                alert("Insertion Failed Some Fields are Blank....!!");
              } else {


                        var dynamicArrayView = [];

                        var frcr;
                        var hideoldtotalview =document.getElementById("hideoldtotalview").value;
                        // alert(hideoldtotal);
                        for(frcr=1; frcr<=hideoldtotalview; frcr++){
                          
                          // if(frcr == 1){
                          //     // alert(frcr);
                          // }else{
                              var hidetxtoldview ="hidetxtoldview"+frcr;
                              var hidetxtoldview_vals =document.getElementById(hidetxtoldview).value;

                              // var txtold ="txtold"+frcr;
                              // var txtold_vals =document.getElementById(txtold).value;

                              var radioview_show = hidetxtoldview_vals+"_"+frcr+"_SHOW";
                              var radioview_hide = hidetxtoldview_vals+"_"+frcr+"_HIDE";

                              if (document.getElementById(radioview_show).checked) {
                                var tablemenuview_val = document.getElementById(radioview_show).value;
                              }
                              if (document.getElementById(radioview_hide).checked) {
                                var tablemenuview_val = document.getElementById(radioview_hide).value;
                              }

                              var keyview = hidetxtoldview_vals;
                              var valueview = tablemenuview_val;

                              // Create an object with dynamic key-value pair and push it to the array
                              var objview = {};
                              objview[keyview] = valueview;
                              dynamicArrayView.push(objview); 
                              // alert(radio_show);
                              
                              // updategetdata(hidetxtold_vals,txtold_vals,txttablename_val);
                          // }                  
                        }
                        console.log(dynamicArrayView);
                      nitiview(txttablenameview_val,tablemenuview_val,dynamicArrayView);
                      document.getElementById("loaderaddedit").style.display = "none";
                      viewinformation();
                      informationload();
                      document.getElementById("form1").reset();
                      document.getElementById("informationadd").style.display = "none"; 
                      document.getElementById("informationtable").style.display = "block";
                    // });
                // ADD MORE ADD BY CLASS DETAILS                  
            }
              
      });
    // ADD FILED CODE
      $( document ).ready(function() {
        // FIND CLASS NAME ID
            tabletypeloadview();
        // FIND CLASS NAME ID
      });

      function nitiview(names,menu,abc){
        var txttablenames_val = names;
        var txttablemenu_val = menu;
        var txtshowhide_val = abc;
        console.log(txtshowhide_val);

        $.post("../ajaxdata/pages/update/ajax_permission.php", {
            txttablenames_val1: txttablenames_val,
            txttablemenu_val1: txttablemenu_val,
            txtshowhide_val1: JSON.stringify(txtshowhide_val)

          }, function(data) {
            // alert(data);
          });
      }
      function tabletypeloadview(){
        var strUser = document.getElementById("txttablenameview").value;
        if(strUser == '0'){
          document.getElementById("buttonshowhide").style.display = "none";
          $('#getfileddetailsview').html(''); 
        }else{
          document.getElementById("buttonshowhide").style.display = "block";
          $('#getfileddetailsview').html('');              
          $.ajax({
              type:'POST',
              url:'tablepermission_viewFiledList.php',
              data:'sid='+strUser,
              success:function(html){
                    $('#getfileddetailsview').html(html);              
              }
          });
        }
        
      }
</script>