<html>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">

<center><h1> Registration</h2></center>
<form action="day31.php" method="POST">
<center><div class="square">
<br><br>
<label for="name"><b>Name</b></label>
<input type="varchar" placeholder="Enter name" name="name" required>
<br><br>
<label for="address"><b>address</b></label>
<input type="varchar" placeholder="Enter address" name="address" required>
<br><br>
<label for="email_address"><b>Email Address</b></label>
<input type="varchar" placeholder="Enter email address" name="email_address" required>
<br><br>
<label for="phone_number"><b>Phone Number</b></label>
<input type="int" placeholder="Enter phone number" name="phone_number" required>
<br><br>
<label for="city"><b>City</b></label>
<input type="varchar" placeholder="Enter city" name="city" required>
<br><br>
<label for="state"><b>State</b></label>
<input type="varchar" placeholder="Enter state" name="state" required>
<br><br>
<label for="pincode"><b>Pincode</b></label>
<input type="varchar" placeholder="Enter pincode" name="pincode" required>
<br><br><br><br><button class="btn warning" name="submit">Submit</button>

</div></center>
</form>
</body>
</html>
<?php
include ('connection1.php');  
 ?>