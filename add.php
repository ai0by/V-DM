<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学生信息表 - 增加</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
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
                    <li><a href="table.php">信息概览</a></li>
                    <li class="active"><a href="add.php">添加信息</a></li>
                    <li><a href="search.php">查询信息</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <div class="alert alert-success" role="alert">
        <strong>正常运行!</strong> 一个简易的数据库操作系统;
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">添加信息</div>
        <div class="panel-body">
        <form action="data.php" method="post" class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-7">
                    <label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
                    <input type="text" name="name" class="form-control col-sm-10" placeholder="input Name">
                </div>
                <div class="col-sm-7">
                    <label for="inputEmail3" class="col-sm-2 control-label">学号</label>
                    <input type="text" name="id" class="form-control" placeholder="input Id">
                </div>
                <div class="col-sm-7">
                    <label for="inputEmail3" class="col-sm-2 control-label">年龄</label>
                    <input type="text" name="age" class="form-control" placeholder="input Age">
                </div>
                <div class="col-sm-7">
                    <label for="inputEmail3" class="col-sm-2 control-label">性别</label>
                    <input type="text" name="sex" class="form-control" placeholder="input Sex">
                </div>
                <div class="col-sm-7">
                    <label for="inputEmail3" class="col-sm-2 control-label">班级</label>
                    <input type="text" name="classid" class="form-control" placeholder="input Classid">
                </div>
            </div>
            <input type="submit" value="确认添加" class="btn btn-default">
        </div>
        </form>
    </div>
    <center>
        <a href="table.php">返回主页</a> \ <a href="https://www.sbcoder.cn">风向标</a> \ Github
    </center>
</div>
</body>