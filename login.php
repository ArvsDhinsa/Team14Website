<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Nautical Feud</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">NAUTICAL FEUD</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="aboutus.html" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="ourgame.html" class="nav-link">Our Game</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog.html" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="bg-light text-dark p-5">
        <div class="login-container">
            <div class="card login-form">
                <div class="card-body">
                    <h1 class="card-title text-center">Login</h1>
                    <div class="card-text p-3">
                        <form>
                            <div class="form-group">
                                <label for="inputEmail">Email Address</label>
                                <input type="email" class="form-control form-control-sm" id="inputEmail"/>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control form-control-sm" id="inputPassword"/>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block my-3">Login</button>
                            <div class="signup">Don't have an account? <a href="signup.html">Signup Here</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="p-5 bg-dark text-white text-center position-relative" >
        <div class="container">
            <p class="lead mt-3">Copyright &copy; 2022 Nautical Feud</p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>