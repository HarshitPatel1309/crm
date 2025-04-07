<?php include '../../../config/core.php';?>
<?php include '../../../config/database.php';?>
<?php include '../../../login_checker.php';?>
<?php
    $table_name=mysqli_real_escape_string($conn,$_POST['txttablename_val1']);
    $txtfiled1_val1=mysqli_real_escape_string($conn,$_POST['txtfiled1_val1']);
    $hidefiled1_val2=mysqli_real_escape_string($conn,$_POST['hidefiled1_val1']);
    $txtfiledtype1_val2=mysqli_real_escape_string($conn,$_POST['txttype1_val1']);

    $viewtxtrel1_val2=mysqli_real_escape_string($conn,$_POST['viewtxtrel1_val1']);
    $reltxttableview1_val2=mysqli_real_escape_string($conn,$_POST['reltxttableview1_val1']);
    $reltxtfiledview1_val2=mysqli_real_escape_string($conn,$_POST['reltxtfiledview1_val1']);

    $hidetableoldname1_val2=mysqli_real_escape_string($conn,$_POST['hidetableoldname1_val1']);
    $hidefiledoldname1_val2=mysqli_real_escape_string($conn,$_POST['hidefiledoldname1_val1']);

    if($txtfiledtype1_val2 == 'VARCHAR'){
        $txtfiledtype1_val3 = "VARCHAR(999)";
    }else{
        $txtfiledtype1_val3 = $txtfiledtype1_val2;
    }

    if($viewtxtrel1_val2=="no"){
        if($reltxttableview1_val2 != ''){
            $sqlij2 = "DELETE FROM `tbl_relationship` WHERE `relationtable` = '".$reltxttableview1_val2."' AND `relationfiled` = '".$reltxtfiledview1_val2."'";
            mysqli_query($conn, $sqlij2);
        }
        $reltxttable1_val3 = '';
        $reltxtfiled1_val3 = '';
    }else{

        $sqln6 = "SELECT * FROM `tbl_relationship` WHERE `relationtable` ='".$hidetableoldname1_val2."' AND `relationfiled` ='".$hidefiledoldname1_val2."' AND `tablename` ='".$table_name."'";
        $result6=mysqli_query($conn,$sqln6);
        if ($result6->num_rows <= 0) {
            // $allvals6['output_sn'] = "00000";
            echo "if";
            $reltxttable1_val3 = $reltxttableview1_val2;
            $reltxtfiled1_val3 = $reltxtfiledview1_val2;

            $sqlij1 = "insert into tbl_relationship values(NULL,'".$table_name."','".$txtfiled1_val1."','".$reltxttable1_val3."','".$reltxtfiled1_val3."')";
            if (mysqli_query($conn, $sqlij1)) {
            } else {
                echo "Error: " . $sqlij1 . "" . mysqli_error($conn);
            }

        } else {
          while($row6=mysqli_fetch_array($result6))
          {
            $relationtableid = $row6['id'];
          }

            $sqlijadd = "UPDATE `tbl_relationship` SET `relationtable`='".$reltxttableview1_val2."',`relationfiled`='".$reltxtfiledview1_val2."', `tablename`='".$table_name."', `filedname`='".$txtfiled1_val1."' WHERE `id`='".$relationtableid."'";
            mysqli_query($conn, $sqlijadd);
        }

        
    }
    
    $sqlij = "ALTER TABLE `$table_name` CHANGE `$hidefiled1_val2` `$txtfiled1_val1` $txtfiledtype1_val3 NULL";
    if (mysqli_query($conn, $sqlij)) {
        echo "Table Filed Update successfully"; 
    } else {
        echo "Error: " . $sqlij . "" . mysqli_error($conn);
    }
?>

  