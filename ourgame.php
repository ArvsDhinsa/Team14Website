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
    <title>Our Game</title>
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
                        <a href="aboutus.php" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="ourgame.php" class="nav-link">Our Game</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog.php" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="bg-dark text-light text-center p-5">
        <div class="container"> 
            <h1 class="mb-3">Nautical Feud Tutorial</h1>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="videos/ScreenCast.mp4" allowfullscreen height="600px" width="1200px"></iframe>
            </div>
        </div>
    </section>

    <section class="bg-light text-dark text-center p-5">
        <div class="container">
            <div class="d-flex align-items-center">
                <div>
                    <h1>Our Game</h1>
                    <p class="lead my-3">Nautical Feud is a turn based, strategic multiplayer game that we are basing off the original Battleships but with our own twists. <br>
                    Our game features two modes, beginner and advanced where the advanced mode allows players to use various power ups to their advantage. <br> We are using Unity to create this game as it would allow for the implementation of features that we require. <br>
                    In the video above you can view a tutorial showcasing what we have developed at the moment and the basic functionality of the game. </p>
                    <p class="lead my-3"><u>GitHub Project Link:</u> <a href="https://github.com/Jan-art/Unity-Course-work">https://github.com/Jan-art/Unity-Course-work</a></p>
                    <p class="lead my-3"><u>Game Instructions:</u> After downloading the zip folder using the button below, extract the files and run the file named 'Prototype 1' in order to play the game. This will allow the user to play the game with another user.</p>
                    <a href="extra/Build (1) (1).zip" download><button class="btn btn-primary btn-lg my-3">Download</button></a>
                </div>
            </div>
        </div>
    </section>

    <footer class="p-5 bg-dark text-white text-center position-relative">
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