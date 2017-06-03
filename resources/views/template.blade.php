<!DOCTYPE html>
<html class='no-js' lang='es'>
    <head>
        <meta charset='utf-8'>
        <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
        <title>Dashboard</title>
        <meta content='lab2023' name='author'>
        <meta content='' name='description'>
        <meta content='' name='keywords'>
        <link href="{{ URL::asset('css/application-a07755f5.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('resources/assets/images/favicon.ico') }}" rel="icon" type="image/ico" />
    </head>
    <body class='main page'>
        <!-- Navbar -->
        <div class='navbar navbar-default' id='navbar'>
          <a class='navbar-brand' href='#'><i class='icon-eye-open'></i> Gestión Óptica</a>
          <ul class='nav navbar-nav pull-right'>
            <li class='dropdown user'>
              <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                <i class='icon-user'></i>
                <strong>User</strong>
                <b class='caret'></b>
              </a>
            </li>
          </ul>
        </div>
        <div id='wrapper'>
            <!-- Sidebar -->
            @include('sidebar')
            <!-- Content -->
            @yield('content')
        </div>
        <!-- Footer -->
        <!-- Javascripts -->
        <script src="{{ url('//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/application-985b892b.js') }}" type="text/javascript"></script>
        {{--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>--}}
        {{--<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>--}}
        {{--<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>--}}
        {{--<script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>--}}

        <!-- Google Analytics -->
        {{--<script>--}}
          {{--var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];--}}
          {{--(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];--}}
          {{--g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';--}}
          {{--s.parentNode.insertBefore(g,s)}(document,'script'));--}}
        {{--</script>--}}
    </body>
</html>
