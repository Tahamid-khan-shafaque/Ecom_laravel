<!DOCTYPE html>
<html>

<head>
  @include('home.css');
</head>

<body>
  <div class="hero_area">

   @include('home.header')
   
  </div>
 
<!-- product details start -->
<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Latest Products
      </h2>
    </div>
    <div class="row">
    
    <div class="col-md-12 col-lg-12">
                <div class="box">
            <div class="img-box">
            <img src="/productimage/{{$product->image}}" alt="" class="img-fluid">
            </div>
            <div class="detail-box">
              <h6>{{$product->title}}</h6>
              <h6>
                Price
                <span> {{$product->price}}</span>
              </h6>
            </div>

            <div class="detail-box">
              <h6>
                Category
                <span> {{$product->category}}</span>
              </h6>
              <h6>
                Quantity
                <span> {{$product->quantity}}</span>
              </h6>
            </div>
            <div style="display: flex; justify-content: center; align-items: center;" class="detail-box">
              <p style="text-align: center;">
                {{$product->description}}
              </p>
            </div>
        </div>
      </div>
 
    </div>

  </div>
</section>

<!-- product details end -->

@include('home.footer');

</body>

</html>