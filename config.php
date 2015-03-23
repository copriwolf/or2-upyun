<?php
//登陆页面的账号密码
define(username, test_user);
define(password, test_pass);
//upyun设置
$bucketname    = '又拍云空间名';
$operator_name = '又拍云授权管理用户名';
$operator_pwd  = '又拍云授权管理密码';
$file_dir = '/'
$upyun_http = 'http://'.$bucketname.'.b0.upaiyun.com/';
$UpYun_net = 'UpYun::ED_AUTO';

//$file_dir设置上传的目录，默认为根目录'/'，若更改目录，必须以'/'结束

//$UpYun_net接入点有四个值可选：
//		UpYun::ED_AUTO 根据网络条件自动选择接入点
//		UpYun::ED_TELECOM 电信接入点
//		UpYun::ED_CNC 联通网通接入点
//		UpYun::ED_CTT 移动铁通接入点
?>