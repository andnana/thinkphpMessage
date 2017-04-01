<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>left</title>
</head>
<body>
      <?php if(is_array($messages)): foreach($messages as $key=>$item): ?><ul>
        <li> 留言题目：<?php echo ($item["title"]); ?></li>
          <li>留言内容：<?php echo ($item["content"]); ?></li>
          <li>留言时间：<?php echo ($item["time"]); ?></li>
          <li>留言人：<?php echo ($item["user"]["username"]); ?></li>
          <li>附件名：<?php echo ($item["filename"]); ?></li>
          <hr/>

          </ul><?php endforeach; endif; ?>

      <?php echo ($show); ?>
</body>
</html>