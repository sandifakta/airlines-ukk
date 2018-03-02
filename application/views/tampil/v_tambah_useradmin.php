<!DOCTYPE html>
<html>
<head>
	<title>tambah user/admin</title>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>

		    <form action="<?php echo base_url('action/tambah_useradmin') ?>" method="post">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Fullname" name="fullname">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      

                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" placeholder="level" name="level">
                  <option selected="selected">level</option>
                  <option>user</option>
                  <option>admin</option>
                </select>

                <label></label>

      <div class="row">
        <div class="col-xs-8">
  
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">next</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
</body>
</html>