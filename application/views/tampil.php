<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show All Flight</title>
	<style type="text/css">
		td {
			padding: 10px 20px;
		}
		th {
			padding: 5px 10px;
		}
	</style>
</head>
<body>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>From</th>
			<th>To</th>
			<th>Departure Date</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($rute as $r){ 
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r->rute_from ?></td>
				<td><?php echo $r->rute_to ?></td>
				<td><?php echo $r->depart_on ?></td>
				<td><?php echo $r->price ?></td>
				<td>
					<a style="cursor: pointer;" onclick="href='<?php echo base_url(('insert/edit_rute/'. $r->ruteid)); ?>'">Edit</a>
					<a style="cursor: pointer;" onclick="href='<?php echo base_url(('insert/hapus/'. $r->ruteid)); ?>'">Remove</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</body>
	</html>