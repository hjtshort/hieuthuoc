<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Dashboard</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <link href="{!!  asset('/assets/css/bootstrap.min.css')  !!}" rel="stylesheet" />
        <link href="{!!  asset('/assets/css/light-bootstrap-dashboard.css')  !!}" rel="stylesheet" />
        <link href="{{  asset('/assets/css/demo.css')  }}" rel="stylesheet" />
        <script src="{{  asset('/assets/js/core/jquery.3.2.1.min.js')  }}" type="text/javascript"></script>
        <script src="{{  asset('/assets/js/core/popper.min.js')  }}" type="text/javascript"></script>
        <script src="{{  asset('/assets/js/core/bootstrap.min.js')  }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/js/plugins/jquery.dataTables.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/js/light-bootstrap-dashboard.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/js/plugins/moment.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/js/light-bootstrap-dashboard.js') }}" type="text/javascript"></script>
        <script src="{{asset('/assets/js/bootbox.min.js')}}"></script>
    </head>
    <body>
        <div class="wrapper">
            @include('modules.sidebar')
            <div class="main-panel">
                @include('modules.header')
                @yield('content1')
            </div>
        </div>
    </body>
</html>
