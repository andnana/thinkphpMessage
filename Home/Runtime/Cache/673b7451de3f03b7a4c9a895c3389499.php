<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>right</title>
</head>
<body>
<form action="__APP__/Message/doMessage" method="post" enctype="multipart/form-data">
  留言题目：<input type="text" name="title"/><br/>
  留言内容：<textarea rows="10" cols="50" name="content"></textarea><br/>
  附件：<input type="file" name="filename" /><br/>
  <input type="submit" />
</form>
</body>
</html>