﻿<!DOCTYPE html>
<html>
<head>
<title>添加新会员</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('admin/css/adminStyle.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i class="add_user"></i><em>添加新会员</em></span>
  </div>
  <form action="{{asset('admin/user/index')}}">
  <table class="list-style">
   <tr>
    <td style="width:15%;text-align:right;">会员昵称：</td>
    <td><input type="text" class="textBox length-middle"/></td>
   </tr>
   <tr>
    <td style="text-align:right;">会员邮箱：</td>
    <td><input type="text" class="textBox length-middle"/></td>
   </tr>
   <tr>
    <td style="text-align:right;">设置密码：</td>
    <td><input type="password" class="textBox length-middle"/></td>
   </tr>
   <tr>
    <td style="text-align:right;">手机号码：</td>
    <td><input type="text" class="textBox length-middle"/></td>
   </tr>
   <tr>
    <td style="text-align:right;"></td>
    <td><input type="submit" class="tdBtn" value="添加新用户"/></td>
   </tr>
  </table>
  </form>
 </div>
</body>
</html>