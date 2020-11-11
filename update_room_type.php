<?php 

$id=$_GET['id'];
$sql=mysqli_query($con,"select * from room_type where id='$id'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
mysqli_query($con,"update room_type set name='$name', description='$description' where id='$id' ");
header('location:dashboard.php?option=room_type');
}

?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Room Type</th>
		<td><input type="text"  name="name" value="<?php echo $res['name']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Description</th>
		<td><textarea  name="description" value="<?php echo $res['description']; ?>"  class="form-control"><?php echo $res['description']; ?></textarea>
		</td>
	</tr>
	
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Update Room Details" name="update"/>
		</td>
	</tr>
</table> 
</form>