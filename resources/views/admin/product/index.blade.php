@extends('layouts.base')

@section('content')
    <a href="{{url('admin/products/create')}}">Thêm sản phẩm</a>
    <br>
    <form>
        <input name="kw" class="form-control" type="text" placeholder="Nhập từ khoá cần tìm kiếm">
        <button type="submit" hidden class="btn btn-primary">Tìm</button>
    </form>
    <br>

    <table class="table table-bordered table-striped table-responsive-md ">
        <tr class="table-primary text-center">
            <th>Mã sản phẩm</th>
            <th>Sản phẩm</th>
            <th>Giá</th>
            <th>Hành động</th>
        </tr>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>
                    <a href="{{ url('admin/products/'.$product->id) }}">
                    {{$product->name}}
                    <br>
                    <img width="150px" src="{{asset($product->image)}}">
                    </a>
                </td>
                <td>
                    {{$product->price}}
                </td>
                <td>
                    {{--                    Xử lý sau--}}
                    <button>Sửa</button>
                    <form onsubmit="return confirm('Bạn có muốn xoá?')" method="POST" action="{{url('/admin/products/'.$product->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xoá</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td> Không có dữ liệu!</td>
            </tr>
        @endforelse
    </table>

    {{ $products->links()  }}
@endsection
