<!DOCTYPE html>
<html>
<head>
	<title>new</title>
</head>
<style>
	h1{
		text-align:center; 
	}

	fieldset{ text-align:center;
		padding:15px;
		position:relative;
		left:480px;
		top:50px;
		background-color:rgba(0,0,0,0.6);

	}
</style>
<body>
<h1>Login</h1>
	
	<form method="post" action="<?php echo base_url()?>main/logn">
		<fieldset style="height:20%;width:25%">
      <table>
      	<tr>
				<td>uname:</td>
				<td><input type="text" name="uname" required></td>
			</tr>
			<tr>
				<td>password:</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
					<td><input type="submit" value="submit" name="submit"></td>
				</tr>
			</fieldset>	
				
					
</table>
</form>
</div>
</body>
</html>
