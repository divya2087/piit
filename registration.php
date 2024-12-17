

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">
    <title>Skill Development Institute</title>
  <!-- Bootstrap 4.0-->
  
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicons/images-favicon.ico">

    <title>Skill Development Institute</title>
  
  <!-- Bootstrap v4.1.3.stable -->
  <link rel="stylesheet" href="stylesheets/css-bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="stylesheets/css-font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="stylesheets/css-ionicons.min.css">   

  <!-- Theme style -->
  <link rel="stylesheet" href="stylesheets/css-master_style.css">


  <link rel="stylesheet" href="stylesheets/skins-_all-skins.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


</head>
</head>
<body class="hold-transition skin-blue sidebar-mini">
   
<?php include 'header.php'; ?>
        
                 
    

 <section class="content">
      <!-- Small boxes (Stat box) -->
      
     
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        
      
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-xl-12 connectedSortable">
          <!-- Map box -->
          
        <div class="box">
            <div class="box-header">
              <i class="fa fa-file"></i>
              <h3 class="box-title">STUDENT REGISTRATION</h3>
              <div class="box-tools pull-right">
               
            
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
        
      
<form action="members_add.php" method="post" enctype="multipart/form-data" name="form1">
<div class="row">                     
<div class="col-md-12"><input type="hidden" name="edit" value="" style="width:150px;" readonly="" > 
<strong style="color:#906;">1. PERSONAL DETAILS  <strong style="color:#CC0000;"> ( - )</strong>

 </strong>
<span style="color:red; margin-left:200PX;">
</span>
<HR width="96%" style="border-bottom:0.4PX #CC3366 solid;"/></div></div>
<div class="row">                    




<div class="col-md-4">  ADMISSION YEAR <span class="err">*</span>
<select name="asession" style="padding:5px;" required tabindex="1" class="form-control">
<option value="">Select year</option>
<option value="2010" >2010-2011</option>
<option value="2011" >2011-2012</option>
<option value="2012" >2012-2013</option>
<option value="2013" >2013-2014</option>
<option value="2014" >2014-2015</option>
<option value="2015" >2015-2016</option>
<option value="2016" >2016-2017</option>
<option value="2017" >2017-2018</option>
<option value="2018" >2018-2019</option>
<option value="2019" >2019-2020</option>
<option value="2020" >2020-2021</option>
<option value="2021" >2021-2022</option>
<option value="2022" >2022-2023</option>
<option value="2023" >2023-2024</option>
<option value="2024" >2024-2025</option>
</select>
<span  style="color:red;"></span>
</div><div class="col-md-4">
Student Name <span class="err">*</span> 

<input name="name" type="text" id="name" required  value="" class="form-control" tabindex="2">
<span  style="color:red;"></span>
</div>
<div class="col-md-4">
Father's Name <span class="err">*</span><input name="father" type="text" id="father"  value="" class="form-control" tabindex="3">
<span  style="color:red"> </span></div><div class="col-md-4">Mother's Name  <input name="mother" type="text" id="mother"  value="" class="form-control" tabindex="4"></td>
</div>

<div class="col-md-4">Date Of Birth<span class="err">*</span>
<input name="dob" type="date"  value="" class="form-control" tabindex="5" >
<span  style="color:red"> </span>
</div><div class="col-md-4">
Contact No <span class="err">*</span> 
<input  name="contact" type="number" value="" tabindex="6" class="form-control" maxlength="10">
<span  style="color:red"> </span></div><div class="col-md-4">
Parent's Contact <input name="fcontact" type="number" value="" tabindex="7" class="form-control" maxlength="10">
<span  style="color:red"> </span></div>


<div class="col-md-4">
Gender <span class="err">*</span>
<select name="gender" tabindex="8" class="form-control"  required>
<option value="">Select</option>
<option value="Male"  >Male</option>
<option value="Female" >Female</option>
<option value="Other" >Other</option>

</select>

</div>

<div class="col-md-4">
Marital Status
<select name="marital" tabindex="9"  class="form-control"  >
<option value="">Select</option>
<option value="Married"  >Married</option>
<option value="Unmarried"   >Unmarried</option>
</select>  
</div>

