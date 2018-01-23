<!DOCTYPE html>
<html lang="zh-cmn-Hans">
	<head>
		<meta charset="utf-8" />
		<title>学生信息管理系统</title>
		<!-- basic styles -->

		<link href="ace/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="ace/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="ace/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="ace/assets/css/dropzone.css" />

		<!-- fonts -->

        <!--为提升加载速度注释此行
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
        -->

        <!-- ace styles -->

		<link rel="stylesheet" href="ace/assets/css/ace.min.css" />
		<link rel="stylesheet" href="ace/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="ace/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="ace/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="ace/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="ace/assets/js/html5shiv.js"></script>
		<script src="ace/assets/js/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="ace/thirdParty/easyui/themes/default/easyui.css">
        <link rel="stylesheet" type="text/css" href="ace/thirdParty/easyui/themes/icon.css">
        <link rel="stylesheet" href="ace/css/base.css"/>
        <link rel="stylesheet" href="ace/css/style.css"/>
        <script src="ace/thirdParty/jquery/jquery-1.9.1.min.js"></script>
        <script src="ace/thirdParty/easyui/jquery.easyui.min.js"></script>
        <script src="ace/thirdParty/easyui/easyui-lang-zh_CN.js"></script>

	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							学生信息管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-collapse" id="sidebar-collapse" style="height: 100">
					</div>

					<ul class="nav nav-list">
						<li>
							<a href="index.php">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 主页 </span>
							</a>
						</li>

						<li>
							<a href="add.php">
								<i class="icon-edit"></i>
								<span class="menu-text"> 添加学生信息 </span>
							</a>
						</li>

						<li>
							<a href="upload_front.html">
								<i class="icon-list"></i>
								<span class="menu-text"> 批量上传资料 </span>
							</a>
						</li>
                        <li>
                            <a href="download.php">
                                <i class="icon-list-alt"></i>
                                <span class="menu-text"> 下载表格模板 </span>
                            </a>
                        </li>
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div><!-- 导航边栏 -->

                <?php
                require('connect.php');
                $stuid = $_GET['stuid'];
                $sql = "SELECT * FROM stu WHERE stuid = $stuid";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $row = mysqli_fetch_assoc($result);
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
                } else {
                    die("没有要修改的数据！");
                }
                ?>
                <div class="main-content">
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">修改学生信息</h3>
										<div class="table-header">
                                            您正在修改学号为 <strong><?php echo $stuid ?></strong> 的学生信息。
										</div>


                                        <form class="form-horizontal" role="form" action="action.php?action=edit" method="post">
                                            <div class="hr hr-24"></div><div style="font-size: 12px;color: #0b6cbc ">&nbsp&nbsp&nbsp 基本信息<br></div><!-- 小下划线+文字 -->
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">学号：</label>
                                                <div class="col-sm-9">
                                                    <input name="stuid" value="<?php echo $stuid ?>" type="text" id="form-field-1" placeholder="请输入学号（必输,15位以内数字）" class="col-xs-10 col-sm-5" required="required" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">姓名：</label>
                                                <div class="col-sm-9">
                                                    <input name="name" value="<?php echo $name ?>" type="text" id="form-field-1" placeholder="请输入姓名" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">性别：</label>
                                                <div class="col-sm-9">
                                                    <input name="sex" value="<?php echo $sex ?>" type="text" id="form-field-1" placeholder="请输入性别" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">民族：</label>
                                                <div class="col-sm-9">
                                                    <input name="nation" value="<?php echo $nation ?>" type="text" id="form-field-1" placeholder="请输入民族" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">籍贯：</label>
                                                <div class="col-sm-9">
                                                    <input name="place" value="<?php echo $place ?>" type="text" id="form-field-1" placeholder="请输入籍贯" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">专业：</label>
                                                <div class="col-sm-9">
                                                    <input name="major" value="<?php echo $major ?>" type="text" id="form-field-1" placeholder="请输入专业" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">导师姓名：</label>
                                                <div class="col-sm-9">
                                                    <input name="tutor_name" value="<?php echo $tutor_name ?>" type="text" id="form-field-1" placeholder="请输入导师姓名" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">政治面貌：</label>
                                                <div class="col-sm-9">
                                                    <input name="political" value="<?php echo $political ?>" type="text" id="form-field-1" placeholder="请输入政治面貌" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">培养方式：</label>
                                                <div class="col-sm-9">
                                                    <input name="culture_mode" value="<?php echo $culture_mode ?>" type="text" id="form-field-1" placeholder="请输入培养方式" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">委培单位：</label>
                                                <div class="col-sm-9">
                                                    <input name="unit" value="<?php echo $unit ?>" type="text" id="form-field-1" placeholder="请输入委培单位" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">身份证号：</label>
                                                <div class="col-sm-9">
                                                    <input name="id_number" value="<?php echo $id_number ?>" type="text" id="form-field-1" placeholder="请输入身份证号" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">手机号：</label>
                                                <div class="col-sm-9">
                                                    <input name="phone" value="<?php echo $phone ?>" type="text" id="form-field-1" placeholder="请输入手机号" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">宿舍号：</label>
                                                <div class="col-sm-9">
                                                    <input name="Dorm" value="<?php echo $Dorm ?>" type="text" id="form-field-1" placeholder="请输入宿舍号" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">毕业院校：</label>
                                                <div class="col-sm-9">
                                                    <input name="from_university" value="<?php echo $from_university ?>" type="text" id="form-field-1" placeholder="请输入毕业院校" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">微信号：</label>
                                                <div class="col-sm-9">
                                                    <input name="Wechat" value="<?php echo $Wechat ?>" type="text" id="form-field-1" placeholder="请输入微信号" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">QQ号：</label>
                                                <div class="col-sm-9">
                                                    <input name="QQ" value="<?php echo $QQ ?>" type="text" id="form-field-1" placeholder="请输入QQ号" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">紧急联系方式：</label>
                                                <div class="col-sm-9">
                                                    <input name="em_contact" value="<?php echo $em_contact ?>" type="text" id="form-field-1" placeholder="请输入紧急联系方式" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">邮箱：</label>
                                                <div class="col-sm-9">
                                                    <input name="mail" value="<?php echo $mail ?>" type="text" id="form-field-1" placeholder="请输入邮箱" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">家庭住址：</label>
                                                <div class="col-sm-9">
                                                    <input name="home_address" value="<?php echo $home_address ?>" type="text" id="form-field-1" placeholder="请输入家庭住址" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">家庭电话：</label>
                                                <div class="col-sm-9">
                                                    <input name="home_phone" value="<?php echo $home_phone ?>" type="text" id="form-field-1" placeholder="请输入家庭电话" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">婚姻状况：</label>
                                                <div class="col-sm-9">
                                                    <input name="Marital" value="<?php echo $Marital ?>" type="text" id="form-field-1" placeholder="请输入婚姻状况" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">有无子女：</label>
                                                <div class="col-sm-9">
                                                    <input name="children" value="<?php echo $children ?>" type="text" id="form-field-1" placeholder="请输入子女情况" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>

                                            <div class="hr hr-24"></div><div style="font-size: 12px;color: #0b6cbc ">&nbsp&nbsp&nbsp 入党信息</div><!-- 小下划线+文字 -->
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">年龄：</label>
                                                <div class="col-sm-9">
                                                    <input name="age" value="<?php echo $age ?>" type="text" id="form-field-1" placeholder="请输入学生年龄（2位以内数字）" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">出生日期：</label>
                                                <div class="col-sm-9">
                                                    <input name="birth" value="<?php echo $birth ?>" type="text" id="form-field-1" placeholder="请输入出生日期" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">班级：</label>
                                                <div class="col-sm-9">
                                                    <input name="class" value="<?php echo $class ?>" type="text" id="form-field-1" placeholder="请输入班级" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">提交入党申请书时间：</label>
                                                <div class="col-sm-9">
                                                    <input name="party_appli_sub_time" value="<?php echo $party_appli_sub_time ?>" type="text" id="form-field-1" placeholder="请输入提交入党申请书时间" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">确定为入党积极分子时间：</label>
                                                <div class="col-sm-9">
                                                    <input name="party_activi_time" value="<?php echo $party_activi_time ?>" type="text" id="form-field-1" placeholder="请输入确定为入党积极分子时间" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">上党课时间：</label>
                                                <div class="col-sm-9">
                                                    <input name="party_lectures_time" value="<?php echo $party_lectures_time ?>" type="text" id="form-field-1" placeholder="请输入上党课时间" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">确定为发展对象时间：</label>
                                                <div class="col-sm-9">
                                                    <input name="party_develop_time" value="<?php echo $party_develop_time ?>" type="text" id="form-field-1" placeholder="请输入确定为发展对象时间" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">入党时间：</label>
                                                <div class="col-sm-9">
                                                    <input name="party_join_time" value="<?php echo $party_join_time ?>" type="text" id="form-field-1" placeholder="请输入入党时间" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">入党时所在支部名称：</label>
                                                <div class="col-sm-9">
                                                    <input name="partybranch_enter_name" value="<?php echo $partybranch_enter_name ?>" type="text" id="form-field-1" placeholder="请输入入党时所在支部名称" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">志愿书编号：</label>
                                                <div class="col-sm-9">
                                                    <input name="party_voluntary_num" value="<?php echo $party_voluntary_num ?>" type="text" id="form-field-1" placeholder="请输入志愿书编号" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">转正时间：</label>
                                                <div class="col-sm-9">
                                                    <input name="party_correct_time" value="<?php echo $party_correct_time ?>" type="text" id="form-field-1" placeholder="请输入转正时间" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">转正时所在党支部名称：</label>
                                                <div class="col-sm-9">
                                                    <input name="partybranch_correct_name" value="<?php echo $partybranch_correct_name ?>" type="text" id="form-field-1" placeholder="请输入转正时所在党支部名称" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">现所在党支部名称：</label>
                                                <div class="col-sm-9">
                                                    <input name="partybranch_present_name" value="<?php echo $partybranch_present_name ?>" type="text" id="form-field-1" placeholder="请输入现所在党支部名称" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>

                                            <div class="hr hr-24"></div><div style="font-size: 12px;color: #0b6cbc ">&nbsp&nbsp&nbsp 假期去向</div><!-- 小下划线+文字 -->
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">年级：</label>
                                                <div class="col-sm-9">
                                                    <input name="grade" value="<?php echo $grade ?>" type="text" id="form-field-1" placeholder="请输入年级" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">假期类型：</label>
                                                <div class="col-sm-9">
                                                    <input name="vac_type" value="<?php echo $vac_type ?>" type="text" id="form-field-1" placeholder="请输入假期类型" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">离校时间：</label>
                                                <div class="col-sm-9">
                                                    <input name="vac_dep_time" value="<?php echo $vac_dep_time ?>" type="text" id="form-field-1" placeholder="请输入离校时间" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">返校时间：</label>
                                                <div class="col-sm-9">
                                                    <input name="vac_Return_time" value="<?php echo $vac_Return_time ?>" type="text" id="form-field-1" placeholder="请输入返校时间" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">假期去向：</label>
                                                <div class="col-sm-9">
                                                    <input name="vac_gos" value="<?php echo $vac_gos ?>" type="text" id="form-field-1" placeholder="请输入假期去向" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>
                                            <div class="form-group"><!-- 文本框 -->
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">备注：</label>
                                                <div class="col-sm-9">
                                                    <input name="vac_remarks" value="<?php echo $vac_remarks ?>" type="text" id="form-field-1" placeholder="请输入备注" class="col-xs-10 col-sm-5" />
                                                </div>
                                            </div>

                                            <div class="hr hr-24"></div><!-- 小下划线-->
                                            <div class="clearfix form-actions"><!-- 提交-->
                                                <div class="col-md-offset-3 col-md-9">
                                                    <input type="submit" value="提交" class="icon-ok btn btn-info bigger-110">
                                                    <input type="reset" value="恢复" class="icon-undo btn bigger-110">
                                                </div>
                                            </div>
                                            <div class="hr hr-24"></div><!-- 小下划线-->

                                        </form>
                                        <!-- 分割线 --><div class="hr hr-18 dotted hr-double"></div>

									</div>
								</div>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择色调</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> 侧边栏锁定</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> 右侧导航栏</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								窄距模式
							</label>
						</div>
					</div>
				</div><!-- 页面控制器 -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

        <!--为提升加载速度注释此行
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        -->

        <!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='ace/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='ace/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='ace/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="ace/assets/js/bootstrap.min.js"></script>
		<script src="ace/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="ace/assets/js/dropzone.min.js"></script>

		<!-- ace scripts -->

		<script src="ace/assets/js/ace-elements.min.js"></script>
		<script src="ace/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	
</body>
</html>
