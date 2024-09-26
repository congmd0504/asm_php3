@extends('admin.home')
@section('content')
    @if (session()->has('success'))
        {{ displayToastrMessageSuccess(session('success')) }}
    @endif
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Sản phẩm</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Sản phẩm</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Danh sách sản phẩm</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Chi tiết sản phẩm</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Chi tiết sản phẩm : {{ $product->name }}</h4>
                            <a href="{{ route('products.index') }}" class="btn btn-primary btn-round ms-auto">
                                <i class="fa fa-plus"></i>
                                Danh sách sản phẩm
                            </a>
                        </div>
                    </div>
                    <div class="card-body row">
                        <div class="col-6">
                            <label for="name" class=" fw-bold">Tên sản phẩm:</label>
                            <input type="text" name="name" class="form-control mt-2"
                                value="{{$product->name}}" disabled>
                            <label for="price" class=" fw-bold">Gía sản phẩm:</label>
                            <input type="text" name="price" class="form-control mt-2"
                               value="{{$product->price}}" disabled>
                            <label for="weight" class=" fw-bold">Trọng lượng sản phẩm:</label>
                            <input type="text" name="weight" class="form-control mt-2"
                                value="{{$product->weight}}" disabled>
                            <label for="quality" class=" fw-bold">Số lượng sản phẩm:</label>
                            <input type="text" name="quality" class="form-control mt-2"
                                value="{{$product->quality}}" disabled>
                            <label for="title" class=" fw-bold">Danh mục :</label>
                            <input type="text" name="category_id" class="form-control mt-2"
                                value="{{$product->name_cate}}" disabled>
                        </div>
                        <div class="col-6">
                            <label for="description" class=" fw-bold">Mô tả ngắn:</label>
                            <input type="text" name="description" class="form-control mt-2"
                                value="{{$product->description}}" disabled>
                            <label for="content" class=" fw-bold">Mô tả :</label>
                            <textarea name="content" id="" class="form-control" disabled cols="30" rows="5">{{$product->content}}</textarea>
                            <div class=" mt-2">
                                <label for="image" class="fw-bold">Ảnh sản phẩm:</label> <br>
                            <img src="{{asset($product->image)}}" height="100px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
