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
                                <a href="{{route('admin.index')}}" class="list-group-item list-group-item-action">
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

        </div>
    </div>
</main>
<!-- Core theme JS-->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
