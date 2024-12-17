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
  padding: 14px 16px;
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
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

</style>

<head>
<title>Skill Development Institute</title>
</head>


<body>

<?php include 'header.php'; ?>
&nbsp;

      <h2 style="text-align: center;text-shadow: 2px 2px red;background-color:aqua;">TECHNICAL COURSES</h2>
   

<div class="container-fluid background">
  
&nbsp;
<h2 style="text-align:center;color: #0c0e60 ;">Explore Your Career in TECHNICAL SECTOR</h2>
  &nbsp;
  



&nbsp;
<!-- <h2 class="heading1" style="text-align:center;text-transform: uppercase;">Important Course For Private Job & freelancer</h2> -->

<div class="tab" style="padding-top: 10px;padding-left: 200px;">

   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Hardware</button>

   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Networking</button>
   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">CC TV</button>


   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Cloud Computing</button>

   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Microsoft-MTA</button>

    
     <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">
      Microsoft-MCSE
     </button>

      <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">
        Microsoft-MCSA
      </button>

</div>
</div>


<br><br>


<div class="container-fluid">
  <div class="row" >
    <div class="col" style="height: 400px;">
       <img src="images/technical.jpg">
    </div>
  </div>
</div>
  







<?php include 'footer.php'; ?>











  </body>
</body>
</html>