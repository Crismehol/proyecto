<!DOCTYPE html>
<html class='no-js' lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
        <title>Sign in</title>
        <meta content='lab2023' name='author'>
        <meta content='' name='description'>
        <meta content='' name='keywords'>
        <link href="{{ URL::asset('css/application-a07755f5.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body class='login'>
        <div class='wrapper'>
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='brand text-center'>
                        <h1><div class='logo-icon'><i class='icon-eye-open'></i></div>
                            Gestión Óptica
                        </h1>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-lg-12'>
                    <form action="{{URL::asset('login')}}" method="post" >
                    {{ csrf_field() }}
                        <fieldset class='text-center'>
                            <div class='form-group @if(Input::old('email') == null)is-empty @endif'>
                                <input class='form-control' placeholder='Email address' type='email' name="email" id="email" value="{{Input::old('email')}}">
                            </div>
                            <div class='form-group @if(Input::old('password') == null)is-empty @endif'>
                                <input class='form-control' placeholder='Password' type='password' name="password" id="password" value="{{Input::old('password')}}">
                            </div>
                            <div class='text-center'>
                                <button class="btn btn-default" type="submit">Entrar</button>
                            </div>
                        </fieldset>
                        {{--<div class="form-group @if(Input::old('email') == null)is-empty @endif">--}}
                            {{--<label class="control-label">Email</label>--}}
                            {{--<input type="email" class="form-control" name="email" value="{{Input::old('email')}}">--}}
                            {{--<span class="material-input">{{$errors->first('email')}}</span>--}}
                        {{--</div>--}}
                        {{--<div class="form-group @if(Input::old('password') == null)is-empty @endif">--}}
                            {{--<label class="control-label">Contraseña</label>--}}
                            {{--<input type="password" class="form-control" name="password">--}}
                            {{--<span class="material-input">{{$errors->first('password')}}</span>--}}
                        {{--</div>--}}
                        {{--<button type="submit" class="btn btn-danger pull-right">Acceder--}}
                            {{--<div class="ripple-container"></div>--}}
                        {{--</button>--}}
                    </form>
                </div>
            </div>
        </div>
    <!-- Footer -->
    <!-- Javascripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>
    <script src="{{ URL::asset('js/application-985b892b.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/app/routes.js') }}"></script>
    <!-- Google Analytics -->
</body>
</html>
