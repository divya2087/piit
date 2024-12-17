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

</style>
  </head>

<head>
<title>Skill Development Institute</title>
</head>


<body>

<?php include 'header.php'; ?>
&nbsp;
<h2 style="text-align: center;text-shadow: 2px 2px red;background-color: aqua;">BOARD COURSES</h2>
    

<div class="container-fluid background">
  
&nbsp;
<h2 style="text-align:center;color: #0c0e60 ;">Student have to for the exmination 10<sup>th</sup> / 12<sup>th</sup> by Condected & <br>Managed by Educations Boards of Different States in the Country </h2>
  &nbsp;
  

&nbsp;


<div class="tab" style="padding-top: 10px;padding-left: 300px;">

   <h3 style="padding-left:400px;color: red;">Boards</h3><button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">UP BOARD</button>

   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">BIHAR BOARD</button>
   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">SIKKIM BOARD</button>

   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">VIDARBHA BOARD</button>

    <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">NIOS BOARD</button>

    
</div>
</div>
  &nbsp;&nbsp;&nbsp;



  <div class="container-fluid">
    <div class="row">
      <div class="col" style="height: 450px;">
        <img src="images/board.jpg">
      </div>

    </div>

  </div>





&nbsp;&nbsp;


<?php include 'footer.php'; ?>











  </body>
</body>
</html>