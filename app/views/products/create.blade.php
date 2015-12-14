@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                    <span class="pull-right">
                    <a href="{{ route('products.index') }}"><button class="btn btn-success">Products List</button></a>
                </span>
                </header>

                <div class="panel-body">

                    {{ Form::open(array('route' => 'products.store', 'files' => true)) }}

                    <div class="form-group">
                        {{ Form::label('product_name', 'Product Name:', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('product_name', null, array('class' => 'form-control', 'placeholder' => 'Enter Crop Name')) }}
                        </div>
                        <br><br>
                    </div>


                    <div class="form-group">
                        {{ Form::label('details', 'Product Details:', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::textarea('details', null, array('class' => 'form-control', 'placeholder' => 'Enter Crop Details')) }}
                        </div>
                        <br><br>
                    </div>

                    <div class="form-group">
                        {{ Form::label('min_price', 'Min price:', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('min_price', null, array('class' => 'form-control', 'placeholder' => 'Enter Minimum Price')) }}
                        </div>
                        <br><br>
                    </div>

                    <div class="form-group">
                        {{ Form::label('max_price', 'Max price :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('max_price', null, array('class' => 'form-control', 'placeholder' => 'Enter Maximum price')) }}
                        </div>
                        <br><br>
                    </div>

                    <div class="form-group">
                        {{ Form::label('location', 'Location :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('location', null, array('class' => 'form-control', 'placeholder' => 'Enter Location')) }}
                        </div>
                        <br><br>
                    </div>


                    <div class="form-group">
                        {{ Form::label('expiry_date', 'Expiry Date :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('expiry_date', null, array('class' => 'form-control', 'placeholder' => 'Enter Location')) }}
                        </div>
                        <br><br>
                    </div>




                    <div class="form-group">
                        {{ Form::label('crop_id', 'Crop Name :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{Form::select('crop_id', $crop, '',array('class' => 'form-control', 'id' => 'status'))}}
                        </div>
                        <br><br>
                    </div>

                    <div class="form-group">
                        {{ Form::label('picture', 'Photo : ', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::file('picture', null, array('class' => 'form-control', 'placeholder' => '')) }}
                        </div>
                        <br><br>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-10">
                            <br><br>
                            {{ Form::submit('Create Article', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>
            </section>
        </div>
    </div>
@stop

@section('style')

    {{ HTML::style('css/chosen_dropdown/chosen.css') }}
    {{ HTML::style('assets/icheck/skins/square/green.css') }}

    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
@stop


@section('script')

    {{ HTML::script('js/chosen_dropdown/chosen.jquery.min.js') }}
    {{ HTML::script('assets/icheck/icheck.min.js') }}
    {{ HTML::script('js/ckeditor/ckeditor.js') }}

    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    <script type="text/javascript">

        $('#status').select2();

        $(document).ready(function(){
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_flat-red',
                increaseArea: '20%'
            });

            CKEDITOR.replace( 'editor', {
                "filebrowserImageUploadUrl": "{{asset('admin/js/ckeditor/plugins/imgupload.php')}}"
            } );
        });
    </script>
@stop