<div class="col-md-4">
Medium Of study
<select name="medium" tabindex="10"  class="form-control"  >
<option value="">Select</option>
<option value="Hindi"  >Hindi</option>
<option value="English"   >English</option>
</select>  
</div>


<div class="col-md-4">
Category
<select name="category" tabindex="11"  class="form-control"  >
<option value="">Select</option>
<option value="SC" >SC</option>
<option value="ST" >ST</option>
<option value="GEN" >GEN</option>
<option value="OBC" >OBC</option>
</select>
</div>

<div class="col-md-4">Academic Background
<select name="qui" tabindex="12"  class="form-control" >
<option value="">Select</option>
<option value="8th" >8th</option>
<option value="10th" >10th</option>
<option value="12th" >12th</option>
<option value="Graduation" >Graduation</option>
<option value="Post Graduation" >Post Graduation</option>
<option value="Others" >Others</option>
</select>
</div>

<div class="col-md-4">
Year in which passed 
<input  name="passingyear" type="text" value="" tabindex="13" class="form-control" maxlength="8">
<span  style="color:red"> </span></div>








<!--<div class="col-md-4">
Select Your Religion
<select name="religion" tabindex="16"  class="form-control"  >
<option value="">Select</option>
<option value="Hinduism" >Hindu</option>
<option value="Islam" >Islam</option>
<option value="Christian" >Christian</option>
<option value="Other" >Other</option>
</select>
</div>-->





<div class="col-md-4">
Choose Your Identity Type
<select name="identity_type" tabindex="14"  class="form-control"  >
<option value="">Select</option>
<option value="Adhar Card" >Adhar Card</option>
<option value="Voter ID" >Voter ID</option>
<option value="Other" >Other</option>
</select>
</div>





<div class="col-md-4">
Id Number <span class="err">*</span>
<input name="idnumber" type="text" id="idnumber"  value="" class="form-control" tabindex="15">
</div>



<div class="col-md-4">
State <span class="err">*</span>
<select onChange="find_district(this.value)" class="form-control"  name="state" tabindex="16"    >
<option value="">Select</option>
<option value="1" >Andaman and Nicobar Island (UT)</option>
<option value="2" >Andhra Pradesh</option>
<option value="3" >Arunachal Pradesh</option>
<option value="4" >Assam</option>
<option value="5" >Bihar</option>
<option value="6" >Chandigarh (UT)</option>
<option value="7" >Chhattisgarh</option>
<option value="8" >Dadra and Nagar Haveli (UT)</option>
<option value="9" >Daman and Diu (UT)</option>
<option value="10" >Delhi (NCT)</option>
<option value="11" >Goa</option>
<option value="12" >Gujarat</option>
<option value="13" >Haryana</option>
<option value="14" >Himachal Pradesh</option>
<option value="15" >Jammu and Kashmir</option>
<option value="16" >Jharkhand</option>
<option value="17" >Karnataka</option>
<option value="18" >Kerala</option>
<option value="19" >Lakshadweep (UT)</option>
<option value="20" >Madhya Pradesh</option>
<option value="21" >Maharashtra</option>
<option value="22" >Manipur</option>
<option value="23" >Meghalaya</option>
<option value="24" >Mizoram</option>
<option value="25" >Nagaland</option>
<option value="26" >Odisha</option>
<option value="27" >Puducherry (UT)</option>
<option value="28" >Punjab</option>
<option value="29" >Rajasthan</option>
<option value="30" >Sikkim</option>
<option value="31" >Tamil Nadu</option>
<option value="32" >Telangana</option>
<option value="33" >Tripura</option>
<option value="34" >Uttarakhand</option>
<option value="35" >Uttar Pradesh</option>
<option value="36" >West Bengal</option>
</select>

</div>

<div class="col-md-4">District

<span id="district_div" tabindex="17" ><select name="district" class="form-control" id="courses" tabindex="18" > 
 <option value="">--Select--</option>
  </select> 
