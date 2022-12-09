<!DOCTYPE html>
<html>
<head>
	<title>Title World</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<form class="form-inline" method="post">
	  <div class="form-group mb-2">
	  	<!--  -->
	    <label for="staticEmail2" class="sr-only">URL:</label>
	    <input type="text" name="urls1" class="form-control-plaintext" id="staticEmail2" placeholder="Enter URL">
	  </div>
	  <!--  -->
	  <button type="submit" name="submit" class="btn btn-primary mb-2">get source code</button>
	</form>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	# code...
	$source_code = file($_POST['urls1']);
	// 1. traversing through each element of the array
	// 2.printing their subsequent HTML entities
	foreach ($source_code as $line_number => $last_line) {
		echo nl2br(htmlspecialchars($last_line) . "\n");
	}
}
else{
	echo "string";
}

// Storing the elements of the webpage into an array




?>
