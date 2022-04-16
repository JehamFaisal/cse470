<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Update data</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  

 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr class="table-primary">
	  <td >ID</td>
	    <td >UserNAme</td>
		<td >Password</td>
		
		<td >Action</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td ><?php echo $row["id"]; ?></td>
		<td ><?php echo $row["user_name"]; ?></td>
		<td ><?php echo $row["password"]; ?></td>
		
		<td><a class="btn btn-primary" href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
<a class="btn btn-danger" href="logout.php">Logout</a>
 </body>
</html>