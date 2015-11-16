@extends('layouts.main')

@section('css')
  <link rel="stylesheet" type="text/css" href="  https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
@stop

@section('content')
  <section>
    <div class="content">
      <h1>Products</h1>
    </div>
    </section>
    <section class="container-fluid">
                    <div class="row">
                               <div class="card col-md-4 col-md-offset-1"> 
                                    <div class="header text-center">
                                        <h2 class="title">Product 1</h2>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                    <img class="product-image" src="http://www.shmula.com/wp-content/uploads/2007/02/interface-is-product-ux-ui.jpg">
                                    </div>
                                    <div class="col-md-6 product-info">
                                    <p class="product-brand">by Jack</p>
                                    <p class="product-desc">a cool product</p>
                                    <p class="product-price">$100 <span>Rating: 5/5</span></p>
                                    <p class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></p>
                                    <button class="green">Buy Now!</button>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                               <div class="card col-md-4 col-md-offset-1"> 
                                    <div class="header text-center">
                                        <h2 class="title">Product 1</h2>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                    <img class="product-image" src="http://www.shmula.com/wp-content/uploads/2007/02/interface-is-product-ux-ui.jpg">
                                    </div>
                                    <div class="col-md-6 product-info">
                                    <p class="product-brand">by Jack</p>
                                    <p class="product-desc">a cool product</p>
                                    <p class="product-price">$100 <span>Rating: 5/5</span></p>
                                    <p class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></p>
                                    <button class="green">Buy Now!</button>
                                    </div>
                                    </div>
                        </div>
                    </div>  
                     <div class="row">
                               <div class="card col-md-4 col-md-offset-1"> 
                                    <div class="header text-center">
                                        <h2 class="title">Product 1</h2>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                    <img class="product-image" src="http://www.shmula.com/wp-content/uploads/2007/02/interface-is-product-ux-ui.jpg">
                                    </div>
                                    <div class="col-md-6 product-info">
                                    <p class="product-brand">by Jack</p>
                                    <p class="product-desc">a cool product</p>
                                    <p class="product-price">$100 <span>Rating: 5/5</span></p>
                                    <p class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></p>
                                    <button class="green">Buy Now!</button>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                               <div class="card col-md-4 col-md-offset-1"> 
                                    <div class="header text-center">
                                        <h2 class="title">Product 1</h2>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                    <img class="product-image" src="http://www.shmula.com/wp-content/uploads/2007/02/interface-is-product-ux-ui.jpg">
                                    </div>
                                    <div class="col-md-6 product-info">
                                    <p class="product-brand">by Jack</p>
                                    <p class="product-desc">a cool product</p>
                                    <p class="product-price">$100 <span>Rating: 5/5</span></p>
                                    <p class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></p>
                                    <button class="green">Buy Now!</button>
                                    </div>
                                    </div>
                        </div>
                    </div>                       
                </div>     
            </div>    
    </section>

  @foreach ($products as $product)
    <section>
      <div class="card">
      <div class="product">
        <h2>{{ $product->name }}</h2>
        <p>ID: {{ $product->id }}</p>
        <p>by {{ $product->brand }}</p>
        <p>{{ $product->description }}</p>
        <p>Price: {{ $product->price }}</p>
        <p>Rating: {{ $product->rating }}/5</p>
      </div>
      </div>
    </section>
  @endforeach
@stop
