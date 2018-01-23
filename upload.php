<?php
//参考http://www.w3school.com.cn/php/php_file_upload.asp
header("Content-Type: text/html;charset=utf-8");

//限制文件类型 xlsx 和大小2M
if (
        (
            ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")
        )
        && 
        ($_FILES["file"]["size"] < 2097152)
    )
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
    else
    {


        //临时文件保存
        if (file_exists($excelpath))//检验文件是否已存在
        {
            echo $filename . " 同名文件已存在、无法上传数据，请确认文件不重复 ";
            echo '<br><br><br><a href="index.php">点击前往主页</a><br><br>';
            echo '<a href="upload_front.html">点击进入上传新文件</a>';
            exit();
        }
        else
        {
            //输出上传文件的信息
            echo "本次上传文件名: " . $_FILES["file"]["name"] . "<br />";
            echo "文件大小: " . round(($_FILES["file"]["size"]/1024/1024),2) . " M<br />";
            //保存文件
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
        }
    }
}
else
{
    echo "文件类型/大小不合规<br />仅支持.xlsx文件，且文件大小<2M<br />";
    echo "本次上传文件: " . $_FILES["file"]["name"] . "<br />";
    echo "文件大小: " . ($_FILES["file"]["size"] / 1024/1024) . " M<br />";
}
?>