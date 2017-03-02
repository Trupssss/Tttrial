<!DOCTYPE html>
<html>
<head>
	<title>Watson Tour Guide</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<center>
			<img class = 'newappIcon' src='images/Tour7.jpg'>
			<h1 id = "message"><?php echo "Watson Tour Guide"; ?></h1>
		<p class='description'></p> We will help you <span class="yellow">make your tour beautiful</span>!<br><br>
			<img src='images/Tour6.jpg'> <br>
			<h2 id = "message"><?php echo "Select location :"; ?></h2>
				<select name="Location" style="width: 150px;">
					<option value="">SPPU</option>
					<option value="M">Mumbai</option>
					<option value="P">Paris</option>
				</select>
			<input id='Submit' name='Submit' value='Go' type='button' class='Go'>
	</center>
</body>
</html>
