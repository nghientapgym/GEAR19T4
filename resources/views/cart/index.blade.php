@extends('layouts.app')
@section('content')
    <!--Cart-->
    <div class="container mt-3">
        <h3 class="text-center">Giỏ hàng</h3>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th>
                                <a href="{{route('product.index', $product->slug)}}">
                                    {{$product->name}}
                            </th>
                            <td>{{number_format($product->price)}}</td>
                            <td>
                                <form action="{{route('cart.update')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->product_id}}">
                                    <input type="number" name="quantity" value="{{$product->quantity}}">
                                    <button type="submit" class="btn btn-success">Cập nhật</button>
                                </form>

                            </td>
                            <td>{{number_format($product->price * $product->quantity)}}</td>
                            <td>
                                <form action="{{route('cart.remove')}}" method="POST">
                                    @csrf
                                    <input hidden name="product_id" value="{{$product->product_id}}">
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>

                            </td>
                        </tr>
                    @endforeach
                <tr>
                    <td colspan="3">Tổng tiền</td>
                    <td colspan="2">{{number_format($total)}}</td>
                </tbody>
            </table>
            <div class="text-center">
                <button id="purchaseBtn" class="btn btn-success">Thanh toán</button>
            </div>

    </div>
@endsection
@push('scripts')
    <script>
        $('#purchaseBtn').click(function(){
            Swal.fire({
                title: 'Bạn có chắc chắn muốn thanh toán?',
                text: "Bạn sẽ không thể hoàn tác!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Thanh toán!'
            }).then((result) => {

            })
        });
    </script>
@endpush

