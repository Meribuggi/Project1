<?php

session_start();
		include('mysqli_connect.php');

		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
		  if (empty($_POST["fname"]))
		  {
		    header("location:checkout.php");

		  }
		  else
		  {
		    $fname = $_POST["fname"];
		  }



		  if (empty($_POST["lname"]))
		  {
		    header("location:checkout.php");

		  }
		  else
		  {
		    $lname = $_POST["lname"];
		  }
          if(empty($_POST["quantity"]))
		  {
		  	header("location:checkout.php");

		  }
		  else
		  {
		  	$quantity = $_POST["quantity"];
		  }

            if(empty($_POST["product"]))
		  {
		  	header("location:checkout.php");

		  }
		  else
		  {
		  	$product = $_POST["product"];
		  }

		  if(empty($_POST["payment"]))
		  {
		  	header("location:checkout.php");
		  }
		  else
		  {
		  	$payment = $_POST["payment"];
		  }

		}

			$query = "INSERT INTO inventory_order (firstname, lastname, product, quantity, payment_method) VALUES ('$fname', '$lname', '$product','$quantity','$payment')";

			if (mysqli_query($jatoo, $query))
			{
				header('location:submit.php');

				$_SESSION['quantity'] = $quantity;
			}
			else
			{
			    echo "Error: " . $query . "<br>" . mysqli_error($jatoo);
			}

	?>
