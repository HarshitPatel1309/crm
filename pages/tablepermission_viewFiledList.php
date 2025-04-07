<?php include '../config/core.php';?>
<?php include '../config/database.php';?>
<?php include '../login_checker.php';?>

<?php
  $result=mysqli_query($conn,"select * from tbl_showhide where tablename='".$_POST['sid']."'");
  while($r=mysqli_fetch_array($result))
  {
?>
      <div class="box">
        <div class="row clearfix">
          <div class="col-sm-3" style="text-align:center;">
            <div class="form-group">
              <h4>TABLE SHOW IN MENU : </h4>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <h4>
                <?php 
                  if($r['tablemenu'] == 'SHOW'){
                ?>
                    <input type="radio" name="menu" id="txtmenushowview" value="SHOW" checked> SHOW
                    <input type="radio" name="menu" id="txtmenuhideview" value="HIDE"> HIDE
                <?php    
                  }else{
                ?>
                    <input type="radio" name="menu" id="txtmenushowview" value="SHOW" > SHOW
                    <input type="radio" name="menu" id="txtmenuhideview" value="HIDE"checked> HIDE
                <?php    
                  }
                ?>
              </h4>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="box">
        <div class="row clearfix">
      <?php
        $data = $r['showhide'];
        $data = json_decode($data, true);

        if ($data) {
            $index = 1;
            foreach ($data as $item) {
                foreach ($item as $key => $value) {
                  ?>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2 bordered">
                      <!-- <div class="form-group"> -->
                        <input type="hidden" name="hidetxtoldview<?php echo $index; ?>" id="hidetxtoldview<?php echo $index; ?>" class="form-control" placeholder="Filed Name" value="<?php echo $key; ?>">
                        <label><?php echo $key; ?> <span class="required" style="color: red;">*</span></label>
                      <!-- </div> -->
                    </div>
                    <div class="col-sm-2 bordered">
                      <?php 
                        if($value == 'SHOW'){
                      ?>
                          <input type="radio" name="<?php echo $key; ?>_1" id="<?php echo $key; ?>_<?php echo $index;?>_SHOW" value="SHOW" checked> SHOW
                          <input type="radio" name="<?php echo $key; ?>_1" id="<?php echo $key; ?>_<?php echo $index;?>_HIDE" value="HIDE"> HIDE
                      <?php    
                        }else{
                      ?>
                          <input type="radio" name="<?php echo $key; ?>_1" id="<?php echo $key; ?>_<?php echo $index; ?>_SHOW" value="SHOW" > SHOW
                          <input type="radio" name="<?php echo $key; ?>_1" id="<?php echo $key; ?>_<?php echo $index; ?>_HIDE" value="HIDE" checked> HIDE
                      <?php    
                        }
                      ?>
                        
                      <!-- </div> -->
                    </div>
                    <div class="col-sm-1"></div>
                  <?php  
                    $index++;
                }
            }
        } else {
            echo "Error decoding JSON data.";
        }
      ?>
        </div>
      </div>
      
    
<input type="hidden" name="hideoldtotalview" id="hideoldtotalview" class="form-control" placeholder="Filed Name" value="<?php echo $index-1; ?>">
<?php } ?>