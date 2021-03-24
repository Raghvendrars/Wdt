<?php
include "config.php";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>
	<title>View Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>

<body>
	<div class="container w-50">
		<h1 class="text-center text-primary">USERS</h1>
		<table class="table">
			
				<tr>
					<th><h2>ID</h2></th>
					<th><h2>First Name</h2></th>
					<th><h2>Last Name</h2></th>
					<th><h2>Email</h2></th>
					<th><h2>Gender</h2></th>
					<th><h2>Action</h2></th>
				</tr>
			<tbody>
				<?php
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
				?>

						<tr>
							<td><h3><?php echo $row['id']; ?></h3></td>
							<td><h3><?php echo $row['firstname']; ?></h3></td>
							<td><h3><?php echo $row['lastname']; ?></h3></td>
							<td><h3><?php echo $row['email']; ?></h3></td>
							<td><h3><?php echo $row['gender']; ?></h3></td>
							<td><a class="btn btn-info btn-lg" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger btn-lg" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
						</tr>

				<?php		}
				}
				?>

			</tbody>
		</table>
	</div>

</body>

</html>