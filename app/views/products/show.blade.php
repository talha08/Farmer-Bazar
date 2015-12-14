
@extends('layouts.default')
@section('content')
    @include('includes.alert')

    <div class="col-md-13">
        <section class="panel">
            <div class="panel-body">


                <div class="col-md-5">
                    <div class="col-md-11" >
                        {{ HTML::image(  $product->picture , 'alt', array('class'=>" img-thumbnail")) }}
                        <br><br> <br><br>

                    </div>
                </div>


                <div class="col-md-7">
                    <h4 class="pro-d-title">
                        <h2><b>Product Name: {{$product->product_name}}</b></h2>
                    </h4>

                    <div class="product_meta">

                        <span class="posted_in"> <strong>Product Name: {{$product->product_name}}</span>
                        <span class="posted_in"> <strong>Product Details: {{$product->details}}</span>
                        <span class="posted_in"> <strong>Product Min Price: {{$product->min_price}}</span>
                        <span class="posted_in"> <strong>Product Max Price: {{$product->max_price}}</span>
                        <span class="posted_in"> <strong>Product Category: {{$product->product_name}}</span>
                        <span class="posted_in"> <strong>Product Location: {{$product->location}}</span>
                        <span class="posted_in"> <strong>Expiry Date: {{$product->expiry_date}}</span>
                    </div>




                    <p class="product_meta">
                   
                        <a href="{{route('products.edit', $product->id)}}"><button class="btn btn-round btn-danger" type="button"><i class="fa fa-pencil"></i> Edit Product</button></a>
                    </p>
                </div>
            </div>
        </section>
    </div>
@stop

