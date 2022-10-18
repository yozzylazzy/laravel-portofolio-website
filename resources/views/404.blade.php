<!DOCTYPE html>
<html>

<head>
    <title>404 NOT FOUND</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</head>
<style>
    body {
        background-attachment: fixed;
        background-image: url("assets/img/pola.png");
        backdrop-filter: blur(5px);
        background-repeat: repeat;
        font-family: 'Gemunu Libre', sans-serif;
    }
    .head-no{
        font-size: 5em;
        font-weight: bold;
        color: #000;
        font-family: 'Gemunu Libre', sans-serif;
    }
    .body-no{
        font-size: 1.6em;
        font-weight: bold;
        color: #000;
        font-family: 'Gemunu Libre', sans-serif;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="text-center">
            <div class="head-no">
                <p>404 NOT FOUND</p>
            </div>
            <div class="body-no">
                <p>Sorry, the page you are looking for could not be found.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center">
            <a href="/" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
</body>

</html>