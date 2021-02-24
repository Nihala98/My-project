<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<style>
table,td{
	
	padding:10px;
	margin:40px;
	border-collapse:collapse;
	text-align:center;
	font-weight:bolder;
	text-align:justify;
	}	
	
	fieldset{ text-align:center;
		padding:15px;
		position:relative;
		left:440px;
		top:50px;
		background-color:rgba(0,0,0,0.6);

	}
	h1{
		text-align:center; 
	}
	
</style>
<body>
			<h1>REGISTRATION FORM</h1>
		
	<form method="post" action="<?php echo base_url()?>main/regist">
		<fieldset style="width:30%;height:10%;">
		<table>	
					<tr>
					<td>First Name:</td>
					<td><input type="text" name="fname" pattern=".{3,}" required title="3 characters minimum" maxlength="25"></td>
				 	</tr>
				 	<tr>
					<td>Last Name:</td>
					<td><input type="text" name="lname"  pattern=".{3,}"   required title="3 characters minimum" maxlength="25"></td>
				 	</tr>
				 	<tr>
					<td>user Name:</td>
					<td><input type="text" name="uname" required pattern=".{3,}"   required title="3 characters minimum" maxlength="10"></td>
				 	</tr>
				 	<td>Password:</td>
					<td><input type="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"></td>
				    </tr>
					<td>Phone No:</td>
					<td><input type="text" name="phn"  required minlength="10"maxlength="10"></td>
					</tr>
					<tr>
					<td>Email:</td>
					<td><input type="email" name="email" required></td>
				    </tr>
				    </table>
			<input type="submit" value="submit" name="submit">
		</fieldset>
</form>
</body>
</html>

					
			
