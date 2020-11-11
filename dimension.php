<script>
	function delDim(id)
	{
		if(confirm("You want to delete this Dimension ?"))
		{
		window.location.href='delete_dimension.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Dimension Details</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_dimension" class="btn btn-primary">Add New Dimension</a></td>
	</tr>
	<tr style="height:40">
		<th>ID</th>
		<th>Number of Adult Available</th>
		<th>Number of Children Available</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php 

$sql=mysqli_query($con,"select * from dimension");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['id'];	
$adult = $res['adult_available'];
$children = $res['children_available'];

?>
<tr>
		<td><?php echo $id ?></td>
		<td><?php echo $adult ?></td>
		<td><?php echo $children  ?></td>

		<td><a href="dashboard.php?option=update_dimension&id=<?php echo $id; ?>"><span class="fas fa-pen"></span></a></td>
 
		
		<td><a href="#" onclick="delDim('<?php echo $id; ?>')"><span class="fa fa-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>