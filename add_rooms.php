<?php 
extract($_REQUEST);
if(isset($add))
{
	$sql=mysqli_query($con,"select * from room where number='$rno'");
	if(mysqli_num_rows($sql))
	{
	echo "this room is already added";	
	}		
	else
	{	
	mysqli_query($con,"insert into room values('','$rno','$type','$dimension')");
	}
}
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Room Number</th>
		<td>
		<input type="text" name="rno"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Room Type</th>
		<td>    
		<select class="form-control" id="exampleFormControlSelect1" name="type">
		<?php $sql_type=mysqli_query($con,"select * from room_type"); 
				while($res_type=mysqli_fetch_assoc($sql_type))
				{
		?>
		<option value="<?php echo $res_type['id']; ?>"><?php echo $res_type['name'] ?></option>
		<?php 	
		}
		?>
		</select>
		</td>
	</tr>
	
	<tr>	
		<th>Dimension</th>
		<td>
		<select class="form-control" id="exampleFormControlSelect1" name="dimension">
			<?php $sql_dim=mysqli_query($con,"select * from dimension"); 
				while($res_dim=mysqli_fetch_assoc($sql_dim))
				{
			?>
			<option value="<?php echo $res_dim['id']; ?>"><?php echo 'adults: '.$res_dim['adult_available'].', kids: '.$res_dim['children_available'] ?></option>
			<?php 	
			}
			?>
		</select>
		</td>
	</tr>
	
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add Room" name="add"/>
		</td>
	</tr>
</table> 
</form>