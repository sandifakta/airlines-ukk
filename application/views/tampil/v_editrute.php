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
              <h3 class="box-title">Edit data Rute</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url(). 'Action/update_rute'; ?>" method="post">

              <div class="box-body">

                  <label>Id Maskapai</label>
                  <input type="hidden" name="id" value="<?php echo $tampil->id ?>">
                  <input class="form-control" placeholder="Enter ..." type="text" name="transportationid" value="<?php echo $tampil->transportationid ?>">


	                <label>Pemberangkatan</label>

	                <div class="input-group date">
	                  <div class="input-group-addon">
	                    <i class="fa fa-calendar"></i>
	                  </div>
	                  <input class="form-control pull-right" id="datepicker" name="depart_at" type="text" value="<?php echo $tampil->depart_at ?>">
	                </div>
	                <!-- /.input group -->

                

	       
                  <label>Dari</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="rute_from" value="<?php echo $tampil->rute_from ?>">
                
                  <label>Tujuan</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="rute_to" value="<?php echo $tampil->rute_to ?>">
                
                  <label>Harga</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="price" value="<?php echo $tampil->price ?>">

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