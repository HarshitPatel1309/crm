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
         <option value=<?php echo $row3['filedname'];?>><?php echo $row3['filedname'];?></option>
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
        <option value=<?php echo $row4['Field'];?>><?php echo $row4['Field'];?></option>
        <?php
      }


  }
// FILED TYPE DATABASE
?>