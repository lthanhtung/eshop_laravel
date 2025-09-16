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
            <h5 class="card-header">Danh sách khách hàng</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>Quyền</th>
                            <th>Ngày tạo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $users)
                            <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$users->id}}</strong>
                                </td>
                                <td>{{$users->name}}</td>
                                <td>{{$users->email}}</td>
                                <td><span class="badge bg-label-primary me-1">{{$users->role}}</span></td>

                                <td><span class="badge bg-label-primary me-1">{{$users->created_at->format('d/m/y H:i:s')}}</span></td>
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

                                            <a class="dropdown-item" href="{{route('admin.user.show',$users->id)}}"
                                            ><i class="bx bx-show-alt me-1"></i> Show</a
                                            >

                                            <a class="dropdown-item" href="{{route('admin.user.edit',$users->id)}}"
                                            ><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAA/ElEQVR4AeyTIQ9BURiGTZFMIUqKajSz0QSKxB+wmagKJik2QTLJRFFTBJsg+Cc2RRDM84U791yfc+7dbIq799k53znv9+7ec3fisS8/PwnM8hFd6EMOrHK9YZPuDTzgCitow0fZApN0jaEGS1iDzAeMGVBlCyzScYAbeLoz2UIFVNkC5Q39YV6AfHraK4KjLTDoDVVrgQU6R9CBMsjcT501+VmyJvuUL2mBM7ZPsIAh7ANMqKcg63NGQ1pgCscOpMFFAp8hLdAwRC3+gVFP7N2vneEFWwuqDhrsy1VkeEkLlMufx+IKLOHpgSEt8IxDbkEYjngNaYGGIWrxBAAA///eHqfyAAAABklEQVQDAO4WMCkFnSw4AAAAAElFTkSuQmCC"> Edit role</a
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

