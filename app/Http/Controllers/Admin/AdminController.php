<?php
/**
 * xxx  控制器
 *
 * Class AdminController
 * @author 陈荣
 * @date 2016-12-26 06:35:53
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * 列表
     *
     * @return Response
    */
    public function index()
    {
        return view('admin.admin.index');
    }

    /**
    * 新增
    *
    * @return Response
    */
    public function create()
    {
        
    }

    /**
    * 新增入库
    *
    * @param Request $request
    * @return Response
    */
    public function store(Request $request)
    {

    }

    /**
    * 显示信息
    *
    * @param int $id
    * @return Response
    */
    public function show($id)
    {

    }

    /**
    * 编辑信息
    *
    * @param int $id
    * @return Response
    */
    public function edit($id)
    {

    }

    /**
    * 修改信息入库
    *
    * @param Request $request
    * @param int $id
    * @return Response
    */
    public function update(Request $request, $id)
    {

    }

    /**
      * 删除
      *
      * @param int $id
      * @return Response
      */
    public function destroy($id)
    {
        
    }
}