<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<style>
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
</style>

<body>
    <hedear>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/"><span class="material-symbols-outlined">
                        code
                    </span><b style="vertical-align: middle; font-size: 1.4em; font-family: 'Gemunu Libre', sans-serif;">YOZZY LAZZY</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    </hedear>
    <main>
        <div class="container mt-3">
            <div class="row">
                <div class="col-8">
                    <img src="{{ asset('assets/img/programming.png') }}" alt="programming" class="img-fluid">
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" style="text-align: center;"><b>YOZZY LAZZY'S FOCUS</b></h4>
                        </div>
                        <div class="card-body">
                            <h5>Web Programming</h5>       
                            <h5>Game Programming</h5>
                            <h5>Mobile Programming</h5>
                            <h5>Machine Learning</h5>
                            <h5>Deep Learning</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>