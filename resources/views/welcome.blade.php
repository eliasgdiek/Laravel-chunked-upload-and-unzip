<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />

    <script src="{{asset('bower_components/resumablejs/resumable.js')}}" type="application/javascript"></script>
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}" type="application/javascript"></script>
</head>
<body>
<br><br><br>

<div class="container">
    <div class="row justify-content-center v-center">
        <div class="col-md-6">
            <div id="resumable-drop" class="hide">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <p><button class="btn btn-primary form-control" id="resumable-browse" data-url="{{ url('api/upload') }}" >Choose File</button>
                </p>
            </div>

            <div class="hide" id="progress">
                <div class="row">
                    <div class="col-md-1 col-sm-1 text-center">
                        <i class="fas fa-file" style="margin-top: 20px;"></i>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <p><b id="file-name">&nbsp;</b></p>
                        <p id="file-size">&nbsp;</p>
                        <div id="myProgress">
                            <div class="bar" id="myBar"></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <span id="close">&times;</span>
                    </div>
                </div>
            </div>
            <br />

            <div class="alert alert-success alert-dismissible hide" id="success-alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> <span>Uploaded Successfully.</span>
            </div>
            <br />
            <div class="alert alert-danger alert-dismissible hide" id="warning-alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Warning!</strong> <span>Please select a file.</span>
            </div>

        </div>
    </div>
</div>

    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>