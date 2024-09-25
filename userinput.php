<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<center>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table>
		<tr>
			<td>
				<label>Full Name</label>
			</td>
			<td><input type="text" name="fullName"></td>
		</tr>	
		<tr>
			<td>
				<label>Course</label>
			</td>
			<td><input type="text" name="course"></td>
		</tr>
		<tr>
			<td>
				<button>Submit</button>
			</td>
		</tr>
	</table>
</form>
</center>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$fullName=$_POST["fullName"];
$course=$_POST["course"];
 echo "Welcome ".$fullName."<br>";
 echo "Your Course is ".$course; 
}
?>