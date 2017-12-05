<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
height:<input type="text" name="height"> m<br/>
weight:<input type="text" name="weight"> kg<br/>
<input type="file" name="file" id="file"/><br/>
<input type="submit" name="submit" value="提交">
</form>
</body>
</html>

<?php

function isImage($filename)
{
    $types = '.gif|.jpeg|.png|.bmp|.jpg|.tiff|.pcx';  
    $ext = substr(strrchr($filename, '.'), 1);//[php]image_type_to_extension 取得圖像類型的文件後綴
    return stripos($types,$ext);//stripos() 函数查找字符串在另一字符串中第一次出现的位置（不分大小寫)
}
 
if($_POST){
$response=1;
if (empty($_POST["height"]) || empty($_POST["weight"])){
	echo "please type in all information"."<br/>";
	$response=0;
}

if (empty($_FILES["file"]["name"])) {
	echo "upload file is empty"."<br/>";
	$response=0;
}

else if(isImage($_FILES["file"]["name"])==false)
{
    echo "wrong file type.";
    $response=0;
}
if($response==1)
{ 
	echo "height = ".$_POST["height"]."<br>";
	echo "weight = ".$_POST["weight"]."<br>";
	$bminum=$_POST["weight"]/$_POST["height"];
	$bminum=$bminum/$_POST["height"];
	echo "BMI:".$bminum."<br/>";

	$filename=$_FILES["file"]["name"];
	move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$filename);
	echo '<img src="upload/'.$filename.'"/>';
}
}
?>