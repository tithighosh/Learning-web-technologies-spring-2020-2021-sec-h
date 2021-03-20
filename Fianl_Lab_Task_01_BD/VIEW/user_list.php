<?php
	$title= "User list Page";
	include('header.php');
?>

	<div id="page_title">
		<h1>User List</h1>
	</div>

	<div id='nav_bar'>
		<a href="home.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

<?php 

	require_once('../model/db.php');

		$conn = getConnection();
		$sql = 'select * from users';
		$result = mysqli_query($conn, $sql);


		echo "<table border=1> 
			<tr>
				<td>Username</td>
				<td>Email</td>
				<td>Type</td>
			</tr>";

		while ($row = mysqli_fetch_assoc($result)) {
	
			echo "<tr>
					<td>{$row['username']}</td>
					<td>{$row['email']}</td>
					<td>
					</td>
				</tr>";
		}

		echo "</table>";
?>

<?php include('footer.php'); ?>