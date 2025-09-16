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
            <h5 class="card-header">Danh sách đơn hàng</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Khách hàng</th>
                            <th>Tổng đơn hàng</th>
                            <th>trang thái</th>
                            <th>Ngày tạo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $orders)
                            <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$orders->id}}</strong>
                                </td>
                                <td>{{$orders->user->name}}</td>
                                <td>{{$orders->total_price}}</td>
                                <td><span class="badge bg-label-primary me-1">{{$orders->status}}</span></td>

                                <td><span class="badge bg-label-primary me-1">{{$orders->created_at->format('d/m/y H:i:s')}}</span></td>
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

                                            <a class="dropdown-item" href="{{route('admin.order.show',$orders->id)}}"
                                            ><i class="bx bx-show-alt me-1"></i> Show</a
                                            >
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

