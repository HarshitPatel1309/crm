<?php include '../config/core.php';?>
<?php include '../config/database.php';?>
<?php include '../login_checker.php';?>


      <div class="box">
        <div class="row clearfix">
          <div class="col-sm-3" style="text-align:center;">
            <div class="form-group">
              <h4>TABLE SHOW IN MENU  </h4>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <h4>
                <input type="radio" name="menu" id="txtmenushow" value="SHOW" checked> SHOW
                <input type="radio" name="menu" id="txtmenuhide" value="HIDE"> HIDE
              </h4>
            </div>
          </div>
        </div>
      </div>
      <hr>

    <div class="box">
      <div class="row clearfix">
      <?php
        $sql = "DESCRIBE ".$_POST['sid']."";
        $olds = 1;
        $result=mysqli_query($conn,$sql);
          while ($row = mysqli_fetch_assoc($result)) {
            if($row['Field']=='id'){ ?>
            <?php
              }else{
            ?>
                <div class="col-sm-1"></div>
                <div class="col-sm-2 bordered">
                    <input type="hidden" name="hidetxtold<?php echo $olds; ?>" id="hidetxtold<?php echo $olds; ?>" class="form-control" placeholder="Filed Name" value="<?php echo $row['Field']; ?>">
                    <label><?php echo $row['Field']; ?> <span class="required" style="color: red;">*</span></label>
                </div>
                <div class="col-sm-2 bordered">
                    <input type="radio" name="<?php echo $row['Field']; ?>" id="<?php echo $row['Field']; ?>_<?php echo $olds; ?>_SHOW" value="SHOW" checked> SHOW
                    <input type="radio" name="<?php echo $row['Field']; ?>" id="<?php echo $row['Field']; ?>_<?php echo $olds; ?>_HIDE" value="HIDE"> HIDE
                </div>
                <div class="col-sm-1"></div>
            <?php 
              }
              $olds++;
          }
      ?>
      </div>
    </div>
<input type="hidden" name="hideoldtotal" id="hideoldtotal" class="form-control" placeholder="Filed Name" value="<?php echo $olds-1; ?>">