<script>
	function delRoomType(id)
	{
		if(confirm("You want to delete this Room Type ?"))
		{
		window.location.href='delete_room_type.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Room Type Details</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_room_type" class="btn btn-primary">Add New Room Type</a></td>
	</tr>
	<tr style="height:40">
		<th>ID</th>
		<th>Type</th>
		<th>Description</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php 

$sql=mysqli_query($con,"select * from room_type");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['id'];	
$name = $res['name'];
$description = $res['description'];

?>
<tr>
		<td><?php echo $id ?></td>
		<td><?php echo $name ?></td>
		<td><?php echo $description  ?></td>

		<td><a href="dashboard.php?option=update_room_type&id=<?php echo $id; ?>"><span class="	fas fa-pen"></span></a></td>
 
		
		<td><a href="#" onclick="delRoomType('<?php echo $id; ?>')"><span class="fa fa-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>