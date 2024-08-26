<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
.search-container {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 30px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: black;
  position: absolute;
  top: 0px;
  right: 0px;
  margin: 10px;
}

.search-input {
  padding: 10px;
  border: none;
  border-radius: 5px;
  flex-grow: 1;
  outline: none;
  margin: 10px;
}

.search-button {
  padding: 10px 20px;
  background-color: #333;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

.search-button:hover {
  background-color: #444;
}

@media screen and (max-width: 768px) {
  .search-container {
    flex-direction: column;
    align-items: stretch;
  }

  .search-input {
    margin-bottom: 10px;
  }
}
.table_deg {
  text-align: center;
  margin: auto;
  border: 2px solid yellowgreen;
  margin-top: 50px;
  width: 80%;
  border-collapse: collapse;
  border-radius: 10px; /* Rounded corners */
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); /* Drop shadow */
}

th, td {
  padding: 15px;
  font-size: 18px;
  color: white;
  border: 1px solid skyblue;
}

th {
  background-color: skyblue;
  font-weight: bold;
}

@media (max-width: 768px) {
  .table_deg {
    width: 100%;
  }
}
h1{
    color: white;
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
              <h1>Add Category</h1>
              <div class="search-container">
  <form action="{{url('/add_category')}}" method="post">
    @csrf
    <input type="text" name="category" placeholder="Add Category" class="search-input">
    <button type="submit" class="search-button">Add Category</button>
  </form>
</div>
      </div>
      <table class="table_deg">
       
        <tr>
            <th>Category Name</th> 
            <th>Edit Category</th> 
            <th>Delete</th>
        </tr>
        @foreach ($data as $data )
        <tr>
            <td>{{$data->category_name}}</td>
            <td><a class="btn btn-success" href="{{url('edit_category',$data->id)}}">Edit</a></td>
            <td><a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}">Delete</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    <!-- JavaScript files-->
    <script type="text/javascript">
function confirmation(ev) {
  ev.preventDefault();
  var urlToRedirect = ev.currentTarget.getAttribute('href'); 
  console.log(urlToRedirect);
  swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then(willDelete => {
  if (willDelete) {
    window.location.href = urlToRedirect;
  }
  
})
}
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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