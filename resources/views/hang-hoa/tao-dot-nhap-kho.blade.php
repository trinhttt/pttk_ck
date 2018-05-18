<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tạo đợt nhập kho</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/animate.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="dist/css/jquery-ui.css">
        <link rel="stylesheet" href="dist/css/back-to-top.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .menu-button {
                background-color: #fcf9f9; 
                margin-top: 20px;
                padding-top:20px;
                padding-right:25px;
            }
            .custom-btn {
                padding: 10px 5px;
                min-width: 80px;
                height: 55px;
            }
            .mainTable {
                background-color: rgb(240, 240, 240);
            }
            .mainTable thead tr th {
                vertical-align: middle !important;
                text-align: center;
                background-color: #3c8dbc;
                color: #fff;
            }
            .mainTable tbody td:nth-child(6),.mainTable tbody td:nth-child(7),
            .mainTable tbody td:nth-child(9) {
                text-align: right;
            }
            .pointerCursor {
                cursor: pointer;
            }
            .textCursor {
                cursor: text;
            }
            .noDisplay {
                display: none !important;
            }
        </style>
        <!-- Google Font -->
        <link href="dist/css/bootstrap-toggle.min.css" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/font/GoogleFont.css">
    </head>
    <body class="hold-transition skin-blue-light sidebar-mini fixed">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="phanphoi_index.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">LAP</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg" style="margin-left: -15px;">
                        <img style="width:60px; height:50px;margin-top: 5px" class="img-responsive pull-left" src="dist/img/logo.png" alt="Photo">
                        <div style="margin-top: -5px">
                        <b style="margin-right: 35px;margin-bottom: 20px">Quản lý</b>
                        <span style="position: absolute; margin-top: 15px; margin-left: -100px; font-size: 14px;font-weight: bold"><small>Cửa hàng Laptop</small></span>
                        </div>
                    </span>

                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <!--<span class="label label-warning">10</span>-->
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Bạn có 10 thông báo mới</li>
                                    <li>
                                        <ul class="menu">
                                            <!--<li>-->
                                                <!--<a href="hanghoa_donhang_chi-tiet-don-hang.html">-->
                                                    <!--<i class="fa fa-shopping-cart text-green"></i> Lô hàng số 81268 đang chờ xử lý-->
                                                    <!--<div class="pull-right">3 phút trước</div>-->
                                                <!--</a>-->
                                            <!--</li>-->
                                            <!---->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="hanghoa_thong-bao.html">Xem tất cả</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="dist/img/user.jpeg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Thai Trinh</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="dist/img/user.jpeg" class="img-circle" alt="User Image">

                                        <p>Thai Trinh
                                            <small>Admin</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="phanphoi_nguoidung_thong-tin-nguoi-dung.html" class="btn btn-default btn-flat">Hồ sơ</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="login.html" class="btn btn-default btn-flat">Thoát</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/user.jpeg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Thai Trinh</p>
                            <a href="#">
                                <i class="fa fa-circle text-success"></i> Trực tuyến</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <!--<form action="#" method="get" class="sidebar-form">-->
                        <!--<div class="input-group">-->
                            <!--<input type="text" name="q" class="form-control" placeholder="Tìm Kiếm...">-->
                            <!--<span class="input-group-btn">-->
                                <!--<button type="submit" name="search" id="search-btn" class="btn btn-flat">-->
                                    <!--<i class="fa fa-search"></i>-->
                                <!--</button>-->
                            <!--</span>-->
                        <!--</div>-->
                    <!--</form>-->
                    <!-- /.search form -->
                   <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="">
                            <a href="phanphoi_index.html">
                                <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-o"></i> <span>Đơn hàng</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="phanphoi_donhang_lap-phieu.html"><i class="fa fa-edit"></i> Lập Phiếu</a></li>
                                <li class="">
                                    <a href="phanphoi_donhang_danh-sach-phieu-dang-soan.html">
                                        <i class="fa fa-file-text"></i>
                                        <span>Phiếu đang soạn</span>
                                        <span class="pull-right-container">
                                            <span class="label label-primary pull-right">2</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="phanphoi_donhang_danh-sach-phieu-dang-xu-ly.html">
                                        <i class="fa fa-list-alt"></i>
                                        <span>Phiếu đang xử lý</span>
                                        <span class="pull-right-container">
                                            <span class="label label-primary bg-green">1</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="phanphoi_donhang_danh-sach-phieu-hoan-thanh.html">
                                        <i class="fa fa-files-o"></i>
                                        <span>Phiếu đã hoàn thành</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="phanphoi_donhang_danh-sach-phieu-giu-hang.html">
                                        <i class="fa fa-book"></i>
                                        <span>Phiếu giữ hàng</span>
                                        <!--<span class="pull-right-container">-->
                                            <!--<span class="label pull-right bg-green">new</span>-->
                                            <!--<span class="label pull-right bg-red">2</span>-->
                                        <!--</span>-->
                                    </a>
                                </li>
                                <li class="">
                                    <a href="phanphoi_donhang_lich-giao-hang-tong.html">
                                        <i class="fa fa-calendar-minus-o"></i>
                                        <span>Lịch giao hàng</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="treeview menu-open active">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Hàng hoá</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="phanphoi_hanghoa_gia-hang-hoa.html"><i class="fa fa-dollar"></i> Giá hàng hóa</a></li>
                                <li class=""><a href="phanphoi_hanghoa_ton-kho.html"><i class="fa fa-dropbox"></i> Hàng tồn kho</a></li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-hand-o-right"></i> Yêu cầu nhập
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class=""><a href="phanphoi_hanghoa_tao-yeu-cau-nhap.html"><i class="fa fa-edit"></i> Tạo yêu cầu nhập</a></li>
										<li class=""><a href="phanphoi_hanghoa_nhap-hoa-don.html"><i class="fa fa-id-card-o"></i> Nhập hoá đơn</a></li>
                                        <li class=""><a href="phanphoi_hanghoa_lich-su-yeu-cau-nhap.html"><i class="fa fa-table"></i> Lịch sử yêu cầu nhập</a></li>
                                    </ul>
                                </li>
                                <li class="treeview menu-open active">
                                    <a href="#"><i class="fa fa-hand-o-right"></i> Nhập hàng
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="active"><a href="phanphoi_hanghoa_tao-dot-nhap-kho.html"><i class="fa fa-edit"></i> Tạo đợt nhập mới</a></li>
                                        <li class=""><a href="phanphoi_hanghoa_lich-su-nhap-hang.html"><i class="fa fa-table"></i> Lịch sử nhập hàng</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!--<li class="treeview">-->
                            <!--<a href="#">-->
                                <!--<i class="fa fa-table"></i> <span>Công nợ</span>-->
                                <!--<span class="pull-right-container">-->
                                    <!--<i class="fa fa-angle-left pull-right"></i>-->
                                <!--</span>-->
                            <!--</a>-->
                            <!--<ul class="treeview-menu">-->
                                <!--<li class=""><a href="phanphoi_congno_danh-sach-cong-no-khach-hang.html"><i class="fa fa-hand-o-right"></i> Công nợ khách hàng</a></li>-->
                                <!--<li class=""><a href="phanphoi_congno_danh-sach-cong-no-cung-cap.html"><i class="fa fa-hand-o-right"></i> Công nợ nhà cung cấp</a></li>-->
                            <!--</ul>-->
                        <!--</li>-->

                        <!--<li class="treeview">-->
                            <!--<a href="#">-->
                                <!--<i class="fa fa-truck"></i> <span>Giao hàng</span>-->
                                <!--<span class="pull-right-container">-->
                                    <!--<i class="fa fa-angle-left pull-right"></i>-->
                                <!--</span>-->
                            <!--</a>-->
                            <!--<ul class="treeview-menu">-->
                                <!--<li class=""><a href="phanphoi_giaohang_danh-sach-lai-xe.html"><i class="fa fa-hand-o-right"></i> Thông tin lái xe</a></li>-->
                                <!--<li class=""><a href="phanphoi_giaohang_danh-sach-nhan-vien-giao-hang.html"><i class="fa fa-hand-o-right"></i> Nhân viên giao hàng</a></li>-->
                                <!--<li class=""><a href="phanphoi_giaohang_danh-sach-xe-hang.html"><i class="fa fa-hand-o-right"></i> Thông tin xe hàng</a></li>-->
                                <!--<li class=""><a href="phanphoi_giaohang_dinh-vi-xe-hang.html"><i class="fa fa-hand-o-right"></i> Định vị xe hàng</a></li>-->
                            <!--</ul>-->
                        <!--</li>-->

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pencil-square"></i> <span>Báo cáo</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="bao-cao/phanphoi_baocao_doanh-thu.html"><i class="fa fa-line-chart"></i> Doanh thu</a>
                                </li>

                                <li class="">
                                    <a href="phanphoi_baocao_cong-no-khach-hang.html"><i class="fa fa-line-chart"></i> Công nợ khách hàng</a>
                                </li>

                                <li class="">
                                    <a href="phanphoi_baocao_cong-no-cung-cap.html"><i class="fa fa-line-chart"></i> Công nợ nhà cung cấp</a>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview ">
                            <a href="#">
                                <i class="fa fa-database"></i> <span>Quản trị</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="phanphoi_khachhang_danh-sach-khach-hang.html"><i class="fa fa-users"></i> Danh sách khách hàng</a>
                                </li>
                                <li class="">
                                    <a href="phanphoi_cungcap_danh-sach-nha-cung-cap.html"><i class="fa fa-users"></i> Danh sách nhà cung cấp</a>
                                </li>
								<li class="treeview">
								  <a href="#"><i class="fa fa-paper-plane"></i> Hàng hoá
									<span class="pull-right-container">
									  <i class="fa fa-angle-left pull-right"></i>
									</span>
								  </a>
								  <ul class="treeview-menu">
									<li class=""><a href="phanphoi_hanghoa_danh-sach-danh-muc.html"><i class="fa fa-tags"></i> Danh mục</a></li>
									<li class=""><a href="phanphoi_hanghoa_danh-sach-san-pham.html"><i class="fa fa-anchor"></i> Sản phẩm</a></li>
								  </ul>
								</li>
                                <li class="">
                                    <a href="phanphoi_cai-dat.html"><i class="fa fa-cogs"></i> Cài đặt</a>
                                </li>
                            </ul>
                        </li>
                        <!--<li class="">-->
                            <!--<a href="phanphoi_quy-trinh-xu-ly.html">-->
                                <!--<i class="fa fa-question-circle"></i> <span>Help</span>-->
                            <!--</a>-->
                        <!--</li>						-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="phanphoi_index.html"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                        <li>Hàng hóa</li>
                        <li>Nhập hàng</li>
                        <li class="active">Tạo đơn nhập mới</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header" style="text-align: center;margin-top: 30px;">
                                    <h3 class="box-title with-border"><b style="font-size: 25px;">Nhập hàng vào kho</b></h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <div class="row">
                                        <div class="box-header with-border text-center menu-button" style="margin-left: 5px; margin-right: 5px;">
                                            <a class="btn btn-app custom-btn" href="phanphoi_hanghoa_tao-dot-nhap-kho.html" target="_blank">
                                                <i class="fa fa-plus-square text-green"></i>
                                                <span><strong>Tạo Mới</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn disabled">
                                                <i class="fa fa-edit text-gray"></i>
                                                <span><strong>Sửa</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn disabled">
                                                <i class="fa fa-save text-green"></i>
                                                <span><strong>Lưu</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn disabled">
                                                <i class="fa fa-close text-gray"></i>
                                                <span><strong>Hủy</strong></span>
                                            </a>
                                            <!--<a class="btn btn-app custom-btn" data-toggle="modal" title="Chốt" data-placement="bottom" data-target="#confirmComplete">-->
                                                <!--<i class="fa fa-check-circle text-green"></i>-->
                                                <!--<span><strong>Chốt</strong></span>-->
                                            <!--</a>-->
                                            <!--<a class="btn btn-app custom-btn disabled">-->
                                                <!--<i class="fa fa-exchange text-gray"></i>-->
                                                <!--<span><strong>Đổi trả</strong></span>-->
                                            <!--</a>-->
                                            <!--<a class="btn btn-app custom-btn disabled">-->
                                                <!--<i class="fa fa-eye text-gray"></i>-->
                                                <!--<span><strong>Xem Trước</strong></span>-->
                                            <!--</a>-->
                                            <!--<a class="btn btn-app custom-btn disabled">-->
                                                <!--<i class="fa fa-print text-gray"></i>-->
                                                <!--<span><strong>In</strong></span>-->
                                            <!--</a>-->
                                            <!--<a class="btn btn-app custom-btn disabled">-->
                                                <!--<i class="fa fa-download text-gray"></i>-->
                                                <!--<span><strong>Import Excel</strong></span>-->
                                            <!--</a>-->
                                            <!--<a class="btn btn-app custom-btn disabled">-->
                                                <!--<i class="fa fa-file-excel-o text-gray"></i>-->
                                                <!--<span><strong>Xuất Excel</strong></span>-->
                                            <!--</a>-->
                                            <!--<a class="btn btn-app custom-btn disabled">-->
                                                <!--<i class="fa fa-file-pdf-o text-gray"></i>-->
                                                <!--<span><strong>Xuất PDF</strong></span>-->
                                            <!--</a>-->
                                        </div>	
                                    </div>
                                    <form style="margin-top: 25px;">
                                        <div class="box-header">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <fieldset>
                                                        <legend><b style="font-size: 17px;">Thông tin đơn hàng</b></legend>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Nhập hàng / Đổi trả</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-exchange"></i></span>
                                                                    <input type="checkbox" id="status" data-toggle="toggle" checked data-on="Nhập hàng" data-off="Đổi trả">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 15px;">
                                                            <!--<div class="col-md-6">-->
                                                                <!--<label id="namePi">PI No.</label>-->
                                                                <!--<label id="nameLo" style="font-weight: bold;" class="noDisplay"> Lô số</label><span style="color: red;">*</span>-->
                                                                <!--<div class="input-group">-->
                                                                    <!--<span class="input-group-addon"><i class="fa fa-bank"></i></span>-->
                                                                    <!--<select class="form-control" onchange="nhap();" id="piNo">-->
                                                                        <!--<option></option>-->
                                                                        <!--<option>M01-121629-1</option>-->
                                                                    <!--</select>-->
                                                                    <!--<select class="form-control noDisplay" onchange="doi();" id="loso">-->
                                                                        <!--<option></option>-->
                                                                        <!--<option>Lô số O1349</option>-->
                                                                    <!--</select>-->
                                                                <!--</div>-->
                                                            <!--</div>-->
                                                            <div class="col-md-6">
                                                                <label>Tên nhà cung cấp</label><span style="color: red;">*</span>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                                                                    <input type="text" class="form-control" id="donVi">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Số điện thoại</label><span style="color: red;">*</span>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-address-book"></i></span>
                                                                    <input type="text" class="form-control" id="phone">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 15px;">
                                                            <div class="col-md-6">
                                                                <label>Địa chỉ</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                                                                    <input type="text" class="form-control" id="address">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Ngày nhập</label><span style="color: red;">*</span>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" class="form-control datepicker" id="day" style="padding-left: 12px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 15px;">
                                                            <div class="col-md-6">
                                                                <label>Ngày yêu cầu</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" class="form-control datepicker" id="requestDay" style="padding-left: 12px;">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-header">
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-xs-12 table-responsive">
                                                    <fieldset id="doitra" class="noDisplay">
                                                        <legend><b style="font-size: 17px;">Chi tiết đơn hàng</b></legend>                                        
                                                        <table class="table table-striped mainTable">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 30px;">STT</th>
                                                                    <th style="width: 300px;">Sản phẩm</th>
                                                                    <th style="width: 150px;">Mã hàng</th>
                                                                    <th style="width: 100px;">Số lượng</th>
                                                                    <th style="width: 100px;">Số lượng nhập kho</th>
                                                                    <th>Lý do</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">1</td>
                                                                    <td style="vertical-align: middle;">BS32c 15A 2P2E NO DIN RAIL EXP</td>
                                                                    <td style="vertical-align: middle;">0061001700</td>
                                                                    <td style="vertical-align: middle; text-align: right;">300</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_1" onkeyup="tongCai('1');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">2</td>
                                                                    <td style="vertical-align: middle;">ABN62c 60A EXP</td>
                                                                    <td style="vertical-align: middle;">0128003300</td>
                                                                    <td style="vertical-align: middle; text-align: right;">100</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_2" onkeyup="tongCai('2');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">3</td>
                                                                    <td style="vertical-align: middle;">ABN52c 15A EXP</td>
                                                                    <td style="vertical-align: middle;">0128002300</td>
                                                                    <td style="vertical-align: middle; text-align: right;">80</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_3" onkeyup="tongCai('3');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">4</td>
                                                                    <td style="vertical-align: middle;">ABN102c 75A EXP</td>
                                                                    <td style="vertical-align: middle;">0130003300</td>
                                                                    <td style="vertical-align: middle; text-align: right;">100</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_4" onkeyup="tongCai('4');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">5</td>
                                                                    <td style="vertical-align: middle;">ABN102c 100A EXP</td>
                                                                    <td style="vertical-align: middle;">0130003400</td>
                                                                    <td style="vertical-align: middle; text-align: right;">160</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_5" onkeyup="tongCai('5');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">6</td>
                                                                    <td style="vertical-align: middle;">BS32c 20A 2P2E NO DIN RAIL EXP</td>
                                                                    <td style="vertical-align: middle;">0061001800	</td>
                                                                    <td style="vertical-align: middle; text-align: right;">2000</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_6" onkeyup="tongCai('6');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">7</td>
                                                                    <td style="vertical-align: middle;">ABN62c 50A EXP</td>
                                                                    <td style="vertical-align: middle;">0128002700</td>
                                                                    <td style="vertical-align: middle; text-align: right;">300</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_7" onkeyup="tongCai('7');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">8</td>
                                                                    <td style="vertical-align: middle;">ABN52c 20A EXP</td>
                                                                    <td style="vertical-align: middle;">0128002400	</td>
                                                                    <td style="vertical-align: middle; text-align: right;">300</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_8" onkeyup="tongCai('8');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">9</td>
                                                                    <td style="vertical-align: middle;">ABN102c 125A EXP</td>
                                                                    <td style="vertical-align: middle;">0136001600</td>
                                                                    <td style="vertical-align: middle; text-align: right;">10</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_9" onkeyup="tongCai('9');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">10</td>
                                                                    <td style="vertical-align: middle;">ABN102c 150A EXP</td>
                                                                    <td style="vertical-align: middle;">0136001700</td>
                                                                    <td style="vertical-align: middle; text-align: right;">20</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_10" onkeyup="tongCai('10');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>                                                        
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td style="vertical-align: middle;"><b>Tổng cộng</b></td>
                                                                    <td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output class="number" style="color: #fff; font-weight: bold;">3370</output></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_cai_1" style="color: #fff; font-weight: bold;"></output></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </fieldset>
                                                    <fieldset id="nhaphang" class="noDisplay">
                                                        <legend><h4><b>Chi tiết đơn hàng</b></h4></legend>                                        
                                                        <table class="table table-striped mainTable">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 30px;">STT</th>
                                                                    <th style="width: 300px;">Sản phẩm</th>
                                                                    <th style="width: 150px;">Mã hàng</th>
                                                                    <th style="width: 100px;">Số lượng</th>
                                                                    <th style="width: 100px;">Số lượng nhập kho</th>
                                                                    <th>Lý do</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">1</td>
                                                                    <td style="vertical-align: middle;">MT-150 113A 3H SCREW EXP</td>
                                                                    <td style="vertical-align: middle;">1375001300</td>
                                                                    <td style="vertical-align: middle; text-align: right;">40</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_11" onkeyup="tongCai('11');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">2</td>
                                                                    <td style="vertical-align: middle;">GMP22-2P 5A  110/220V 1a1b EXP</td>
                                                                    <td style="vertical-align: middle;">3802006000</td>
                                                                    <td style="vertical-align: middle; text-align: right;">20</td>
                                                                    <td style="vertical-align: middle; text-align: right;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_12" onkeyup="tongCai('12');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">3</td>
                                                                    <td style="vertical-align: middle;">32GRc 15A 30mA 0.03S AUX COVER EXP</td>
                                                                    <td style="vertical-align: middle;">0769004200F324</td>
                                                                    <td style="vertical-align: middle; text-align: right;">20</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_13" onkeyup="tongCai('13');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">4</td>
                                                                    <td style="vertical-align: middle;">32KGRd 15A 30mA 2P2E EXP</td>
                                                                    <td style="vertical-align: middle;">0769003600</td>
                                                                    <td style="vertical-align: middle; text-align: right;">60</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_14" onkeyup="tongCai('14');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">5</td>
                                                                    <td style="vertical-align: middle;">EBS52Fb 40A 30mA EXP</td>
                                                                    <td style="vertical-align: middle;">0781002500</td>
                                                                    <td style="vertical-align: middle; text-align: right;">180</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_15" onkeyup="tongCai('15');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">6</td>
                                                                    <td style="vertical-align: middle;">EBE102Fb 60A 30mA 0.03s EXP</td>
                                                                    <td style="vertical-align: middle;">0782005300</td>
                                                                    <td style="vertical-align: middle; text-align: right;">20</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_16" onkeyup="tongCai('16');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">7</td>
                                                                    <td style="vertical-align: middle;">EBN52c 20A 30mA EXP</td>
                                                                    <td style="vertical-align: middle;">0142005600F338</td>
                                                                    <td style="vertical-align: middle; text-align: right;">20</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_17" onkeyup="tongCai('17');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">8</td>
                                                                    <td style="vertical-align: middle;">EBS54c 30A 30mA EXP</td>
                                                                    <td style="vertical-align: middle;">0143007700</td>
                                                                    <td style="vertical-align: middle; text-align: right;">10</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_18" onkeyup="tongCai('18');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">9</td>
                                                                    <td style="vertical-align: middle;">AN-10D3-10H M2D2D2AX AG6U0AL EXP</td>
                                                                    <td style="vertical-align: middle;">2847045400</td>
                                                                    <td style="vertical-align: middle; text-align: right;">2</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_19" onkeyup="tongCai('19');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">10</td>
                                                                    <td style="vertical-align: middle;">AS-20E3-20H M2D2D2AX AG6U0AL EXP</td>
                                                                    <td style="vertical-align: middle;">2867037900</td>
                                                                    <td style="vertical-align: middle; text-align: right;">5</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_20" onkeyup="tongCai('20');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>                                                        
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td style="vertical-align: middle;"><b>Tổng cộng</b></td>
                                                                    <td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output class="number" style="color: #fff; font-weight: bold;">377</output></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_cai_2" style="color: #fff; font-weight: bold;"></output></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </fieldset>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </div>
                                        <div id="sound"></div>
                                    </form>
                                    <output id="temp" class="noDisplay"> Công ty Sáng Hà</output>
                                </div>                                	
                            </div>                           
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- ./row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>&copy; 2018 </strong>

                <a href="#0" class="cd-top">Top</a>
            </footer>
            <div class="modal fade" id="confirmComplete" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Xác nhận chốt đơn ?</h4>
                        </div>
                        <div class="modal-footer">
                            <a href="phanphoi_hanghoa_lich-su-nhap-hang.html"><button type="button" class="btn btn-success">Đồng ý</button></a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="dist/js/jquery-1.12.4.js"></script>
        <script src="dist/js/jquery-ui.js"></script>
        <script src="dist/js/back-to-top.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="dist/js/bootstrap-toggle.min.js"></script>
        <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>       
        <script src="dist/js/autoNumeric.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
		<!-- SlimScroll -->
		<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <script src="dist/js/sweetalert2.all.js"></script>
        <script>
                                                                        $(document).ready(function () {
                                                                            $('.datepicker').datepicker({
                                                                                format: 'dd/mm/yyyy'
                                                                            });
                                                                            $('.number').autoNumeric('init', {minimumValue: '0', maximumValue: '9999999999999', digitGroupSeparator: ',', decimalPlacesOverride: '0'});
                                                                        });
        </script>      
    </body>
</html>