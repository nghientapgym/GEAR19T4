@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-3">
            @foreach($posts as $post)
                <div class="col-md-3">
                    <div class="card">
                        <a href="{{route('product.index', $post->slug)}}" target="_blank" class="text-decoration-none text-dark">
                            <img src="{{asset('images/'.$post->slug)}}.jpg" alt="Laptop" class="img-fluid"/>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{$post->name}}</h5>
                            <p class="card-text">
                                <del> {{number_format($post->price/0.7)}} đ</del>
                                <br>
                                <span class="text-danger fs-4 fw-bold">{{number_format($post->price)}} đ</span>
                            </p>
                            <a href="{{route('product.index',$post->slug)}}" target="_blank" class="btn btn-primary">Xem chi tiết</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

