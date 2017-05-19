<?php
require './UserModel.class.php';  //加载模型类文件

//实例化模型类，并从中取得2份数据
$obj_user = new UserModel();
$data1 = $obj_user->GetUserAll(); //是一个二维数组
$data2 = $obj_user->GetUserCount();  //是一个数字

//载入视图文件,显示结果
include './showAllUser_view.html';  //加载视图文件，在网页中显示