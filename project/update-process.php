<?php
include_once 'db_conn.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users set id='" . $_POST['id'] . "', user_name='" . $_POST['user_name'] . "', password='" . $_POST['password'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "update Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Data</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="update.php">Data List</a>
</div>

<input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>">

<div class="form-group">
User Name: <br>
<input type="text" name="user_name" class="form-control" value="<?php echo $row['user_name']; ?>">
</div>
<div class="form-group">
Password :<br>
<input type="text" name="password" class="form-control" value="<?php echo $row['password']; ?>">
</div>

<input type="submit" name="submit" value="Submit" class="btn btn-primary">
<br>
<br>
<a class="btn btn-danger" href="logout.php">Logout</a>

</form>
</body>
</html>