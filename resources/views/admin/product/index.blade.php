@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Danh sách sản phẩm</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Giá</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>
                                    <img src="{{asset('images/'.$product->image)}}" alt="" width="100px">
                                </td>
                                <td>{{$product->price}}</td>

                                <td>
                                    <a href="{{route('admin.product.show', $product->slug)}}" class="btn btn-primary">Sửa</a>
                                    <a href="#" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Thêm sản phẩm button modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-product">
                    Thêm sản phẩm
                </button>

            </div>

        </div>
    </div>
    <!-- Modal Thêm sản phẩm -->
    <div class="modal fade" id="modal-add-product">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm sản phẩm</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="price">Giá</label>
                            <input type="number" class="form-control" id="price" name="price">
                        </div>
                        <!-- Slug -->
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug">
                        </div>
                        <!-- category_id -->
                        <div class="form-group">
                            <label for="category_id">Danh mục</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">Chọn danh mục</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="
                            image">Ảnh</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
