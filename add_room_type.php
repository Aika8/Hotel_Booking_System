<?php 
extract($_REQUEST);
if(isset($add))
{
	$sql=mysqli_query($con,"select * from room_type where name='$name'");
	if(mysqli_num_rows($sql))
	{
	echo "this room type is already added";	
	}		
	else
	{	
	mysqli_query($con,"insert into room_type values('','$name','$description', '$price')");	

	}
}
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	

	
	<tr>	
		<th>Name</th>
		<td><input type="text" name="name"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Description</th>
		<td><input type="text" name="description"  class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th>Price</th>
		<td><input type="number" name="price"  class="form-control"/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add Room Type" name="add"/>
		</td>
	</tr>
</table> 
</form>