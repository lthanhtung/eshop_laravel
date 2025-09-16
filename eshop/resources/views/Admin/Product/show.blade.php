@extends('Admin.layout')

@section('title','Thông tin danh mục san phẩm')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Thông tin sản phẩm</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tên sản phẩm</label>
                            <div class="col-sm-10">
                                <span class="input-group-text" id="basic-default-email2">{{$product->name}}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Mô tả</label>
                            <div class="col-sm-10">
                            <textarea
                                readonly
                                id="basic-default-message"
                                class="form-control"
                            >{{$product->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Ảnh sản phẩm</label>
                            <div class="col-sm-10">
                                <span class="input-group-text" id="basic-default-email2">
                                    <img src="{{asset('uploads/product/'.$product->image)}}">
                                </span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Giá sản phẩm</label>
                            <div class="col-sm-10">
                                <span class="input-group-text" id="basic-default-email2">{{$product->price}}</span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Loại sản phẩm</label>
                            <div class="col-sm-10">
                                <span class="input-group-text" id="basic-default-email2">{{$product->category->name}}</span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Ngày tạo</label>
                            <div class="col-sm-10">
                                <span class="input-group-text" id="basic-default-email2">{{$product->created_at->format('d/m/y h:i:s')}}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Ngày cập nhập</label>
                            <div class="col-sm-10">
                                <span class="input-group-text" id="basic-default-email2">{{$product->updated_at->format('d/m/y H:i:s')}}</span>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <a href="{{route('admin.product.index')}}"><i class='bx  bx-arrow-left-stroke-circle'></i> Quay lại</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        </div>
@endsection
