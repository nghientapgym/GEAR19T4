@extends('layouts.admin')

@section('content')
    <!-- Edit Product -->
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card">
                <div class="card-header">Sửa sản phẩm</div>
                <div class="card-body">
                    <form action="{{route('admin.product.update', $product->slug)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <label for="price">Giá</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}">
                        </div>
                        <!-- Slug -->
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{$product->slug}}">
                        </div>
                        <!-- category_id -->
                        <div class="form-group">
                            <label for="category_id">Danh mục</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">Chọn danh mục</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$product->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{$product->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Ảnh</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
