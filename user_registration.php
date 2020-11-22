<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];

	
    $query = "SELECT * FROM guest WHERE CONCAT(id, first_name, last_name) LIKE '%".$valueToSearch."%'";
    $search_result =  mysqli_query($con, $query);
    
}
 else {
    $query = "SELECT * FROM guest";
    $search_result = mysqli_query($con, $query);
}


?>


<form action="" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search">
            <input class = "btn btn-dark" type="submit" name="search" value="Filter">
</form>

<table class="table table-bordered table-striped table-hover">
	<h1 class="mt-4" >Users</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>First Name</th>
		<th>Last Email</th>
		<th>Member since</th>
		<th>Email</th>
		<th>Password</th>
	</tr>
	<?php 


while($res = mysqli_fetch_array($search_result))
{
?>
<tr>
		<td><?php echo $res['id']; ?></td>
		<td><?php echo $res['first_name']; ?></td>
		<td><?php echo $res['last_name']; ?></td>
		<td><?php echo $res['member_since']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['password']; ?></td>
	</td>
	</tr>	
<?php 	
}
?>	