<?php include '../config/core.php';?>
<?php include '../config/database.php';?>
<?php include '../login_checker.php';?>
<?php 

// ROLE MASTER DATA
if (isset($_POST['role_ids'])){  
  $data1 = $_POST['role_ids'];
  $allvals =  array();
  $sqln1 = "SELECT * FROM `tbl_role` WHERE `role_id` =".$data1;
  $result1=mysqli_query($conn,$sqln1);
  if ($result1->num_rows <= 0) {
      $allvals['output_sn'] = "00000";
  } else {
    while($row1=mysqli_fetch_array($result1))
    {
      $allvals['role_id_sn'] = $row1['role_id'];
      $allvals['role_name_sn'] = $row1['role_name'];
      $allvals['role_shortname_sn'] = $row1['role_shortname'];
      $allvals['output_sn'] = "11111";
    }
  }
  print_r(json_encode($allvals));
}
// ROLE MASTER DATA

// TABLE FILED MATCH
if (isset($_POST['matchfiled'])){  
  $column_name = $_POST['matchfiled'];
  $txttablename_val = $_POST['txttablename_val'];
  $allvals2 =  array();

  $sql = "SELECT COUNT(*) AS column_exists
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE table_schema = '$dbname' AND table_name = '$txttablename_val' AND column_name = '$column_name'";
  
  $result = mysqli_query($conn, $sql);

  // Fetch the result
  $row = mysqli_fetch_assoc($result);

  if ($row['column_exists'] > 0) {
      echo "00000";
  } else {
      echo "11111";
  }
  // Check if there are duplicates
}
// TABLE FILED MATCH

// FILED TYPE DATABASE
  if (isset($_POST['filedtypes_id'])){  
    $data3 = $_POST['filedtypes_id'];
    $sqln3 = "select * from tbl_filedset";
    $result3=mysqli_query($conn,$sqln3);
    if ($result3->num_rows <= 0) {
        echo "00000";
    } else {
      while($row3=mysqli_fetch_array($result3))
      { ?>
         <option value="<?php echo $row3['filedname'];?>"><?php echo $row3['filedname'];?></option>
        <?php
      }
    }
  }
// FILED TYPE DATABASE

  // FILED TYPE DATABASE
  if (isset($_POST['relfiled_id'])){  
    $data4 = $_POST['relfiled_id'];

    $sqln4 = "DESCRIBE ".$_POST['relfiled_id']."";
    $olds = 1;
    $result4=mysqli_query($conn,$sqln4);
      while ($row4 = mysqli_fetch_assoc($result4)) {
        ?>
        <option value="<?php echo $row4['Field'];?>"><?php echo $row4['Field'];?></option>
        <?php
      }
  }
// FILED TYPE DATABASE

   // FILED TYPE DATABASE
  if (isset($_POST['tablerec_id'])){  
    $data4 = $_POST['tablerec_id'];

    $result5=mysqli_query($conn,"SHOW TABLES");
    if ($result5->num_rows <= 0) {
        echo "00000";
    } else {
    while($row=mysqli_fetch_array($result5))
    {
        if ('tbl_role' === $row['Tables_in_' . $dbname] || 'tbl_users' === $row['Tables_in_' . $dbname] || 'tbl_login' === $row['Tables_in_' . $dbname] || 'tbl_filedset' === $row['Tables_in_' . $dbname] || 'tbl_showhide' === $row['Tables_in_' . $dbname] || 'tbl_Payment_Type' === $row['Tables_in_' . $dbname]) {
        }else{
          ?>
            <option value='<?php echo $row['Tables_in_' . $dbname]; ?>'><?php echo $row['Tables_in_' . $dbname]; ?></option>
          <?php
        }
    }
    }
  }
// FILED TYPE DATABASE


  // UPDATE RELATION TABLE DATA
  if (isset($_POST['tnames_id'])){  
    $data6 = $_POST['tnames_id'];
    $fnames_ids = $_POST['fnames_id'];

    $sqln6 = "SELECT * FROM `tbl_relationship` WHERE `tablename` ='".$data6."' AND `filedname` ='".$fnames_ids."'";
    $result6=mysqli_query($conn,$sqln6);
    if ($result6->num_rows <= 0) {
        $allvals6['output_sn'] = "00000";
    } else {
      while($row6=mysqli_fetch_array($result6))
      {
        $allvals6['relationtable_sn'] = $row6['relationtable'];
        $allvals6['relationfiled_sn'] = $row6['relationfiled'];
        $allvals6['output_sn'] = "11111";
      }
    }
    print_r(json_encode($allvals6));
  }
  // UPDATE RELATION TABLE DATA


  // VIEW RELATION SHIP TABLE MATCH
  if (isset($_POST['relationtable_sn'])){  
    $data7 = $_POST['relationtable_sn'];

    $result6=mysqli_query($conn,"SHOW TABLES");
    if ($result6->num_rows <= 0) {
        echo "00000";
    } else {
    while($row7=mysqli_fetch_array($result6))
    {
        if ('tbl_role' === $row7['Tables_in_' . $dbname] || 'tbl_users' === $row7['Tables_in_' . $dbname] || 'tbl_login' === $row7['Tables_in_' . $dbname] || 'tbl_filedset' === $row7['Tables_in_' . $dbname] || 'tbl_showhide' === $row7['Tables_in_' . $dbname] || 'tbl_Payment_Type' === $row7['Tables_in_' . $dbname]) {
        }else{
          ?>
            <option value="<?php echo $row7['Tables_in_' . $dbname];?>"<?php if($row7['Tables_in_' . $dbname]==$data7){?> selected="selected" <?php } ?>><?php echo $row7['Tables_in_' . $dbname];?></option>
          <?php
        }
    }
    }
  }
  // VIEW RELATION SHIP TABLE MATCH

  // VIEW RELATION TABLE FILED
  if (isset($_POST['relationfiled_sn'])){  
    $data8 = $_POST['relationfiled_sn'];

    $sqln8 = "DESCRIBE ".$_POST['relationtable_sn']."";
    $result8=mysqli_query($conn,$sqln8);
      while ($row8 = mysqli_fetch_assoc($result8)) {
        ?>
        <option value="<?php echo $row8['Field'];?>"<?php if($row8['Field']==$data8){?> selected="selected" <?php } ?>><?php echo $row8['Field'];?></option>
        <?php
      }
  }
  // VIEW RELATION TABLE FILED
?>