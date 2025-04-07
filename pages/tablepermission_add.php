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
              <select class="form-control m-wrap" name="txttablename" id="txttablename" onchange="tabletypeload()">
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
      
      <div id="getfileddetails"></div>

    
    <div class="clearfix">&nbsp;</div>
    <div class="row clearfix">                                
        <div class="col-sm-12">
          <center>
            <button type="submit" name="submit" id="add_filed" class="btn btn-primary">Submit</button>
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
    $("#add_filed").click(function(e) {
        e.preventDefault();
            document.getElementById("loaderaddedit").style.display = "block";
            

            var txttablename_val =document.getElementById("txttablename").value;

            if (document.getElementById('txtmenushow').checked) {
              var tablemenu_val = document.getElementById('txtmenushow').value;
            }
            if (document.getElementById('txtmenuhide').checked) {
              var tablemenu_val = document.getElementById('txtmenuhide').value;
            }

            if (txttablename_val == '') {
                alert("Insertion Failed Some Fields are Blank....!!");
              } else {


                        var dynamicArray = [];

                        var frcr;
                        var hideoldtotal =document.getElementById("hideoldtotal").value;
                        // alert(hideoldtotal);
                        for(frcr=1; frcr<=hideoldtotal; frcr++){
                          
                          if(frcr == 1){
                              // alert(frcr);
                          }else{
                              var hidetxtold ="hidetxtold"+frcr;
                              var hidetxtold_vals =document.getElementById(hidetxtold).value;

                              // var txtold ="txtold"+frcr;
                              // var txtold_vals =document.getElementById(txtold).value;

                              var radio_show = hidetxtold_vals+"_"+frcr+"_SHOW";
                              var radio_hide = hidetxtold_vals+"_"+frcr+"_HIDE";

                              if (document.getElementById(radio_show).checked) {
                                var tablemenu_val = document.getElementById(radio_show).value;
                              }
                              if (document.getElementById(radio_hide).checked) {
                                var tablemenu_val = document.getElementById(radio_hide).value;
                              }

                              var key = hidetxtold_vals;
                              var value = tablemenu_val;

                              // Create an object with dynamic key-value pair and push it to the array
                              var obj = {};
                              obj[key] = value;
                              dynamicArray.push(obj); 
                              // alert(radio_show);
                              
                              // updategetdata(hidetxtold_vals,txtold_vals,txttablename_val);
                          }                  
                        }
                      niti(txttablename_val,tablemenu_val,dynamicArray);
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
            tabletypeload();
        // FIND CLASS NAME ID
      });

      function niti(names,menu,abc){
        var txttablenames_val = names;
        var txttablemenu_val = menu;
        var txtshowhide_val = abc;
        console.log(txtshowhide_val);

        $.post("../ajaxdata/pages/insert/ajax_permission.php", {
            txttablenames_val1: txttablenames_val,
            txttablemenu_val1: txttablemenu_val,
            txtshowhide_val1: JSON.stringify(txtshowhide_val)

          }, function(data) {
            // alert(data);
          });
      }
      function tabletypeload(){
        var strUser = document.getElementById("txttablename").value;
        $('#getfileddetails').html('');              
        $.ajax({
            type:'POST',
            url:'tablepermission_FiledList.php',
            data:'sid='+strUser,
            success:function(html){
                  $('#getfileddetails').html(html);              
            }
        });
      }
</script>