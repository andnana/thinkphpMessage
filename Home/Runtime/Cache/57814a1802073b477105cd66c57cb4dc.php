<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/reg.css" />
  <script type="text/javascript" src="__PUBLIC__/Js/jquery-1.4.3.js"></script>
    <script type="text/javascript">

      var PUBLIC= "__PUBLIC__";

      var APP = "__APP__";

      var ROOT = "__ROOT__";
  </script>
  <script type="text/javascript" src="__PUBLIC__/Js/Home/reg.js"></script>

</head>
<body>
<div class="regblock">
  <form id = "regform" action="__URL__/doRegister"  method="POST">
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
        <th>确认密码：</th>
        <td><input type="password" name="password2" id="password2"/></td>
        <td><label for="password2"></label></td>
      </tr>
      <tr>
        <th>性别：</th>
        <td><input type="radio" value="1" name="sex" id = "male" checked/> <label for="male">男</label>&nbsp;&nbsp;
        <input type="radio" value="0" name="sex" id = "female"/> <label for="female">女</label>
        </td>
        <td></td>
      </tr>
      <tr>
        <th>验证码：</th>
        <td><input type="text" name="code" /><img id="code" src="__APP__/Public/code"/></td>
        <td><input type="button" id="registerbtn" value="注册" /> <input type="button" id="resetbtn" value="重置"/></td>
      </tr>
    </table>
  </form>
  </div>
</body>
</html>