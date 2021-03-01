<?php

	session_start();

	include('mysqli_connect.php');

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
                  <br> <br> <br> <br> <br>
                    <h3>Your order Successfully placed </h3>
                    <h4>Thank You..</h4>

            </div>
			<?php

	$quantity = $_SESSION['quantity'];

	$product = $_SESSION['product'];


	$res = mysqli_query($jatoo,"SELECT * FROM inventory WHERE product='".$product."'");

	$row = mysqli_fetch_array($res);

	$get_quantity = $row['quantity'];

	$new_quantity = $get_quantity-$quantity;

	$query = "UPDATE inventory SET quantity = '$new_quantity' where product = '".$product."' ";

	if ($jatoo->query($query) === TRUE)
	{
	    echo "order Successfull.";
	}
	else
	{
	    echo "Please Check Your Datails: " . $jatoo->error;
	}

	?>
        </main>

        <footer>

       Copyright © Meri Buggi Bookstore

        </footer>

    </div>

</body>

</html>
