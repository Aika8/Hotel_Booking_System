
<table class="table table-bordered table-striped table-hover">
	<h1>Room Booking Details</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Room Number</th>
		<th>Room Type</th>
		<th>Check in Date</th>
		<th>Check Out Date</th>
		<th>Cancel Order</th>
	</tr>

<?php 
$sql=mysqli_query($con,"select * from reservation r inner join guest g on g.id = r.guest_id inner join room ro on ro.id = r.room_id inner join room_type t on t.id = ro.room_type_id ");
while($res=mysqli_fetch_assoc($sql))
{
$oid=$res['id'];

?>
<tr>
		<td><?php echo $res['id']; ?></td>
		<td><?php echo $res['first_name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['number']; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['date_in']; ?></td>
		<td><?php echo $res['date_out']; ?></td>
		<td><a style="color:red" href="cancel_order.php?booking_id=<?php echo $oid; ?>">Cancel</a></td>
	</td>
	</tr>
<?php 	
}

?>	
</table>