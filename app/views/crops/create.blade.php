@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                    <span class="pull-right">
                    <a href="{{ route('crops.index') }}"><button class="btn btn-success">Articles List</button></a>
                </span>
                </header>

                <div class="panel-body">

                    {{ Form::open(array('route' => 'crops.store')) }}

                    <div class="form-group">
                        {{ Form::label('crop_name', 'Crop Name* :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('crop_name', null, array('class' => 'form-control', 'placeholder' => 'Enter Crop Name')) }}
                        </div>
                        <br><br>
                    </div>



                    <div class="form-group">
                        {{ Form::label('category_id', 'Category Name :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{Form::select('category_id', $category, '',array('class' => 'form-control', 'id' => 'status'))}}
                        </div>
                        <br><br>
                    </div>



                    <div class="form-group">
                        <div class="col-lg-10">
                            <br><br>
                            {{ Form::submit('Create Crop', array('class' => 'btn btn-primary')) }}
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