<!DOCTYPE html>
<html>
<head>
	<title>new</title>
</head>
<style>
table,td{
	border:3px solid black;
	padding:10px;
	margin:50px;
	border-collapse:collapse;
	text-align:center;
	}	
	h1{
		text-align:center;
	}
</style>
<body>
<h1>User Details</h1>
	<form method="post" action="">
	
	
	
		<table border="1">
		<thead>
		<tr>
		<th>fname</th>
		<th>lname</th>
		<th>mobile</th>
		<th>email</th>
		<th>uname</th>
		<th>password</th>
		<th>action1</th>
		<th>action2</th>
</thead></tr>
<?php

if($n->num_rows()>0)
{
	foreach($n->result() as $row)
{
?>
<tr>
<td><?php echo $row->fname;?></td>
<td><?php echo $row->lname;?></td>
<td><?php echo $row->mobile;?></td>
<td><?php echo $row->email;?></td>
<td><?php echo $row->uname;?></td>
<td><?php echo $row->password;?></td>
 <?php
if($row->status==1)
{
?>
<td>Approved </td><td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a>
 </td>
<?php
}
elseif ($row->status==2) {
	?>
    <td>rejected</td><td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">approve</a> 
 </td>
    <?php
}
else
{
	?>
<input type="hidden" name="id" value="<?php echo $row->id;?>">

 <td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">approve</a> 
 </td>
<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a>
 </td>
 <?php
}
?>
</tr>
<?php
}
}
else
{
	?>
	<tr>
		<td>no data found </td></tr>
		<?php


}
    ?>
</table>
</form>
</body>
</html>


