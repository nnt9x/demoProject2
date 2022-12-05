@extends('layouts.base')

@section('title', 'Chi tiết sản phẩm')

@section('content_header','Sản phẩm có id = '.$product->id)

@section('content')

    @if($product == null)
        <h1>Sản phẩm không tồn tại</h1>
    @else
        <table class="table table-sm table-bordered bg-light">
            <tr class="table-primary text-center">
                <th>Id</th>
                <th>Sản phẩm</th>
                <th>Gía</th>
            </tr>
            <tr>
                <td>{{$product->id}}</td>
                <td>
                    {{$product->name}}
                    <br>
                    <img width="150px" src="{{$product->image}}">
                </td>
                <td>
                    {{$product->price}}
                </td>

            </tr>
            <tr>
                <td colspan="3">
                    {{$product->description}}
                </td>
            </tr>

        </table>
    @endif

@endsection
