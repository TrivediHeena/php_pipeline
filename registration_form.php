<html>
<head>
<title>Registration</title>
</head>
<body>
	<form name="registration" method="post" action="registr.php" enctype="multipart/form-data">
	<table>
		<tr><th colspan=2><h1>Registration</h1></th></tr>
		<tr>
			<td><label>Username:</label></td>
			<td><input type="text" name="unm" required/></td>
		</tr>
		<tr>
			<td><label>Email:</label></td>
			<td><input type="email" name="email" required/></td>
		</tr>
		<tr>
			<td><label>Password:</label></td>
			<td><input type="password" name="pwd" required/></td>
		</tr>
		<tr>
			<td><label>Gender:</label></td>
			<td><input type="radio" name="gender" value="Male" checked/>Male<input type="radio" name="gender" value="Female"/>Female</td>
		</tr>
		<tr>
			<td><label>Hobby:</label></td>
			<td><input type="checkbox" name="reading" value="Reading" checked/>Reading<input type="checkbox" name="writing" value="Writing"/>Writing</td>
		</tr>	
		<tr>
			<td><label>Upload Pic</label></td>
			<td><input type="file" name="file" required/></td>
		</tr>
		<tr>
			<td><label>Country</label></td>
			<td><select name="country">
					<option value="India">India</option>
					<option value="america">America</option>
				</select>
			</td>
		</tr>
		<tr><td colspan=2><input type="submit" value="Register"/></td></tr>
	</table>
</body>
</html>