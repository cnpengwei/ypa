<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>Form Inputs</title>

    <meta name="description" content="form inputs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/Public/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="/Public/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/Public/css/weather-icons.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link id="beyond-link" href="/Public/css/beyond.min.css" rel="stylesheet" />
    <link href="/Public/css/demo.min.css" rel="stylesheet" />
    <link href="/Public/css/typicons.min.css" rel="stylesheet" />
    <link href="/Public/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="/Public/js/skins.min.js"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body>
    <!-- Loading Container -->
    <div class="loading-container">
        <div class="loading-progress">
            <div class="rotator">
                <div class="rotator">
                    <div class="rotator colored">
                        <div class="rotator">
                            <div class="rotator colored">
                                <div class="rotator colored"></div>
                                <div class="rotator"></div>
                            </div>
                            <div class="rotator colored"></div>
                        </div>
                        <div class="rotator"></div>
                    </div>
                    <div class="rotator"></div>
                </div>
                <div class="rotator"></div>
            </div>
            <div class="rotator"></div>
        </div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="/Public/img/logo.png" alt="" />
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings --->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class=" dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
                                    <i class="icon fa fa-warning"></i>
                                </a>
                                <!--Notification Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-notifications">
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-phone bg-themeprimary white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Skype meeting with Patty</span>
                                                    <span class="description">01:00 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-clock-o themeprimary"></i>
                                                    <span class="description">office</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-check bg-darkorange white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Uncharted break</span>
                                                    <span class="description">03:30 pm - 05:15 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-clock-o darkorange"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-gift bg-warning white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Kate birthday party</span>
                                                    <span class="description">08:30 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-calendar warning"></i>
                                                    <i class="fa fa-clock-o warning"></i>
                                                    <span class="description">at home</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-glass bg-success white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Dinner with friends</span>
                                                    <span class="description">10:30 pm</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer ">
                                        <span>
                                            Today, March 28
                                        </span>
                                        <span class="pull-right">
                                            10°c
                                            <i class="wi wi-cloudy"></i>
                                        </span>
                                    </li>
                                </ul>
                                <!--/Notification Dropdown-->
                            </li>
                            <li>
                                <a class="wave in dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
                                    <i class="icon fa fa-envelope"></i>
                                    <span class="badge">3</span>
                                </a>
                                <!--Messages Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-messages">
                                    <li>
                                        <a href="#">
                                            <img src="/Public/img/avatars/divyia.jpg" class="message-avatar" alt="Divyia Austin">
                                            <div class="message">
                                                <span class="message-sender">
                                                    Divyia Austin
                                                </span>
                                                <span class="message-time">
                                                    2 minutes ago
                                                </span>
                                                <span class="message-subject">
                                                    Here's the recipe for apple pie
                                                </span>
                                                <span class="message-body">
                                                    to identify the sending application when the senders image is shown for the main icon
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/Public/img/avatars/bing.png" class="message-avatar" alt="Microsoft Bing">
                                            <div class="message">
                                                <span class="message-sender">
                                                    Bing.com
                                                </span>
                                                <span class="message-time">
                                                    Yesterday
                                                </span>
                                                <span class="message-subject">
                                                    Bing Newsletter: The January Issue‏
                                                </span>
                                                <span class="message-body">
                                                    Discover new music just in time for the Grammy® Awards.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/Public/img/avatars/adam-jansen.jpg" class="message-avatar" alt="Divyia Austin">
                                            <div class="message">
                                                <span class="message-sender">
                                                    Nicolas
                                                </span>
                                                <span class="message-time">
                                                    Friday, September 22
                                                </span>
                                                <span class="message-subject">
                                                    New 4K Cameras
                                                </span>
                                                <span class="message-body">
                                                    The 4K revolution has come over the horizon and is reaching the general populous
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!--/Messages Dropdown-->
                            </li>

                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" title="Tasks" href="#">
                                    <i class="icon fa fa-tasks"></i>
                                    <span class="badge">4</span>
                                </a>
                                <!--Tasks Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-tasks dropdown-arrow ">
                                    <li class="dropdown-header bordered-darkorange">
                                        <i class="fa fa-tasks"></i>
                                        4 Tasks In Progress
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Account Creation</span>
                                                <span class="pull-right">65%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:65%" class="progress-bar"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Profile Data</span>
                                                <span class="pull-right">35%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:35%" class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Updating Resume</span>
                                                <span class="pull-right">75%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:75%" class="progress-bar progress-bar-darkorange"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Adding Contacts</span>
                                                <span class="pull-right">10%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:10%" class="progress-bar progress-bar-warning"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="dropdown-footer">
                                        <a href="#">
                                            See All Tasks
                                        </a>
                                        <button class="btn btn-xs btn-default shiny darkorange icon-only pull-right"><i class="fa fa-check"></i></button>
                                    </li>
                                </ul>
                                <!--/Tasks Dropdown-->
                            </li>
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="/Public/img/avatars/adam-jansen.jpg">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>David Stevenson</span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>David Stevenson</a></li>
                                    <li class="email"><a>David.Stevenson@live.com</a></li>
                                    <!--Avatar Area-->
                                    <li>
                                        <div class="avatar-area">
                                            <img src="/Public/img/avatars/adam-jansen.jpg" class="avatar">
                                            <span class="caption">Change Photo</span>
                                        </div>
                                    </li>
                                    <!--Avatar Area-->
                                    <li class="edit">
                                        <a href="profile.html" class="pull-left">Profile</a>
                                        <a href="#" class="pull-right">Setting</a>
                                    </li>
                                    <!--Theme Selector Area-->
                                    <li class="theme-area">
                                        <ul class="colorpicker" id="skin-changer">
                                            <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="/Public/css/skins/blue.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="/Public/css/skins/azure.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="/Public/css/skins/teal.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="/Public/css/skins/green.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="/Public/css/skins/orange.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;" rel="/Public/css/skins/pink.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;" rel="/Public/css/skins/darkred.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;" rel="/Public/css/skins/purple.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;" rel="/Public/css/skins/darkblue.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#585858;" rel="/Public/css/skins/gray.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#474544;" rel="/Public/css/skins/black.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#001940;" rel="/Public/css/skins/deepblue.min.css"></a></li>
                                        </ul>
                                    </li>
                                    <!--/Theme Selector Area-->
                                    <li class="dropdown-footer">
                                        <a href="login.html">
                                            Sign out
                                        </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul><div class="setting">
                            <a id="btn-setting" title="Setting" href="#">
                                <i class="icon glyphicon glyphicon-cog"></i>
                            </a>
                        </div><div class="setting-container">
                            <label>
                                <input type="checkbox" id="checkbox_fixednavbar">
                                <span class="text">Fixed Navbar</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedsidebar">
                                <span class="text">Fixed SideBar</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedbreadcrumbs">
                                <span class="text">Fixed BreadCrumbs</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedheader">
                                <span class="text">Fixed Header</span>
                            </label>
                        </div>
                        <!-- Settings -->
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input type="text" class="searchinput" />
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="index.html">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>
                    <!--Databoxes-->
                    <li>
                        <a href="databoxes.html">
                            <i class="menu-icon glyphicon glyphicon-tasks"></i>
                            <span class="menu-text"> Data Boxes </span>
                        </a>
                    </li>
                    <!--Widgets-->
                    <li>
                        <a href="widgets.html">
                            <i class="menu-icon fa fa-th"></i>
                            <span class="menu-text"> Widgets </span>
                        </a>
                    </li>
                    <!--UI Elements-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text"> Elements </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="elements.html">
                                    <span class="menu-text">Basic Elements</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                        Icons
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu">
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">Font Awesome</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="glyph-icons.html">
                                            <i class="menu-icon glyphicon glyphicon-stats"></i>
                                            <span class="menu-text">Glyph Icons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="typicon.html">
                                            <i class="menu-icon typcn typcn-location-outline"></i>
                                            <span class="menu-text"> Typicons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="weather-icons.html">
                                            <i class="menu-icon wi-day-snow"></i>
                                            <span class="menu-text">Weather Icons</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="tabs.html">
                                    <span class="menu-text">Tabs & Accordions</span>
                                </a>
                            </li>
                            <li>
                                <a href="alerts.html">
                                    <span class="menu-text">Alerts & Tooltips</span>
                                </a>
                            </li>
                            <li>
                                <a href="modals.html">
                                    <span class="menu-text">Modals & Wells</span>
                                </a>
                            </li>
                            <li>
                                <a href="buttons.html">
                                    <span class="menu-text">Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href="nestable-list.html">
                                    <span class="menu-text"> Nestable List</span>
                                </a>
                            </li>
                            <li>
                                <a href="treeview.html">
                                    <span class="menu-text">Treeview</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Tables-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-table"></i>
                            <span class="menu-text"> Tables </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="tables-simple.html">
                                    <span class="menu-text">Simple & Responsive</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables-data.html">
                                    <span class="menu-text">Data Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Forms-->
                    <li class="active open">
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> Forms </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="form-layouts.html">
                                    <span class="menu-text">Form Layouts</span>
                                </a>
                            </li>

                            <li class="active">
                                <a href="form-inputs.html">
                                    <span class="menu-text">Form Inputs</span>
                                </a>
                            </li>

                            <li>
                                <a href="form-pickers.html">
                                    <span class="menu-text">Data Pickers</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-wizard.html">
                                    <span class="menu-text">Wizard</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-validation.html">
                                    <span class="menu-text">Validation</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-editors.html">
                                    <span class="menu-text">Editors</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Charts-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-bar-chart-o"></i>
                            <span class="menu-text"> Charts </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="flot.html">
                                    <span class="menu-text">Flot Charts</span>
                                </a>
                            </li>

                            <li>
                                <a href="morris.html">
                                    <span class="menu-text"> Morris Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="sparkline.html">
                                    <span class="menu-text">Sparkline Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="easypiecharts.html">
                                    <span class="menu-text">Easy Pie Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="chartjs.html">
                                    <span class="menu-text"> ChartJS</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Profile-->
                    <li>
                        <a href="profile.html">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text">Profile</span>
                        </a>
                    </li>
                    <!--Mail-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-envelope-o"></i>
                            <span class="menu-text"> Mail </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="inbox.html">
                                    <span class="menu-text">Inbox</span>
                                </a>
                            </li>

                            <li>
                                <a href="message-view.html">
                                    <span class="menu-text">View Message</span>
                                </a>
                            </li>
                            <li>
                                <a href="message-compose.html">
                                    <span class="menu-text">Compose Message</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Calendar-->
                    <li>
                        <a href="calendar.html">
                            <i class="menu-icon fa fa-calendar"></i>
                            <span class="menu-text">
                                Calendar
                            </span>
                        </a>
                    </li>
                    <!--Pages-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-paperclip"></i>
                            <span class="menu-text"> Pages </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="timeline.html">
                                    <span class="menu-text">Timeline</span>
                                </a>
                            </li>
                            <li>
                                <a href="pricing.html">
                                    <span class="menu-text">Pricing Tables</span>
                                </a>
                            </li>

                            <li>
                                <a href="invoice.html">
                                    <span class="menu-text">Invoice</span>
                                </a>
                            </li>

                            <li>
                                <a href="login.html">
                                    <span class="menu-text">Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="register.html">
                                    <span class="menu-text">Register</span>
                                </a>
                            </li>
                            <li>
                                <a href="lock.html">
                                    <span class="menu-text">Lock Screen</span>
                                </a>
                            </li>
                            <li>
                                <a href="typography.html">
                                    <span class="menu-text"> Typography </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--More Pages-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-link"></i>

                            <span class="menu-text">
                                More Pages
                            </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="error-404.html">
                                    <span class="menu-text">Error 404</span>
                                </a>
                            </li>

                            <li>
                                <a href="error-500.html">
                                    <span class="menu-text"> Error 500</span>
                                </a>
                            </li>
                            <li>
                                <a href="blank.html">
                                    <span class="menu-text">Blank Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="grid.html">
                                    <span class="menu-text"> Grid</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                        Multi Level Menu
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <i class="menu-icon fa fa-camera"></i>
                                            <span class="menu-text">Level 3</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="menu-dropdown">
                                            <i class="menu-icon fa fa-asterisk"></i>

                                            <span class="menu-text">
                                                Level 4
                                            </span>
                                            <i class="menu-expand"></i>
                                        </a>

                                        <ul class="submenu">
                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-bolt"></i>
                                                    <span class="menu-text">Some Item</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-bug"></i>
                                                    <span class="menu-text">Another Item</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--Right to Left-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-align-right"></i>
                            <span class="menu-text"> Right to Left </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a>
                                    <span class="menu-text">RTL</span>
                                    <label class="pull-right margin-top-10">
                                        <input id="rtl-changer" class="checkbox-slider slider-icon colored-primary" type="checkbox">
                                        <span class="text"></span>
                                    </label>
                                </a>
                            </li>
                            <li>
                                <a href="index-rtl-ar.html">
                                    <span class="menu-text">Arabic Layout</span>
                                </a>
                            </li>

                            <li>
                                <a href="index-rtl-fa.html">
                                    <span class="menu-text">Persian Layout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Forms</a>
                        </li>
                        <li class="active">Input Elements</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Forms
                            <small>
                                <i class="fa fa-angle-right"></i>
                                Inputs
                            </small>
                        </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <h5 class="row-title before-pink"><i class="fa fa-expand pink"></i>Input Sizes</h5>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-header bordered-top bordered-palegreen">
                                            <span class="widget-caption">Default Inputs</span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="collapse in">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="xsinput">Extra Small Input</label>
                                                        <input type="text" class="form-control input-xs" id="xsinput" placeholder="Extra Small Input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="sminput">Small Input</label>
                                                        <input type="text" class="form-control input-sm" id="sminput" placeholder="Small Input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="definpu">Default Input</label>
                                                        <input type="text" class="form-control" id="definput" placeholder="Default Input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="lginput">Large Input</label>
                                                        <input type="text" class="form-control input-lg" id="lginput" placeholder="Large Input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="xlginput">Extra Large Input</label>
                                                        <input type="text" class="form-control input-xl" id="xlginput" placeholder="Extra Large Input">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-header bordered-top bordered-darkorange">
                                            <span class="widget-caption">Disabled Inputs</span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="collapse in">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="xsinput">Extra Small Input</label>
                                                        <input type="text" class="form-control input-xs" id="xsinput" placeholder="Extra Small Input" disabled="disabled">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="sminput">Small Input</label>
                                                        <input type="text" class="form-control input-sm" id="sminput" placeholder="Small Input" disabled="disabled">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="definpu">Default Input</label>
                                                        <input type="text" class="form-control" id="definput" placeholder="Default Input" disabled="disabled">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="lginput">Large Input</label>
                                                        <input type="text" class="form-control input-lg" id="lginput" placeholder="Large Input" disabled="disabled">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="xlginput">Extra Large Input</label>
                                                        <input type="text" class="form-control input-xl" id="xlginput" placeholder="Extra Large Input" disabled="disabled">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="row-title before-sky"><i class="glyphicon glyphicon-plane sky"></i>Inputs With Icons</h5>
                            <div class="row">
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-header">
                                            <span class="widget-caption">Inputs With Default Icons</span>
                                        </div>
                                        <div class="widget-body bordered-top bordered-pink">
                                            <div class="collapse in">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <span class="input-icon icon-right">
                                                            <input type="text" class="form-control input-xs">
                                                            <i class="fa fa-times purple"></i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="input-icon">
                                                            <input type="text" class="form-control input-sm">
                                                            <i class="glyphicon glyphicon-search blue"></i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="input-icon icon-right">
                                                            <input type="text" class="form-control">
                                                            <i class="fa fa-user darkorange"></i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="input-icon">
                                                            <input type="text" class="form-control input-lg">
                                                            <i class="fa fa-envelope palegreen"></i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="input-icon icon-right">
                                                            <input type="text" class="form-control input-xl">
                                                            <i class="glyphicon glyphicon-lock maroon"></i>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-header">
                                            <span class="widget-caption">Inputs With Circular Icons</span>
                                        </div>
                                        <div class="widget-body bordered-top bordered-sky">
                                            <div class="collapse in">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <span class="input-icon icon-right">
                                                            <input type="text" class="form-control input-xs">
                                                            <i class="fa fa-times sky circular"></i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="input-icon">
                                                            <input type="text" class="form-control input-sm">
                                                            <i class="glyphicon glyphicon-search danger circular"></i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="input-icon icon-right">
                                                            <input type="text" class="form-control">
                                                            <i class="fa fa-user success circular"></i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="input-icon">
                                                            <input type="text" class="form-control input-lg">
                                                            <i class="fa fa-envelope info circular"></i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="input-icon icon-right">
                                                            <input type="text" class="form-control input-xl">
                                                            <i class="glyphicon glyphicon-earphone darkpink circular"></i>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-header">
                                            <span class="widget-caption">Inputs With Inverted Icons</span>
                                        </div>
                                        <div class="widget-body bordered-top bordered-yellow">
                                            <div class="collapse in">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <span class="input-icon icon-right inverted">
                                                            <input type="text" class="form-control input-xs">
                                                            <i class="fa fa-times bg-purple"></i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="input-icon inverted">
                                                            <input type="text" class="form-control input-sm">
                                                            <i class="glyphicon glyphicon-search bg-blue"></i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="input-icon icon-right inverted">
                                                            <input type="text" class="form-control">
                                                            <i class="fa fa-user bg-darkorange"></i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="input-icon inverted">
                                                            <input type="text" class="form-control input-lg">
                                                            <i class="fa fa-envelope bg-palegreen"></i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="input-icon icon-right inverted">
                                                            <input type="text" class="form-control input-xl">
                                                            <i class="glyphicon glyphicon-lock bg-pink"></i>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="row-title before-lightred"><i class="fa fa-check-square lightred"></i>Input Groups and Button Addons</h5>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="widget radius-bordered">
                                        <div class="widget-header">
                                            <span class="widget-caption">Input Groups</span>
                                        </div>
                                        <div class="widget-body bordered-top bordered-success">
                                            <div class="collapse in">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">@</span>
                                                            <input type="text" class="form-control" placeholder="Username">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-addon">.0</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">$</span>
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-addon">.0</span>
                                                        </div>
                                                    </div>
                                                    <h5>Sizing</h5>
                                                    <div class="form-group">
                                                        <div class="input-group input-group-xs">
                                                            <span class="input-group-addon">@</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-addon">@</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">@</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group input-group-lg">
                                                            <span class="input-group-addon">@</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group input-group-xl">
                                                            <span class="input-group-addon">@</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <h5>With Icon</h5>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-user darkorange"></i></span>
                                                            <input type="text" class="form-control" placeholder="Username">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon bg-blue bordered-blue"><i class="fa fa-envelope-o"></i></span>
                                                            <input type="text" class="form-control" placeholder="Email Address">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="widget radius-bordered">
                                        <div class="widget-header">
                                            <span class="widget-caption">Button Addons</span>
                                        </div>
                                        <div class="widget-body bordered-top bordered-info">
                                            <div class="collapse in">
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6 col-xs-6">
                                                            <div class="input-group">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button">Go</button>
                                                                </span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6 col-xs-6">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default shiny" type="button">Go</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="horizontal-space"></div>
                                                    <hr class="wide" />
                                                    <h4>Sizing</h4>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6 col-xs-6">
                                                            <div class="input-group input-group-xs">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button">Go</button>
                                                                </span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6 col-xs-6">
                                                            <div class="input-group input-group-sm">
                                                                <input type="text" class="form-control">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button">Go</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="horizontal-space"></div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6 col-xs-6">
                                                            <div class="input-group input-group-lg">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button">Go</button>
                                                                </span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6 col-xs-6">
                                                            <div class="input-group input-group-xl">
                                                                <input type="text" class="form-control">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button">Go</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="wide" />
                                                    <h5>Buttons with dropdowns</h5>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6 col-xs-6">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">Action</a></li>
                                                                        <li><a href="#">Another action</a></li>
                                                                        <li><a href="#">Something else here</a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="#">Separated link</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6 col-xs-6">
                                                            <div class="input-group">
                                                                <div class="input-group-btn">
                                                                    <a class="btn btn-blue" href="javascript:void(0);">Actions</a>
                                                                    <a class="btn btn-blue dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="fa fa-angle-down"></i></a>
                                                                    <ul class="dropdown-menu dropdown-blue">
                                                                        <li>
                                                                            <a href="javascript:void(0);">Action</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">Another action</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">Something else here</a>
                                                                        </li>
                                                                        <li class="divider"></li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">Separated link</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget radius-bordered">
                                        <div class="widget-header bordered-bottom bordered-red">
                                            <span class="widget-caption">Column Sizing</span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <input type="text" class="form-control" placeholder=".col-xs-2">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" placeholder=".col-xs-3">
                                                </div>
                                                <div class="col-xs-4">
                                                    <input type="text" class="form-control" placeholder=".col-xs-4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="row-title before-red"><i class="fa fa-ban red"></i>Validation State</h5>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-header bordered-left bordered-blue">
                                            <span class="widget-caption">Validation States</span>
                                        </div>
                                        <div class="widget-body bordered-left bordered-blueberry">
                                            <form role="form">
                                                <div class="form-group has-success has-feedback">
                                                    <label class="control-label" for="inputSuccess2">Input with success</label>
                                                    <input type="text" class="form-control" id="inputSuccess2" value="Correct Value">
                                                    <span class="glyphicon glyphicon-thumbs-up form-control-feedback"></span>
                                                </div>
                                                <div class="form-group has-warning has-feedback">
                                                    <label class="control-label" for="inputWarning2">Input with warning</label>
                                                    <input type="text" class="form-control" id="inputWarning2" value="Unconvincing Value">
                                                    <span class="fa fa-warning form-control-feedback"></span>
                                                </div>
                                                <div class="form-group has-error has-feedback">
                                                    <label class="control-label" for="inputError2">Input with error</label>
                                                    <input type="text" class="form-control" id="inputError2" value="Wrong Value">
                                                    <span class="glyphicon glyphicon-fire form-control-feedback"></span>
                                                </div>
                                                <div class="form-group has-info has-feedback">
                                                    <label class="control-label" for="inputinfo2">Input With Info</label>
                                                    <input type="text" class="form-control" id="inputinfo2" value="You've Got Mail!">
                                                    <span class="fa fa-envelope form-control-feedback"></span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-header bordered-left bordered-red">
                                            <span class="widget-caption">Input Group Validation States</span>
                                        </div>
                                        <div class="widget-body bordered-left bordered-gold">
                                            <form role="form">
                                                <div class="form-group">
                                                    <div class=" input-group has-success">
                                                        <span class="input-group-addon">@</span>
                                                        <input type="text" class="form-control" placeholder="Username" value="Success">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group has-warning">
                                                        <span class="input-group-addon">@</span>
                                                        <input type="text" class="form-control" placeholder="Username" value="Warning">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group has-error">
                                                        <span class="input-group-addon">@</span>
                                                        <input type="text" class="form-control" placeholder="Username" value="Error">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group has-info">
                                                        <span class="input-group-addon">@</span>
                                                        <input type="text" class="form-control" placeholder="Username" value="Info">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="row-title before-gold"><i class="fa fa-check-square-o gold"></i>Checkboxes, Radio Buttons and Switches</h5>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="widget flat radius-bordered">
                                        <div class="widget-header bordered-bottom bordered-blue">
                                            <span class="widget-caption">CheckBoxes and Radio Buttons</span>
                                        </div>
                                        <div class="widget-body bordered-bottom bordered-darkorange">
                                            <h5>Checkboxes</h5>
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-xs-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" checked="checked">
                                                            <span class="text">Basic</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-xs-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="inverted" checked="checked">
                                                            <span class="text">Inverted</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-xs-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="colored-success" checked="checked">
                                                            <span class="text">Success</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-xs-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="colored-danger" checked="checked">
                                                            <span class="text">Danger</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-xs-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="colored-blue" checked="checked">
                                                            <span class="text">Blue</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-xs-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="colored-warning" checked="checked">
                                                            <span class="text">Warning</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="wide" />
                                            <h5>Radio Buttons</h5>
                                            <div class="control-group">
                                                <div class="radio">
                                                    <label>
                                                        <input name="form-field-radio" type="radio" checked="checked">
                                                        <span class="text">Basic </span>
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input name="form-field-radio" type="radio" class="inverted">
                                                        <span class="text">Inverted</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <hr class="wide" />
                                            <h5>Colored Radio Buttons</h5>
                                            <div class="control-group">
                                                <div class="radio">
                                                    <label>
                                                        <input name="form-field-radio" type="radio" class="colored-blue">
                                                        <span class="text"> Windows Phone</span>
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                        <input name="form-field-radio" type="radio" class="colored-danger">
                                                        <span class="text"> IOS</span>
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                        <input name="form-field-radio" type="radio" class="colored-success">
                                                        <span class="text"> Android</span>
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                        <input name="form-field-radio" type="radio" class="colored-blueberry">
                                                        <span class="text"> Blackberry</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <hr class="wide" />
                                            <h5>Disabled Controls</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" disabled="disabled">
                                                            <span class="text">CheckBox</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" disabled="disabled">
                                                            <span class="text">Radio Button</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="widget flat radius-bordered">
                                        <div class="widget-header  bordered-bottom bordered-pink">
                                            <span class="widget-caption">On/Off Switches</span>
                                        </div>
                                        <div class="widget-body bordered-bottom bordered-sky">
                                            <div class="form-group">
                                                <h6>Default Switch Types</h6>
                                                <div class="horizontal-space"></div>
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider slider-icon" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider toggle" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr class="wide" />
                                                <h6>YES/NO Switches</h6>
                                                <div class="horizontal-space"></div>
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider yesno" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider slider-icon yesno" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider toggle yesno" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr class="wide" />
                                                <h6>Colored Switches</h6>
                                                <div class="horizontal-space"></div>
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider colored-blue" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider slider-icon colored-blue" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider toggle colored-blue" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider colored-darkorange" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider slider-icon colored-darkorange" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider toggle colored-darkorange" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider colored-palegreen" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider slider-icon colored-palegreen" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider toggle colored-palegreen" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider colored-purple" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider slider-icon colored-purple" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider toggle colored-purple" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider colored-warning" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider slider-icon colored-warning" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider toggle colored-warning" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider colored-success" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider slider-icon colored-success" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider toggle colored-success" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider colored-danger" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider slider-icon colored-danger" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider toggle colored-danger" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider colored-magenta" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider slider-icon colored-magenta" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>
                                                            <input class="checkbox-slider toggle colored-magenta" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    <!--Basic Scripts-->
    <script src="/Public/js/jquery-2.0.3.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>

    <!--Beyond Scripts-->
    <script src="/Public/js/beyond.min.js"></script>

    <!--Page Related Scripts-->
    <!--Google Analytics::Demo Only-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-52103994-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>
<!--  /Body -->
</html>