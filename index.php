<!DOCTYPE html>
<html>
<head>
	<title>Watson Tour Guide</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<center>
		<h1 id = "message"><?php echo "Watson Tour Guide"; ?></h1>	<br>
		<p class='description'></p> We will help you <span class="blue">make your tour beautiful</span>!<br>
			<img src='images/Tour6.jpg'> <br>
			<h2 id = "message"><?php echo "Select location :"; ?></h2>	<br>
				<select name="Location">
					<option value="">SPPU</option>
					<option value="M">Mumbai</option>
					<option value="P">Paris</option>
				</select>
			<input id='Submit' name='Submit' value='Go' type='button'>	<br>
			<img src='images/Tour7.jpg'>
	</center>
</body>
</html>
