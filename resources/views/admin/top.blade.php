﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>header</title>
<script LANGUAGE="javascript"> 
<!-- 
function openwin() { window.alert ('小编已经为您清除成功啦 ^ v ^!') 
//写成一行 
} 
//--> 
</script> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('admin/css/adminStyle.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="header">
 <div class="logo">
  <img src="{{asset('admin/images/admin_logo.png')}}" title="在哪儿"/>
 </div>
 <div class="fr top-link">
  <a href="#前台主页" target="_blank" title="访问站点(前台主页)"><i class="shopLinkIcon"></i><span>访问站点</span></a>
  <a href="admin_list.html" target="mainCont" title="DeathGhost"><i class="adminIcon"></i><span>管理员：DeathGhost</span></a>
  <a href="#" title="修改密码" onclick="openwin()"><i class="clearIcon"></i><span>清除缓存</span></a>
  <a href="{{asset('admin/system/revisepass')}}" target="mainCont" title="修改密码"><i class="revisepwdIcon"></i><span>修改密码</span></a>
  <a href="{{asset('admin/login/index')}}" title="安全退出" style="background:rgb(60,60,60);" target="_top"><i class="quitIcon"></i><span>安全退出</span></a>
 </div>
</div>
</body>
</html>