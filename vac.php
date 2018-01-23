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

				<div class="main-content">
					<div class="page-content">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">历史假期去向信息</h3>
										<!-- 分割线 --><div class="hr hr-18 dotted hr-double"></div>
										<div class="table-header" style="margin-bottom: 10px">
											您正在查看学号为<?php $stuid =$_GET['stuid']; echo $stuid ?>的学生历史假期信息
										</div>

										<?php $stuid =$_GET['stuid']; require("list_vac.php"); ?>
										<!-- 分割线 --><div class="hr hr-18 dotted hr-double"></div>

									</div>
								</div>
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
