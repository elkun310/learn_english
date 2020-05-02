<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
    <div class="pull-left image">
        <img src="img/user1-128x128.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>Nguyễn Quốc Hà</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form" autocomplete="off">
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
    <ul class="sidebar-menu" data-widget="tree">
    <li @yield('dashboard')>
        <a href="/admin">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li>
        <a href="/admin/user">
        <i class="fa fa-user-plus"></i> <span>Danh sách người dùng</span>
        <span class="pull-right-container">
            <small class="label pull-right bg-red">44</small>
        </span>
        </a>
    </li>
    <li>
        <a href="/admin/category">
        <i class="fa fa-list-alt"></i> <span>Thể loại</span>
        </a>
    </li>
    <li>
        <a href="/admin/level">
        <i class="fa fa-level-up"></i> <span>Level</span>
        <span class="pull-right-container">
            <span class="label label-primary pull-right">12</span>
        </span>
        </a>
    </li>
    
    <li>
        <a href="">
        <i class="fa fa-check-circle"></i> <span>Test</span>
        </a>
    </li>
    <li>
        <a href="">
        <i class="fa fa-question-circle"></i> <span>Câu hỏi</span>
        <span class="pull-right-container">
            <small class="label pull-right bg-green">300</small>
        </span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
        <i class="fa fa-pie-chart"></i>
        <span>Báo cáo</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
        <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
        <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
        <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
        </ul>
    </li>
    
    <li class="treeview">
        <a href="#">
        <i class="fa fa-commenting-o"></i> <span>Bình luận</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href=""><i class="fa fa-circle-o"></i>Đã duyệt</a></li>
        <li><a href=""><i class="fa fa-circle-o"></i>Chưa duyệt</a></li>
        <li><a href=""><i class="fa fa-circle-o"></i>Đã xóa</a></li>
        </ul>
    </li>
    <li @yield('staff')>
        <a href="/admin/staff">
        <i class="fa fa-users"></i> <span>Danh sách nhân viên</span>
        <span class="pull-right-container">
            <small class="label pull-right bg-green">5</small>
        </span>
        </a>
    </li>
    <li>
        <a href="pages/calendar.html">
        <i class="fa fa-calendar"></i> <span>Lịch biểu</span>
        <span class="pull-right-container">
            <small class="label pull-right bg-red">3</small>
            <small class="label pull-right bg-blue">17</small>
        </span>
        </a>
    </li>
    <li><a href=""><i class="fa fa-book"></i> <span>Tài liệu hướng dẫn</span></a></li>
    </ul>
</section>
<!-- /.sidebar -->
</aside>