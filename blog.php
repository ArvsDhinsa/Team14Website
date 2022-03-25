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

    <section class="bg-light-text-light p-5 text-center">
        <div class="container">
            <h1 class="text-center text-dark mb-5">Nautical Feud Blogs</h1>
        </div>
        <div class="row g-6">
            <div class="col-md-6 col-lg-3">
                <div class="card bg-dark text-light">
                    <img class="p-3" src="images/NauticalFeud3.PNG">
                    <div class="card-body text-center">
                        <h2 class="card-title mb-3">The Hack</h2>
                        <p class="card-text "></p>
                        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#blog1">Read Post</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-dark text-light">
                    <img class="p-3" src="images/Battleships.png" height="432px">
                    <div class="card-body text-center">
                        <h2 class="card-title mb-3">The MVP</h2>
                        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#blog2">Read Post</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-dark text-light">
                    <img class="p-3" src="images/Battleships.png" height="432px">
                    <div class="card-body text-center">
                        <h2 class="card-title mb-3">Refining the Game</h2>
                        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#blog3">Read Post</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-dark text-light">
                    <img class="p-3" src="images/Battleships.png" height="432px">
                    <div class="card-body text-center">
                        <h2 class="card-title mb-3">In The Works...</h2>
                        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#blog4">Read Post</button>
                    </div>
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

    <div class="modal fade" id="blog1" tabindex="-1" aria-labelledby="blog1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="blog1Label">The Hack</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p class="lead my-3">This is our first blog post on the Nautical Feud website where we will update you all on the progress we make during the development of our turn based multiplayer game, this will lead up to the completion of the project and the game Nautical Feud. 
                The first major progress that we made with our game was during the development of the hack where our development team were tasked with creating the main foundations of the game while also adding some functionality if that was possible. <br>
                <br>The game engine that we used to create a hack of our game was Unity and we chose this as it is a popular game engine widely used to develop games, this would allow us to learn Unity through tutorials and apply our knowledge to create the game. 
                The development of the hack involved using Unity to actually develop the game as well Blender to create some of the assets used such as the ships as well as the target used for choosing a spot on the board to target which also includes the notifiers for the hit and a miss. <br>
                <br>The Hack we developed had a local version of multiplayer implemented which allowed two players to use the same device to play against each other and also allows for a winner and a loser per game, the actual multiplayer aspect will be implemented within our MVP using Photon which provides the backend of the game that allows it to run on a server for multiplayer to function.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="blog2" tabindex="-1" aria-labelledby="blog2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="blog2Label">The MVP</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p class="lead my-3">The next major progress we made in regards to the development of our game was the MVP or minimum viable product, this stage of the project is where we had to develop our game further to the point where it could be considered a minimum viable product where it could be released as an actual game to be playable by anyone. <br>
                <br>For our MVP we decided that we had to prioritise multiplayer as that is one of the most challenging tasks to overcome during game development so by using Photon our game development team went to work to create the multiplayer aspect of our game while also refining the features already implemented during the Hack. <br>
                <br>The MVP mainly involved working on the development of the game but also work on our website which has changed a bit since it was first worked on during the Hack, a contributions page was added to explain our team and all of the roles that each team member 
                had as well as a tutorial page showing the game and how it is played and finally this blog page that documents the progress of our game and the main stages it has gone through. </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="blog3" tabindex="-1" aria-labelledby="blog3Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="blog3Label">Refining The Game</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="blog4" tabindex="-1" aria-labelledby="blog4Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="blog4Label">Refining The Game</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>