数据库

CREATE DATABASE sams DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE sams;

CREATE TABLE stu (
	id INT(12) UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(20) DEFAULT NULL, 
	sex CHAR(1) DEFAULT NULL, 
	age INT(4) DEFAULT NULL,
	classid INT(6) DEFAULT NULL,
	PRIMARY KEY (id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;


## 文件布局说明
list.php 这个文件使用来渲染显示数据库查询结果的，定义了分页显示和不分页显示。

index.php 入口文件，该页面用来显示学生列表。分三种情况，默认显示全部学生，当
检测到分页变量page时，以分页显示，当有sql查询参数传来时，则按查询参数显示。

add.php 添加学生

edit.php 编辑学生 

search.php 查找学生 

page.php 点击上下一页时，用次来显示分页结果 

menu.php 菜单 

action.php 该文件是对所有操作进行处理，是核心文件。通过匹配GET方法传参的值，来确定
需要选取的操作。