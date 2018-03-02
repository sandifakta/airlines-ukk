<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://localhost/booktravel/templateadmin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin control</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?php echo base_url('admin') ?>">
            <i class="fa fa-file "></i> <span>Admin control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        
      </ul>      

      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Data pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/v_tambah_useradmin') ?>"><i class="fa fa-circle-o"></i>Tambah User/admin</a></li>
            <li><a href="<?php echo base_url('admin/v_user') ?>"><i class="fa fa-circle-o"></i>Data User/admin</a></li>
          </ul>
        </li>
        
      </ul>
      <!-- treeview 2 -->
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-location-arrow "></i> <span>Data rute</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/v_tambahrute') ?>"><i class="fa fa-circle-o"></i>Tambah Rute Maskapai</a></li>
            <li><a href="<?php echo base_url('admin/v_rutemaskapai') ?>"><i class="fa fa-circle-o"></i>Rute Maskapai</a></li>
          </ul>
        </li>
        
      </ul>
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="<?php echo base_url('admin/reservation') ?>">
            <i class="fa fa-bookmark "></i> <span>Data reservation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        
      </ul>      
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="<?php echo base_url('admin/confirm_user') ?>">
            <i class="fa fa-bookmark "></i> <span>Konfirmasi user</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>