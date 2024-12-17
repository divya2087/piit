<!DOCTYPE html>
<html>
<head>
	<title>Skill Development Institute</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans"/>
    <link href="stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="stylesheets/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<?php include 'header.php'; ?>
<div class="container">
	<br>
	<form id="studentDetailsForm" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		<fieldset>
			<div class="col-md-12 alert alert-warning text-center" id="mainApplicationdiv">
				
				<div class="form-group required">
					<label for="RowID" class="col-md-3 control-label">Faculty Id:</label>
					<div class="col-lg-7 col-md-7">
						<input class="form-control" name="RowID" id="RowID" placeholder="Student Id" type="text"  value="" >
					</div>
				</div>
				<div class="form-group required">
					<label for="Name" class="col-md-3 control-label">Faculty Name:<b style="color:red">*</b></label>
					<div class="col-lg-7 col-md-7">
						<input class="form-control" name="Name" id="Name" placeholder="Student Name" type="text"  value="" required="required">
					</div>
				</div>
				<div class="form-group required">
					<label for="Gender" class="col-md-3 control-label">Gender:<b style="color:red">*</b></label>
					<div class="col-lg-7 col-md-7">
							<select name="Gender" id="Gender" class="form-control" required="required">
							<option value=""> - Select Gender - </option>
							<option value="Male"> Male </option>
							<option value="Female"> Female </option>
							<option value="Other"> Other </option>
						</select>
					</div>
				</div>
				<div class="form-group required">
					<label for="MobileNo" class="col-md-3 control-label">Mobile No:<b style="color:red">*</b></label>
					<div class="col-lg-7 col-md-7">
						<input class="form-control" name="MobileNo"maxlength="10" id="MobileNo" placeholder="Mobile Number" type="number"  value="" required="required">
					</div>
				</div>
				
				
				<div class="form-group required">
					<label for="instituteName" class="col-md-3 control-label">Institute Name:<b style="color:red">*</b></label>
					<div class="col-md-7">
						<input class="form-control" name="instituteName" id="instituteName" placeholder="Institute Name" type="text"  value="" required="required">
					</div>
				</div>	
				<div class="form-group required">
					<label for="instituteState" class="col-md-3 control-label">Institute State:<b style="color:red">*</b></label>
					<div class="col-lg-7 col-md-7">
						<input class="form-control" name="instituteState" id="instituteState" placeholder="Institute State" type="text"  value="" required="required">
					</div>
				</div>
				<div class="form-group required">
					<label for="instituteAddress" class="col-md-3 control-label">Institute Address:<b style="color:red">*</b></label>
					<div class="col-lg-7 col-md-7">
						<input class="form-control" name="instituteAddress" id="instituteAddress" placeholder="Institute Address" type="text"  value="" required="required" >
					</div>
				</div>	

				<div class="form-group required">
					<label for="instituteState" class="col-md-3 control-label">Feedback:<b style="color:red">*</b></label>
					<div class="col-lg-2">
						<textarea type="text" cols="84" rows="4"></textarea>
					</div>
				</div>
				<div class="col-md-offset-4 col-lg-2">
					<button class="btn btn-warning btn-block" id="studentDetailSaveButton">Proceed Further</button>
				</div>
				
				<div class="col-lg-2">
					<a href="studentfaculty.php" class="btn btn-warning btn-block" id="BasicDetailSaveButton">Back</a>
				</div>
				<div class="col-md-4" id="studentDetailsMessage"></div>
				
			</div>
			<br><br><b style="color: red;">Note:</b> <b>The identity of the student will not be revealed to the institute and will be kept confidential in the record of PIIT only. However any falsification in the above details will be viewed seriously by PIIT</b>
		</fieldset>
	</form>
</div>
&nbsp;&nbsp;&nbsp;


<div id="searchCollegesModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" >
    <!-- Modal content-->
    <div class="modal-content">
		<div class="modal-body">			
				<table id="table-methods-table" data-height="500" data-toggle="table" data-url="operations/showInstitutes.php" data-pagination="true" data-search="true" data-sort-name="id" data-sort-order="desc" data-show-refresh="true" >
					<thead>
						<tr>
							<div>
									<th data-field="radioButton" data-formatter="institutes" data-events="operateEvents">Select</th>
									<th data-field="instituteID" data-sortable="true">Institute ID</th>
									<th data-field="instituteName">Institute Type</th>
									<th data-field="instituteState">Institute State</th>
									<th data-field="instituteAddress">Institute Address</th>
							</div>
						</tr>
					</thead>
				</table>
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col">
			<?php include 'footer.php' ;?>
		</div>
	</div>
</div>

    <script type="text/javascript" src="javascripts/jquery.min.js"></script>
    <script type="text/javascript" src="javascripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascripts/bootstrap-table.js"></script>
    <script type="text/javascript" src="javascripts/jquery.validate.min.js"></script>
    <script type="text/javascript" src="javascripts/custom/validate.js"></script>
    <script type="text/javascript" src="javascripts/custom/custom.js"></script>
    <script type="text/javascript" src="javascripts/custom/feedback.js"></script>




</body>
</html>
