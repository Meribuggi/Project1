<?php

		include('mysqli_connect.php');

		$result = mysqli_query($jatoo,"SELECT * FROM inventory");

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

		<div id="home">

			<div id="table">
				<table>

					<thead>

						<tr>
							<th>Books</th>

							<th>Price $</th>

							<th>Quantity Left</th>

						</tr>

					</thead>

					<tbody>

						<?php

							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td><a href='checkout.php?id=".$row['id']."'>" . $row['product'] . 	"</a></td>";
								echo "<td>" . $row['price'] . 		"</td>";
								echo "<td>" . $row['quantity'] . 	"</td>";
								echo "</tr>";
							}

						?>

					</tbody>
				</table>
			</div>

		</div>

		<footer>

				Copyright © Meri Buggi Bookstore
		</footer>

	</div>

</body>
</html>
