<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>管理后台</title>
    <meta name="author" content="">
    <link href="/Public/login/style.css" rel="stylesheet" type="text/css">
    <link href="/Public/login/css/font-awesome.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/Public/login/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/login/Particleground.js"></script>
    <style type="text/css">html,body{height: 100%;position: relative;}</style>
    <script language="JavaScript">
    </script>
</head>
<body id="canvas">
<canvas class="pg-canvas" width="1366" height="588"></canvas>
<div class="admin_login" style="height:286px !important;">

    <div class="admin_title">
        <strong>管理后台</strong>
        <em>Management System</em>
    </div>
    <form method="post" action="">
        <div class="admin_user">
            <input type="text" name="username" placeholder="账号" class="login_txt" id="username" >
        </div>
        <div class="admin_pwd">
            <input type="password" name="password" placeholder="密码" class="login_txt" id="password">
        </div>
        <div class="admin_sub">
            <input type="submit" value="立即登陆" class="submit_btn">
        </div>
    </form>
</div>
<script>

    $(".submit_btn").click(function () {
        var username = $("#username").val();
        var password = $("#password").val();
        if(username==""){
            alert("用户名不能为空");
            return false;
        }
        if(password==""){
            alert("密码不能为空");
            return false;
        }

    })

</script>
</body>
</html>