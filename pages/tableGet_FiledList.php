<?php include '../config/core.php';?>
<?php include '../config/database.php';?>
<?php include '../login_checker.php';?>

 
<?php
  $sql = "DESCRIBE ".$_POST['sid']."";
  $olds = 1;
  $result=mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
      if($row['Field']=='id'){ ?>
          <div class="row clearfix">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-3" style="text-align: right;">
              <b>
                Table Filed :
              </b>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <input type="hidden" name="hidetxtold<?php echo $olds; ?>" id="hidetxtold<?php echo $olds; ?>" class="form-control" placeholder="Filed Name" value="<?php echo $row['Field']; ?>" disabled>
                <input type="text" name="txtold<?php echo $olds; ?>" id="txtold<?php echo $olds; ?>" class="form-control" placeholder="Filed Name" value="<?php echo $row['Field']; ?>" disabled>
              </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                  <?php $trimmedText = rtrim($row['Type'], "("); ?>
                  <select class="form-control m-wrap" name="txtfiledtype<?php echo $olds; ?>" id="txtfiledtype<?php echo $olds; ?>" disabled>
                    <?php 
                      $result35=mysqli_query($conn,"SELECT * FROM `tbl_filedset`");
                      while($row35=mysqli_fetch_array($result35))
                      {?>
                          <option value="<?php echo $row35['filedname'];?>"<?php if(strtolower($row35['filedname'])==$trimmedText){?> selected="selected" <?php } ?>><?php echo $row35['filedname'];?></option>
                        <?php 
                      }
                    ?>
                  </select>
                </div>
              </div>
            <div class="col-sm-2">
            </div>
          </div>
      <?php
        }else{
      ?>
      <div class="box">
        <div class="row clearfix">
          <div class="col-sm-3" style="text-align: right;">
            <b><br>
              Table Filed :
            </b>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Filed Name <span class="required" style="color: red;">*</span></label>
              <input type="hidden" name="hidetxtold<?php echo $olds; ?>" id="hidetxtold<?php echo $olds; ?>" class="form-control" placeholder="Filed Name" value="<?php echo $row['Field']; ?>">
              <input type="text" name="txtold<?php echo $olds; ?>" id="txtold<?php echo $olds; ?>" class="form-control" placeholder="Filed Name" value="<?php echo $row['Field']; ?>">


              <script>greetUser("<?php echo $_POST['sid']; ?>","<?php echo $row['Field']; ?>",<?php echo $olds; ?>);</script>


            </div>
          </div>
          <div class="col-sm-2">
              <div class="form-group">
                <label>Filed Type <span class="required" style="color: red;">*</span></label>
                <?php $trimmedText = rtrim($row['Type'], "("); ?>
                <select class="form-control m-wrap" name="txtfiledtype<?php echo $olds; ?>" id="txtfiledtype<?php echo $olds; ?>">
                  <?php 
                    $result35=mysqli_query($conn,"SELECT * FROM `tbl_filedset`");
                    while($row35=mysqli_fetch_array($result35))
                    {?>
                        <option value="<?php echo $row35['filedname'];?>"<?php if(strtolower($row35['filedname'])==$trimmedText){?> selected="selected" <?php } ?>><?php echo $row35['filedname'];?></option>
                      <?php 
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label>Relation<span class="required" style="color: red;">*</span></label>
                <select class="form-control m-wrap" name="viewtxtrel<?php echo $olds; ?>" id="viewtxtrel<?php echo $olds; ?>" onchange="relationload()">
                </select>
              </div>
            </div>
          <div class="col-sm-2">
          </div>
        </div>

        <div id="relationviewid<?php echo $olds; ?>">
          <div class="row clearfix" >
            <div class="col-sm-3"></div>
              <div class="col-sm-3">
                  <div class="form-group">
                    <label>Relation Table Name <span class="required" style="color: red;">*</span></label>
                    <select class="form-control m-wrap" name="reltxttableview<?php echo $olds; ?>" id="reltxttableview<?php echo $olds; ?>" onchange="reltableloadview()"></select>
                  </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Relation Filed Name <span class="required" style="color: red;">*</span></label>
                 <select class="form-control m-wrap" name="reltxtfiledview<?php echo $olds; ?>" id="reltxtfiledview<?php echo $olds; ?>"></select>
                </div>
              </div>
          </div>
        </div>
      </div>
      <?php 
        }
        $olds++;
      ?>
      
      <?php
        
    }
?>

<input type="hidden" name="hideoldtotal" id="hideoldtotal" class="form-control" placeholder="Filed Name" value="<?php echo $olds-1; ?>">