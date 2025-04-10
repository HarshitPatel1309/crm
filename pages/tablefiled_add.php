<?php include '../config/core.php';?>
<?php include '../config/database.php';?>
<?php include '../login_checker.php';?>

<link rel="stylesheet" href="../dist/dropify/css/dropify.min.css">
<link rel="stylesheet" type="text/css" href="../assets/libs/summernote/dist/summernote-bs4.css">
<!-- MAIN CSS -->
<!-- ============================================================== -->
<!-- FILED Add Form -->
<!-- ============================================================== -->
<form id="form1" method="post" enctype="multipart/form-data">
  <div class="box">
    <div class="row clearfix">
        <div class="col-sm-3">
            <div class="form-group">
              <label>Table Name <span class="required" style="color: red;">*</span></label>
              <select class="form-control m-wrap" name="txttablename" id="txttablename" onchange="tabletypeload()">
                <?php 
                  $result=mysqli_query($conn,"SHOW TABLES");
                  while($row=mysqli_fetch_array($result))
                  {
                      if ('tbl_role' === $row['Tables_in_' . $dbname] || 'tbl_users' === $row['Tables_in_' . $dbname] || 'tbl_login' === $row['Tables_in_' . $dbname] || 'tbl_filedset' === $row['Tables_in_' . $dbname] || 'tbl_showhide' === $row['Tables_in_' . $dbname] || 'tbl_Payment_Type' === $row['Tables_in_' . $dbname]) {
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
        <div class="col-sm-3">
          <div class="form-group">
            <label>Filed Name <span class="required" style="color: red;">*</span></label>
            <input type="text" onblur="validateDuplicate(this)" name="txtfiled1" id="txtfiled1" class="form-control" placeholder="Filed Name">
          </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
              <label>Filed Type <span class="required" style="color: red;">*</span></label>
              <select class="form-control m-wrap" name="txtfiledtype1" id="txtfiledtype1">
                <?php 
                  $result=mysqli_query($conn,"SELECT * FROM `tbl_filedset`");
                  while($row=mysqli_fetch_array($result))
                  {?>
                      <option value=<?php echo $row['filedname'];?>><?php echo $row['filedname'];?></option>
                    <?php 
                  }
                ?>
              </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
              <label>Relation<span class="required" style="color: red;">*</span></label>
              <select class="form-control m-wrap" name="txtrel1" id="txtrel1" onchange="relationload()">
                <option value="no">NO</option>
                <option value="yes">YES</option>
              </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
              <br>                   
              <button type="button" name="addmore" id="addmore" class="btn btn-success"><i class="fa fa-plus"></i></button>
            </div>
        </div>
    </div>
    <div id="relationid">
    <div class="row clearfix" >
        <div class="col-sm-3">
            <div class="form-group">
              <label>Relation Table Name <span class="required" style="color: red;">*</span></label>
              <select class="form-control m-wrap" name="reltxttable1" id="reltxttable1" onchange="reltableload()">
                <?php 
                  $result=mysqli_query($conn,"SHOW TABLES");
                  while($row=mysqli_fetch_array($result))
                  {
                      if ('tbl_role' === $row['Tables_in_' . $dbname] || 'tbl_users' === $row['Tables_in_' . $dbname] || 'tbl_login' === $row['Tables_in_' . $dbname] || 'tbl_filedset' === $row['Tables_in_' . $dbname] || 'tbl_showhide' === $row['Tables_in_' . $dbname] || 'tbl_relationship' === $row['Tables_in_' . $dbname]) {
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
        <div class="col-sm-3">
          <div class="form-group">
            <label>Relation Filed Name <span class="required" style="color: red;">*</span></label>
           <select class="form-control m-wrap" name="reltxtfiled1" id="reltxtfiled1"></select>
          </div>
        </div>
    </div>
  </div>
    <div id="dynamic_field"> </div>
    <div id="getfileddetails"></div>
  </div>
  <div class="clearfix">&nbsp;</div>
  <div class="row clearfix">                                
      <div class="col-sm-12">
        <center>
          <button type="submit" name="submit" id="add_filed" class="btn btn-primary">Submit</button>
          <a href="javascript:void(0);" onclick="viewfiled();" class="btn btn-outline-secondary"> Cancel</a>
        </center>  
      </div>
  </div>
</form>
<!-- ============================================================== -->
<!-- FILED Add Form -->
<!-- ============================================================== -->
<input type="hidden" id="addmoreno" name="addmoreno" value="">
<script type="text/javascript">
    // DUPLICATE VALIDATION
        function validateDuplicate(inputValue){
            var strUser = inputValue.value;
            var strid = inputValue.id;
            
            var txttablename_val =document.getElementById("txttablename").value;
            $.ajax({
                  type:'POST',
                  url:'../ajaxdata/Get_datadetails.php',
                  data:'matchfiled='+strUser+'&txttablename_val='+txttablename_val,
                  success:function(html){
                    var strstring = html.trim();
                    
                    if(strstring == "00000"){
                        document.getElementById(strid).style.borderColor = "red";
                        var button = document.getElementById("add_filed");
                        button.disabled = true;
                    }else{
                        document.getElementById(strid).style.borderColor = "#e9ecef";
                        var button = document.getElementById("add_filed");
                        button.disabled = false;
                    }
                  }
              });
          }
    // DUPLICATE VALIDATION

  // TOTAL FLOOR STUDENT
      function FloorTotalStudent(fa) {

        var txttotalroom_cnt = "txttotalroom"+fa;
        var txteachroom_cnt = "txteachroom"+fa;
        var txtstudentfloor_cnt = "txtstudentfloor"+fa;

        var txttotalroom_cnt_val =document.getElementById(txttotalroom_cnt).value;
        var txteachroom_cnt_val =document.getElementById(txteachroom_cnt).value;

        document.getElementById(txtstudentfloor_cnt).value = txttotalroom_cnt_val * txteachroom_cnt_val;
      }
  // TOTAL FLOOR STUDENT
  //ADD MORE DETAILS
    var fruits = [];
    var i=1;  
    $('#addmore').click(function(){  
         i++;  
         $('#dynamic_field').append('<div class="box"><div id="row'+i+'"><div class="row clearfix"><div class="col-sm-3" style="text-align: right;"><b>Table Filed :</b></div><div class="col-sm-3"><div class="form-group"><label>Filed Name <span class="required" style="color: red;">*</span></label><input onblur="validateDuplicate(this)" type="text" name="txtfiled'+i+'" id="txtfiled'+i+'" class="form-control" placeholder="Filed Name"></div></div><div class="col-sm-2"><div class="form-group"><label>Filed Type <span class="required" style="color: red;">*</span></label><select class="form-control m-wrap" name="txtfiledtype'+i+'" id="txtfiledtype'+i+'"></select></div></div><div class="col-sm-2"><div class="form-group"><label>Relation<span class="required" style="color: red;">*</span></label><select class="form-control m-wrap" name="txtrel'+i+'" id="txtrel'+i+'" onchange="relationloadid('+i+')"><option value="no">NO</option><option value="yes">YES</option></select></div></div><div class="col-sm-2"><br><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-minus"></i></button></div></div></div><div id="relationids'+i+'" style="display:none;"><div class="row clearfix" ><div class="col-sm-3"></div><div class="col-sm-3"><div class="form-group"><label>Relation Table Name <span class="required" style="color: red;">*</span></label><select class="form-control m-wrap" name="reltxttable'+i+'" id="reltxttable'+i+'" onchange="tablefiledload('+i+')"></select></div></div><div class="col-sm-3"><div class="form-group"><label>Relation Filed Name <span class="required" style="color: red;">*</span></label><select class="form-control m-wrap" name="reltxtfiled'+i+'" id="reltxtfiled'+i+'"></select></div></div></div></div></div></div>');  
         pluscount();
         FILEDtypeload(i);
         tablerecordload(i);
         
         fruits.push(i);
         console.log(fruits);
          
    });  
    $(document).on('click', '.btn_remove', function(){  
         var button_id = $(this).attr("id");   
         $('#row'+button_id+'').remove();  
          for( var ww = 0; ww < fruits.length; ww++ ){
            if ( fruits[ww] == button_id){
              console.log("adadada"+fruits[ww]);
              var index = fruits.indexOf(fruits[ww]);

              if (index > -1) {
                 fruits.splice(index, 1);
              }
            } 
          }

         // i = i -1;
         console.log(button_id);
         mincount();
    });
  //ADD MORE DETAILS 

    // ADD MORE COUNT
      var nky = 1; 
      function pluscount(){
        nky++;
        document.getElementById("addmoreno").value = nky;
      }
      function mincount(){
        nky--;
        document.getElementById("addmoreno").value = nky;
      }
    // ADD MORE COUNT 

  // ADD FILED CODE
    $("#add_filed").click(function(e) {
        e.preventDefault();
            document.getElementById("loaderaddedit").style.display = "block";
            
            var txttablename_val =document.getElementById("txttablename").value;
            var txtfiled1_val =document.getElementById("txtfiled1").value;
            var txtfiledtype1_val =document.getElementById("txtfiledtype1").value;

            var txtrel1_val =document.getElementById("txtrel1").value;
            var reltxttable1_val =document.getElementById("reltxttable1").value;
            var reltxtfiled1_val =document.getElementById("reltxtfiled1").value;

            if (txtfiled1_val == '') {
                    var frcr;
                    var hideoldtotal =document.getElementById("hideoldtotal").value;
                    // alert(hideoldtotal);
                    for(frcr=1; frcr<=hideoldtotal; frcr++){
                      
                      if(frcr == 1){
                          // alert(frcr);
                      }else{
                          var hidetxtold ="hidetxtold"+frcr;
                          var hidetxtold_vals =document.getElementById(hidetxtold).value;

                          var txtold ="txtold"+frcr;
                          var txtold_vals =document.getElementById(txtold).value;

                          var txtfiledtype ="txtfiledtype"+frcr;
                          var txtfiledtype_vals =document.getElementById(txtfiledtype).value;

                          var viewtxtrel_val = "viewtxtrel"+frcr;
                          var viewtxtrel1_val = document.getElementById(viewtxtrel_val).value;
      
                          var reltxttableview_val = "reltxttableview"+frcr;
                          var reltxttableview1_val = document.getElementById(reltxttableview_val).value;

                          var reltxtfiledview_val = "reltxtfiledview"+frcr;
                          var reltxtfiledview1_val = document.getElementById(reltxtfiledview_val).value;
                          
                          var hidetableoldname_val = "hidetableoldname"+frcr;
                          var hidetableoldname1_val = document.getElementById(hidetableoldname_val).value;

                          var hidefiledoldname_val = "hidefiledoldname"+frcr;
                          var hidefiledoldname1_val = document.getElementById(hidefiledoldname_val).value;
                          
                          updategetdata(hidetxtold_vals,txtold_vals,txttablename_val,txtfiledtype_vals,viewtxtrel1_val,reltxttableview1_val,reltxtfiledview1_val,hidetableoldname1_val,hidefiledoldname1_val);
                          
                          // updategetdata(hidetxtold_vals,txtold_vals,txttablename_val,txtfiledtype_vals);

                          // alert(frcr+"loop"+hideoldtotal);
                      }

                      // INSERT CODE
                          if(frcr==hideoldtotal){
                            var jkcr;
                            var msgcnt = fruits.length;
                            var addmoreno =document.getElementById("addmoreno").value;
                            for(jkcr=0; jkcr<addmoreno-1; jkcr++){
                              insertgetdata(fruits[jkcr],txttablename_val);
                              var mess = addmoreno-1;
                              if(jkcr==mess){
                                   
                              }                    
                            }
                                    alert("UPDATE SUCCESSFULLY");
                                    document.getElementById("loaderaddedit").style.display = "none";
                                    filedload();
                                    viewfiled();
                                    document.getElementById("form1").reset();
                                    document.getElementById("filedadd").style.display = "none"; 
                                    document.getElementById("filedtable").style.display = "block";
                          // alert("insert");
                      }
                      // INSERT CODE                    
                    }
                              
                             
                          // ADD MORE ADD BY CLASS DETAILS
              } else {

                $.post("../ajaxdata/pages/insert/ajax_filed.php", {
                  txttablename_val1: txttablename_val,
                  txtfiled1_val1: txtfiled1_val,
                  txtfiledtype1_val1: txtfiledtype1_val,
                  txtrel1_val1: txtrel1_val,
                  reltxttable1_val1: reltxttable1_val,
                  reltxtfiled1_val1: reltxtfiled1_val

                  }, function(data) {

                      

                      var frcr;
                      var hideoldtotal =document.getElementById("hideoldtotal").value;
                      // alert(hideoldtotal);
                      for(frcr=1; frcr<=hideoldtotal; frcr++){
                        
                        if(frcr == 1){
                            // alert(frcr);
                        }else{
                            var hidetxtold ="hidetxtold"+frcr;
                            var hidetxtold_vals =document.getElementById(hidetxtold).value;

                            var txtold ="txtold"+frcr;
                            var txtold_vals =document.getElementById(txtold).value;
                            
                            var txtfiledtype ="txtfiledtype"+frcr;
                            var txtfiledtype_vals =document.getElementById(txtfiledtype).value;

                            var viewtxtrel_val = "viewtxtrel"+frcr;
                            var viewtxtrel1_val = document.getElementById(viewtxtrel_val).value;
        
                            var reltxttableview_val = "reltxttableview"+frcr;
                            var reltxttableview1_val = document.getElementById(reltxttableview_val).value;

                            var reltxtfiledview_val = "reltxtfiledview"+frcr;
                            var reltxtfiledview1_val = document.getElementById(reltxtfiledview_val).value;

                            var hidetableoldname_val = "hidetableoldname"+frcr;
                            var hidetableoldname1_val = document.getElementById(hidetableoldname_val).value;

                            var hidefiledoldname_val = "hidefiledoldname"+frcr;
                            var hidefiledoldname1_val = document.getElementById(hidefiledoldname_val).value;
                            
                            updategetdata(hidetxtold_vals,txtold_vals,txttablename_val,txtfiledtype_vals,viewtxtrel1_val,reltxttableview1_val,reltxtfiledview1_val,hidetableoldname1_val,hidefiledoldname1_val);
                            // alert(frcr+"loop"+hideoldtotal);
                        }

                        // INSERT CODE
                        if(frcr==hideoldtotal){
                              var jkcr;
                              var msgcnt = fruits.length;
                              var addmoreno =document.getElementById("addmoreno").value;
                              for(jkcr=0; jkcr<addmoreno-1; jkcr++){
                                insertgetdata(fruits[jkcr],txttablename_val);
                                var mess = addmoreno-1;
                                if(jkcr==mess){
                                     
                                }                    
                              }
                              alert(data);
                                      document.getElementById("loaderaddedit").style.display = "none";
                                      filedload();
                                      viewfiled();
                                      document.getElementById("form1").reset();
                                      document.getElementById("filedadd").style.display = "none"; 
                                      document.getElementById("filedtable").style.display = "block";
                            // alert("insert");
                        }
                        // INSERT CODE                    
                      }
                  
                  });
                          // ADD MORE ADD BY CLASS DETAILS                  
            }
              
      });
    // ADD FILED CODE

    // ADD MORE INSERT
      function insertgetdata(nk,msgcnt){

        var addmoredataid = msgcnt;
        var txtfiled_val = "txtfiled"+nk;
        var txtfiledtype_val = "txtfiledtype"+nk;

        var txtrel_val = "txtrel"+nk;
        var reltxttable_val = "reltxttable"+nk;
        var reltxtfiled_val = "reltxtfiled"+nk;
        
        var txtfiled1_val = document.getElementById(txtfiled_val).value;
        var txtfiledtype1_val = document.getElementById(txtfiledtype_val).value;

        var txtrel1_val = document.getElementById(txtrel_val).value;
        var reltxttable1_val = document.getElementById(reltxttable_val).value;
        var reltxtfiled1_val = document.getElementById(reltxtfiled_val).value;
        
        $.post("../ajaxdata/pages/insert/ajax_filed.php", {
            txttablename_val1: addmoredataid,
            txtfiled1_val1: txtfiled1_val,
            txtfiledtype1_val1: txtfiledtype1_val,
            txtrel1_val1: txtrel1_val,
            reltxttable1_val1: reltxttable1_val,
            reltxtfiled1_val1: reltxtfiled1_val

          }, function(data) {
            
          });
      }
    // ADD MORE INSERT

      // UPDATE OLD FILED
      function updategetdata(hf, nk,msgcnt, ttype,viewtxtrel1_val,reltxttableview1_val,reltxtfiledview1_val,hidetable,hidefiled){

        var addmoredataid = msgcnt;        
        var txtfiled1_val = nk;
        var hidefiled1_val = hf;
        var txttype1_val = ttype;

        var viewtxtrel1_val1 = viewtxtrel1_val;
        var reltxttableview1_val1 = reltxttableview1_val;
        var reltxtfiledview1_val1 = reltxtfiledview1_val;

        var hidetableoldname1_val = hidetable;
        var hidefiledoldname1_val = hidefiled;
        
        $.post("../ajaxdata/pages/update/ajax_filed.php", {
            txttablename_val1: addmoredataid,
            txtfiled1_val1: txtfiled1_val,
            hidefiled1_val1: hidefiled1_val,
            txttype1_val1: txttype1_val,
            viewtxtrel1_val1: viewtxtrel1_val1,
            reltxttableview1_val1: reltxttableview1_val1,
            reltxtfiledview1_val1: reltxtfiledview1_val1,
            hidetableoldname1_val1: hidetableoldname1_val,
            hidefiledoldname1_val1: hidefiledoldname1_val


          }, function(data) {
            // alert(data);
            // console.log(data);
          });
      }
    // UPDATE OLD FILED

    $( document ).ready(function() {
      // FIND CLASS NAME ID
          FILEDloadpages();
          relationload();
          reltableload();
      // FIND CLASS NAME ID
    });

    
    // RELATION DETAILS LOAD
     function relationload(){
        var strUser = document.getElementById("txtrel1").value;
        if(strUser=="no")
        {
          document.getElementById("relationid").style.display = "none";
        }else{
          document.getElementById("relationid").style.display = "block";
        }
      }
      function relationloadid(i){
        var uds = "txtrel"+i;
        var relationid = "relationids"+i;
        var strUser = document.getElementById(uds).value;
        if(strUser=="no")
        {
          document.getElementById(relationid).style.display = "none";
        }else{
          document.getElementById(relationid).style.display = "block";
        }
      }
      function viewrelationload(i){
        var uds = "viewtxtrel"+i;
        var relationid = "relationviewid"+i;
        var strUser = document.getElementById(uds).value;
        if(strUser=="no")
        {
          document.getElementById(relationid).style.display = "none";
        }else{
          document.getElementById(relationid).style.display = "block";
          reltableloadviewshowhide(i);
        }
      }
    // RELATION DETAILS LOAD

    // CLASS DATA LOAD
      function FILEDloadpages(){
        var strUser = document.getElementById("txttablename").value;
        $('#getfileddetails').html('');              
        $.ajax({
            type:'POST',
            url:'tableGet_FiledList.php',
            data:'sid='+strUser,
            success:function(html){
                  $('#getfileddetails').html(html);              
            }
        });
      }
      function tabletypeload(){
        var strUser = document.getElementById("txttablename").value;
        $('#getfileddetails').html('');              
        $.ajax({
            type:'POST',
            url:'tableGet_FiledList.php',
            data:'sid='+strUser,
            success:function(html){
                  $('#getfileddetails').html(html);              
            }
        });
      }
    // CLASS DATA LOAD

      // FILED GETS
      function tablerecordload(i){
        var strUser = i;
        if(strUser){
            $.ajax({
                type:'POST',
                url:'../ajaxdata/Get_datadetails.php',
                data:'tablerec_id='+strUser,
                success:function(html){
                    var htmlstring = html.trim();
                    if(htmlstring == "00000"){
                      $("#reltxttable"+strUser).html('<option value="0">No Filed Type </option>');
                    }else{
                      $("#reltxttable"+strUser).html(html);
                      tablefiledload(i);
                    }
                }
            }); 
        }else{
            $("#reltxttable"+strUser).html('<option value="0">No Filed Type </option>');
        }
      }

      function tablefiledload(i){
        var tablerecdynamic = "reltxttable"+i;
        var strUser = document.getElementById(tablerecdynamic).value;
        if(strUser){
            $.ajax({
                type:'POST',
                url:'../ajaxdata/Get_datadetails.php',
                data:'relfiled_id='+strUser,
                success:function(html){
                    var htmlstring = html.trim();
                    if(htmlstring == "00000"){
                      $("#reltxtfiled"+i).html('<option value="0">No Filed Type </option>');
                    }else{
                      $("#reltxtfiled"+i).html(html);
                    }
                }
            }); 
        }else{
            $("#reltxtfiled"+i).html('<option value="0">No Filed Type </option>');
        }
      }

      function reltableload(){
        var strUser = document.getElementById("reltxttable1").value;
        if(strUser){
            $.ajax({
                type:'POST',
                url:'../ajaxdata/Get_datadetails.php',
                data:'relfiled_id='+strUser,
                success:function(html){
                    var htmlstring = html.trim();
                    if(htmlstring == "00000"){
                      $("#reltxtfiled1").html('<option value="0">No Filed Type </option>');
                    }else{
                      $("#reltxtfiled1").html(html);
                    }
                }
            }); 
        }else{
            $("#reltxtfiled1").html('<option value="0">No Filed Type </option>');
        }
      }

      function FILEDtypeload(i){
        var strUser = i;
        if(strUser){
            $.ajax({
                type:'POST',
                url:'../ajaxdata/Get_datadetails.php',
                data:'filedtypes_id='+strUser,
                success:function(html){
                    var htmlstring = html.trim();
                    if(htmlstring == "00000"){
                      $("#txtfiledtype"+strUser).html('<option value="0">No Filed Type </option>');
                    }else{
                      $("#txtfiledtype"+strUser).html(html);
                    }
                }
            }); 
        }else{
            $("#txtfiledtype"+strUser).html('<option value="0">No Filed Type </option>');
        }
      }

      function reltableloadview(i){
        var tablerecdynamic = "reltxttableview"+i;
        var strUser = document.getElementById(tablerecdynamic).value;
        if(strUser){
            $.ajax({
                type:'POST',
                url:'../ajaxdata/Get_datadetails.php',
                data:'viewrelfiled_id='+strUser,
                success:function(html){
                    var htmlstring = html.trim();
                    if(htmlstring == "00000"){
                      $("#reltxtfiledview"+i).html('<option value="0">No Filed Type </option>');
                    }else{
                      $("#reltxtfiledview"+i).html(html);
                    }
                }
            }); 
        }else{
            $("#reltxtfiledview"+i).html('<option value="0">No Filed Type </option>');
        }
      }

      function reltableloadviewshowhide(i){
        var strUser = i;
        if(strUser){
            $.ajax({
                type:'POST',
                url:'../ajaxdata/Get_datadetails.php',
                data:'showhide_table='+strUser,
                success:function(html){
                    var htmlstring = html.trim();
                    if(htmlstring == "00000"){
                      $("#reltxttableview"+strUser).html('<option value="0">No Filed Type </option>');
                    }else{
                      $("#reltxttableview"+strUser).html(html);
                      relfiledoadviewshowhide(i);
                    }
                }
            }); 
        }else{
            $("#reltxttableview"+strUser).html('<option value="0">No Filed Type </option>');
        }
      }
      function relfiledoadviewshowhide(i){
        var tablerecdynamic = "reltxttableview"+i;
        // alert(tablerecdynamic);
        var strUser = document.getElementById(tablerecdynamic).value;
        if(strUser){
            $.ajax({
                type:'POST',
                url:'../ajaxdata/Get_datadetails.php',
                data:'relshowhidefiled_id='+strUser,
                success:function(html){
                    var htmlstring = html.trim();
                    if(htmlstring == "00000"){
                      $("#reltxtfiledview"+i).html('<option value="0">No Filed Type </option>');
                    }else{
                      $("#reltxtfiledview"+i).html(html);
                    }
                }
            }); 
        }else{
            $("#reltxtfiledview"+i).html('<option value="0">No Filed Type </option>');
        }
      }
      // FILED GETS

     
        function greetUser(tname,fname,viewid) {
        
            var tnames = tname;
            var fnames = fname;
            var viewiddis = "relationviewid"+viewid;
            var viewtxtrel = "viewtxtrel"+viewid;
            if(tnames){
                $.ajax({
                    type:'POST',
                    url:'../ajaxdata/Get_datadetails.php',
                    data:'tnames_id='+tnames+'&fnames_id='+fnames,
                    success:function(html){
                      // console.log(html);
                        var json = html;
                        obj = jQuery.parseJSON(json);

                        var output_sn = obj.output_sn;
                        var relationtable_sn = obj.relationtable_sn;
                        var relationfiled_sn = obj.relationfiled_sn;

                        
                        if(output_sn == '00000')
                        {
                          document.getElementById(viewiddis).style.display = "none";
                          $("#"+viewtxtrel).html('<option value="no" selected>NO</option><option value="yes">YES</option>');
                          document.getElementById("hidetableoldname"+viewid).value = '';
                          document.getElementById("hidefiledoldname"+viewid).value = '';
                        }else{
                          document.getElementById(viewiddis).style.display = "block";
                          $("#"+viewtxtrel).html('<option value="no">NO</option><option value="yes" selected>YES</option>');
                          document.getElementById("hidetableoldname"+viewid).value = relationtable_sn;
                          document.getElementById("hidefiledoldname"+viewid).value = relationfiled_sn;

                          if(relationtable_sn){
                              $.ajax({
                                  type:'POST',
                                  url:'../ajaxdata/Get_datadetails.php',
                                  data:'relationtable_sn='+relationtable_sn,
                                  success:function(html){
                                      var htmlstring = html.trim();
                                      if(htmlstring == "00000"){
                                        $("#reltxttableview"+viewid).html('<option value="0">No Filed Type </option>');
                                      }else{
                                        $("#reltxttableview"+viewid).html(html);
                                      }
                                  }
                              }); 
                          }

                          if(relationfiled_sn){
                              $.ajax({
                                  type:'POST',
                                  url:'../ajaxdata/Get_datadetails.php',
                                  data:'relationfiled_sn='+relationfiled_sn+'&relationtable_sng='+relationtable_sn,
                                  success:function(html){
                                      var htmlstring = html.trim();
                                      if(htmlstring == "00000"){
                                        $("#reltxtfiledview"+viewid).html('<option value="0">No Filed Type </option>');
                                      }else{
                                        $("#reltxtfiledview"+viewid).html(html);
                                      }
                                  }
                              }); 
                          }

                        }
                    }
                }); 
            }else{
                $("#txtfiledtype"+strUser).html('<option value="0">No Filed Type </option>');
            }
        }
    

    // NUMBER VALUE VALIDATION
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
    // NUMBER VALUE VALIDATION
</script>


<script src="../dist/dropify/js/dropify.min.js"></script>

<script src="../dist/dropify/js/dropify.js"></script>
<script src="../assets/libs/summernote/dist/summernote-bs4.min.js"></script>