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

            <form class="form-horizontal" action="<?php echo base_url(). 'Action/update'; ?>" method="post">

              <div class="box-body">

                  <label>Username</label>
                  <input type="hidden" name="id" value="<?php echo $u->userid ?>">
                  <input class="form-control" placeholder="Enter ..." type="text" name="username" value="<?php echo $u->username ?>">

         
                  <label>Fullname</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="fullname" value="<?php echo $u->fullname ?>">

                  <label>password</label>
                  <input class="form-control" placeholder="Enter ..." type="password" name="password" value="<?php echo $u->password ?>">
                
                  <label>Email</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="email" value="<?php echo $u->email ?>">
                
   

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