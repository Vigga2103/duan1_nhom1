<?php


?>
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>TMen Fashion</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>
          <?php
          if (isset($_SESSION["loginadmin"])) {
            echo  $_SESSION["loginadmin"]["1"];
          }
          ?>
        </h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-briefcase"></i> Quản lí danh mục <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="index.php?page=category">Danh mục</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-archive"></i> Quản lí sản phẩm <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="index.php?page=addProduct">Thêm mới sản phẩm</a></li>
              <li><a href="index.php?page=listProduct">Danh sách sản phẩm</a></li>
              <li><a href="index.php?page=updateProduct">Cập nhật sản phẩm</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-tachometer"></i> Quản lí màu sắc <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              
              <li><a href="index.php?page=color">Màu sắc</a></li>
              
            </ul>
          </li>
          <li><a><i class="fa fa-arrows-v"></i> Quản lí kích cỡ <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              
              <li><a href="index.php?page=size">Quản lí kích cỡ</a></li>
              
            </ul>
          </li>
          <li><a><i class="fa fa-child"></i> Quản lí thương hiệu  <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              
              <li><a href="index.php?page=factory">Thương hiệu</a></li>

            </ul>
          </li>

        </ul>
      </div>
      <div class="menu_section">
        <h3>Live On</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-calendar"></i> Quản lí đơn hàng <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
             
              <li><a href="index.php?page=oder">Danh sách đơn hàng</a></li>
             
            </ul>
          </li>
          <li><a><i class="fa fa-money"></i> Quản lí phương thức thanh toán <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
             
              <li><a href="index.php?page=payment">Danh sách phương thức</a></li>
             
            </ul>
          </li>
          <li><a><i class="fa fa-users"></i> Quản lí người dùng  <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              
              <li><a href="index.php?page=listUser">Danh sách người dùng</a></li>

            </ul>
          </li>
          <li><a><i class="fa fa-pie-chart"></i> Thống kê  <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              
              <li><a href="index.php?page=listUser">Danh sách bán hàng</a></li>

            </ul>
          </li>
          <li><a><i class="fa fa-comment"></i> Quản lí phản hồi  <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              
              <li><a href="index.php?page=listFeedback">Danh sách phản hồi</a></li>

            </ul>
          </li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>