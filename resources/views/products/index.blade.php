@extends('layouts.main')

@section('content')
  <section>
    <div class="content">
      <h1>Products</h1>
    </div>
    </section>
    <section>
     <div class="card col-md-3">
        <div class="row">
          <div class="col-md-6">
            <img class="product-image" src="http://mikemoir.com/mikemoir/wp-content/uploads/2015/06/MedRes_Product-presentation-2.jpg">
          </div>
          <div class="col-md-6">
            <h2 class="product-title">Product 1</h2>
            <p class="product-brand">by Jack</p>
            <p class="product-desc">a cool product</p>
            <p class="product-price">$100 <span>Rating: 5/5</span></p>
            <p class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></p>
          </div>
        </div>
     </div>

          <div class="card col-md-3">
        <div class="row">
          <div class="col-md-6">
            <img class="product-image" src="http://mikemoir.com/mikemoir/wp-content/uploads/2015/06/MedRes_Product-presentation-2.jpg">
          </div>
          <div class="col-md-6">
            <h2 class="product-title">Product 1</h2>
            <p class="product-brand">by Jack</p>
            <p class="product-desc">a cool product</p>
            <p class="product-price">$100 <span>Rating: 5/5</span></p>
            <p class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></p>
          </div>
        </div>
     </div>
                    <div class="col-md-6">
                            <div class="content">
                               <div class="card"> 
                                    <div class="header text-center">
                                        <h5 class="title">Product 1</h5>
                                    </div>
                                    <div class="content">
                                    <h2 class="product-title">Product 1</h2>
                                    <p class="product-brand">by Jack</p>
                                    <p class="product-desc">a cool product</p>
                                    <p class="product-price">$100 <span>Rating: 5/5</span></p>
                                    <p class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></p>
                                    </div>
                                </div>
                                <div class="card"> 
                                    <div class="header text-center">
                                        <h5 class="title">Mall Condition</h5>
                                    </div>
                                    <div class="content">
                                       <p>Paint the mall please</p>
                                       <p>Need better restrooms</p>
                                       <p>Hi, I am so glad you ask. First lets get a decent mall sign for Candler Rd. The existing one is very old with missing letters and ugly. There needs to be an up to date look and please include the new name to reflect a fresh image for this mall</p>
                                       <p>Need Air conditioning outside the stores, those glass panels bring in too much heat into the mall during the summer</p>
                                    </div>
                                </div>
                                <div class="card"> 
                                    <div class="header text-center">
                                        <h5 class="title">Random</h5>
                                    </div>
                                    <div class="content">
                                       <p>South Dekalb has become the new Avondale mall; it needs some life in it. Less urban wear (wigs/weavs) can be found on every corner. Cleanliness and brighter, more attractive stores</p>
                                       <p>It needs a total revamping. When we are forced to go to other counties to spend our money, the taxes remain in those counties. Look how nice other malls are---help South Dekalb, I can't remmember the last time I was there. I travel to Camp Creek, Cumberland, and Lenox Square</p>
                                       <p>I travel to Camp Creek, Cumberland or Lenox Square  for better restaurants</p>
                                    </div>
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
