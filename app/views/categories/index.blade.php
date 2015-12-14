@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">

                <span class="pull-left">
                   <h3><span class="glyphicon glyphicon-folder-open"></span>  Category Details</h3>
                </span>

                <span class="pull-right">
                    <td><a href="{{ route('categories.create') }}"><button class="btn btn-success">Create New Category</button></a></td>
                </span>



                </header>

                <div class="panel-body">
                    <table class="table table-stripped display" id="data">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>

                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($category as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{ $category->name }}</td>

                                <td><a href="{{ route('categories.edit', $category->id) }}"><button class="btn btn-info">Edit</button></a></td>
                                <td><a href="{{ route('categories.destroy', $category->id) }}"><button class="btn btn-danger">Delete</button></a></td>


                            </tr>

                        @endforeach
                        </tbody>
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