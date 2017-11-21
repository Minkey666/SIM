<?php
/*
    filename: connect.php
	连接数据库
*/

$conn = mysqli_connect('localhost', 'root', '', 'sams');

if (mysqli_errno($conn)) {
	mysqli_error($conn);
	exit;
}

mysqli_set_charset($conn, 'utf8');