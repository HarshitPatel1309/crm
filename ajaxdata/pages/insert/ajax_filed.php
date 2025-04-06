<?php include '../../../config/core.php';?>
<?php include '../../../config/database.php';?>
<?php include '../../../login_checker.php';?>
<?php
    $table_name=mysqli_real_escape_string($conn,$_POST['txttablename_val1']);
    $txtfiled1_val1=mysqli_real_escape_string($conn,$_POST['txtfiled1_val1']);
    $txtfiledtype1_val2=mysqli_real_escape_string($conn,$_POST['txtfiledtype1_val1']);
    $txtrel1_val2=mysqli_real_escape_string($conn,$_POST['txtrel1_val1']);
    $reltxttable1_val2=mysqli_real_escape_string($conn,$_POST['reltxttable1_val1']);
    $reltxtfiled1_val2=mysqli_real_escape_string($conn,$_POST['reltxtfiled1_val1']);


    // $sqlij = "ALTER TABLE $table_name ADD  `$txtfiled1_val1` TEXT NULL";
    if($txtfiledtype1_val2 == 'VARCHAR'){
        $txtfiledtype1_val3 = "VARCHAR(999)";
    }else{
        $txtfiledtype1_val3 = $txtfiledtype1_val2;
    }

    if($txtrel1_val2=="no"){
        $reltxttable1_val3 = '';
        $reltxtfiled1_val3 = '';
    }else{
        $reltxttable1_val3 = $reltxttable1_val2;
        $reltxtfiled1_val3 = $reltxtfiled1_val2;
    }

    $sqlij = "ALTER TABLE $table_name ADD  `$txtfiled1_val1` $txtfiledtype1_val3 NULL";

    if (mysqli_query($conn, $sqlij)) {
        echo "Table Filed Insert successfully"; 
    } else {
        echo "Error: " . $sqlij . "" . mysqli_error($conn);
    }

    $sqlij1 = "insert into tbl_relationship values(NULL,'".$table_name."','".$txtfiled1_val1."','".$reltxttable1_val3."','".$reltxtfiled1_val3."')";
    if (mysqli_query($conn, $sqlij1)) {
        // echo "Users Insert successfully"; 
    } else {
        echo "Error: " . $sqlij1 . "" . mysqli_error($conn);
    }
?>

  