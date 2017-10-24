<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理员列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('admin/css/adminStyle.css')}}" rel="stylesheet" type="text/css" />
<script src="{{asset('admin/js/jquery.js')}}"></script>
<script src="{{asset('admin/js/public.js')}}"></script>
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i class="user"></i><em>管理员列表</em></span>
    <span class="modular fr"><a href="{{asset('admin/system/addadminuser')}}" class="pt-link-btn">+添加管理员</a></span>
  </div>
  <table class="list-style Interlaced">
   <tr>
    <th>管理员账号</th>
    <th>电子邮箱地址</th>
    <th>加入时间</th>
    <th>最后登陆时间</th>
    <th>操作</th>
   </tr>
   <tr>
    <td>DeathGhost</td>
    <td>DeathGhost@sina.cn</td>
    <td class="center">2015-04-18 17:38</td>
    <td class="center">2015-04-19 15:38</td>
    <td class="center">
     <a href="{{asset('admin/system/revisepass')}}"><img src="{{asset('admin/images/icon_edit.gif')}}"/></a>
     <a onclick="javaScript:confirm('您确定要禁用吗？')"><img src="{{asset('admin/images/禁用 (2).png')}}"/></a>
    </td>
   </tr>
  </table>
 </div>
</body>
</html>