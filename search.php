<!DOCTYPE html>
<!--
	filename: search.php
	查询页面。
--> 
<html>
<head>
	<meta charset="utf-8">
	<title>学生信息管理</title>
    <style>
        .search_input{
            float: left;
            margin-right: 30px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div >
    <div class="widget-box">
        <div class="widget-header">
            <h4>搜索条件</h4>

            <div class="widget-toolbar">
                <a href="#" data-action="collapse">
                    <i class="icon-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="widget-body">
            <div class="widget-main">
    <form action="action.php?action=search" method="post">
        <div>
            <div class="search_input"><div>学号：</div><input type="text" name="stuid"></div>
            <div class="search_input"><div>姓名：</div><input type="text" name="name"></div>
            <div class="search_input"><div>性别：</div><input type="text" name="sex"></div>
            <div class="search_input"><div>民 族：</div><input type="text" name="nation"></div>
            <div class="search_input"><div>籍贯：</div><input type="text" name="place"></div>
            <div class="search_input"><div>专业：</div><input type="text" name="major"></div>
            <div class="search_input"><div>导师姓名：</div><input type="text" name="tutor_name"></div>
            <div class="search_input"><div>政治面貌：</div><input type="text" name="political"></div>
            <div class="search_input"><div>培养方式：</div><input type="text" name="culture_mode"></div>
            <div class="search_input"><div>委培单位：</div><input type="text" name="unit"></div>
            <div class="search_input"><div>身份证号：</div><input type="text" name="id_number"></div>
            <div class="search_input"><div>手机号：</div><input type="text" name="phone"></div>
            <div class="search_input"><div>宿舍号：</div><input type="text" name="Dorm"></div>
            <div class="search_input"><div>毕业院校：</div><input type="text" name="from_university"></div>
            <div class="search_input"><div>微信号：</div><input type="text" name="Wechat"></div>
            <div class="search_input"><div>QQ号：</div><input type="text" name="QQ"></div>
            <div class="search_input"><div>紧急联系方式：</div><input type="text" name="em_contact"></div>
            <div class="search_input"><div>邮箱：</div><input type="text" name="mail"></div>
            <div class="search_input"><div>家庭住址：</div><input type="text" name="home_address"></div>
            <div class="search_input"><div>家庭电话：</div><input type="text" name="home_phone"></div>
            <div class="search_input"><div>婚姻状况：</div><input type="text" name="Marital"></div>
            <div class="search_input"><div>有无子女：</div><input type="text" name="children"></div>
            <div class="search_input"><div>年级：</div><input type="text" name="grade"></div>
            <div class="search_input"><div>假期类型：</div><input type="text" name="vac_type"></div>
            <div class="search_input"><div>离校时间：</div><input type="text" name="vac_dep_time"></div>
            <div class="search_input"><div>返校时间：</div><input type="text" name="vac_Return_time"></div>
            <div class="search_input"><div>假期去向：</div><input type="text" name="vac_gos"></div>
            <div class="search_input"><div>假期去向备注：</div><input type="text" name="vac_remarks"></div>
            <div class="search_input"><div>年龄：</div><input type="text" name="age"></div>
            <div class="search_input"><div>出生日期 ：</div><input type="text" name="birth"></div>
        <div class="search_input"><div>班级：</div><input type="text" name="class"></div>
        <div class="search_input"><div>提交入党申请书时间：</div><input type="text" name="party_appli_sub_time"></div>
        <div class="search_input"><div>确定为入党积极分子时间：</div><input type="text" name="party_activi_time"></div>
        <div class="search_input"><div>上党课时间：</div><input type="text" name="party_lectures_time"></div>
        <div class="search_input"><div>确定为发展对象时间：</div><input type="text" name="party_develop_time"></div>
        <div class="search_input"><div>入党时间：</div><input type="text" name="party_join_time"></div>
        <div class="search_input"><div>入党时所在支部名称：</div><input type="text" name="partybranch_enter_name"></div>
        <div class="search_input"><div>志愿书编号：</div><input type="text" name="party_voluntary_num"></div>
        <div class="search_input"><div>转正时间：</div><input type="text" name="party_correct_time"></div>
        <div class="search_input"><div>转正时所在党支部名称：</div><input type="text" name="partybranch_correct_name"></div>
        <div class="search_input"><div>现所在党支部名称：</div><input type="text" name="partybranch_present_name"></div>

        </div>
        <div style="clear: both;"><input type="submit" value="查找" class="icon-ok btn btn-info" style="height: 40px"></div>
    </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>