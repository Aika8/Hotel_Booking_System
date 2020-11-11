<?php 
 
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from dimension where id='$id'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
mysqli_query($con,"update dimension set adult_available='$adult', children_available='$children' where id='$id' ");
header('location:dashboard.php?option=dimension');
}

?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Number of Adult Available</th>
		<td><input type="number"  name="adult" value="<?php echo $res['adult_available']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Number of Children Available</th>
		<td><td><input type="number"  name="children" value="<?php echo $res['children_available']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Update Dimensions" name="update"/>
		</td>
	</tr>
</table> 
</form>