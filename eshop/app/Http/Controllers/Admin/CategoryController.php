<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = category::all();
        return view('Admin.Category.index',['category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages_create = '';
        $category = category::create($request->all());
        if ($category)
            $messages_create= "Thêm mới danh mục sản phẩm thành công";
        else
            $messages_create="Thêm mơi danh mục sản phẩm thất bại";
        return redirect()->route('admin.category.index')->with('messages_sussess',$messages_create);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $showCategory = category::findOrFail($id);

        return view('Admin.Category.show',['showCategory'=>$showCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = category::findOrFail($id);
        return view('Admin.Category.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $messages_update = '';
       $category = category::findOrFail($id);
       $category->update($request->all());
       if($category)
           $messages_update='Cập nhập danh mục sản phẩm thành công';
       else
           $messages_update ='Cập nhập danh mục sản phẩm thất bại';
        return redirect()->route('admin.category.index')->with('messages_sussess',$messages_update);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $messages_delete = '';
        if (!category::destroy($id))
            $messages_delete ='Xóa danh mục sản phẩm không thành công';
        else
            $messages_delete ='Xóa danh mục sản phẩm thành công';
        return redirect()->route('admin.category.index')->with('messages_failed',$messages_delete);

    }
}
