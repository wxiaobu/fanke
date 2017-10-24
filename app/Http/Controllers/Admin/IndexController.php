<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // 后台主页面的加载
    public function getIndex()
    {
        return view('admin.index');
    }
    // 起始页
    public function getMain()
    {
        return view('admin.main');
    }
    public function getMenu()
    {
        return view('admin.menu');
    }

    public function getBar()
    {
        return view('admin.bar');
    }

    public function getTop()
    {
        return view('admin.top');
    }

}
