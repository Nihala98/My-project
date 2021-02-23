<!DOCTYPE html>
<html>
<head>
	<title>new</title>
</head>
<style>
table,td{
	
	padding:20px;
	margin:50px;
	border-collapse:collapse;
	text-align:center;
	font-weight:bolder;

	}	
	
	fieldset{ text-align:center;
		padding:15px;
		position:relative;
		left:380px;
		top:50px;

	}
	
</style>
<body>

	<div class="head">
			<h1>REGISTRATION FORM</h1>
		</div>
	<form method="post" action="<?php echo base_url()?>main/regist">
		<fieldset style="width:40%;height:10%;">
		<table>	
					<tr>
					<td>First Name:</td>
					<td><input type="text" name="fname"></td>
				 	</tr>
				 	<tr>
					<td>Last Name:</td>
					<td><input type="text" name="lname"></td>
				 	</tr>
				 	<tr>
					<td>user Name:</td>
					<td><input type="text" name="uname"></td>
				 	</tr>
				 	<td>Password:</td>
					<td><input type="password" name="password"></td>
				    </tr>
					<td>Phone No:</td>
					<td><input type="text" name="phn"></td>
					</tr>
					<tr>
					
				    <td>Email:</td>
					<td><input type="email" name="email"></td>
				    </tr>
				    <tr>
				    <tr>
					<td><input type="submit" value="submit" name="submit"></td>
				    </tr>
			</table>
		</fieldset>
</form>
</body>
</html>