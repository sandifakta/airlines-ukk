<!DOCTYPE html>
<html>
<head>
	<title>edit rute</title>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($show as $tampil){ ?>



            <div class="col col-md-2"></div>
            <div class="col col-md-7">
            <div class="box-header with-border">
              <h3 class="box-title">Edit data konfirmasi pemesanan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url(). 'Action/update_confirm_user'; ?>" method="post">

              <div class="box-body">

                  <label>gambar bukti</label>
                  <input type="hidden" name="id" value="<?php echo $tampil->id ?>">
                  <input class="form-control" placeholder="Enter ..." type="text" name="gambar_bukti" value="<?php echo $tampil->gambar_bukti ?>">
	       
                  <label>status</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="status" value="<?php echo $tampil->status ?>">

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="" class="btn btn-default">Cancel</button>
                <button type="submit" value="Simpan" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
            </div>
            <div class="col col-md-2"></div>
          

	<?php } ?>
</body>
</html>