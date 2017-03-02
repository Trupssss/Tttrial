<!DOCTYPE html>
<html>
<head>
	<title>Watson Tour Guide</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
body
{
  background-image: url("images/Tour8.jpg");
  background-color: #FF6347;
}
	<center>
		<table>
			<tr>
			     <td>
				<h1 id = "message"><?php echo "Watson Tour Guide"; ?></h1>	<br>
			     </td>
			</tr>
			<tr>
			     <td>
				<p class='description'></p> We will help you <span class="blue">make your tour beautiful</span>!<br>
			     </td>
			</tr>
			<tr>
			     <td>
				<img src='images/Tour6.jpg'> <br>
			     </td>
			</tr>
			<tr>
			     <td>
				<h5 id = "message"><?php echo "Select location :"; ?></h5>	<br>
				<select name="Location">
					<option value="">SPPU</option>
					<option value="M">Mumbai</option>
					<option value="P">Paris</option>
				</select>
			     </td>
			     <td>
				<input id='Submit' name='Submit' value='Go' type='button'>	<br>
			     </td>
			 </tr>
			 <tr>
			     <td>
				<img src='images/Tour7.jpg'>
			     </td>
			 </tr>
		</table>
	</center>
</body>
</html>
