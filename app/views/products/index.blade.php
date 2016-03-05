
@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">

                <span class="pull-left">
                   <h3><span class="glyphicon glyphicon-pushpin"></span>  Product Details</h3>
                </span>

                <span class="pull-right">
                    <td><a href="{{ route('products.create') }}"><button class="btn btn-success">Create New Product</button></a></td>
                </span>

                </header>



                <div class="panel-body">
                    <table class="table table-striped display" id="data">
                        <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>product name</th>
                            <th>product Details</th>
                            <th>Picture</th>
                            <th>Min price</th>
                            <th>Max price</th>
                            <th>Crop Name</th>
                            <th>Crop Category</th>
                            <th>Location</th>
                            <th>Expiry Date</th>
                            <th>Longi</th>
                            <th>Lati</th>
                            <th>Action</th>


                        </tr>
                        </thead>

               
                        <tbody>
                        @foreach ($product as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{ $product->details }}</td>
                                <td>{{ HTML::image($product->picture, 'alt', array( 'width' => 35, 'height' => 35 )) }}</td>
                                <td>{{ $product->min_price }}</td>
                                <td>{{ $product->max_price }}</td>
                                <td>{{ $product->crops->crop_name }}</td>
                                <td>{{ $product->crops->categories->name }}</td>
                                <td>{{ $product->location }}</td>
                                <td>{{ $product->expiry_date }}</td>
                                <td>{{ $product->long }}</td>
                                <td>{{ $product->lat }}</td>

                                <td>
                               <a href="{{ route('products.show', $product->id) }}"><button class="btn btn-info btn-xs glyphicon glyphicon-eye-open"></button></a>
                                <a href="{{ route('products.edit', $product->id) }}"><button class="btn btn-success btn-xs glyphicon glyphicon-edit"></button></a>
                                <a href="{{ route('products.destroy', $product->id) }}"><button class= " btn btn-danger btn-xs glyphicon glyphicon-trash"></button></a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                        
                        <center><p>No Data Found</p><center>
                        
                    </table>
                </div>
            </section>
        </div>
    </div>




@stop


@section('style')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.css">
@stop


@section('script')

    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.js"></script>


    <script type="text/javascript">
        $(document).ready( function () {
            $('#data').DataTable();
        } );
    </script>
@stop