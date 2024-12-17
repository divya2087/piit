


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Development Institute </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .form-container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group button:hover {
            background-color: #45a049;
        }

        .first:hover{
          background-color: #dadef3;
        }

        .email:hover{
          background-color: #dadef3;
        }
        .address:hover{
           background-color: #dadef3;
        }

        .gender:hover{
          background-color: #dadef3;
        }

        .date:hover{
          background-color: #dadef3;
        }

        .phone:hover{
          background-color: #dadef3;
        }





             .Neon {
    font-family: sans-serif;
    font-size: 14px;
    color: #494949;
    position: relative;
    

}
.Neon * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.Neon-input-dragDrop {
    display: block;
    width: 343px;
    margin: 0 auto 25px auto;
    padding: 25px;
    color: #8d9499;
    color: #97A1A8;
    background: #fff;
    border: 2px dashed #C8CBCE;
    text-align: center;
    -webkit-transition: box-shadow 0.3s, border-color 0.3s;
    -moz-transition: box-shadow 0.3s, border-color 0.3s;
    transition: box-shadow 0.3s, border-color 0.3s;
}
.Neon-input-dragDrop .Neon-input-icon {
    font-size: 48px;
    margin-top: -10px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.Neon-input-text h3 {
    margin: 0;
    font-size: 18px;
}
.Neon-input-text span {
    font-size: 12px;
}
.Neon-input-choose-btn.blue {
    color: #008BFF;
    border: 1px solid #008BFF;
}
.Neon-input-choose-btn {
    display: inline-block;
    padding: 8px 14px;
    outline: none;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    white-space: nowrap;
    font-size: 12px;
    font-weight: bold;
    color: #8d9496;
    border-radius: 3px;
    border: 1px solid #c6c6c6;
    vertical-align: middle;
    background-color: #fff;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.05);
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    transition: all 0.2s;

    </style>
</head>
<body>


    
       
&nbsp;  
    <div class="form-container">
       <div class="row">
            <div class="col" style="text-align: center;">
                <img src="images/piitlogo.jpg" width="100%">
            </div>
        </div>

        &nbsp;

        <h1>Franchise Application Form</h1>
    

  

 <form action="mail.php" method="post" id="contact">
  <div class="row g-1 first">
    <label class="form-label">Name</label>
  <div class="col-sm-4">
    <input type="text" class="form-control" name="firstname" aria-label="City">
    <label class="form-label" for="form3Example3">First Name</label>
  </div>
  <div class="col-sm-4">
    <input type="text" class="form-control" name="middlename" aria-label="State">
    <label class="form-label" for="form3Example3">Middle Name</label>
  </div>
  <div class="col-sm-4">
    <input type="text" class="form-control" name="lastname" aria-label="Zip">
    <label class="form-label" for="form3Example3">Last Name</label>
  </div>
</div>

&nbsp;


 <div class="row phone">
  <div class="col-md-4">
    <label for="staticEmail" class="col-form-label">Phone Number</label>
  </div>
 
  <div class="col-md-8  ">
    <input type="number" class="form-control" name="phone" id="staticEmail" value=""  placeholder="Enter Number">
  </div>
 </div>
 
  <br><br>
  <div class="row email">
    <div class="col-md-4">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
</div>
 <div class="col-md-8">
    <input type="text" class="form-control" name="email" id="staticEmail" value=""  placeholder="Email">
</div>
  </div>
  <br><br>

 <div class="row address">
    <div class="col-md-4">
    <label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
</div>
 <div class="col-md-8">
      <input type="text" class="form-control" name="streetaddress" id="staticEmail"  placeholder="Enter Address">
       <label for="staticEmail" class=" col-form-label">Street Address</label>

<br><br>
       <input type="text" class="form-control" name="streetaddress1" id="staticEmail"  placeholder="Enter Address">
       <label for="staticEmail" class=" col-form-label">Street Address Line 2</label>

       <br><br>
       <div class="row">
       <div class="col-md-6">
       <input type="text" class="form-control" name="city" id="staticEmail"  placeholder="Enter Address">
       <label for="staticEmail" class=" col-form-label">City</label>
     </div>

     <div class="col-md-6">
       <input type="text" class="form-control" name="state" id="staticEmail"  placeholder="Enter Address">
       <label for="staticEmail" class=" col-form-label">State / Province</label>
     </div>
   </div>

     <br>      
 <input type="text" class="form-control" name="postal" id="staticEmail"  placeholder="Enter Address">
       <label for="staticEmail" class=" col-form-label">Postal / Zip Code</label>
<br>  
</div>
  </div>
<br>
  <div class="row gender">
    <div class="col-md-4">
      <label for="staticEmail" class="col-sm-2 col-form-label">Gender</label>
    </div>

    <div class="col-md-8">
      <input type="radio" name="gender"> &nbsp;Male
      <input type="radio" name="gender"> &nbsp;Female
    </div>
  </div>
  <br>

  <div class="row date">
    <div class="col-md-4">
      <label for="staticEmail" class=" col-form-label">Date Of Birth</label>
    </div>
    <div class="col-md-8">
     <input type="date" class="form-control" name="birth" id="staticEmail"  placeholder="Enter Address">
  </div>
</div>

  <br> <br>


  <div class="row">
    <div class="col">
      <h2>Photos</h2>
      <p>Please upload Computer Lab, Theory Class, Office, Front of Gate Image</p>
    </div>
  </div>
  <hr>


<div class="row date">
    <div class="col-md-4">
      <label for="staticEmail" class=" col-form-label">Upload Photo</label>
    </div>
    <div class="col-md-8">
     <div class="Neon Neon-theme-dragdropbox">
        <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="files[]" id="filer_input2" multiple="multiple" type="file">
        <div class="Neon-input-dragDrop"><div class="Neon-input-inner"><div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div><div class="Neon-input-text"><h3>Drag&amp;Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="Neon-input-choose-btn blue">Browse Files</a></div></div>
        </div>  
  </div>
</div>

<br><br>

<div class="row date">
    <div class="col-md-4">
      <label for="staticEmail" class=" col-form-label">Upload Signature</label>
    </div>
    <div class="col-md-8">
      <div class="Neon Neon-theme-dragdropbox">
        <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="files[]" id="filer_input2" multiple="multiple" type="file">
        <div class="Neon-input-dragDrop"><div class="Neon-input-inner"><div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div><div class="Neon-input-text"><h3>Drag&amp;Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="Neon-input-choose-btn blue">Browse Files</a></div></div>
        </div>
  </div>
</div>
<br>

<div class="row">
  <div class="col text-center" >
    <input type="submit" value="Continue" name="submit">  
   
  </div>
</div>












  


  

  
  </div>
</form>
   
         





  </div>
                 
            



</body>
</html>
