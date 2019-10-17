<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Eigen styles -->
    <link rel="stylesheet" href="css/styles.css">

    <title>Test</title>
  </head>

  <body>
    <section class="cat-section">
      <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">M-ovie</a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->

      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="z-index: 8;">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Nieuw</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Coming soon</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Films
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="film?genre=actie">Actie</a>
              <a class="dropdown-item" href="film?genre=avonturenfilm">Avonturenfilm</a>
              <a class="dropdown-item" href="film?genre=docu">Docu</a>
              <a class="dropdown-item" href="film?genre=docu">Drama</a>
              <a class="dropdown-item" href="film?genre=docu">Familie</a>
              <a class="dropdown-item" href="film?genre=docu">Fantasy</a>
              <a class="dropdown-item" href="film?genre=docu">Thriller</a>
              <a class="dropdown-item" href="film?genre=docu">Historisch</a>

            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Titel van de film..." aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">zoeken</button>
        </form>
      </div>
    </nav>
      <div class="container cat-inner">
        <div class="row">
          <div class="col-lg-12">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-lg-4">
                    <a href="#" class="btn btn-primary cat-btn">Actie</a>
                    </div>

                    <div class="col-lg-4">
                      <a href="#" class="btn btn-primary cat-btn">Komedie</a>
                    </div>

                    <div class="col-lg-4">
                      <a href="#" class="btn btn-primary cat-btn">Thriller</a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-lg-4">
                    <a href="#" class="btn btn-primary cat-btn">Avontuur</a>
                    </div>

                    <div class="col-lg-4">
                      <a href="#" class="btn btn-primary cat-btn">Documentare</a>
                    </div>

                    <div class="col-lg-4">
                      <a href="#" class="btn btn-primary cat-btn">Horror</a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-lg-4">
                    <a href="#" class="btn btn-primary cat-btn">Familie</a>
                    </div>

                    <div class="col-lg-4">
                      <a href="#" class="btn btn-primary cat-btn">Fantasy</a>
                    </div>

                    <div class="col-lg-4">
                      <a href="#" class="btn btn-primary cat-btn">Historisch</a>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="movies">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>Nu in de bioscoop</h1>
          </div>
        </div>
        <div class="row" style="margin-top: 2%;">
          <div class="col-lg-6">
            <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="img/films/joker.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Joker</h5>
                    <p class="card-text">During the 1980s, a failed stand-up comedian is driven insane and turns to a life of crime and chaos in Gotham City while becoming an infamous psychopathic crime figure.</p>
                    <p class="card-text"><small class="text-muted">Oktober, 2019</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="img/films/lionking.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">The Lion King</h5>
                    <p class="card-text">Simba idolises his father, King Mufasa, and takes to heart his own royal destiny. But not everyone in the kingdom celebrates the new cub's arrival. Scar, Mufasa's brother—and former heir to the throne—has plans…</p>
                    <p class="card-text"><small class="text-muted">19 juli 2019</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="img/films/elgaming.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">El Camino: A Breaking Bad Movie</h5>
                    <p class="card-text">In the wake of his dramatic escape from captivity, Jesse Pinkman must come to terms with his past in order to forge some kind of future.</p>
                    <p class="card-text"><small class="text-muted">11 oktober 2019</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="img/films/gemi.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Gemini Man</h5>
                    <p class="card-text">Henry Brogen, an aging assassin tries to get out of the business but finds himself in the ultimate battle: fighting his own clone who is 25 years younger than him and at the peak of his abilities.</p>
                    <p class="card-text"><small class="text-muted">11 oktober 2019</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
