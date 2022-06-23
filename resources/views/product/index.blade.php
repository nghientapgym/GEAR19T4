@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <div id="maincontent">
            <div id="system-message-container">
                <div id="system-message"></div>
            </div>
            <div class="page_content">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 product_thumbnail">
                        <img src="/images/{{$product->slug}}.jpg" alt="{{$product->name}}" class="img-fluid">
                    </div>
                    <div class="col-sm-6 col-xs-12 product_parameters">
                        <h1 class="product_name">
                            {{$product->name}}
                        </h1>

                        <p>
                        </p>
                        <p><span style="font-size:18px">✔&nbsp;Bảo hành chính hãng 12&nbsp;tháng.&nbsp;</span></p>
                        <p><span style="font-size:18px">✔ Hỗ trợ đổi mới trong 7 ngày.&nbsp;</span></p>
                        <p><span style="font-size:18px">✔ Windows bản quyền tích hợp.&nbsp;</span></p>
                        <p>.&nbsp;</p>
                        <hr>
                        <p><span style="font-size:18px"><span
                                    style="color:#ff0000"><strong><u>QUÀ TẶNG:</u></strong></span></span></p>
                        <p><span style="font-size:18px"><strong>🎁</strong> <strong>Túi chống sốc Gearvn</strong></span>
                        </p>
                        <p><span style="font-size:18px"><strong>🎁 Chuột không dây E-Dra EM604W</strong></span></p>
                        <hr>
                        <p><span style="font-size:18px"><span style="color:#ff0000"><strong><u>ƯU ĐÃI KHI MUA KÈM LAPTOP:</u></strong></span></span>
                        </p>
                        <p><span style="font-size:18px">⭐ Mua chuột không dây LM115G Wireless&nbsp;chỉ với 100,000đ.<br>⭐ Giảm ngay 100,000đ khi mua thêm màn hình máy tính.&nbsp;<br>⭐ Giảm ngay 100,000đ khi mua thêm Ram.&nbsp;<br></span>
                        </p>

                        <hr>


                        <form id="add-item-form-2" name="shoppingCart" action="{{route('cart.add')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <input hidden name="product_id" value="{{$product->id}}">



                            <div class="product_nav_btn">

                                <div class="product_sales_off pull-left">

                                    <span class="price-text">Giá Cũ:</span><span class="fs-4"><del>{{number_format($product->price/0.7)}} đ</del></span><br>

                                    <span class="price-text">Giá KM:</span><span
                                        class="text-danger fw-bold fs-3">{{number_format($product->price)}} đ </span>
                                </div>
                            </div>

                            <div class="clearfix"></div>


                            <div class="form-group">
                                <a id="allowAdd2Cart" class="btn btn-success">Đặt
                                    hàng</a>
                            </div>


                        </form>
                    </div>
                </div>
                <br class="clr">
                <div id="product_content_detail" class="row">
                    <div id="product_left" class="col-md-12 col-xs-12">
                        <div role="tabpanel">



                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="chitiet">
                                    <p>
                                    </p>
                                    <h2><strong>Thông số kĩ thuật:</strong></h2>
                                    <div class="scroll-table">
                                        <table border="1" cellspacing="0"
                                               style="background-color:#ffffff; border-collapse:collapse; border-spacing:0px; border:1px solid #eeeeee; box-sizing:border-box; color:#333333; font-family:Roboto,sans-serif; font-size:13px; line-height:20px; margin-bottom:20px; max-width:100%; min-width:500px; width:100%"
                                               class="mce-item-table table table-bordered">
                                            <tbody style="box-sizing: border-box;">
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000"><a
                                                                        >CPU</a>:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <p><span style="font-size:15px">Ryzen 5&nbsp;5500U 6&nbsp;Nhân 12&nbsp;Luồng&nbsp;</span>
                                                    </p></td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000"><a
                                                                        >RAM</a>:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <p><span style="font-size:15px">8GB DDR4 3200Mhz <span
                                                                style="color:#000000">&nbsp;(trống 1 khe, up to 64GB SDRAM)</span></span>
                                                    </p></td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000">Ổ cứng:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <div class="scroll-table">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td><p><span style="font-size:15px">512GB NVMe PCIe Gen 3x4 <a
                                                                                >SSD</a> (2x M.2 SSD slot (NVMe PCIe Gen3x4))</span>
                                                                    </p></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000"><a
                                                                        >Card đồ họa</a>:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <p><span style="font-size:15px">AMD Radeon™ Graphics</span></p></td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000">Màn hình:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <div class="scroll-table">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td><p><span style="font-size:15px">15.6 inch FHD (1920*1080), IPS-Level , 45% NTSC</span>
                                                                    </p></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000">Cổng giao tiếp:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <div class="scroll-table">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td><p><span style="font-size:15px">2x Type-A USB3.2 Gen2<br>1x (4K @ 30Hz) HDMI<br>1x Type-C USB3.2 Gen2<br>1 x cổng sạc</span>
                                                                    </p></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000"><a
                                                                        >Bàn phím</a>:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <p><span style="font-size:15px">Backlight Keyboard (Single-Color, White)</span>
                                                    </p></td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000">Chuẩn LAN:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <p><span style="font-size:15px"><span
                                                                style="color:#000000">Không có</span></span></p></td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000">Chuẩn WIFI:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <p><span style="font-size:15px">802.11ax Wifi 6</span></p></td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000">Bluetooth:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <p><span style="font-size:15px">Bluetooth v</span></p></td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><a
                                                                    ><span
                                                                        style="color:#000000">Webcam</span></a>:</span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <p><span style="font-size:15px"><span style="color:#000000">HD 720p 30fps</span></span>
                                                    </p></td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000">Hệ điều hành:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <p><span style="font-size:15px">Windows 11 Home</span></p></td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000">Pin:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <div class="scroll-table">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td><p><span style="font-size:15px">3 cell, 52Whr</span>
                                                                    </p></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000">Trọng lượng:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <p><span style="font-size:15px">1.6 kg</span></p></td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000">Màu sắc:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <p><span style="font-size:15px"><span
                                                                style="color:#000000">Xám đen</span></span></p></td>
                                            </tr>
                                            <tr style="box-sizing:border-box" class="row-info">
                                                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:232px">
                                                    <p><strong><span style="font-size:15px"><span style="color:#000000">Kích thước:</span></span></strong>
                                                    </p></td>
                                                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:600px">
                                                    <p><span style="font-size:15px">356.8 x 233.7 x 18.9 mm</span></p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $("#allowAdd2Cart").click(function () {
                Swal.fire({
                    title: 'Thông báo',
                    text: 'Bạn có chắc chắn muốn thêm vào giỏ hàng không?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Đồng ý',
                    cancelButtonText: 'Hủy'
                }).then((result) => {
                    if (result.value) {
                        $("#add-item-form-2").submit();
                    }
                })
            });
        </script>

    @endpush
@endsection
