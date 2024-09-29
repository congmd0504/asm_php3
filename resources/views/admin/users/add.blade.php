@extends('admin.home')
@section('content')
    @if (session()->has('success'))
        {{ displayToastrMessageSuccess(session('success')) }}
    @endif
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Khách hàng</h3>
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
                    <a href="{{route('users.index')}}">Khách hàng</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Thêm mới khách hàng</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="{{ route('users.store') }}" class="m-3" method="POST">
                        @csrf
                        <label for="name" class="fs-5 fw-bold">Tên đăng nhập:</label>
                        <input type="text" name="name" class="form-control mt-2" placeholder="Nhập tên..">
                        <label for="email" class="fs-5 fw-bold">Email:</label>
                        <input type="email" name="email" class="form-control mt-2" placeholder="Nhập email..">
                        <label for="password" class="fs-5 fw-bold">Mật khẩu:</label>
                        <input type="password" name="password" class="form-control mt-2" placeholder="Nhập pass ..">
                        <div class="text-end mt-3 me-2">
                            <input type="submit" value="Thêm mới" class="btn btn-success ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
