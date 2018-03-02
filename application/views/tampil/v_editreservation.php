<!DOCTYPE html>
<html>
<head>
	<title>booktravel</title>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($show as $u){ ?>

            <form class="form-horizontal" action="<?php echo base_url(). 'Action/update_reservation'; ?>" method="post">

              <div class="box-body">

                  <label>Reservation code</label>
                  <input type="hidden" name="id" value="<?php echo $u->id ?>">
                  <input class="form-control" placeholder="Enter ..." type="number" name="reservation_code" value="<?php echo $u->reservation_code ?>">

	       
                  <label>Reservation at</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="reservation_at" value="<?php echo $u->reservation_at ?>">

                  <label>reservation date</label>
                  <input class="form-control" placeholder="Enter ..." type="date" name="reservation_date" value="<?php echo $u->reservation_date ?>">
                
                  <label>customer id</label>
                  <input class="form-control" placeholder="Enter ..." type="number" name="customerid" value="<?php echo $u->customerid ?>">

                  <label>seat code</label>
                  <input class="form-control" placeholder="Enter ..." type="number" name="seat_code" value="<?php echo $u->seat_code ?>">

                  <label>rute id</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="ruteid" value="<?php echo $u->ruteid ?>">

                  <label>depart at</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="depart_at" value="<?php echo $u->depart_at ?>">

                  <label>price</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="price" value="<?php echo $u->price ?>">
                
                  <label>user id</label>
                  <input class="form-control" placeholder="Enter ..." type="number" name="userid" value="<?php echo $u->userid ?>">
                
   

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="" class="btn btn-default">Cancel</button>
                <button type="submit" value="Simpan" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>

	<?php } ?>
</body>
</html>