<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $products = product::all();
        $products = product::with('category')->get();
        return view('Admin.Product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category =  category::all();
        return view('Admin.Product.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        if ($request->hasFile('image')) {
            //Tạo thư mục nếu chưa có
            $destinationPath = public_path('uploads/product');
            if(!file_exists($destinationPath)){
                mkdir($destinationPath,0755,true);
            }

            //Xử lý úp ảnh
            $file = $request->file('image');
            $nameFile = time().'_'.$file->getClientOriginalName();
            $file->move($destinationPath,$nameFile);

            //Thêm vào data
            $data['image'] = $nameFile;
        }

        product::create($data);
        return redirect()->route('admin.product.index');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = product::with('category')->find($id);
        return view('Admin.Product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = product::with('category')->find($id);
        $category = category::all();
        return view('Admin.Product.edit',compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = product::findOrFail($id);
        $data = $request->all();
        //Xử lý ảnh
        if ($request->hasFile('image')) {
            $file = $request->file('image');
//            $fileName = $file->getClientOriginalName(); đăt tên file
            $fileName = time().'_'.$file->getClientOriginalName();

            // tạo thư mục nếu chưa tồn tại
            $destinationPath = public_path('uploads/product');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }


//            $file->move('uploads/product',$fileName); Dich File đến thư mục
            $file->move('uploads/product',$fileName);

            //Xóa ảnh cũ (nếu có)
            if ($product->image && file_exists($destinationPath.'/'.$product->image)) {
                unlink(public_path('uploads/product/'.$product->image));
            }
            $data['image'] = $fileName;
        }
        $product->update($data);
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = product::findOrFail($id);
        if ($product->image && file_exists(public_path('uploads/product/'.$product->image))) {
            unlink(public_path('uploads/product/'.$product->image));
        }
        //Xóa bản ghi
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
