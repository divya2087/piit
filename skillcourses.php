<!doctype html>
<html>
<style>



.tab {
  overflow: hidden; 
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: 4px solid black;
  cursor: pointer;
  padding: 7px 16px;
  transition: 0.3s;
  font-size: 20px;

}



/* Change background color of buttons on hover */
.tab button:hover {
  background-color: blue;
  color: white;
 

}

/* Create an active/current tablink class */
.tab button.active {
  border: 1px solid black;
   border-radius: 12px;
}

/* Style the tab content */
/*.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
*/














</style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<head>
<title>Skill Development Institute</title>
</head>


<body>

<?php include 'header.php'; ?>
&nbsp;

<h2 style="text-align: center;text-shadow: 2px 2px red;background-color: aqua;">SKILL COURSES</h2>
    

&nbsp;

<div class="container-fluid">
  <div class="row">
    <div class="col">
     <h2 style="text-align:center;color: #0c0e60 ;">Role of Skill Development Courses in determining self Employment</h2>
  &nbsp;
    </div>
  </div>
</div>




<div class="tab" style="padding-top: 10px;padding-left: 200px;">

   <h3 style="padding-left:460px;color: red;">Skill Courses</h3><button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">English Spoken</button>

   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Beautician</button>
   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Tiloring</button>


   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Soft Toys</button>

    <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Bag Making</button> 

    <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Jewellary Making</button> 

    <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Candle Making</button> 

    <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Painting</button>
  </div>





<div class="tab" style="padding-top: 20px;padding-left: 260px;">

<button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Health Care</button>

   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Plumbing</button>
   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">HandyCrafts & Carpet</button>


   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Media Entertainment</button>

    <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Logistics</button>

     <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 10px;">Data Entry Operator</button>
    
  </div>


  <br><br>


<div class="container-fluid">
  <div class="row" >
    <div class="col" style="height: 300px;">
       <img src="images/skill.jpg">
    </div>

  </div>

</div>









<?php include 'footer.php'; ?>






<!-- <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
 -->





  </body>
</body>
</html>