</span> 
</div>
<div class="col-md-4"> Permanent Address  

<textarea name="address"  class="form-control" tabindex="19"></textarea> </div>

<div class="col-md-4"> Temporary Address

<textarea name="taddress"  class="form-control" tabindex="20"></textarea> </div>

<!--<div class="col-md-4">
Pincode <span class="err">*</span>
<input name="pincode" type="text" id="pincode"  value="" class="form-control" tabindex="12">
</div>-->


<div class="col-md-4">
Email Id <span class="err">*</span>
<input name="email" type="email" id="email"  value="" class="form-control" tabindex="21">
</div>

<div class="col-md-4">Photo<input name="uploaded_file" type="file" class="form-control" id="uploaded_file_small" tabindex="22"><br/><span style="color:red; font-size:9px;">Photo must be in .jpg/.jpeg/.bmp And Siz less than 500KB</span></div><div class="col-md-12"><strong style="color:#906;">2. COURSE DETAILS</strong>
<HR width="96%" style="border-bottom:0.4PX #CC3366 solid;"/></div>
<div class="col-md-4">Course Category <span class="err">*</span> <select required name="program" class="form-control" onChange="find_courses(this.value)" tabindex="23">
<option value="" selected>--  COURSE CATEGORY --</option>
<option value="1" >IT COURSES</option>
<option value="2" >DEGREE COURSES</option>
<option value="3" >VOCATIONAL COURSES</option>
<option value="4" >SHORT TERM COURSES</option>
</select>
<span  style="color:red"> </span></div><div class="col-md-4">
Course  <span class="err">*</span>  <span id="courses_div">
<select name="courses" class="form-control" tabindex="24" required onChange="find_fee(this.value)"> 
<option value="">--  Courses  --</option>
<option value="1" >
Diploma In Computer Application  (DCA)</option>
<option value="2" >
Advance Diploma in Computer Hardware & Networking  (ADCHN)</option>
<option value="3" >
Advance Diploma In Computer Application ()</option>
<option value="4" >
Diploma in Account Management (DAM)  ()</option>
<option value="5" >
Diploma In Graphic Designing (DGD) ()</option>
<option value="6" >
Diploma in Web Designing (DWD) ()</option>
<option value="7" >
O Level  (O)</option>
<option value="8" >
CCC ()</option>
<option value="9" >
Certificate in Tally Accounting ()</option>
<option value="10" >
Certificate in Advance Excel ()</option>
<option value="11" >
Certificate In Python ()</option>
<option value="12" >
Certificate in Internet Technologies  ()</option>
<option value="13" >
Diploma in Computer Hardware ()</option>
<option value="14" >
Diploma in Front Office Management (DFOM) ()</option>
<option value="15" >
Certificate in Computer Typing  ()</option>
<option value="16" >
Diploma in Digital Marketing  ()</option>
<option value="17" >
Master Diploma in Information Technology (MDIT) ()</option>
<option value="18" >
Certificate in Vedio Editing  ()</option>
</select>
</span>
<span  style="color:red">  </span></div>

<!--<div class="col-md-4">Batch <span class="err">*</span> 

<select name="batch" class="form-control" tabindex="19" required > 
<option value="">-- Section --</option>

1<option value="1" >07-08 AM</option>
<option value="2" >08-09 AM</option>
<option value="3" >09-10 AM</option>
<option value="4" >10-11 AM</option>
<option value="5" >7-12</option>

</select></div>-->
<div class="col-md-4">DISCOUNT NET FEE 

<span id="fee_div">
<input type="number"  name="fee" class="form-control" value=""  tabindex="25" ></span>
</div>
<!--<div class="col-md-4">DISCOUNT 
<input type="text" name="discount" class="form-control"  tabindex="26" value="">
</div>-->

<!--<div class="col-md-4">OTHER CHARGES 
<input type="text" name="other" class="form-control"  tabindex="27" value="">
</div>-->

<div class="col-md-4"> Date of Admission <span class="err">*</span>
                    <input name="doj" type="date" id="doj" value="" class="form-control" tabindex="23">
                    <span  style="color:red">
                                        </span></div>

