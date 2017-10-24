<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // 广告列表
    public function getIndex()
    {
        return view('admin.advert.advertising_list');
    }

   // 添加/编辑广告
   public function getAdvertising()
   {
        return view('admin.advert.advertising');
   }
}
