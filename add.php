<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学生信息表 - 增加</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
    <table>
        <caption class="head">添加信息</caption>
        <form action="data.php" method="post">
            <tr><td>姓名:</td><td><input type="text" name="name"></td></tr>
            <tr><td>学号:</td><td><input type="text" name="id"></td></tr>
            <tr><td>年龄:</td><td><input type="text" name="age"></td></tr>
            <tr><td>性别:</td><td><input type="text" name="sex"></td></tr>
            <tr><td>班级:</td><td><input type="text" name="classid"></td></tr>
            <tr><td colspan="2"><input type="submit" value="确认添加"></td></tr>
        </form>
    </table>
    <a href="table.php">返回</a>
</center>
</body>