@extends('layouts.default')
@section('content')
    @include('includes.alert')
    {{ Form::model($profileInfo, array('route' => 'user.update', 'method' => 'post', 'role' => 'form')) }}
    <div class="col-md-6">
        <!-- personal information -->
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Personal Information</legend>


            {{ Form::label('fullname', 'Complete Name', array('' => '')) }}
            {{ Form::text('fullname', null, array('class' => 'form-control', 'autofocus')) }}

            {{ Form::label('mobile', 'Mobile no.', array('' => '')) }}
            {{ Form::text('contact', $profileInfo->user->contact, array('class' => 'form-control', 'autofocus')) }}

            {{ Form::label('address', 'Address', array('' => '')) }}
            {{ Form::text('address', null, array('class' => 'form-control', 'autofocus')) }}


            {{ Form::label('email', 'Email', array('' => '')) }}
            {{ Form::text('email', null, array('class' => 'form-control', 'autofocus')) }}






          <br><br>

            <div>

                {{ Form::submit('Update', array('class' => 'btn btn-lg btn-login btn-block')) }}
            </div>


    {{ Form::close() }}


@stop



