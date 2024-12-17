<!doctype html>
<html>
<style>
.background{
  background-image: url("images/background.jpg");
  height: 800px;
  width: 100px;
  background-repeat: no-repeat;
  background-size: cover;
}


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

.heading{
	position: absolute;
	left: 500px;
	right: 500px;
	background-color: red;
	color: white;
}

.heading1{
	background-color: green;
	color: white;
}








</style>


<head>
<title>Skill Development Institute</title>
</head>


<body>

<?php include 'header.php'; ?>
&nbsp;
<div class="container-fluid">
	<div class="row">
		<div class="col" style="background-color:aqua;">
			<h2 style="text-align: center;text-shadow: 2px 2px red;">IT COURSES</h2>
		</div>
	</div>
</div>

<div class="container-fluid background">
	
&nbsp;
<h2 style="text-align:center;">Explore Your Career in IT SECTOR</h2>
	&nbsp;
	

<h2 class="heading" style="text-align:center;text-transform: uppercase;">Important Course For Govt. Job</h2>

<div class="tab" style="padding-top: 50px;padding-left: 540px;">
  <button  class="tablinks" onclick="openCity(event, 'olevel')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">O LEVEL</button>&nbsp;
  <button class="tablinks" onclick="openCity(event, 'ccc')" style="border:3px solid black;padding-right: 12px;border-radius: 12px;margin-right: 12px;">CCC</button>&nbsp;
  
  <button class="tablinks" onclick="openCity(event, 'pgdca')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">PGDCA</button>


   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">COPA</button>

</div>


&nbsp;
<h2 class="heading1" style="text-align:center;text-transform: uppercase;">Important Course For Private Job & freelancer</h2>

<div class="tab" style="padding-top: 10px;padding-left: 200px;">

   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">ADCA</button>

   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Tally</button>
   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Graphic</button>


   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Web Development</button>

   <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">Digital Marketing</button>

    
     <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">
     	App Development
     </button>

      <button class="tablinks" onclick="openCity(event, 'copa')" style="border:3px solid black;border-radius: 12px;margin-right: 12px;">
      	Data Analytics
      </button>

</div>

</div>
	





&nbsp;&nbsp;


<?php include 'footer.php'; ?>













  </body>
</body>
</html>