<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GearVN - Laptop Chính Hãng | Xách tay, Cấu hình cao, Giá tốt</title>
    <meta name="description" content="GearVN - Laptop Chính Hãng | Xách tay, Cấu hình cao, Giá tốt" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <link rel="icon" src="{{asset('images/favico.jpg')}}" type="image/x-icon" />


</head>

<body class="d-flex flex-column min-vh-100">
<header>
    <!--- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-red">
        <div class="container">
            <a class="navbar-brand" href="../">GearVN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="row w-100">
                    <div class="col-md-6">
                        <form class="d-flex my-2 my-lg-0" action="{{route('search')}}">
                            @csrf
                            <input class="form-control" name="search" type="search" placeholder="Tìm kiếm" aria-label="Search" />
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <ul class="navbar-nav me-auto">
                            @guest()

                            <li class="nav-item active">
                                <a class="nav-link text-white" href="{{route('register')}}">
                                    <i class="fas fa-user-plus me-2"></i> Đăng ký </a>
                            </li>
                            <!--Đăng nhập-->
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('login')}}">
                                    <i class="fas fa-sign-in-alt me-2"></i> Đăng nhập </a>
                            </li>
                            @endguest
                            @auth()
                                <!-- User -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-circle me-2"></i> {{Auth::user()->name}}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('admin.index')}}">
                                            <i class="fas fa-user-circle me-2"></i> Admin
                                        </a>
                                        <!--Đăng xuất-->
                                        <a class="dropdown-item" href="{{route('user.logout')}}">
                                            <i class="fas fa-sign-out-alt me-2"></i> Đăng xuất
                                        </a>
                                    </div>
                                </li>

                                @endauth
                            <!--Khuyến mãi-->
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../pages/khuyen-mai">
                                    <i class="fas fa-gift me-2"></i> Khuyến mãi </a>
                            </li>
                            <!--Giỏ hàng-->
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('cart.index')}}">
                                    <i class="fas fa-shopping-cart me-2"></i> Giỏ hàng </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-red">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a class="btn btn-light w-100">
                        <i class="fas fa-bars"></i>
                        Danh mục

                    </a>
                </div>
                <div class="col-md-10">
                    <ul class="d-flex flex-row me-auto mb-0">
                        <li class="nav-item list-unstyled">
                            <a class="nav-link text-white" href="{{route('huong-dan-thanh-toan')}}">
                                <i class="fas fa-money-bill"></i>
                                Hướng dẫn thanh toán

                            </a>
                        </li>
                        <li class="nav-item list-unstyled">
                            <a class="nav-link text-white" href="{{route('huong-dan-tra-gop')}}">
                                <i class="fas fa-money-bill"></i>
                                Hướng dẫn trả góp
                            </a>
                        </li>
                        <li class="nav-item list-unstyled">
                            <a class="nav-link text-white" href="{{route('chinh-sach-bao-hanh')}}">
                                <i class="fas fa-wrench"></i>
                                Chính sách bảo hành
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="mb-4">
    @yield('content')
    @stack('scripts')
    <!-- if error -->
    @if(session()->has('error'))
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{!! session()->get('error')->first() !!}',
            })
        </script>
    @endif
    <!-- if success -->
    @if(session()->has('success'))
        <script type="text/javascript">
            Swal.fire({
                icon: 'success',
                title: 'Thành công',
                text: '{!! session()->get('success')->first()!!}',
            })
        </script>
    @endif
    @if(Session::has('errors'))
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{Session::get('errors')->first()}}',
            })
        </script>
    @endif

</main>
<footer class="mt-auto bg-red text-white p-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Công ty TNHH Thương Mại GEARVN </h3>
                <div class="custom">
                    <h5 class="title-footer-2"> Email: cskh@gearvn.com<br></h5>
                    <p style="font-size: 14px">
                        <b>HỆ THỐNG TỔNG ĐÀI MIỄN PHÍ:</b> (Làm việc từ 08h00 - 21h00)<br>
                    <table style="width: 296px;">
                        <tbody>
                        <tr>
                            <td style="width: 211px;">Gọi mua hàng</td>
                            <td style="width: 105px;"><strong>1800 6975</strong></td>
                        </tr>
                        <tr>
                            <td style="width: 211px;">Hỗ trợ khách hàng</td>
                            <td style="width: 105px;"><strong>1800 6173</strong></td>
                        </tr>

                        </tbody>
                    </table>

                    <br>
                    <a href="../pages/chinh-sach-bao-hanh" style="font-size: 16px; color: #0655a6; font-weight: bold;">Chính sách bảo hành</a><br>
                    <a href="../pages/huong-dan-thanh-toan-gearvn" style="font-size: 16px; color: #0655a6; font-weight: bold;">Chính sách thanh toán</a><br>
                    <a href="../pages/chinh-sach-giao-hang" style="font-size: 16px; color: #0655a6; font-weight: bold;">Chính sách giao hàng</a><br>
                    <a href="../pages/chinh-sach-bao-mat" style="font-size: 16px; color: #0655a6; font-weight: bold;">Chính sách bảo mật</a>
                    </p>
                </div>
                <h3 class="title-footer-2"></h3>
                <ul class="menu-footer">

                </ul>

                <a href="http://online.gov.vn/Home/WebDetails/74686" rel="nofollow">
                    <img src="{{asset('images/bocongthuong.jpg')}}" style="max-width: 300px;">
                </a>


            </div>



            <div class="col">
                <a href="https://gearvn.com/pages/he-thong-showroom-gearvn">
                    <p style="font-size: 16px; display: inline">
                        <b>HỆ THỐNG CỬA HÀNG:</b>
                    </p>
                </a>
                <p style="display: inline">
                </p>
                <br>

                <p style="font-size: 14px; padding-top: 4px">
                    <b>SHOWROOM HCM</b> (Làm việc từ 8h00 - 21h00) <br>
                    - Địa chỉ 1: 78-80-82 Hoàng Hoa Thám, Phường 12, Quận Tân Bình.<br>
                    - Địa chỉ 2: 905 Kha Vạn Cân, Phường Linh Tây, Thành phố Thủ Đức.<br>
                    - Địa chỉ 3: 1081 - 1083 Trần Hưng Đạo, Phường 5, Quận 5.
                    <br> <b>SHOWROOM HN </b> (Làm việc từ 9h00 - 19h00)<br>
                    - Địa chỉ : 37 Ngõ 121 Thái Hà, Phường Trung Liệt, Quận Đống Đa.<br>
                    <br>
                </p>



                <!-- Pháp nhân -->

                <p style="font-size: 14px; padding-top: 4px">
                    - Công ty TNHH Thương Mại Gearvn <br>
                    - GPKD số 0316517394 do Sở KH và ĐT TP Hồ Chí Minh cấp ngày 01/10/2020 <br>
                    - GĐ/Sở hữu website: Nguyễn Thế Anh <br>
                </p>
                <!-- Code veryfi DMCA Quocvu -->
                <a href="https://www.dmca.com/Protection/Status.aspx?ID=65147526-7602-46be-9047-e8c33f9fcbd3&amp;refurl=https://gearvn.com/" title="DMCA.com Protection Status" class="dmca-badge" rel="nofollow noopener noreferrer"> <img src="https://images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=65147526-7602-46be-9047-e8c33f9fcbd3" alt="DMCA.com Protection Status"></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
            </div>



        </div>
    </div>
</footer>

