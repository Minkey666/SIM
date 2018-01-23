<?php
/*
    filename: connect.php
	文件写入——数据库动作集
    
    info——通讯录表
    party——党员表
    vac——假期去向表
*/
header("Content-Type: text/html;charset=utf-8");

require("connect.php");

//分文件类型上传不同字段
switch($type) {
    case "info":
        $sql = "select COUNT(*) from stu where stuid='$strs[0]'";
        $result = mysqli_fetch_assoc(mysqli_query($conn, $sql))['COUNT(*)'];

            if ($result == 0) {
                $sql = "insert into stu (
stuid,
name,
sex,
nation,
place,
major,
tutor_name,
political,
culture_mode,
unit,
id_number,
phone,
Dorm,
from_university,
Wechat,
QQ,
em_contact,
mail,
home_address,
home_phone,
Marital,
children
                ) 
                values (
'$strs[0]',
'$strs[1]',
'$strs[2]',
'$strs[3]',
'$strs[4]',
'$strs[5]',
'$strs[6]',
'$strs[7]',
'$strs[8]',
'$strs[9]',
'$strs[10]',
'$strs[11]',
'$strs[12]',
'$strs[13]',
'$strs[14]',
'$strs[15]',
'$strs[16]',
'$strs[17]',
'$strs[18]',
'$strs[19]',
'$strs[20]',
'$strs[21]'
                )";
            } else{
                $sql = "update stu set 
stuid='$strs[0]',
name='$strs[1]',
sex='$strs[2]',
nation='$strs[3]',
place='$strs[4]',
major='$strs[5]',
tutor_name='$strs[6]',
political='$strs[7]',
culture_mode='$strs[8]',
unit='$strs[9]',
id_number='$strs[10]',
phone='$strs[11]',
Dorm='$strs[12]',
from_university='$strs[13]',
Wechat='$strs[14]',
QQ='$strs[15]',
em_contact='$strs[16]',
mail='$strs[17]',
home_address='$strs[18]',
home_phone='$strs[19]',
Marital='$strs[20]',
children='$strs[21]'
                where stuid='$strs[0]'";
            }
        write_in($sql,$j,1);
    break;

    case "party":
        $sql = "select COUNT(*) from stu where stuid='$strs[2]'";
        $result = mysqli_fetch_assoc(mysqli_query($conn, $sql))['COUNT(*)'];

            if ($result == 0) {
                $sql = "insert into stu (
name,
sex,
stuid,
age,
birth,
id_number,
nation,
class,
place,
home_address,
phone,
party_appli_sub_time,
party_activi_time,
party_lectures_time,
party_develop_time,
party_join_time,
partybranch_enter_name,
party_voluntary_num,
party_correct_time,
partybranch_correct_name,
partybranch_present_name
                ) 
                values (
'$strs[0]',
'$strs[1]',
'$strs[2]',
'$strs[3]',
'$strs[4]',
'$strs[5]',
'$strs[6]',
'$strs[7]',
'$strs[8]',
'$strs[9]',
'$strs[10]',
'$strs[11]',
'$strs[12]',
'$strs[13]',
'$strs[14]',
'$strs[15]',
'$strs[16]',
'$strs[17]',
'$strs[18]',
'$strs[19]',
'$strs[20]'
                )";
            } else{
                $sql = "update stu set 
name='$strs[0]',
sex='$strs[1]',
stuid='$strs[2]',
age='$strs[3]',
birth='$strs[4]',
id_number='$strs[5]',
nation='$strs[6]',
class='$strs[7]',
place='$strs[8]',
home_address='$strs[9]',
phone='$strs[10]',
party_appli_sub_time='$strs[11]',
party_activi_time='$strs[12]',
party_lectures_time='$strs[13]',
party_develop_time='$strs[14]',
party_join_time='$strs[15]',
partybranch_enter_name='$strs[16]',
party_voluntary_num='$strs[17]',
party_correct_time='$strs[18]',
partybranch_correct_name='$strs[19]',
partybranch_present_name='$strs[20]'
                where stuid='$strs[2]'";
            }
        write_in($sql,$j,1);
    break;

    case "vac":
        $sql = "select COUNT(*) from stu where stuid='{$strs[0]}'";
        $result = mysqli_fetch_assoc(mysqli_query($conn, $sql))['COUNT(*)'];
            //主表插入或更新
            if ($result == 0) {
                $sql = "insert into stu (
stuid,
grade,
name,
major,
phone,
vac_type,
vac_dep_time,
vac_Return_time,
vac_gos,
home_address,
home_phone,
vac_remarks
                ) 
                values (
'{$strs[0]}',
'{$strs[1]}',
'{$strs[2]}',
'{$strs[3]}',
'{$strs[4]}',
'{$strs[5]}',
'{$strs[6]}',
'{$strs[7]}',
'{$strs[8]}',
'{$strs[9]}',
'{$strs[10]}',
'{$strs[11]}'
                )";
            } else{
                $sql = "update stu set 
stuid='{$strs[0]}',
grade='{$strs[1]}',
name='{$strs[2]}',
major='{$strs[3]}',
phone='{$strs[4]}',
vac_type='{$strs[5]}',
vac_dep_time='{$strs[6]}',
vac_Return_time='{$strs[7]}',
vac_gos='{$strs[8]}',
home_address='{$strs[9]}',
home_phone='{$strs[10]}',
vac_remarks='{$strs[11]}'
                where stuid='{$strs[0]}'";
            }
        write_in($sql,$j,1);

        //历史表插入
        $sql_vac = "insert into vac (
stuid,
vac_type,
vac_dep_time,
vac_Return_time,
vac_gos,
vac_remarks
                ) 
                values (
'{$strs[0]}',
'{$strs[5]}',
'{$strs[6]}',
'{$strs[7]}',
'{$strs[8]}',
'{$strs[11]}'
                )";
        write_in($sql_vac,$j,0);
    break;
}

?>