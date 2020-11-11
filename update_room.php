<?php 

$id=$_GET['id'];
$sql=mysqli_query($con,"select * from room where id='$id'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
mysqli_query($con,"update room set number='$rno',room_type_id ='$type', dimension_id ='$dimension' where id='$id' ");
header('location:dashboard.php?option=room');
}

?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Room No</th>
		<td><input type="text"  name="rno" value="<?php echo $res['number']; ?>"  class="form-control"/>
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
		<option value="<?php echo $res_type['id']; ?>" <?php if($res_type['id'] == $res['room_type_id']){echo ' selected ';}?>><?php echo $res_type['name'] ?></option>
		<?php 	
		}
		?>
		</select>
		</td>
	</tr>
	
	<tr>	
		<th>Dimension</th>
		<td><select class="form-control" id="exampleFormControlSelect1" name="dimension">
			<?php $sql_dim=mysqli_query($con,"select * from dimension"); 
				while($res_dim=mysqli_fetch_assoc($sql_dim))
				{
			?>
			<option value="<?php echo $res_dim['id']; ?>" <?php if($res_dim['id'] == $res['dimension_id']){echo ' selected ';}?>><?php echo 'adults: '.$res_dim['adult_available'].', kids: '.$res_dim['children_available'] ?></option>
			<?php 	
			}
			?>
		</select>
		</td>
	</tr>
		
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Update Room Details" name="update"/>
		</td>
	</tr>
</table> 
</form>