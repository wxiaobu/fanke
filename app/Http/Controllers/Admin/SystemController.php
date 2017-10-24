<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // 站点基本设置
    public function getSet()
    {
        return view('admin.system.basic_settings');
    }

    // 站点管理员
    public function getAdminlist()
    {
        return view('admin.system.admin_list');
    }

    // 添加管理员
    public function getAddadminuser()
    {
        return view('admin.system.add_adminuser');
    }

    //修改密码
    public function getRevisepass()
    {
        return view('admin.system.revise_password');
    }
}
