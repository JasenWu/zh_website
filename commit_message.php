<?php
    header("Content-Type:text/html;charset=utf-8");
include 'common/connectDB.php';

    $request = json_decode($GLOBALS['HTTP_RAW_POST_DATA'],true);


     $username = $request['username'];//用户名
     $mobile = $request["mobile"];
     $email = $request["email"];
     $qq = $request["qq"];
     $products = $request["products"];
     $title = $request["title"];
     $content = $request["content"];


$html = "用户名是:".$username;
$html .= "手机是:".$mobile;
$html .= "邮箱是:".$email;
$html .= "qq是:".$qq;
$html .= "产品是:".$products;
$html .= "标题是:".$title;
$html .= "内容是:".$content;

//mysqli_query($con,"set character set 'utf8'");//读库
mysqli_query($con,"set names 'utf8'");//写库
$insert_sql = "INSERT INTO Message (username,phone,email,qq,products,title,content) VALUES  (\"".$username."\",\"".$mobile."\" , \"".$email."\", \"".$qq."\",\"".$products."\",\"".$title."\",\"".$content."\")";
if ($con->query($insert_sql) === TRUE) {
    echo("留言成功!");
} else {
    echo "Error: " . $insert_sql . "<br>" . $con->error;
}

$con->close();


?>