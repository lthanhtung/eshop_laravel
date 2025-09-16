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
            <h5 class="card-header">Danh sách danh mục sản phẩm</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Tên sản phẩm</th>
                            <th>Mô tả</th>
                            <th>Ngày tạo</th>
                            <th>Ngày cập nhập</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $categories)
                            <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$categories->id}}</strong>
                                </td>
                                <td>{{$categories->name}}</td>
                                <td>{{\Illuminate\Support\Str::limit($categories->description,50,'...')}}</td>
                                <td><span class="badge bg-label-primary me-1">{{$categories->created_at->format('d/m/y H:i:s')}}</span></td>
                                <td><span class="badge bg-label-primary me-1">{{$categories->updated_at->format('d/m/y h:i:s')	}}</span></td>
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

                                            <a class="dropdown-item" href="{{route('admin.category.show',$categories->id)}}"
                                            ><i class="bx bx-show-alt me-1"></i> Show</a
                                            >

                                            <a class="dropdown-item" href="{{route('admin.category.edit',$categories->id)}}"
                                            ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                            >

                                            <form action="{{route('admin.category.destroy',$categories->id)}}" method="post">
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

