<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Title</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Other stylesheet links -->
    <!-- ... -->
</head>
<body style="background: linear-gradient(to left, skyblue, purple);">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#" style="text-decoration: none; color: white;">My First Website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="AdminUserHome.php" style="text-decoration: none; color: white;">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="AdminAdd-User.php" style="text-decoration: none; color: white;margin-left: 20px;">Add-User</a></li>
        <li class="nav-item"><a class="nav-link" href="AdminManage-User.php" style="text-decoration: none; color: white;margin-left: 20px;">Manage-User</a></li>
        <li class="nav-item"><a class="nav-link" href="AdminService.php" style="text-decoration: none; color: white;margin-left: 20px;">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="AdminProfile.php" style="text-decoration: none; color: white; margin-left: 20px;">Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="AdminLogin.php" style="text-decoration: none; color: white;margin-left: 20px;">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="border p-3 bg-white overflow-auto">
                <h2 class="text-center mb-4">Customer Detail</h2>
                <table class="table table-bordered text-center">
                    <tr>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Country Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Comment</th>
                        <th>Password</th>
                        <th>Repeat Password</th>
                    </tr>
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
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and other scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
