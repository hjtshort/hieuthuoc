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
        <script src="{{ asset('/assets/js/light-bootstrap-dashboard.js') }}" type="text/javascript"></script>
    </head>
    <body>
        <div class="wrapper wrapper-full-page">
                    <div class="content">
                        <div class="container">
                            <div class="col-md-4 col-sm-6 ml-auto mr-auto mt-5">
                                <form class="form" method="" action="">
                                    <div class="card card-login">
                                        <div class="card-header ">
                                            <h3 class="header text-center">Login</h3>
                                        </div>
                                        <div class="card-body ">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Email address</label>
                                                    <input type="email" placeholder="Enter email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" placeholder="Password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="" checked>
                                                            <span class="form-check-sign"></span>
                                                            Subscribe to newsletter
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer ml-auto mr-auto">
                                            <button type="submit" class="btn btn-warning btn-wd">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

        </div>
    </body>
</html>
