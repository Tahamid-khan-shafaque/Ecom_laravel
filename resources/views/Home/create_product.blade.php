<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Add New Product</title>
    
    <!-- Add jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

    <h1>Add New Product</h1>
    <form action="{{ route('ajax-upload') }}" formaction="{{ route('ajax-upload') }}" id="addpost"  method="POST" enctype="multipart/form-data">        
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Title">
    </div>
    <div>
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" placeholder="Description">
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" placeholder="Price">
    </div>
    <div>
        <label for="category">Category:</label>
        <input type="text" id="category" name="category" placeholder="Category">
    </div>
    <div>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" placeholder="Quantity">
    </div>
    <div>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
    </div>
   
    <button type="submit" value="Add">Add Product</button>
</form>

    <!-- AJAX code for handling form submission -->
    <script type="text/javascript">
    $(document).ready(function(){
    $('#addpost').on('submit',function(event){
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: '{{ route('ajax-upload') }}',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response.message); // Output: Data uploaded successfully
                $('#addpost')[0].reset();
            }
        });
    });
});
</script>

</body>
</html>