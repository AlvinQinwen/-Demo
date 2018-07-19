<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php echo ($data1); ?>
<hr />
<?php if($data['sex'] == 男): ?>强大
    <?php else: ?>
    弱小<?php endif; ?>
<hr />
<?php if(is_array($$data3)): foreach($$data3 as $k=>$vo): ?>echo '姓名'.<?php echo ($k); ?>:<?php echo ($vo["name"]); ?>.'<br />';
    echo '年龄'.<?php echo ($data["age"]); ?>.'<hr />';<?php endforeach; endif; ?>
</body>
</html>