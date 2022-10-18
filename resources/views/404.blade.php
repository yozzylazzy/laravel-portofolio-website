<!DOCTYPE html>
<html>

<head>
    <title>404 NOT FOUND</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</head>
<style>
    body {
        background-attachment: local;
        background-image: url("assets/img/pola.png");
        backdrop-filter: blur(8px);
        background-repeat: no-repeat;
        font-family: 'Gemunu Libre', sans-serif;
        background-size: cover;
    }

    .alert{
        margin-bottom: 0%;
        padding-bottom: 5%;
    }

    .head-no {
        font-size: 5em;
        font-weight: bold;
        color: #000;
        font-family: 'Gemunu Libre', sans-serif;
    }

    .body-no {
        font-size: 1.6em;
        font-weight: bold;
        color: #000;
        font-family: 'Gemunu Libre', sans-serif;
    }

    img {
        vertical-align: text-bottom;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        display: block;
        width: 35em;
    }
</style>

<body>
    <div class="alert">
        <div class="alert-head">
            <div class="container mb-5">
                <div class="alert_img">
                    <img src="assets/img/404.png" class="img-fluid" alt="Not Found zzz">
                </div>
                <div class="text-center">
                    <div class="head-no">
                        <p>404 NOT FOUND</p>
                    </div>
                    <div class="body-no">
                        <p>Sorry, the page you are looking for could not be found.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert-body">
            <div class="container mb-5">
                <div class="text-center">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-grid gap-2">
                                <a href="/" class="btn btn-dark p-3" style="font-size: 1.5em;">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>