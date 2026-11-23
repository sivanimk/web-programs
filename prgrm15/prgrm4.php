<!DOCTYPE html>

<html> <head> <title>Electricity Bill</title> </head> <body>

<center>

<h2>Electricity Bill Calculator</h2>

<form name="form" action="" method="POST">

<label for="name">Enter Your Name:</label><br>
<input type="text" id="name" name="name" required>
<br><br>

<label for="unit">How Many Units Are Used?</label><br>
<input type="number" id="unit" name="unit" min="0" placeholder="Enter Units" required>
<br><br>

<input type="submit" name="submit" value="Submit">


</form>

<?php if(isset($_POST["submit"])) { $name = $_POST["name"]; $unit = (int)$_POST["unit"]; if($unit <= 100) { $bill = $unit * 3; } else if($unit <= 200) { $bill = (100 * 3) + (($unit - 100) * 5); } else { $bill = (100 * 3) + (100 * 5) + (($unit - 200) * 7); } echo "<h3>Electricity Bill Details</h3>"; echo "Customer Name: " . htmlspecialchars($name) . "<br><br>"; echo "Units Used: " . $unit . "<br><br>"; echo "Total Electricity Bill: ₹" . $bill; } ?>

</center>

</body> </html>
