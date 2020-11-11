<script>
	function delRoom(id)
	{
		if(confirm("You want to delete this Room ?"))
		{
		window.location.href='delete_room.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Room Details</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_rooms" class="btn btn-primary">Add New Rooms</a></td>
	</tr>
	<tr style="height:40">
		<th>Room Number</th>
		<th>Room Type</th>
		<th>Room dimension</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php 

$sql=mysqli_query($con,"select * from room order by number ASC");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['id'];	
$number = $res['number'];
$type_id = $res['room_type_id'];
$dimension_id = $res['dimension_id'];


?>
<tr>
		<td><?php echo $number ?></td>
		<td>
		<?php $sql_type=mysqli_query($con,"select * from room_type"); 
				while($res_type=mysqli_fetch_assoc($sql_type))
				{
		?>
		<?php if($res_type['id'] == $type_id){echo $res_type['name'];} ?>
		<?php 	
		}
		?>
		</td>

		<td>
		<?php $sql_dim=mysqli_query($con,"select * from dimension"); 
				while($res_dim=mysqli_fetch_assoc($sql_dim))
				{
		?>
		<?php if($res_dim['id'] == $dimension_id){echo 'adults: '.$res_dim['adult_available'].', kids: '.$res_dim['children_available'];} ?>
		<?php 	
		}
		?>
		</td>

		<td><a href="dashboard.php?option=update_room&id=<?php echo $id; ?>"><span class="fas fa-pen"></span></a></td>
 
		
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')"><span class="fa fa-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>