<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学生信息表</title>
<!--    <link rel="stylesheet" href="style.css" type="text/css" />-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="css/navbar.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <!-- Static navbar -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="table.php">主页</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="table.php">信息概览</a></li>
                    <li><a href="add.php">添加信息</a></li>
                    <li><a href="search.php">查询信息</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <div class="alert alert-success" role="alert">
        <strong>正常运行!</strong> 一个简易的数据库操作系统;
    </div>
<?php

//链接数据库
$link = mysqli_connect("localhost","root","","tang") or die("数据库链接失败");
//链接本机数据库,主机抵制,用户名,密码,数据库名    如果链接失败,提示连接失败

//设置数据库字符集
mysqli_set_charset($link,"utf8");
//设置数据库链接变量字符编码为utf8

//定义SQL语句
$sql = "select * from stu;";
//存储SQL语句变量

//执行链接数据库,并将结果返回给结果集
$result = mysqli_query($link,$sql);
//讲数据库链接变量和sql语句变量设置为参数,返回给结果变量




//解析结果集,然后遍历输出
//$res = mysqli_fetch_assoc($result);
//将结果集内容赋值给变量

//查看数据库内容,全部打印
//var_dump($res);


//逐条打印数据库内容,使用table表格打印输出
?>

<!--打印表格头-->
<center>
    <div class="panel panel-default">
    <div class="panel-body">
        <table class="table col-md-12">
            <thead><tr><th>姓名</th><th>年龄</th><th>学号</th><th>性别</th><th>班级</th><th>操作</th></tr></thead>
            <tbody>
            <!--按行打印-->
            <?php
                while($res=mysqli_fetch_assoc($result)){
                    if($res["sex"]=="m"){
                        $ressex["sex"] = "男";
                    }
                    else $ressex["sex"] = "女";
            //        页面传值变量
                    $resultId = $res["id"];
                //    var_dump($res["name"]);
                    echo "<tr><td>{$res["name"]}</td><td>{$res["age"]}</td><td>{$res["id"]}</td><td>{$ressex["sex"]}</td><td>{$res["classid"]}</td><td><a href=\"drop.php?id={$resultId}\">删除</a>|<a href=\"edit.php?edit={$resultId}\">修改</a></td></tr>";
                }
            ?>
            </tbody>
        </table>


        <?php
        //释放结果集,关闭数据库
        mysqli_free_result($result);
        mysqli_close($link);

        ?>

    </div>
    </div>
    <a href="table.php">返回主页</a> \ <a href="https://www.sbcoder.cn">风向标</a> \ Github
</center>
</div>
</body>
</html>