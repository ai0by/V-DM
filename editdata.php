<?php
/**
 * Created by PhpStorm.
 * User: tangjiayu
 * Date: 2017/4/9
 * Time: 下午4:44
 */
//链接数据库
$editdataLink = mysqli_connect("localhost","root","","tang") or die("数据库链接失败");
//链接本机数据库,主机抵制,用户名,密码,数据库名    如果链接失败,提示连接失败

//设置数据库字符集
mysqli_set_charset($editdataLink,"utf8");
//设置数据库链接变量字符编码为utf8




$getName = $_POST["name"];
$getAge = $_POST["age"];
$getId = $_POST["id"];
$getSex = $_POST["sex"];
$getClassid = $_POST["classid"];

if(!(is_string($getName)&&is_string($getClassid)&&is_string($getSex)&&is_numeric($getAge)&&is_numeric($getId))){
    echo "不合法";
    exit();
}

$editSql = "update stu set name = '{$getName}',age = {$getAge},sex = '{$getSex}',classid = '{$getClassid}'where id = {$getId}; ";
echo $editSql;
$editResult = mysqli_query($editdataLink,$editSql);


mysqli_close($editdataLink);

echo "OK!"."<br/><a href = \"table.php\">返回</a>";

?>