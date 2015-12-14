@extends('layouts.default');
@section('content');
<div class="row">
    <div class="col-md-12">
        @include('includes.alert')
        <section class="panel">
            <header class="panel-heading">
                {{ $title }}
                <span class="pull-right">
                    <a href="{{ route('categories.index') }}"><button class="btn btn-success">Back</button></a>
                </span>
            </header>

            <div class="panel-body">

                {{ Form::model($category, ['role' => 'form', 'route' => ['categories.update', $category->id], 'method' => 'PUT']) }}

                <div class="form-group">
                    {{ Form::label('name', 'Category Name* :', array('class' => 'col-md-2 control-label')) }}
                    <div class="col-md-4">
                        {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Enter Category Name')) }}
                    </div>
                    <br><br>
                </div>









                <div class="form-group">
                    <div class="col-lg-10">
                        {{ Form::submit('Update Category', array('class' => 'btn btn-primary')) }}
                    </div>
                </div>

                {{ Form::close() }}
            </div>
        </section>
    </div>
</div>
@stop