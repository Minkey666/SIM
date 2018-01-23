<?php
/*
    filename: connect.php
	数据库动作集
	add：添加
	del：删除
	edit：修改
	search：查询
*/
header("Content-Type: text/html;charset=utf-8");

require("connect.php");//连接数据库

switch($_GET['action']) {
    case "add"://增加数据
        $stuid = $_POST['stuid'];
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $nation = $_POST['nation'];
        $place = $_POST['place'];
        $major = $_POST['major'];
        $tutor_name = $_POST['tutor_name'];
        $political = $_POST['political'];
        $culture_mode = $_POST['culture_mode'];
        $unit = $_POST['unit'];
        $id_number = $_POST['id_number'];
        $phone = $_POST['phone'];
        $Dorm = $_POST['Dorm'];
        $from_university = $_POST['from_university'];
        $Wechat = $_POST['Wechat'];
        $QQ = $_POST['QQ'];
        $em_contact = $_POST['em_contact'];
        $mail = $_POST['mail'];
        $home_address = $_POST['home_address'];
        $home_phone = $_POST['home_phone'];
        $Marital = $_POST['Marital'];
        $children = $_POST['children'];
        $grade = $_POST['grade'];

        $vac_type = $_POST['vac_type'];
        $vac_dep_time = $_POST['vac_dep_time'];
        $vac_Return_time = $_POST['vac_Return_time'];
        $vac_gos = $_POST['vac_gos'];
        $vac_remarks = $_POST['vac_remarks'];
        $age = $_POST['age'];
        $birth = $_POST['birth'];
        $class = $_POST['class'];
        $party_appli_sub_time = $_POST['party_appli_sub_time'];
        $party_activi_time = $_POST['party_activi_time'];
        $party_lectures_time = $_POST['party_lectures_time'];
        $party_develop_time = $_POST['party_develop_time'];
        $party_join_time = $_POST['party_join_time'];
        $partybranch_enter_name = $_POST['partybranch_enter_name'];
        $party_voluntary_num = $_POST['party_voluntary_num'];
        $party_correct_time = $_POST['party_correct_time'];
        $partybranch_correct_name = $_POST['partybranch_correct_name'];
        $partybranch_present_name = $_POST['partybranch_present_name'];

        $sql = "INSERT INTO stu VALUES 
               (null
               ,'$stuid'
               ,'$name'
               ,'$sex'
               ,'$nation'
               ,'$place'
               ,'$major'
               ,'$tutor_name'
               ,'$political'
               ,'$culture_mode'
               ,'$unit'
               ,'$id_number'
               ,'$phone'
               ,'$Dorm'
               ,'$from_university'
               ,'$Wechat'
               ,'$QQ'
               ,'$em_contact'
               ,'$mail'
               ,'$home_address'
               ,'$home_phone'
               ,'$Marital'
               ,'$children'
               ,'$grade'
               ,'$vac_type'
               ,'$vac_dep_time'
               ,'$vac_Return_time'
               ,'$vac_gos'
               ,'$vac_remarks'
               ,'$age'
               ,'$birth'
               ,'$class'
               ,'$party_appli_sub_time'
               ,'$party_activi_time'
               ,'$party_lectures_time'
               ,'$party_develop_time'
               ,'$party_join_time'
               ,'$partybranch_enter_name'
               ,'$party_voluntary_num'
               ,'$party_correct_time'
               ,'$partybranch_correct_name'
               ,'$partybranch_present_name'
               )";
        $sql_vac = "INSERT INTO vac VALUES 
               (null
               ,'$stuid'
               ,'$vac_type'
               ,'$vac_dep_time'
               ,'$vac_Return_time'
               ,'$vac_gos'
               ,'$vac_remarks'
               )";
        $result = mysqli_query($conn, $sql);
        

        //判断主表是否写入成功
        if ($result) {
          //判断是否需要写入历史假期去向表
          if (empty($vac_type)
              && empty($vac_dep_time)
              && empty($vac_Return_time)
              && empty($vac_gos)
              && empty($vac_remarks)
            ) 
            {
            echo "<script>alert('添加成功');
                  window.location='add.php';</script>";
            break;
            }
          else{
            //写入假期去向表
            $result_vac = mysqli_query($conn, $sql_vac);
            if ($result_vac) 
              {
                  echo "<script>alert('添加成功');
                   window.location='add.php';</script>";
              }
            else
             {
                  echo "<script>alert('主表添加成功，历史假期去向添加失败');
                    window.history.back();</script>";
              }
            }
        } else {
            echo "<script>alert('添加失败');
                  window.history.back();</script>";
        }
        mysqli_close($conn);
     
    break;

    case "del"://删除数据
        $stuid = $_GET['stuid'];
        $sql = "DELETE FROM stu WHERE stuid = $stuid";
        $result = mysqli_query($conn, $sql);
        $sql = "DELETE FROM vac WHERE stuid = $stuid";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location:index.php");
    break;

    case "edit"://修改数据
        require('connect.php');
        $stuid = $_POST['stuid'];
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $nation = $_POST['nation'];
        $place = $_POST['place'];
        $major = $_POST['major'];
        $tutor_name = $_POST['tutor_name'];
        $political = $_POST['political'];
        $culture_mode = $_POST['culture_mode'];
        $unit = $_POST['unit'];
        $id_number = $_POST['id_number'];
        $phone = $_POST['phone'];
        $Dorm = $_POST['Dorm'];
        $from_university = $_POST['from_university'];
        $Wechat = $_POST['Wechat'];
        $QQ = $_POST['QQ'];
        $em_contact = $_POST['em_contact'];
        $mail = $_POST['mail'];
        $home_address = $_POST['home_address'];
        $home_phone = $_POST['home_phone'];
        $Marital = $_POST['Marital'];
        $children = $_POST['children'];
        $grade = $_POST['grade'];
        $vac_type = $_POST['vac_type'];
        $vac_dep_time = $_POST['vac_dep_time'];
        $vac_Return_time = $_POST['vac_Return_time'];
        $vac_gos = $_POST['vac_gos'];
        $vac_remarks = $_POST['vac_remarks'];
        $age = $_POST['age'];
        $birth = $_POST['birth'];
        $class = $_POST['class'];
        $party_appli_sub_time = $_POST['party_appli_sub_time'];
        $party_activi_time = $_POST['party_activi_time'];
        $party_lectures_time = $_POST['party_lectures_time'];
        $party_develop_time = $_POST['party_develop_time'];
        $party_join_time = $_POST['party_join_time'];
        $partybranch_enter_name = $_POST['partybranch_enter_name'];
        $party_voluntary_num = $_POST['party_voluntary_num'];
        $party_correct_time = $_POST['party_correct_time'];
        $partybranch_correct_name = $_POST['partybranch_correct_name'];
        $partybranch_present_name = $_POST['partybranch_present_name'];

        $sql = "UPDATE stu SET 
stuid='$stuid'
, name='$name'
, sex='$sex'
, nation='$nation'
, place='$place'
, major='$major'
, tutor_name='$tutor_name'
, political='$political'
, culture_mode='$culture_mode'
, unit='$unit'
, id_number='$id_number'
, phone='$phone'
, Dorm='$Dorm'
, from_university='$from_university'
, Wechat='$Wechat'
, QQ='$QQ'
, em_contact='$em_contact'
, mail='$mail'
, home_address='$home_address'
, home_phone='$home_phone'
, Marital='$Marital'
, children='$children'
, grade='$grade'
, vac_type='$vac_type'
, vac_dep_time='$vac_dep_time'
, vac_Return_time='$vac_Return_time'
, vac_gos='$vac_gos'
, vac_remarks='$vac_remarks'
, age='$age'
, birth='$birth'
, class='$class'
, party_appli_sub_time='$party_appli_sub_time'
, party_activi_time='$party_activi_time'
, party_lectures_time='$party_lectures_time'
, party_develop_time='$party_develop_time'
, party_join_time='$party_join_time'
, partybranch_enter_name='$partybranch_enter_name'
, party_voluntary_num='$party_voluntary_num'
, party_correct_time='$party_correct_time'
, partybranch_correct_name='$partybranch_correct_name'
, partybranch_present_name='$partybranch_present_name'

WHERE stuid=$stuid ";
        $result = mysqli_query($conn, $sql);
    
        if($result) {
            echo "<script>alert('修改成功');";
            header("Location:index.php");
        } else {
            echo "<script>alert('修改失败');window.history.back();</script>";
        }
    break;

    case "search"://查询数据
        require('connect.php');

        $stuid = $_POST['stuid'];
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $nation = $_POST['nation'];
        $place = $_POST['place'];
        $major = $_POST['major'];
        $tutor_name = $_POST['tutor_name'];
        $political = $_POST['political'];
        $culture_mode = $_POST['culture_mode'];
        $unit = $_POST['unit'];
        $id_number = $_POST['id_number'];
        $phone = $_POST['phone'];
        $Dorm = $_POST['Dorm'];
        $from_university = $_POST['from_university'];
        $Wechat = $_POST['Wechat'];
        $QQ = $_POST['QQ'];
        $em_contact = $_POST['em_contact'];
        $mail = $_POST['mail'];
        $home_address = $_POST['home_address'];
        $home_phone = $_POST['home_phone'];
        $Marital = $_POST['Marital'];
        $children = $_POST['children'];
        $grade = $_POST['grade'];
        $vac_type = $_POST['vac_type'];
        $vac_dep_time = $_POST['vac_dep_time'];
        $vac_Return_time = $_POST['vac_Return_time'];
        $vac_gos = $_POST['vac_gos'];
        $vac_remarks = $_POST['vac_remarks'];
        $age = $_POST['age'];
        $birth = $_POST['birth'];
        $class = $_POST['class'];
        $party_appli_sub_time = $_POST['party_appli_sub_time'];
        $party_activi_time = $_POST['party_activi_time'];
        $party_lectures_time = $_POST['party_lectures_time'];
        $party_develop_time = $_POST['party_develop_time'];
        $party_join_time = $_POST['party_join_time'];
        $partybranch_enter_name = $_POST['partybranch_enter_name'];
        $party_voluntary_num = $_POST['party_voluntary_num'];
        $party_correct_time = $_POST['party_correct_time'];
        $partybranch_correct_name = $_POST['partybranch_correct_name'];
        $partybranch_present_name = $_POST['partybranch_present_name'];
        //生成查询语句
        $sql="select * from stu ";
        $sqlArr=array();

        //SQL查询条件拼接函数
        function sql_search($var_name,$var){
            global $sqlArr;
            if($var!=""){
                array_push($sqlArr," $var_name = '$var' ");
            }
        }

        //SQL查询条件拼接
        sql_search('stuid',$stuid);
        sql_search('name',$name);
        sql_search('sex',$sex);
        sql_search('nation',$nation);
        sql_search('place',$place);
        sql_search('major',$major);
        sql_search('tutor_name',$tutor_name);
        sql_search('political',$political);
        sql_search('culture_mode',$culture_mode);
        sql_search('unit',$unit);
        sql_search('id_number',$id_number);
        sql_search('phone',$phone);
        sql_search('Dorm',$Dorm);
        sql_search('from_university',$from_university);
        sql_search('Wechat',$Wechat);
        sql_search('QQ',$QQ);
        sql_search('em_contact',$em_contact);
        sql_search('mail',$mail);
        sql_search('home_address',$home_address);
        sql_search('home_phone',$home_phone);
        sql_search('Marital',$Marital);
        sql_search('children',$children);
        sql_search('grade',$grade);
        sql_search('vac_type',$vac_type);
        sql_search('vac_dep_time',$vac_dep_time);
        sql_search('vac_Return_time',$vac_Return_time);
        sql_search('vac_gos',$vac_gos);
        sql_search('vac_remarks',$vac_remarks);
        sql_search('age',$age);
        sql_search('birth',$birth);
        sql_search('class',$class);
        sql_search('party_appli_sub_time',$party_appli_sub_time);
        sql_search('party_activi_time',$party_activi_time);
        sql_search('party_lectures_time',$party_lectures_time);
        sql_search('party_develop_time',$party_develop_time);
        sql_search('party_join_time',$party_join_time);
        sql_search('partybranch_enter_name',$partybranch_enter_name);
        sql_search('party_voluntary_num',$party_voluntary_num);
        sql_search('party_correct_time',$party_correct_time);
        sql_search('partybranch_correct_name',$partybranch_correct_name);
        sql_search('partybranch_present_name',$partybranch_present_name);

        //完成拼接
        if (!empty($sqlArr)){
            $sql.= "WHERE";
            $sql.=implode(" and ",$sqlArr);
        }
        //执行查询语句
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($result);
        if ($rows) {
            //echo $sql;
            header("Location:index.php?sql=$sql");
        } else {
            echo $sql;
            //echo "<script>alert('没有符合条件的数据。');
                  //window.history.back();</script>";
        }
    break;
}