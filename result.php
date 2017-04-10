<?php
/**
 * Created by PhpStorm.
 * User: tangjiayu
 * Date: 2017/4/9
 * Time: 下午10:08
 */


//链接数据库
$searchLink = mysqli_connect("localhost","root","","tang") or die("数据库链接失败");
//链接本机数据库,主机抵制,用户名,密码,数据库名    如果链接失败,提示连接失败

//设置数据库字符集
mysqli_set_charset($searchLink,"utf8");
//设置数据库链接变量字符编码为utf8


$getName = $_POST["name"];
$getAge = $_POST["age"];
$getId = $_POST["id"];
$getSex = $_POST["sex"];
$getClassid = $_POST["classid"];


if($getName==null){
    $Name = null;
}
else $Name = "name = '{$getName}'";

if($getAge==null){
    $Age = null;
}
else $Age = "age = {$getAge}";

if($getId==null){
    $Id = null;
}
else $Id = "id = {$getId}";

if($getSex==null){
    $Sex = null;
}
else $Sex = "sex = '{$getSex}'";

if($getClassid==null){
    $Classid = null;
}
else $Classid = "classid = {$getClassid}";

if($getClassid==null&&$getName==null&&$getId==null&&$getSex==null&&$getAge==null){
    echo "查询字段为空,请返回直接查看主页!";
    exit();
}


$searchSql = "select * from stu where {$Name} {$Id} {$Sex} {$Age} {$Classid};";

$searchResult = mysqli_query($searchLink,$searchSql);

echo "查询状态";
echo $searchSql."<br/>";
while($Result=mysqli_fetch_assoc($searchResult)) {
    echo "姓名:{$Result["name"]} 年龄:{$Result["age"]} 学号:{$Result["id"]} 性别:{$Result["sex"]} 班级:{$Result["classid"]}<br/>";
}

mysqli_free_result($searchResult);
mysqli_close($searchLink);

echo "<br/>"."OK!"."<br/><a href = \"table.php\">返回</a>";

?>

