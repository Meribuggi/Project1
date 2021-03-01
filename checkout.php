<?php
	session_start();
?>

<?php

	include('mysqli_connect.php');


    $id = $_GET['id'];

	$res = mysqli_query($jatoo,"SELECT * FROM inventory WHERE id=".$id);

	$row = mysqli_fetch_array($res);

	$product = $row['product'];

	$_SESSION['product'] = $product;

	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bookstore</title>
	<meta charset="utf-8">


	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div id="home">

		<nav>
			<ul>
					<li><a href="index.php">Home</a></li>
				<li><a href="Collection.php">Collection</a></li>
				 <li><a href="about.php">About us</a></li>
			</ul>
		</nav>


		<main>
			<div id="home">
				<div id="form">


						<form action="order.php" method="POST">

							<input type="hidden" name="id" value="<?php echo $id ?>" >
							<input type="hidden" name="product" value="<?php echo $product ?>" >

							<label for="fname">First Name</label>
							<input type="text" id="fname" name="fname">
							<span class="error">* </span><br>

							<label for="lname">Last Name</label>
							<input type="text" id="lname" name="lname">
							<span class="error">*</span>

							<label for="lname">Quantity</label>
							<input type="text" id="quantity" name="quantity">
							<span class="error">*</span> <br>

							<label for="payment">Payment Option</label><br>
							<input type="radio" name="payment" value="credit">Credit<br>
							<input type="radio" name="payment" value="debit">Debit<br>

							<span class="error">* </span><br><br>



								<input type="Submit" name="submit" value="Submit">

						</form>

				</div>
			</div>
		</main>

		<footer>

				Copyright © Meri Buggi Bookstore

		</footer>

	</div>

</body>
</html>
