<?php 
include'Connection/Connection.php';
include 'Index.php';
if(isset($_POST['signup'])){	
	extract($_POST);
	$query="INSERT INTO `signup`(`fname`, `mname`, `lname`, `email`, `no`, `cname`, `address`, `contact`, `comment`, `pass`, `R_pass`) VALUES ('$fname','$mname','$lname','$email','$no','$cname','$address','$contact','$comment','$pass','$R_pass')";
	$firedata=mysqli_query($link,$query);
	if($firedata){
		echo "Data Insert";
	}
	else{
		echo "Data Not Insert";
	}
}
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cheatsheet.css?cache=1551444288884196953">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body style="background: linear-gradient(to left, skyblue,purple);">
<div class="container">
	<div class="row">
		<div class="col">
			<br><br>
			<div style="border-radius: 10px;" class=" m-auto bg-white">
				<br>
				<div style="font-size: 25px; font-weight: 800; font-family: sans-serif; text-align: center;">Signup</div>
				<div class="form-group">
					<br>
					<form action="##" method="post">
					<input style="width: 80%;" class="form-control m-auto" placeholder="First Name" name="fname">
					<br>
					<input style="width: 80%;" class="form-control m-auto" placeholder="Middle Name" name="mname">
					<br>
					<input style="width: 80%;" class="form-control m-auto" placeholder="Last Name" name="lname">	
					<br>
					<input style="width: 80%;" class="form-control m-auto" placeholder="Email" name="email">
					<br>
					<input style="width: 80%;" class="form-control m-auto" placeholder="Phone No:" name="no">
					<br>
					<input style="width: 80%;" class="form-control m-auto" placeholder="Country Name:" name="cname">
					<br>
					<input style="width: 80%;" class="form-control m-auto" placeholder="Address:" name="address">
					<br>
					<input style="width: 80%;" class="form-control m-auto" placeholder="Contact" name="contact">
					<br>
					<input style="width: 80%;" class="form-control m-auto" placeholder="Comment:" name="comment">
					<br>
					<input style="width: 80%;" class="form-control m-auto" placeholder="Enter Password" name="pass">
					<br>
					<input style="width: 80%;" class="form-control m-auto" placeholder="Confirm Password" name="R_pass">
					<br>
                    <div class="text-center"><button style="width: 82%; background: linear-gradient(to left, skyblue,purple);" name="signup" class="btn ">Sign up</button></div>
                    <br>
                    <div class=""><div class="">
					<div class="text-center" style="font-size: 12px;">Have Already an account <u><b>Login here</b></u></div></div></div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<br><br>
</body>
</html>