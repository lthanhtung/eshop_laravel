@extends('Admin.layout')
@section('title','Danh mục sản phẩm')
@section('content')


    <div class="container-xxl flex-grow-1 container-p-y">
        @if(session('messages_sussess'))
            <div class="alert alert-primary alert-dismissible" role="alert">
                {{session('messages_sussess')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session('messages_failed'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                {{session('messages_failed')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endif

        <!-- Bordered Table -->
        <div class="card">
            <h5 class="card-header">Danh sáchsản phẩm</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Mô tả</th>
                            <th>Giá</th>
                            <th>Ảnh</th>
                            <th>Danh mục sản phẩm</th>
                            <th>Ngày tạo</th>
                            <th>Ngày cập nhập</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $products)
                            <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$products->name}}</strong>
                                </td>
                                <td>{{\Illuminate\Support\Str::limit($products->description,30,'...')}}</td>
                                <td>{{$products->price}}</td>
                                <td>{{\Illuminate\Support\Str::limit($products->image,10,'...')}}</td>
                                <td>{{$products->category->name}}</td>

                                <td><span class="badge bg-label-primary me-1">{{$products->created_at->format('d/m/y H:i:s')}}</span></td>
                                <td><span class="badge bg-label-primary me-1">{{$products->updated_at->format('d/m/y h:i:s')	}}</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            type="button"
                                            class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"
                                        >
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">

                                            <a class="dropdown-item" href="{{route('admin.product.show',$products->id)}}"
                                            ><i class="bx bx-show-alt me-1"></i> Show</a
                                            >

                                            <a class="dropdown-item" href="{{route('admin.product.edit',$products->id)}}"
                                            ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                            >

                                            <form action="{{route('admin.product.destroy',$products->id)}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button class="dropdown-item" type="submit">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Bordered Table -->
    </div>
@endsection