<!--<div class="col-md-4">
Date of Admission <span class="err">*</span> <input name="doj" type="date" id="doj" value="" class="form-control" tabindex="28">
  <span  style="color:red"> </span></div>-->
  
  
  <div class="col-md-4">
Remark <textarea name="remarks"class="form-control"   tabindex="29">
</textarea> </div>


<div class="col-md-4">
Taxes
<select name="tax" tabindex="30"  class="form-control"  >
<option value="">Select</option>
<option value="Yes"  >Yes</option>
<option value="No"   >No</option>
</select>  
</div>
  
  <!--<div class="col-md-4"><strong style="color:#003366;">Enquiry Source</strong>
<select name="enquiry_source"  class="form-control" tabindex="8" >
<option value="">Select</option>
<option value="Banner" >Banner</option>
<option value="Liflet" >Liflet</option>
<option value="Poster" >Poster</option>
<option value="News_Paper" > News Paper</option>
<option value="SMS" > SMS</option>
<option value="Counseling_Centre" > Counseling Centre</option>
</select>  
</div>-->


  <div class="col-md-12">
  </div>
  <div class="col-md-4">
  <br>
<input name="go" type="submit" class="form-control" style="background:#006600; color:#FFFFFF;" id="submit" value="&nbsp;Submit&nbsp;" tabindex="32"></div>
  <div class="col-md-4">
  <br>
<input name="exit" type="submit" class="form-control" id="exit" value="&nbsp;Exit&nbsp;"  style="background:#FF0000; color:#FFFFFF;" onClick="javascript:window.location.href='search_home.php'" tabindex="33">
</div><div class="col-md-12"><hr/>

</form>

           
            </div>
            <!-- /.box-body -->
            
         
          </div>
          <!-- /.box -->
          <!-- solid sales graph -->
          
        
          <!-- /.box -->
           <!-- quick email widget -->
          
        
          <!-- /.box -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


      <?php include 'footer.php'; ?>
     
            
      
        

  
  
  

  <script src="javascripts/dist-jquery-3.3.1.min.js"></script>
  

  <script src="javascripts/dist-popper.min.js"></script>
  

  <script src="javascripts/js-bootstrap.min.js"></script>
  
  <script src="javascripts/js-jquery.dataTables.min.js"></script>
  <script src="javascripts/js-dataTables.bootstrap.min.js"></script>
  

  <script src="javascripts/jquery-slimscroll-jquery.slimscroll.min.js"></script>
  

  <script src="js/lib-fastclick.js"></script>

  <script src="javascripts/js-template.js"></script>
  

  <script src="javascripts/js-demo.js"></script>

    <script src="javascripts/js-jquery.dataTables.min.js"></script>
    

    <script src="javascripts/js-dataTables.buttons.min.js"></script>
    <script src="javascripts/js-buttons.flash.min.js"></script>
    <script src="javascripts/ex-js-jszip.min.js"></script>
    <script src="javascripts/ex-js-pdfmake.min.js"></script>
    <script src="javascripts/ex-js-vfs_fonts.js"></script>
    <script src="javascripts/js-buttons.html5.min.js"></script>
    <script src="javascripts/js-buttons.print.min.js"></script>

  <script src="js/pages-data-table.js"></script>
  

  <div class="control-sidebar-bg"></div>
</div>



<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $('#state').on('change',function(){
        var stateid = this.value;
        // console.log(stateid);
        $.ajax({
            url : 'state.php',
            type : 'POST',
            data : {
                state_data : stateid
            },
            success:function(result){
                $('#district').html(result);
                // console.log(result);
            }

        });

    });


    $('#program').on('change',function(){
        var programid = this.value;
        // console.log(stateid);
        $.ajax({
            url : 'coursesfilter.php',
            type : 'POST',
            data : {
                state_data : programid
            },
            success:function(result){
                $('#courses').html(result);
                // console.log(result);
            }

        });

    });

       







</script>

</body>
</html>