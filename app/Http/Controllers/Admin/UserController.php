<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // 会员列表
    public function getIndex()
    {
        return view('admin.user.user_list');
    }

    //添加会员
    public function getAdduser()
    {
        return view('admin.user.add_user');
    }

    //修改会员
    public function getEdituser()
    {
        return view('admin.user.edit_user');
    }

    // 资金管理
    public function getAccount()
    {
        return view('admin.user.account');
    }

    // 资金变动明细
    public function getAccountdetails()
    {
        return view('admin.user.account_details');
    }

    // 会员等级
    public function getUserrank()
    {
        return view('admin.user.user_rank');
    }

    // 添加会员等级
    public function getAdduserrank()
    {
        return view('admin.user.add_user_rank');
    }

    //会员留言
    public function getUsermessage()
    {
        return view('admin.user.user_message');
    }

    // 会员留言回复
    public function getReplymessage()
    {
        return view('admin.user.reply_message');
    }
}
