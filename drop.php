<?php
/**
 * Created by PhpStorm.
 * User: tangjiayu
 * Date: 2017/4/9
 * Time: 下午4:44
 */
//链接数据库
$dropLink = mysqli_connect("localhost","root","","tang") or die("数据库链接失败");
//链接本机数据库,主机抵制,用户名,密码,数据库名    如果链接失败,提示连接失败

//设置数据库字符集
mysqli_set_charset($dropLink,"utf8");
//设置数据库链接变量字符编码为utf8



$dropId = $_GET["id"];

if(!is_numeric($dropId)){
    echo "不合法";
    exit();
}

$dropSql = "delete from stu where id=$dropId;";
echo $dropSql;
$dropResult = mysqli_query($dropLink,$dropSql);

mysqli_free_result($dropResult);
mysqli_close($dropLink);
echo "OK!"."<br/><a href = \"table.php\">返回</a>";

?>