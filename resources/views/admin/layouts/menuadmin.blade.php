<aside class="main-sidebar">
    <!-- sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image text-center"><img src="{{ url('dist/img/img1.jpg') }}" class="img-circle" alt="User Image"> </div>
        <div class="info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
      </div>

      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PERSONAL</li>
        <li class="treeview"> <a href="#"> <i class="icon-home"></i> <span>Layanan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="{{ $menu == 'beritaduka' ? 'active' : '' }}"><a href="{!! url('admin/laporberitaduka') !!}"><i class="fa fa-angle-right"></i> Laporan Berita Duka</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="icon-home"></i> <span>Data Master</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="{{ $menu == 'user' ? 'active' : '' }}"><a href="{!! url('admin/user') !!}"><i class="fa fa-angle-right"></i> User</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.sidebar -->
  </aside>
