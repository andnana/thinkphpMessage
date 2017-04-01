<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/login.css" />
  <script type="text/javascript" src="__PUBLIC__/Js/jquery-1.4.3.js"></script>
  <script type="text/javascript">

    var PUBLIC= "__PUBLIC__";

    var APP = "__APP__";

    var ROOT = "__ROOT__";
  </script>
  <script type="text/javascript" src="__PUBLIC__/Js/Home/login.js"></script>

</head>

<body>
<div class="regblock">
  <form id = "doLogin" action="__URL__/doLogin"  method="POST">
    <table border="0"  cellspacing="8" cellpadding="5" >
      <tr>
        <th>用户名：</th>
        <td><input type="text" name="username" id="username" placeholder="中文字符，3－8个"/></td>
        <td><label for="username"></label></td>
      </tr>
      <tr>
        <th>密码：</td>
        <td><input type="password" name="password" placeholder="3－8个字符"id="password"/></td>
        <td><label for="password"></label></td>
      </tr>

      <tr>
        <th>验证码：</th>
        <td><input type="text" name="code" /><img id="code" src="__APP__/Public/code"/></td>
        <td><input type="button" id="login" value="登录" /> <input type="button" id="register" value="注册"/></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>