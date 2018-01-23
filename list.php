<?php
/*
    filename: list.php
	展示学生信息列表
    下面的函数都是和stu表格绑定的
*/


// 根据SQL语句，显示查询结果
function showLists($sql) {
	require("connect.php");

	$result = mysqli_query($conn, $sql);

	if ($result && mysqli_num_rows($result)) {
		echo '<table width="800" border="1">';
		echo '
                <div class="queryBox">
					<!-- 列表-->
					<div class="queryList">
                        <table class="easyui-datagrid" cellspacing="0" cellpadding="0" width="100%" height="550"
							data-options="
							singleSelect: true,
							collapsible: true,
							fitColumns: true,
							url: \'\',
							method: \'get\',
							onLoadSuccess: function(){
							$(this).datagrid(\'freezeRow\');
							}">
							<thead data-options="frozen:true">
							    <tr>
							        <th align="center" data-options="frozen:true,field:\'operate\'">操作</th>
							        <th align="center" data-options="frozen:true,field:\'operate_vac\'">历史假期信息</th>
							        <th align="center" data-options="frozen:true,field:\'stuid\'">学号</th>
							        <th align="center" data-options="frozen:true,field:\'name\'">姓名</th>
							        <th align="center" data-options="frozen:true,field:\'phone\'">手机号码</th>
							        <th align="center" data-options="frozen:true,field:\'major\'">专业</th>							        
							        <th align="center" data-options="frozen:true,field:\'grade\'">年级</th>
							        <th align="center" data-options="frozen:true,field:\'class\'">班级</th>
							    </tr>
							</thead>
							<thead>
							    <tr class="listTit tabTh">
							         <th align="center" data-options="frozen:true,field:\'sex\'">性别</th>
								     <th align="center" data-options="frozen:true,field:\'age\'">年龄</th>
									 <th align="center" data-options="frozen:true,field:\'nation\'">民族</th>
									 <th align="center" data-options="frozen:true,field:\'place\'">籍贯</th>
									 <th align="center" data-options="frozen:true,field:\'tutor_name\'">导师姓名</th>
								     <th align="center" data-options="frozen:true,field:\'political\'">政治面貌</th>
                                     <th align="center" data-options="frozen:true,field:\'culture_mode\'">培养方式</th>
                                     <th align="center" data-options="frozen:true,field:\'unit\'">委培单位</th>
                                     <th align="center" data-options="frozen:true,field:\'id_number\'">身份证号</th>
                                     <th align="center" data-options="frozen:true,field:\'Dorm\'">宿舍号</th>
                                     <th align="center" data-options="frozen:true,field:\'from_university\'">毕业院校</th>
                                     <th align="center" data-options="frozen:true,field:\'Wechat\'">微信号</th>
                                     <th align="center" data-options="frozen:true,field:\'QQ\'">QQ号</th>
                                     <th align="center" data-options="frozen:true,field:\'em_contact\'">紧急联系方式</th>
                                     <th align="center" data-options="frozen:true,field:\'mail\'">邮箱</th>
                                     <th align="center" data-options="frozen:true,field:\'home_address\'">家庭住址</th>
                                     <th align="center" data-options="frozen:true,field:\'home_phone\'">家庭电话</th>
                                     <th align="center" data-options="frozen:true,field:\'Marital\'">婚姻状况</th>
                                     <th align="center" data-options="frozen:true,field:\'children\'">有无子女</th>
                                     <th align="center" data-options="frozen:true,field:\'vac_type\'">假期类型</th>
                                     <th align="center" data-options="frozen:true,field:\'vac_dep_time\'">离校时间</th>
                                     <th align="center" data-options="frozen:true,field:\'vac_Return_time\'">返校时间</th>
                                     <th align="center" data-options="frozen:true,field:\'vac_go\'">假期去向</th>
                                     <th align="center" data-options="frozen:true,field:\'vac_remark\'">备注</th>
                                     <th align="center" data-options="frozen:true,field:\'birth\'">出生日期</th>
                                     <th align="center" data-options="frozen:true,field:\'party_appli_sub_time\'">提交入党申请书时间</th>
                                     <th align="center" data-options="frozen:true,field:\'party_activi_time\'">确定为入党积极分子时间</th>
                                     <th align="center" data-options="frozen:true,field:\'party_lectures_time\'">上党课时间</th>
                                     <th align="center" data-options="frozen:true,field:\'party_develop_time\'">确定为发展对象时间</th>
                                     <th align="center" data-options="frozen:true,field:\'party_join_time\'">入党时间</th>
                                     <th align="center" data-options="frozen:true,field:\'partybranch_enter_name\'">入党时所在支部名称</th>
                                     <th align="center" data-options="frozen:true,field:\'party_voluntary_num\'">志愿书编号</th>
                                     <th align="center" data-options="frozen:true,field:\'party_correct_time\'">转正时间</th>
                                     <th align="center" data-options="frozen:true,field:\'partybranch_correct_name\'">转正时所在党支部名称</th>
                                     <th align="center" data-options="frozen:true,field:\'partybranch_present_name\'">现所在党支部名称</th>
                                     
								</tr>
							</thead>
              ';

		while ($row = mysqli_fetch_assoc($result)) {
            $stuid = $row['stuid'];
            $name = $row['name'];
            $sex = $row['sex'];
            $nation = $row['nation'];
            $place = $row['place'];
            $major = $row['major'];
            $tutor_name = $row['tutor_name'];
            $political = $row['political'];
            $culture_mode = $row['culture_mode'];
            $unit = $row['unit'];
            $id_number = $row['id_number'];
            $phone = $row['phone'];
            $Dorm = $row['Dorm'];
            $from_university = $row['from_university'];
            $Wechat = $row['Wechat'];
            $QQ = $row['QQ'];
            $em_contact = $row['em_contact'];
            $mail = $row['mail'];
            $home_address = $row['home_address'];
            $home_phone = $row['home_phone'];
            $Marital = $row['Marital'];
            $children = $row['children'];
            $grade = $row['grade'];
            $vac_type = $row['vac_type'];
            $vac_dep_time = $row['vac_dep_time'];
            $vac_Return_time = $row['vac_Return_time'];
            $vac_gos = $row['vac_gos'];
            $vac_remarks = $row['vac_remarks'];
            $age = $row['age'];
            $birth = $row['birth'];
            $class = $row['class'];
            $party_appli_sub_time = $row['party_appli_sub_time'];
            $party_activi_time = $row['party_activi_time'];
            $party_lectures_time = $row['party_lectures_time'];
            $party_develop_time = $row['party_develop_time'];
            $party_join_time = $row['party_join_time'];
            $partybranch_enter_name = $row['partybranch_enter_name'];
            $party_voluntary_num = $row['party_voluntary_num'];
            $party_correct_time = $row['party_correct_time'];
            $partybranch_correct_name = $row['partybranch_correct_name'];
            $partybranch_present_name = $row['partybranch_present_name'];

            echo '
            <tbody id="content" class="easyui-panel" style="height:200px" data-options="href:\'\'">
					<tr class="listTr">
						<td>
			';
            echo "<a href =action.php?action=del&stuid={$stuid} onclick=\"if(confirm('确实要删除数据吗？')) return true;else return false; \">删除 </a>";
            echo "<a href =edit.php?stuid={$stuid}>修改 </a>";
			echo "</td>";
            echo "<td align=\"center\" ><a href =vac.php?stuid={$stuid}>查看 </a></td>";
            echo "<td>$stuid</td>";
            echo "<td>$name</td>";
            echo "<td>$phone</td>";
            echo "<td>$major</td>";
            echo "<td>$grade</td>";
            echo "<td>$class</td>";

            echo "<td>$sex</td>";
            echo "<td>$age</td>";
            echo "<td>$nation</td>";
            echo "<td>$place</td>";
            echo "<td>$tutor_name</td>";
            echo "<td>$political</td>";
            echo "<td>$culture_mode</td>";
            echo "<td>$unit</td>";
            echo "<td>$id_number</td>";
            echo "<td>$Dorm</td>";
            echo "<td>$from_university</td>";
            echo "<td>$Wechat</td>";
            echo "<td>$QQ</td>";
            echo "<td>$em_contact</td>";
            echo "<td>$mail</td>";
            echo "<td>$home_address</td>";
            echo "<td>$home_phone</td>";
            echo "<td>$Marital</td>";
            echo "<td>$children</td>";
            echo "<td>$vac_type</td>";
            echo "<td>$vac_dep_time</td>";
            echo "<td>$vac_Return_time</td>";
            echo "<td>$vac_gos</td>";
            echo "<td>$vac_remarks</td>";
            echo "<td>$birth</td>";
            echo "<td>$party_appli_sub_time</td>";
            echo "<td>$party_activi_time</td>";
            echo "<td>$party_lectures_time</td>";
            echo "<td>$party_develop_time</td>";
            echo "<td>$party_join_time</td>";
            echo "<td>$partybranch_enter_name</td>";
            echo "<td>$party_voluntary_num</td>";
            echo "<td>$party_correct_time</td>";
            echo "<td>$partybranch_correct_name</td>";
            echo "<td>$partybranch_present_name</td>";

            echo '
                    </tr>
            </tbody>
            ';
		}
		
		echo '
                </table>
                </div><!-- queryBox -->
                </div><!-- querylist -->
              ';
	} else {
		echo '无数据！';
	}

	mysqli_close($conn);
}

// 得到数据总数
function getTotalRecords($tablename = "stu") {
	require("connect.php");

	$sql = "SELECT COUNT(stuid) AS c FROM $tablename";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	$count = $data['c'];

	mysqli_close($conn);
	return $count;
}

/*
	函数功能：以分页的方式显示用户数据列表
	参数说明：$page_item, 每页显示的记录。 默认每页显示5项。
		     $tablename, 要分页显示的表名称。默认是user表。
*/
function showPageList($page_item = 10, $tablename = "stu") {
	$page = isset($_GET['page']) ? (int) $_GET['page'] : 1; // 当前页
	$total = ceil(getTotalRecords() / $page_item); // 得到总页数
	if ($page <= 1) $page = 1;
	if ($page >= $total) $page = $total;

	$offset = ($page - 1) * $page_item;
	$sql = " SELECT 
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
children,
grade,
vac_type,
vac_dep_time,
vac_Return_time,
vac_gos,
vac_remarks,
age,
birth,
class,
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
			 FROM $tablename ORDER BY stuid DESC LIMIT $offset, $page_item ";

	showLists($sql);

	echo "<a href='index.php?page=1'>首页</a> | ";
	echo "<a href='index.php?page=" . ($page - 1) . "'>上一页</a> | ";
	echo "<a href='index.php?page=" . ($page + 1) . "'>下一页</a> | ";
	echo "<a href='index.php?page={$total}'>尾页</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "[ $page / $total ]";
}
