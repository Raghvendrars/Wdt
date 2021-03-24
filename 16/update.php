<?php
include "config.php";

// if the form's update button is clicked, we need to process the form
if (isset($_POST['update'])) {
	$firstname = $_POST['firstname'];
	$user_id = $_POST['user_id'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];

	// write the update query
	$sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`gender`='$gender' WHERE `id`='$user_id'";

	// execute the query
	$result = $conn->query($sql);

	if ($result == TRUE) {
		header('Location: view.php');
	} else {
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

		while ($row = $result->fetch_assoc()) {
			$first_name = $row['firstname'];
			$lastname = $row['lastname'];
			$email = $row['email'];
			$password  = $row['password'];
			$gender = $row['gender'];
			$id = $row['id'];
		}

?>

		<head>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

			<style>
				form {
					padding: 20px;
					border: 1px solid black;
					margin-top: 5%;
					margin-left: auto;
					margin-right: auto;
					width: 50%;
				}
			</style>
		</head>

		<body>
			<form action="" method="post">
				<fieldset>
					<legend class="text-primary text-center text-large"><h3>User Update Form</h3></legend>
					<div class="input-group mb-3">
						<lable class="input-group-text">First name</lable>
						<input class="form-control" type="text" name="firstname" value="<?php echo $first_name; ?>">
						<input class="form-control" type="hidden" name="user_id" value="<?php echo $id; ?>">
					</div>
					<div class="input-group mb-3">
						<lable class="input-group-text">Last name</lable>
						<input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>">
					</div>
					<div class="input-group mb-3">
						<label class="input-group-text">Email</label>
						<input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
					</div>
					<div class="input-group mb-3">

						<label class="input-group-text">Password</label>
						<input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
					</div>
					Gender:<br>
					<input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') {
																		echo "checked";
																	} ?>>Male
					<input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') {
																			echo "checked";
																		} ?>>Female
					<br><br>
					<input type="submit" class="btn btn-lg btn-primary" value="Update" name="update">
				</fieldset>
			</form>

		</body>

		</html>




<?php
	} else {
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view.php');
	}
}
?>