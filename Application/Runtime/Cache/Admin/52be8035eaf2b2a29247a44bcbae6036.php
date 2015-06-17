<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<!--
Beyond Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->
<head>
    <meta charset="utf-8" />
    <title>Register Page</title>

    <meta name="description" content="register page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link id="beyond-link" href="assets/css/beyond.min.css" rel="stylesheet" />
    <link href="assets/css/demo.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="assets/js/skins.min.js"></script>
</head>
<!--Head Ends-->
<!--Body-->
<body>
    <div class="register-container animated fadeInDown">
        <div class="registerbox bg-white">
            <div class="registerbox-title">Register</div>

            <div class="registerbox-caption ">Please fill in your information</div>
            <div class="registerbox-textbox">
                <input type="text" class="form-control" placeholder="Username" />
            </div>
            <div class="registerbox-textbox">
                <input type="password" class="form-control" placeholder="Enter Password" />
            </div>
            <div class="registerbox-textbox">
                <input type="password" class="form-control" placeholder="Confirm Password" />
            </div>
            <hr class="wide" />
            <div class="registerbox-textbox">
                <input type="text" class="form-control" placeholder="Name" />
            </div>
            <div class="registerbox-textbox">
                <input type="text" class="form-control" placeholder="Family" />
            </div>
            <div class="registerbox-textbox">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-6 padding-right-10">
                        <input type="text" class="form-control" placeholder="Month" />
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-3 no-padding padding-right-10">
                        <input type="text" class="form-control" placeholder="Day" />
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-3 no-padding-left">
                        <input type="text" class="form-control" placeholder="Year" />
                    </div>
                </div>
            </div>
            <div class="registerbox-textbox no-padding-bottom">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" class="colored-primary" checked="checked">
                        <span class="text darkgray">I agree to the Company <a class="themeprimary">Terms of Service</a> and Privacy Policy</span>
                    </label>
                </div>
            </div>
            <div class="registerbox-submit">
                <input type="button" class="btn btn-primary pull-right" value="SUBMIT">
            </div>
        </div>
        <div class="logobox">
        </div>
    </div>

    <!--Basic Scripts-->
    <script src="assets/js/jquery-2.0.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--Beyond Scripts-->
    <script src="assets/js/beyond.min.js"></script>
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
<!--Body Ends-->
</html>