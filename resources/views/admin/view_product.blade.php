<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
.div_deg{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 60px;

}
.table_deg{
    border: 2px solid greenyellow;
}
th{
    background-color: skyblue;
    color: white;
    font-size: 19px;
    font-weight: bold;
    padding: 15px;
    text-align: center;
}

td{
    border: 1px solid skyblue;
    text-align: center;

}
.pagination{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 60px;
}
    </style>
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
            <div class="search_deg mt-4">
                <form action="{{url('product_search')}}" method="get" class="form-inline">
                    @csrf
                    <div class="input-group w-50" style="margin-right: 10px;">
                        <input type="text" name="search" class="form-control" placeholder="Search Product" aria-label="Search Product" aria-describedby="button-addon2" style="margin-right: 10px;">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="button-addon2" style="margin-left: 10px;">Search</button>
                        </div>
                    </div>
                </form>
            </div>
           <div class="div_deg">
            <table class="table_deg">
                <tr>
                    <th style="text-align: center">Title</th>
                    <th style="text-align: center">Product</th>
                    <th style="text-align: center">Category</th>
                    <th style="text-align: center">Price</th>
                    <th style="text-align: center">Quantity</th>
                    <th style="text-align: center">Image</th>
                    <th style="text-align: center">Edit</th>
                    <th style="text-align: center">Delete</th>
                </tr>
                @foreach ($product as $data )
                <tr>
                    <td>{{$data->title}}</td>
                    <td>{{$data->description}}</td>
                    <td>{{$data->category}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->quantity}}</td>
                    <td>
                        <img src="productimage/{{$data->image}}" alt="" width="100px" height="100px">
                    </td>
                    <td>
                        <a href="{{url('update_product',$data->id)}}" class="btn btn-success">Edit</a>
                    </td>
                    <td><a href="{{url('delete_product',$data->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </table>
           f
           </div>
           <div class="pagination">

               {{$product->links()}}
           </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>
