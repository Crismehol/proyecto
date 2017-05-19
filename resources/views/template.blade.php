<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    {{--<link rel="icon" type="image/png" href="../../resources/assets/img/favicon.png"/>--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>GestiOptica</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

    <!-- Bootstrap core CSS     -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet"/>

    <!-- Bootstrap Colorpicker     -->
    <link href="{{URL::asset('css/bootstrap-colorpicker.css')}}" rel="stylesheet"/>

    <!--  Material Dashboard CSS    -->
    <link href="{{URL::asset('css/material-dashboard.css')}}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet'
          type='text/css'>

    <!--   Core JS Files   -->
    <script src="{{ URL::asset('js/jquery-3.1.0.min.js') }}" type="text/javascript"></script>

    <link href="{{URL::asset('plugin/summernote/summernote.css')}}" rel="stylesheet">
    <script src="{{ URL::asset('plugin/summernote/summernote.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('plugin/summernote/lang/summernote-es-ES.js') }}" type="text/javascript"></script>
{{-- Notificaciones (?) --}}
    <link href="{{URL::asset('plugin/noty/noty.css')}}" rel="stylesheet">
    <script src="{{ URL::asset('plugin/noty/noty.js') }}" type="text/javascript"></script>
</head>
<body data-spy="scroll" data-target="#side-nav">
    <div class="wrapper">
        @include('sidebar')
        <div class="main-panel">
            @include('header')

            @include('alertMessages')
            @yield('content')


            @include('footer')
        </div>
</div>
</body>
<!-- Scripts -->
<!--   Core JS Files   -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/material.min.js') }}" type="text/javascript"></script>

<!--  DropZone Plugin    -->
<script src="{{ URL::asset('js/dropzone.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ URL::asset('js/bootstrap-notify.js') }}"></script>

<!--  DatePicker Plugin    -->
<script src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="{{ URL::asset('js/material-dashboard.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>

<!--  ColorPicker Plugin    -->
<script src="{{ URL::asset('js/bootstrap-colorpicker.min.js') }}"></script>
{{-- Focus  --}}
{{--<script src="{{ URL::asset('js/app/promoforms.js') }}"></script>--}}
<script src="{{ URL::asset('js/app/routes.js') }}"></script>

</html>