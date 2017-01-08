<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table,td{
            border:1px solid blue;
            cellspacing:0;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>期数</td>
            <td>身份证号</td>
            <td>姓名</td>
            <td>性别</td>
            <td>名族</td>
            <td>专业班级</td>
        </tr>
    <?php if(is_array($res)): foreach($res as $key=>$val): ?><tr>
        <td><?php echo ($val["id"]); ?></td>
        <td><?php echo ($val["期数"]); ?></td>
        <td><?php echo ($val["身份证号"]); ?></td>
        <td><?php echo ($val["姓名"]); ?></td>
        <td><?php echo ($val["性别"]); ?></td>
        <td><?php echo ($val["名族"]); ?></td>
        <td><?php echo ($val["专业班级"]); ?></td>
    </tr><?php endforeach; endif; ?>>
    </table>
</body>
</html>