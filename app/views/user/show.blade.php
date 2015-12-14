@extends('layouts.default')
@section('content')
    @include('includes.alert')

    <div class="col-md-13">
        <section class="panel">
            <div class="panel-body">


                <div class="col-md-5">
                    <div class="col-md-11" >
                     {{ HTML::image(Auth::user()->userInfo->avatar_url, 'alt', array('class'=>" img-thumbnail")) }}
                        <br><br> <br><br>
                        <a href="{{route('upload.avatar')}}"><button type="button" class="btn btn-info"><i class="fa fa-image"></i> Change Profile Image</button></a>
                    </div>
                </div>


                <div class="col-md-7">
                     <h4 class="pro-d-title">
                         <h2><b> {{Auth::user()->userInfo->fullname}} </b></h2>
                     </h4>

                    <div class="product_meta">

                        <span class="posted_in"> <strong>Contact no:</strong>  {{Auth::user()->contact}}</span>
                        <span class="posted_in"> <strong>Address:</strong>  {{Auth::user()->userInfo->address}}</span>
                        <span class="posted_in"> <strong>Email:</strong>  {{Auth::user()->userInfo->email}}</span>
                    </div>




                    <p class="product_meta">
                        <a href="{{route('user.edit')}}"><button class="btn btn-round btn-danger" type="button"><i class="fa fa-pencil"></i> Edit Profile</button></a>
                    </p>
                </div>
            </div>
        </section>
    </div>
@stop