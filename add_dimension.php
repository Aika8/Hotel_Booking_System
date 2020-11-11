<?php 
extract($_REQUEST);
if(isset($add))
{
	mysqli_query($con,"insert into dimension values('','$adult','$children')");	

	
}
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	

	
	<tr>	
		<th>Number of Adult Available</th>
		<td><input type="number" name="adult"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Number of Children Available</th>
		<td><input type="number" name="children"  class="form-control"/>
		</td>
	</tr>
	
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add Dimension" name="add"/>
		</td>
	</tr>
</table> 
</form>