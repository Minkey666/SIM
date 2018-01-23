## 学生信息管理（SAMS）
简述：
    简单学生信息管理系统，提供学生信息查询、增加、删除、修改，依场景批量修改学生信息等功能。
    
使用语言：
    前端：HTML + CSS + JavaScript
    后端：PHP + MySQL
    框架：
        前端框架 ACE 参考链接：http://www.cssmoban.com/cssthemes/7052.shtml
        后端EXCEL读取框架 PHPEXCEL 参考链接：https://github.com/PHPOffice/PHPExcel

## 文件说明

业务处理文件：
    index.php 主页。用来显示学生主信息列表，并提供查询功能。
        引用：
            search.php 查询功能入口
            list.php 渲染数据库主表查询结果
        子页面：
            edit.php 编辑单个学生信息
            vac.php 查看单个学生历史假期信息
                引用：
                list_vac.php 渲染数据库假期表查询结果
    add.php 添加单个学生信息
    upload_front.html 批量上传资料
        引用：
            write.php 文件处理核心文件，包含文件上传、EXCEL读取、数据库写入、异常信息输出等。
            引用：
                upload.php 文件上传及缓存操作
    download.php 下载表格模板

底层操作文件：
    connect.php 数据库连接
    action.php 核心操作文件、提供增删改查操作函数                             
    action_file.php 核心操作文件、提供文件上传独立增改函数                                                                                                      
                                                          
文件夹：                                                                                                                     
    ace 前端框架文件
    excel 表格模板存储
    PHPExcel 表格处理模板文件
    tables 前端主页列表样式
    upload 上传文件缓存

## 数据库初始化
CREATE DATABASE sams DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE sams;

建表语句
CREATE TABLE stu (
                                    	id INT(12) UNSIGNED NOT NULL AUTO_INCREMENT,
                                    	stuid INT(15) DEFAULT NULL,
                                        name VARCHAR(10) DEFAULT NULL, 
                                        sex VARCHAR (2) DEFAULT NULL,
                                        nation VARCHAR(2) DEFAULT NULL, 
                                        place VARCHAR(10) DEFAULT NULL, 
                                        major VARCHAR(20) DEFAULT NULL, 
                                        tutor_name VARCHAR(10) DEFAULT NULL, 
                                        political VARCHAR (10) DEFAULT NULL,
                                        culture_mode VARCHAR (10) DEFAULT NULL,
                                        unit VARCHAR(50) DEFAULT NULL, 
                                        id_number VARCHAR(18) DEFAULT NULL, 
                                        phone VARCHAR (11) DEFAULT NULL,
                                        Dorm VARCHAR(10) DEFAULT NULL, 
                                        from_university VARCHAR(50) DEFAULT NULL, 
                                        Wechat VARCHAR(20) DEFAULT NULL, 
                                        QQ VARCHAR(20) DEFAULT NULL, 
                                        em_contact VARCHAR(20) DEFAULT NULL, 
                                        mail VARCHAR(20) DEFAULT NULL, 
                                        home_address VARCHAR(50) DEFAULT NULL, 
                                        home_phone VARCHAR(20) DEFAULT NULL, 
                                        Marital VARCHAR(10) DEFAULT NULL,
                                        children VARCHAR(2) DEFAULT NULL,
                                        
                                        grade VARCHAR(10) DEFAULT NULL,
                                        vac_type VARCHAR(20) DEFAULT NULL,
                                        vac_dep_time VARCHAR(20) DEFAULT NULL,
                                        vac_Return_time VARCHAR(20) DEFAULT NULL,
                                        vac_gos VARCHAR(50) DEFAULT NULL, 
                                        vac_remarks VARCHAR(50) DEFAULT NULL, 
                                        
                                        age INT(2) DEFAULT NULL,
                                        birth VARCHAR(20) DEFAULT NULL,
                                        class VARCHAR(20) DEFAULT NULL, 
                                        party_appli_sub_time VARCHAR(20) DEFAULT NULL,
                                        party_activi_time VARCHAR(20) DEFAULT NULL,
                                        party_lectures_time VARCHAR(20) DEFAULT NULL,
                                        party_develop_time VARCHAR(20) DEFAULT NULL,
                                        party_join_time VARCHAR(20) DEFAULT NULL,
                                        partybranch_enter_name VARCHAR(50) DEFAULT NULL,
                                        party_voluntary_num VARCHAR(20) DEFAULT NULL, 
                                        party_correct_time VARCHAR(20) DEFAULT NULL,
                                        partybranch_correct_name VARCHAR(50) DEFAULT NULL, 
                                        partybranch_present_name VARCHAR(50) DEFAULT NULL, 

                                    	PRIMARY KEY (id)
                                    )ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE vac (
                                    	id INT(12) UNSIGNED NOT NULL AUTO_INCREMENT,
                                    	stuid INT(15) DEFAULT NULL,
                                        vac_type VARCHAR(20) DEFAULT NULL,
                                        vac_dep_time VARCHAR(20) DEFAULT NULL,
                                        vac_Return_time VARCHAR(20) DEFAULT NULL,
                                        vac_gos VARCHAR(50) DEFAULT NULL, 
                                        vac_remarks VARCHAR(50) DEFAULT NULL, 
                                    	PRIMARY KEY (id)
                                    )ENGINE=MyISAM DEFAULT CHARSET=utf8; 
                                    

## 作者
NAME:   MinkeyNAME  :  Minkey
EMAIL :  minkeymax@gmail.com
GIT   :  https://github.com/Minkey666/SIM
