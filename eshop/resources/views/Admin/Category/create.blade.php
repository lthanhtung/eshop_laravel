@extends('Admin.layout')

@section('title','Thêm danh mục sản phẩm')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Thêm danh mục sản phẩm</h5>
                    <small class="text-muted float-end">
                        <a href="{{route('admin.category.index')}}">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAACrklEQVR4AbyUz08TQRTH35tW0HAxJEYwGgPbKtGDiZ5Q226oYmIM0C1ViXrQowe9ieHExYgH4x/gUaIx2G3FoEaloVvQkwc9GMNSKpIY9SLGEH+0O8+Zhp1sywYuxsm8nX3f9+YzM2/aZfCP2/8F6n2lzZGEHYsZ9sVosng50l+Md6YWm9c6lO8O4z3zW2PG3D3OnCeAeJyALSHRR8YhvsH5bUaNOfNQz/ttfmBWLx5OFHeVAzzHkSYsM9RZMEODlqndzZuhTN7UhiwzpAPhaCAYmIyk7D3182uAEeNDK2P0ABj2FdLh0fpk17cymhnkcAIdvK8b9nZXl2MNEKFyCwCvWmnNhnVaLhsuIocrnPCmN1UB9VSpBQBbBewxeJq4hE2yph5JveazIVnjFnH0La6ogA6vHAGiR25AjhImLuHFHwY7pe9nCDSBDjvqxhSQEcpb++oGus+9aRKw58I/CEj79X5bd03WWujVzhFmBbSj6oiHAnKiMgI0Cq3af/xq5kDApcOQDnAOumvEK3JxGRJrESeghqojHgqIwBY4oFrp1diOn+Vg4zEAeMk5u22Z4WHXprOh10KvdgLYC4AlWGkKyIjlEMmAYVKahG5sWu5u4LCwkr9qQMSBILCnbkBNnsq2LQnRir6dPy1G1Z/d2bc8Od7+RQmel6hh9yBBMWe2qwUVUOaxQGBQFHhIT5bU0aXuZ119tgaA18iBS+BpNcCpsbbPDqHBuZOOJopnPHk1r5GkfdZBnKAAnbIehha9wRqgDExntFkWDMRFJXvFR2AmmrCvx5LFgVjCTokjjghtWtS7t+JUugpj4XdyjtdWAWVQ7rSQ1k5ywvPA2HcivptQ3Caxb0K7kDe11Mx4xyeZW2++QDdJ7lb8FUcs9yeT0W5IzY37jWsC/Sasp/0FAAD//39u1TwAAAAGSURBVAMACUcSOO5Jd+wAAAAASUVORK5CYII=" alt="">
                            Trở về
                        </a>
                    </small>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.category.store')}}" method="POST">
                        {{csrf_field()}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tên danh mục sản phẩm</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Giày Dép" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Mô tả</label>
                            <div class="col-sm-10">
                            <textarea
                                name="description"
                                class="form-control"
                            ></textarea>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
