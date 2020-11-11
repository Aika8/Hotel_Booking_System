<table class="table table-bordered table-striped table-hover">
	<h1>Users</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>First Name</th>
		<th>Last Email</th>
		<th>Member since</th>
		<th>Email</th>
		<th>Password</th>
	</tr>
	<?php 

$sql=mysqli_query($con,"select * from guest");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $res['id']; ?></td>
		<td><?php echo $res['first_name']; ?></td>
		<td><?php echo $res['last_name']; ?></td>
		<td><?php echo $res['member_since']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['password']; ?></td>
	</td>
	</tr>	
<?php 	
}
?>	