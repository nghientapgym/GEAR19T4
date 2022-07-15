<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Favicon-->

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
</head>
<body>
<main>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="d-flex flex-column">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">19T4-Gear</h3>
                        </div>
                        <div class="card-body bg-primary">
                            <ul class="list-group">
                                <a href="{{route('admin.product.index')}}" class="list-group-item list-group-item-action">
                                    Danh mục
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    Sản phẩm
                                </a>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>

        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
    @if(session()->has('error'))
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{!! session()->get('error')!!}',
            })
        </script>
    @endif
    <!-- if success -->
    @if(session()->has('success'))
        <script type="text/javascript">
            Swal.fire({
                icon: 'success',
                title: 'Thành công',
                text: '{!! session()->get('success')!!}',
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
<!-- Core theme JS-->

</body>
</html>
