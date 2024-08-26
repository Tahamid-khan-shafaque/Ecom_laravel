<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
    <header class="header">
        @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h2>update data</h2>
                    <div class="container mt-5">
                        <div class="col-md-6 offset-md-3">
                            <form action="{{url('edit_product', $data->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $data->title }}">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="" class="form-control">{{ $data->description }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" name="price" class="form-control" value="{{ $data->price }}">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="qty" class="form-label">Quantity</label>
                                    <input type="number" name="qty" class="form-control" value="{{ $data->quantity }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select name="category" id="" class="form-control">
                                        @foreach ($category as $category)
                                        <option value="{{$category->category_name}}" {{ $data->category == $category->category_name ? 'selected' : '' }}>
                                            {{$category->category_name}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Current Image</label>
                                    <img width="100" height="100" src="/productimage/{{$data->image}}" alt="">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="image" class="form-label">New Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success">Update Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- JavaScript files-->
            <script src="asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
            <script src="asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
            <script src="asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
            <script src="asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
            <script src="asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
            <script src="asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
            <script src="js/charts-home.js"></script>
            <script src="js/front.js"></script>
</body>

</html>