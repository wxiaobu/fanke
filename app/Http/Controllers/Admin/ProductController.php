<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 商品列表
    public function getIndex()
    {
        return view('admin.product.product_list');
    }

    // 修改/添加商品
    public function getEditproduct()
    {
    	return view('admin.product.edit_product');
    }

    // 商品分类
    public function getCategory()
    {
        return view('admin.product.product_category');
    }

    // 添加分类
    public function getAddcategory()
    {
        return view('admin.product.add_category');
    }

    // 回收站
    public function getRecyclebin()
    {
        return view('admin.product.recycle_bin');
    }
}
