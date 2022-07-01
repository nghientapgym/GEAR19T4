@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-md-2">
                <ol class="list-group">
                    <li class="list-group-item ">
                        <a href="#" class="text-decoration-none text-dark">
                            <i class="fas fa-laptop"></i>
                            Laptop
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="text-decoration-none text-dark">
                            <i class="fas fa-laptop"></i>
                            Laptop văn phòng
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="text-decoration-none text-dark">
                            <i class="fas fa-gear"></i>
                            Linh kiện
                        </a>
                    </li>
                    <!-- Bàn phím -->
                    <li class="list-group-item">
                        <a href="#" class="text-decoration-none text-dark">
                            <i class="fas fa-keyboard"></i>
                            Bàn phím
                        </a>
                    </li>
                    <!-- Chuột + Lót chuột -->
                    <li class="list-group-item">
                        <a href="#" class="text-decoration-none text-dark">
                            <i class="fas fa-mouse"></i>
                            Chuột + Lót chuột
                        </a>
                    </li>
                    <!-- Màn hình -->
                    <li class="list-group-item">
                        <a href="#" class="text-decoration-none text-dark">
                            <i class="fas fa-tv"></i>
                            Màn hình
                        </a>
                    </li>
                    <!-- Tai nghe -->
                    <li class="list-group-item">
                        <a href="#" class="text-decoration-none text-dark">
                            <i class="fas fa-headphones"></i>
                            Tai nghe
                        </a>
                    </li>
                    <!-- Thiết bị văn phòng -->
                    <li class="list-group-item">
                        <a href="#" class="text-decoration-none text-dark">
                            <i class="fas fa-desktop"></i>
                            Thiết bị văn phòng
                        </a>
                    </li>
                    <!-- Thiết bị mạng -->
                    <li class="list-group-item">
                        <a href="#" class="text-decoration-none text-dark">
                            <i class="fas fa-wifi"></i>
                            Thiết bị mạng
                        </a>
                    </li>
                    <!-- Phụ kiện -->
                    <li class="list-group-item">
                        <a href="#" class="text-decoration-none text-dark">
                            <i class="fas fa-headset"></i>
                            Phụ kiện
                        </a>
                    </li>
                </ol>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="#" class="text-decoration-none text-dark">
                                    <img src="{{asset('images/qclaptop1.jpg')}}" alt="Laptop" class="img-fluid"/>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="text-decoration-none text-dark">
                                    <img src="{{asset('images/qclaptop4.jpg')}}" alt="Laptop" class="img-fluid"/>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="text-decoration-none text-dark">
                                    <img src="{{asset('images/qclaptop5.jpg')}}" alt="Laptop" class="img-fluid"/>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="text-decoration-none text-dark">
                                    <img src="{{asset('images/qclaptop6.jpg')}}" alt="Laptop" class="img-fluid"/>
                                </a>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="row h-100">
                            <div class="col-md-12">
                                <a href="#" class="text-decoration-none text-dark">
                                    <img src="{{asset('images/qclaptop2.jpg')}}" alt="Laptop" class="img-fluid"/>
                                </a>
                            </div>
                            <div class="col-md-12">
                                <a href="#" class="text-decoration-none text-dark">
                                    <img src="{{asset('images/qclaptop3.jpg')}}" alt="Laptop" class="img-fluid"/>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <!-- LAPTOP -->
                <div style="position: relative" class="d-flex flex-row bg-red">
                    <h3 class="col-11 card-title bg-red p-3 text-white m-0">
                        <i class="fas fa-laptop"></i>
                        LAPTOP BÁN CHẠY
                    </h3>
                    <div class="col-1 d-flex align-items-center justify-content-end">
                        <a href="#" class="text-decoration-none text-white me-2">
                            Xem tất cả
                        </a>
                    </div>
                </div>

                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-3">
                            <div class="card">
                                <a href="{{route('product.index', $product->slug)}}" target="_blank" class="text-decoration-none text-dark">
                                    <img src="{{asset('images/'.$product->slug)}}.jpg" alt="Laptop" class="img-fluid"/>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->name}}</h5>
                                    <p class="card-text">
                                        <del> {{number_format($product->price/0.7)}} đ</del>
                                        <br>
                                        <span class="text-danger fs-4 fw-bold">{{number_format($product->price)}} đ</span>
                                    </p>
                                    <a href="{{route('product.index',$product->slug)}}" target="_blank" class="btn btn-primary">Xem chi tiết</a>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>


            </div>
        </div>
    </div>
    @push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                singleItem: true,
                items: 1,
                autoHeight: true,
                autoplayTimeout: 1500,

            });
            // Thông báo Chúc mừng khai trương website
            Swal.fire({
                title: 'Chúc mừng khai trương website GearVN!',
                text: 'GearVN đang trong quá trình phát triển, chúng tôi sẽ cập nhật nhiều chức năng mới nhất!',
                icon: 'success',
                confirmButtonText: 'OK',
                padding: '3em',
                color: 'red',
                backdrop: `
                    rgba(0,0,123,0.4)
                    url("/images/nyan-cat.gif")
                    left top
                    no-repeat
                `
            });
        });
    </script>
    @endpush


@endsection
