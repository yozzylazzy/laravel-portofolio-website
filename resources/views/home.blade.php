<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<style>
    body{
        background-attachment: fixed;
        background-image: url("assets/img/pola.png");
        backdrop-filter: blur(0.3vw);
        background-repeat: repeat;
    }
    .material-symbols-outlined {
        font-size: 2em;
        vertical-align: middle;
        margin-right: 0.2em;
    }

    .dropdown-item:hover {
        background-color: aqua;
    }

    .navbar-nav .nav-link {
        font-size: 1.1em;
        font-family: 'Gemunu Libre', sans-serif;
        vertical-align: middle;
    }

    .navbar {
        font-family: 'Gemunu Libre', sans-serif;
    }

    .head-content {
        font-family: 'Gemunu Libre', sans-serif;
        text-transform: uppercase;
        font-size: 1.5em;
        text-align: center;
        font-weight: bold;
    }
    .logo-content{
        margin-top: 1vw;
        font-size: 3em;
        text-align: center;
        margin-bottom: 1vw;
        font-family: 'Gemunu Libre', sans-serif;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/"><span class="material-symbols-outlined">
                        code
                    </span><b
                        style="vertical-align: middle; font-size: 1.4em; font-family: 'Gemunu Libre', sans-serif;">YOZZY
                        LAZZY</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                MY PROJECTS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <h4 class="card-header bg-dark text-white"><b>Development</b></h4>
                                <li><a class="dropdown-item" href="/game">Game Development</a></li>
                                <li><a class="dropdown-item" href="/web">Web Development</a></li>
                                <li><a class="dropdown-item" href="/mobile">Application Mobile Development</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <h4 class="card-header bg-dark text-white"><b>Research</b></h4>
                                <li><a class="dropdown-item" href="/machinelearning">Machine Learning</a></li>
                                <li><a class="dropdown-item" href="/deeplearning">Deep Learning</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/about">ABOUT ME</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-3">
            <div class="">
                <img src="{{ asset('assets/img/prog.png') }}" alt="programming" class="rounded-circle img-thumbnail"
                    style="width: 25em; height: 24.5em; text-align: center;
                margin:auto; display:block;">
            </div>
            <div class="mb-3">
                <h1 class="text-center" style="font-family: 'Gemunu Libre', sans-serif;">{{ $title }}</h1>
                <p class="text-center" style="font-family: 'Gemunu Libre', sans-serif;">This is my website, I will share
                    my projects here</p>
            </div>
            <div class="mt-3">
                <div class="row">
                    <div class="col-4 text-center" style="background-color: black; color:white;">
                        <div class="head-content">
                            Who Am I?
                        </div>
                        <div class="main-content">
                            <div class="logo-content">
                                <span class="material-symbols-outlined">
                                    sentiment_very_satisfied
                                </span>
                            </div>

                        </div>
                    </div>
                    <div class="col-4 text-center"style="background-color: white; color:black;">
                        <div class="head-content">
                            What Am I Doing?
                        </div>
                        <div class="main-content">
                            <div class="logo-content">
                                <span class="material-symbols-outlined">
                                    task
                                </span>
                            </div>

                        </div>
                    </div>
                    <div class="col-4 text-center"style="background-color: black; color:white;">
                        <div class="head-content">
                            Why Me?
                        </div>
                        <div class="main-content">
                            <div class="logo-content">
                                <span class="material-symbols-outlined">
                                    add_task
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid bg-dark text-white p-5 mt-3">
            <div class="row">
                <div class="col-4">
                    <h5 class="navbar-brand" href="/" style="margin-top: 15%; text-align: center;"><span
                            class="material-symbols-outlined">
                            code
                        </span><b
                            style="vertical-align: middle; font-size: 3rem; font-family: 'Gemunu Libre', sans-serif;">YOZZY
                            LAZZY</b></h5>
                </div>
                <div class="col-4">
                    <h5 class="card-header bg-dark text-white text-center"><b>CONTACT ME</b></h5>
                    @foreach ($contact as $kontak)
                        <p class="card-text"><span class="material-symbols-outlined">
                                mail
                            </span> Email : {{ $kontak['email'] }}</p>
                        <p class="card-text"><span class="material-symbols-outlined">
                                camera
                            </span> Line : {{ $kontak['line'] }}</p>
                        <p class="card-text"><span class="material-symbols-outlined">
                                smartphone
                            </span> Phone : {{ $kontak['phone'] }}</p>
                    @endforeach
                </div>
                <div class="col-4">
                    <h5 class="card-header bg-dark text-white text-center"><b>ABOUT ME</b></h5>
                    <p class="card-text">My Name</p>
                    <p class="card-text">My Age</p>
                    <p class="card-text">My Address</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h3 style="text-align: center;
                    font-family: 'Gemunu Libre', sans-serif">
                        <a href="/about" style="font-variant: normal; text-decoration: none; color:white"> &copy;
                            2021 YOZZY LAZZY</a>
                    </h3>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
