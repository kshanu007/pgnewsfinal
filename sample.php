<html>
<head>
  <title>Form</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<body>
  <div class="container">
	<form method="post" action="" class="form-group form-inline">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">
					<label>Name:</label>
					<input type="text" name="name" placeholder="Enter name" class="form-control">
				</div>
				<div class="col-md-4">
					<label>Mobile no.</label>
					<input type="text" name="mobile" placeholder="Enter Mobile" pattern="[0-9]{10}" class="form-control">
				</div>
				<div class="col-md-4">
					<label>Email</label>
					<input type="email" name="email" placeholder="Enter Email" class="form-control">
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4">
						<label>Country</label>
						<select class="form-control">
							<option selected disabled>--Select Country--</option>
							<option >India</option>
							<option>Pakistan</option>
						</select>
					</div>
					<div class="col-md-4">
						<label>State</label>
						<select class="form-control">
							<option selected disabled>--Select City--</option>
							<option>Maharashtra</option>
							<option>Lahor</option>
						</select>
					</div>
					<div class="col-md-4">
						<label>City</label>
						<select class="form-control">
							<option selected disabled>--Select city</option>
							<option>Pune</option>
							<option>Kolhapur</option>
						</select>
					</div>
				</div>
			</div>
			
	</form>
</div>


</body>
</html>
