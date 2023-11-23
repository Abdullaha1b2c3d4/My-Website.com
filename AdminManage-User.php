<?php   
include"Connection/Connection.php";



 	$id=$_GET['A'];
 
 $query = "delete  from signup where id='$id'";
    $firedata = mysqli_query($link,$query);
    if($firedata){
    echo"delete data";
}

    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <style>
        body {
            background: linear-gradient(to left, skyblue, purple);
        }
    </style>
</head>
<body>
    <nav style="border: 1px solid black;" class="navbar bg-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="text-decoration: none; color: white;" class="navbar-brand" href="#">My First Website</a>
    </div>
    <ul class="nav">  
      <li class="active"><a style="text-decoration: none; color: white;" href="AdminUserHome.php">Home</a></li>
      <li><a style="text-decoration: none; color: white;margin-left: 20px;" href="AdminAdd-User.php">Add-User</a></li>
      <li><a style="text-decoration: none; color: white;margin-left: 20px;" href="AdminManage-User.php">Manage-User</a></li>
      <li><a style="text-decoration: none; color: white;margin-left: 20px;" href="AdminService.php">Services</a></li>
      <li class="active"><a style="text-decoration: none; color: white; margin-left: 20px;" href="AdminProfile.php">Profile</a></li>
      <li><a style="text-decoration: none; color: white;margin-left: 20px;" href="AdminLogin.php">Logout</a></li>
  </ul>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="rounded bg-white p-4">
                    <h2 class="font-weight-bold text-center mb-4">Customer Detail</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone number</th>
                                    <th>Country Name</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Contact</th>
                                    <th>Password</th>
                                    <th>Repeat Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>




 <?php
$query = "SELECT * FROM signup";
$result = mysqli_query($link, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($link));
}
while ($row = mysqli_fetch_assoc($result)) {
	extract($row);

	?>
<tr>
                                    <td><?php echo $fname; ?></td>
                                    <td><?php echo $mname; ?></td>
                                    <td><?php echo $lname; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $cname; ?></td>
                                    <td><?php echo $address; ?></td>
                                    <td><?php echo $contact; ?></td>
                                    <td><?php echo $comment; ?></td>
                                    <td><?php echo $pass; ?></td>
                                    <td><?php echo $R_pass; ?></td>
                                    <td><a href="AdminEditData.php" style="padding: 5px;text-decoration: none;color: black;border-radius: 5px;" class="btn-primary">Edit</a><a href="?A<?php echo $id; ?>" style="padding: 5px;text-decoration: none;color: black;border-radius: 5px;" class="btn-primary ml-1">Delete</a></td>
                                </tr>

	<?php


}

// Close the connection
mysqli_close($link);

	  ?>
    







                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-JO17SN80a+2T/ZLnQESfUVgNpfxUJ5E8kI9jdO6YO5ZHtAmKt2LbJQKEj2iwAJ" crossorigin="anonymous"></script>
</body>
</html>