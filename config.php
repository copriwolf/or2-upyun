<?php
$bucketname    = '空间名';
$operator_name = '授权管理员账号';
$operator_pwd  = '授权管理员密码';
$upyun = new upyun("$bucketname", "$operator_name", "$operator_pwd",UpYun::ED_AUTO);
$upyun_http = $bucketname.'.b0.upaiyun.com/';
?>