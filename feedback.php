<script>
	function delFeedback(id)
	{
		if(confirm("You want to delete this Feedback ?"))
		{
		window.location.href='feedback_delete.php?id='+id;	
		}
	}
</script>
<table class="table table-striped table-hover ">
	<h1>Feedback</h1><hr>
	<tr>
		<th>Sender's Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Message</th>
		<th>Delete</th>
	</tr>
<?php 

$sql=mysqli_query($con,"select * from feedback");
while($res=mysqli_fetch_assoc($sql))
{
$guest_id = $res['guest_id'];
$id = $res['id'];
$name=$res['name'];
$email=$res['email'];
$mobile	=$res['mobile'];
$message=$res['message'];
?>
<tr>
		<td><?php echo $guest_id; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $mobile; ?></td>
		<td><?php echo $message; ?></td>
		<td><a href="#"onclick="delFeedback('<?php echo $id; ?>')"><span class="fa fa-remove"style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>