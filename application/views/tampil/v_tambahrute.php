<!DOCTYPE html>
<html>
<head>
	<title>tambah user/admin</title>
</head>
<body>
	<center>
		<h3>Tambah rute maskapai</h3>
	</center>

	    <form class="form-horizontal" action="<?php echo base_url(). 'Action/tambah_rute'; ?>" method="post">

	      <div class="box-body">

		      <div class="form-group has-feedback">
		        <input type="text" class="form-control" placeholder="id maskapai" name="transportationid">
		        <span class="glyphicon glyphicon-road form-control-feedback"></span>
		      </div>


	          <div class="form-group has-feedback">
		        <input class="form-control pull-right" id="datepicker" name="depart_at" type="text">
		        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
		      </div>

		      <div class="form-group has-feedback">
		        <input type="text" class="form-control" placeholder="dari kota" name="rute_from">
		        <span class="glyphicon glyphicon-send form-control-feedback"></span>
		      </div>

		      <div class="form-group has-feedback">
		        <input type="text" class="form-control" placeholder="ke kota" name="rute_to">
		        <span class="glyphicon glyphicon-send form-control-feedback"></span>
		      </div>

		      <div class="form-group has-feedback">
		        <input type="text" class="form-control" placeholder="harga (Rp)" name="price">
		        <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
		      </div>

	      </div>
	      <!-- /.box-body -->
	      <div class="box-footer">
	        <button type="" class="btn btn-default">Cancel</button>
	        <button type="submit" value="Simpan" class="btn btn-info pull-right">Submit</button>
	      </div>
	      <!-- /.box-footer -->
	    </form>

</body>
</html>