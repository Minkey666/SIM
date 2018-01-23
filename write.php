<?php
header("Content-Type: text/html;charset=utf-8");

$filename = iconv("UTF-8","GB2312//IGNORE",$_FILES["file"]["name"]);
$excelpath = 'upload/'.$filename;//取文件名并编码
$type = $_POST['type'];//取文件类型

require ('upload.php');
require_once 'PHPExcel/PHPExcel.php';
require_once 'PHPExcel/PHPExcel/IOFactory.php';
require_once 'PHPExcel/PHPExcel/Reader/Excel5.php';

$objReader = PHPExcel_IOFactory::createReader('excel2007'); 
if(!$objReader->canRead($excelpath)){
$objReader = PHPExcel_IOFactory::createReader('Excel5');
}

$objPHPExcel = $objReader->load($excelpath,$encode='utf-8');
    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow(); //取得总行数
$highestColumn = $sheet->getHighestColumn(); //取得总列数
$error = array();//错误行数记录数组


//校验列数是否正确
if ($type == 'info'& $highestColumn !== 'V'
    ||$type == 'party'& $highestColumn !== 'U'
    ||$type == 'vac'& $highestColumn !== 'L'
){
    echo '<br>字段数（列数）不符合此文件类型！请校验 <strong>文件类型选择是否正确</strong> 及 <strong>文件是否符合模板规范</strong>';
    if (!unlink($excelpath)){
        echo '<br><br>缓存文件清理失败,请确认后重命名上传。<br>';
    } else {
        echo '<br><br>缓存文件已清理,请确认后重新上传。<br>';
    }
    exit();
}

for($j=2;$j<=$highestRow;$j++)                        //从第二行开始读取数据
    {
        $str="";
        for($k='A';$k<=$highestColumn;$k++)            //从A列读取数据
            {
                if($k=='AAA'||$k=='BBB'){//指定时间所在列,暂无用
                            $str .= gmdate("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue())).'|*|';
                }else{
                            $str .= $objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue().'|*|';
                }
            }
        $str=mb_convert_encoding($str,'utf-8','auto');//编码
        $strs = explode("|*|",$str);

        require ('action_file.php');//数据库单行写入
    }

//$sql数据库语句,$j当前行数,$type=1可写入错误
function write_in($sql,$j,$type){
    require("connect.php");
    $result = mysqli_query($conn, $sql);

    global $error;//引入变量
    if (!$result&&$type==1) {
        array_push($error,$j);
    }
    mysqli_close($conn);
}

//上传完成提示
if (!unlink($excelpath)){
    echo '<br>数据上传完成，缓存文件清理失败。<br>';
} else {
    echo '<br>数据上传完成，缓存文件已清理。<br>';
}
//报错信息输出
if (!empty($error)) {
    $error_mes = '';
    $error_mes .= implode("、",$error);
    $error_mes = '其中第'.$error_mes.'行写入失败，请检查数据源';
    echo $error_mes;
}

//便捷链接
echo '<br><br><a href="index.php"><button style="width:150px;height: 35px;background-color: #2a8bcc;color: white;border-width: 2px;border-color: #8298fe;">点此前往主页</button></a><br><br>';
echo '<a href="upload_front.html"><button style="width:150px;height: 35px;background-color: #2a8bcc;color: white;border-width: 2px;border-color: #8298fe;">点此继续上传新文件</button></a>';

?>