<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // 订单列表
    public function getIndex()
    {
        return view('admin.order.order_list');
    }

    // 订单详情
    public function getDetail()
    {
    	return view('admin.order.order_detail');
    }
}
