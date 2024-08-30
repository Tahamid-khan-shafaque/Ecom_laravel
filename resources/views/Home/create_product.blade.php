<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Add New Product</title>
    
    <!-- Add jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h1>Add New Product</h1>

    <form id="productForm"  method="POST">   
              @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="Title">
        </div>
        <div>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" placeholder="Description">
        </div>
       
        <button type="submit" value="Add">Add Product</button>
    </form>

    <!-- AJAX code for handling form submission -->
  

</body>
</html>
