<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>{{ $title }} - {{ Config::get('customConfig.names.siteName')}}</title>

    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap-reset.css') }}
    {{ HTML::style('fonts/font-awesome/css/font-awesome.css') }}
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/style-responsive.css') }}
    @yield('style')
    {{ HTML::style('css/custom.css') }}

            <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    {{ HTML::script('js/html5shiv.js') }}
    {{ HTML::script('js/respond.min.js') }}
    <![endif]-->

    <script type="text/javascript">
        var RecaptchaOptions = {
            theme : 'clean'
        };
    </script>
</head>

<body class="register-body">
<div class="container">
    {{ Form::open(array('route' => 'user.create', 'method' => 'post', 'class' => 'form-signin')) }}
    <h2 class="form-signin-heading">User Registration</h2>
    <div class="login-wrap">
        @include('includes.alert')

        {{ Form::label('contact', 'Contact', array('' => '')) }}
        {{ Form::text('contact', '', array('class' => 'form-control', 'placeholder' => 'Contact Number', 'autofocus')) }}


        {{ Form::label('password', 'New Password', array('' => '')) }}
        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'New Password')) }}

        {{ Form::label('password_confirmation', 'Confirm Password', array('' => '')) }}
        {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) }}



        <div class="form-group">
		 		<span>
		 		<table width="100%" border="0">
                    <tr>
                        <td>{{Form::checkbox('agree', null)}}</td>

                        <td>{{ Form::label('agree', ' I agree to this Terms of Service and Privacy Policy.') }}</td>
                    </tr>
                </table>
		 		</span>
            <p class="error">{{$errors->first('agree')}}</p>
        </div>

        <label class="checkbox">
                        <span class="pull-left">
		                    <a href="{{route('login')}}">Login</a>
		                </span>
		                <span class="pull-right">
		                </span>
        </label>
        {{ Form::submit('Register', array('class' => 'btn btn-lg btn-login btn-block')) }}
    </div>



    {{ Form::close() }}


</div>

<!-- js placed at the end of the document so the pages load faster -->
{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/bootstrap.min.js') }}

</body>
</html>
@stop