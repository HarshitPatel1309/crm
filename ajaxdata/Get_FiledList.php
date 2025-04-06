<?php include '../config/core.php';?>
<?php include '../config/database.php';?>
<?php include '../login_checker.php';?>
<?php 

<?php
  $result=mysqli_query($conn,"select * from tbl_hostel where hostel_id='".$_POST['sid']."'");
  while($r=mysqli_fetch_array($result))
  {
?>
<form id="form1" method="post" enctype="multipart/form-data">
  <div class="box">
    <div class="row clearfix">
      <div class="col-sm-6">
          <div class="form-group">
            <label>Hostel Name <span class="required" style="color: red;">*</span></label>
            <input type="text" name="txthostelnameedit" id="txthostelnameedit" class="form-control" placeholder="Hostel Name" value="<?php echo $r['hostel_name']; ?>" >
          </div>
      </div>
      <div class="col-sm-6">
          <div class="form-group">
            <label>Hostel Type <span class="required" style="color: red;">*</span></label>
            <select class="form-control m-wrap" name="txthosteltypeedit" id="txthosteltypeedit" onchange="hosteltypeloadEdit()">
              <?php 
                $result=mysqli_query($conn,"select * from tbl_masterhosteltype where status=1");
                while($row=mysqli_fetch_array($result))
                {?>
                    <option value="<?php echo $row['masterhosteltype_id'];?>"<?php if($row['masterhosteltype_id']==$r['masterhosteltype_id']){?> selected="selected" <?php } ?>><?php echo $row['masterhosteltype_name'];?></option>
                  <?php 
                }
              ?>
            </select>
          </div>
      </div>
    </div>
    <?php 
      $array1= array();
      $labdisp = 1;
      $result2=mysqli_query($conn,"select * from tbl_hosteldetails WHERE hostel_id='".$_POST['sid']."'");
      while($row2=mysqli_fetch_array($result2))
      {
        array_push($array1,$row2['hosteldetails_id']);
    ?>
        <div class="row clearfix" id="<?php echo $row2['hosteldetails_id']; ?>">
          <div class="col-sm-2">
            <div class="form-group">
              <?php
                if($labdisp == 1){
              ?>
                <label>Floor Name <span class="required" style="color: red;">*</span></label>
              <?php    
                }
              ?>
              <select class="form-control m-wrap" name="txthostelflooredit<?php echo $row2['hosteldetails_id']; ?>" id="txthostelflooredit<?php echo $row2['hosteldetails_id']; ?>">
                <?php 
                  $result=mysqli_query($conn,"select * from tbl_masterhostelfloor where status = 1");
                  while($row=mysqli_fetch_array($result))
                  {?>
                      <option value="<?php echo $row['masterhostelfloor_id'];?>"<?php if($row['masterhostelfloor_id']==$row2['masterhostelfloor_id']){?> selected="selected" <?php } ?>><?php echo $row['masterhostelfloor_name'];?></option>
                    <?php 
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <?php
                if($labdisp == 1){
              ?>
                <label>Block Name <span class="required" style="color: red;">*</span></label>
              <?php    
                }
              ?>
              <input type="text" name="txtblockedit<?php echo $row2['hosteldetails_id']; ?>" id="txtblockedit<?php echo $row2['hosteldetails_id']; ?>" class="form-control" placeholder="Block Name" value="<?php echo $row2['block_name']; ?>">
            </div>
          </div>
          <div class="col-sm-2">
              <div class="form-group">
                <?php
                  if($labdisp == 1){
                ?>
                  <label>Total Room <span class="required" style="color: red;">*</span></label>
                <?php    
                  }
                ?>
                <input type="text" name="txttotalroomedit<?php echo $row2['hosteldetails_id']; ?>" id="txttotalroomedit<?php echo $row2['hosteldetails_id']; ?>" class="form-control" onkeypress="return isNumberKey(event)" onkeyup="FloorTotalStudent(<?php echo $row2['hosteldetails_id']; ?>)" placeholder="Total Room" value="<?php echo $row2['total_room']; ?>">
              </div>
          </div>
          <div class="col-sm-2">
              <div class="form-group">
                <?php
                  if($labdisp == 1){
                ?>
                  <label>Student Eachroom <span class="required" style="color: red;">*</span></label>
                <?php    
                  }
                ?>
                <input type="text" name="txteachroomedit<?php echo $row2['hosteldetails_id']; ?>" id="txteachroomedit<?php echo $row2['hosteldetails_id']; ?>" class="form-control" onkeypress="return isNumberKey(event)" onkeyup="FloorTotalStudent(<?php echo $row2['hosteldetails_id']; ?>)" placeholder="Student Eachroom" value="<?php echo $row2['student_eachroom']; ?>">
              </div>
          </div>
          <div class="col-sm-2">
              <div class="form-group">
                <?php
                  if($labdisp == 1){
                ?>
                  <label>Total Student Floor <span class="required" style="color: red;">*</span></label>
                <?php    
                  }
                ?>
                <input type="text" name="txtstudentflooredit<?php echo $row2['hosteldetails_id']; ?>" id="txtstudentflooredit<?php echo $row2['hosteldetails_id']; ?>" onkeypress="return isNumberKey(event)" class="form-control" placeholder="Total Student Floor" value="<?php echo $row2['total_studentfloor']; ?>" disabled>
              </div>
          </div>

          <div class="col-lg-2 col-md-12">
            <div class="form-group" id="addmoredisp">    
              <?php
                if($labdisp == 1){
              ?>
                <br>
              <?php    
                }
              ?>                   
              <button type="button" onclick="submorefunDelete('<?php echo $row2['hosteldetails_id']; ?>')" name="remove"  class="btn btn-danger btn_remove"><i class="fa fa-minus"></i></button>
              <button type="button" name="addmore" id="addmore" onclick="addmorefun()" class="btn btn-success"><i class="fa fa-plus"></i></button>
            </div>
          </div>
        </div>
    <?php 
          $labdisp++;
        } 
    ?>
    <div id="dynamic_fieldedit"> </div>
  </div>
  
  <div class="clearfix">&nbsp;</div>
  <div class="row clearfix">                                
      <div class="col-sm-12">
        <center>
          <button type="submit" name="submit" id="edit_hostel" class="btn btn-primary">Update</button>
          <a href="javascript:void(0);" onclick="viewhostel();" class="btn btn-outline-secondary"> Cancel</a>
        </center>  
      </div>
  </div>
</form>
<?php } ?>


?>