<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
table{
    border: 2px solid skyblue;
    text-align: center;
}
td{
    color: white;
    padding: 10px;
    border: 1px solid skyblue;
}
th{
    background-color: skyblue;
    padding: 10px;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
}
.table_center{
    display: flex;
    justify-content: center;
    align-items: center;
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
            <div class="table_center">

                <table>
                    <tr>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Product Title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>change status</th>
                        <th>Print PDF</th>
                    </tr>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->rec_address}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->product->title}}</td>
                        <td>{{$data->product->price}}</td>
                        <td>
                            <img src="productimage/{{$data->product->image}}" width="150" alt="">
                        </td>
                        <td>
                            {{$data->status}}
                        </td>
                        <td>
                            <a href="{{url('on_the_way',$data->id)}}" class="btn btn-primary">On the way</a>
                            
                            <a href="{{url('delivered',$data->id)}}" class="btn btn-success">Delivered</a>
                        </td>
                      <td>
                        <a href="{{url('print_pdf',$data->id)}}" class="btn btn-primary">Print PDF</a>
                      </td>
                    </tr>
@endforeach
                </table>
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