<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{!!  asset('/assets/css/bootstrap.min.css')  !!}" rel="stylesheet" />
    <script src="{{  asset('/assets/js/core/jquery.3.2.1.min.js')  }}" type="text/javascript"></script>
    <script src="{{  asset('/assets/js/core/popper.min.js')  }}" type="text/javascript"></script>
    <script src="{{  asset('/assets/js/core/bootstrap.min.js')  }}" type="text/javascript"></script>
    <style>
    .img{
        width: 150px;
        height: 150px;
        border-radius: 50%;
        position: relative;
        overflow: hidden;
    }
    .img img{
        width: 100%;
        
    }
    .slider{
        position: relative;
        border:3px solid;
        
    }
    .slider h3{
        position: absolute;
        top:0;
        left: 0;
        border:3px solid;
        width: 100%;
        text-align: center
    }
    </style>
</head>
<body class="bg-danger">
    <div class="container-fluid" >
        <div class="row justify-content-center pt-5">
            <div class=" col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="img m-auto">
                            <img src="{{ asset('/assets/img/sidebar-1.jpg') }}" alt="">
                        </div>
                        <form action="">
                            <div class="form-group">
                                <label for="" class="label-control">Username</label>
                                <input type="text" class='form-control'>
                            </div>
                            <div class="form-group">
                                    <label for="" class="label-control">Password</label>
                                    <input type="text" class='form-control'>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary">submit</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>