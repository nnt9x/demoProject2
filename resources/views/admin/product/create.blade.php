@extends('layouts.base')
@section('title','Thêm sản phẩm mới')

@section('content')
    <br>
    <br>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <label>Tên sản phẩm</label>
                    <input name="name" class="form-control" type="text" placeholder="Nhập tên sản phẩm" required>
                </div>
                <div class="col">
                    <label>Giá sản phẩm</label>
                    <input name="price" class="form-control" type="number" placeholder="Nhập giá sản phẩm" required
                           min="0">
                </div>
                <div class="col">
                    {{--                     Chon hang--}}
                    <label>Chọn hãng</label>
                    <select name="brand" class="form-control">
                        @forelse($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @empty
                            <option>Không có hãng</option>
                        @endforelse
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input name="image" type="file" class="form-control-file">
                </div>
            </div>
            <br>
            <div class="row">
                <textarea id="editor" name="description"></textarea>
            </div>
            <br>
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
