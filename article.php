<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Daily Journal</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
  <body>

    <!-- navbar -->

    <nav class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand fw-bold" href="#">My Daily Journal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" aria-current="page" href="homepage.html">Home</a>
              <a class="nav-link active" href="#">Article</a>
              <a class="nav-link" href="gallery.html">Gallery</a>
            </div>
          </div>
        </div>
      </nav>

    <!-- navbar end -->


    <!-- content -->
    
    <div class="content m-5">
        <article>
            <div class="articleSection container">
                <header>
                    <h1 class="fw-bold text-center p-5">Article</h1>
                </header>

                <div class="articleCard container">
                    <div class="row row-cols-1 row-cols-md-4 g-4 text-center d-flex justify-content-center">
                        <div class="col">
                          <div class="card h-100">
                            <img src="img/img1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Perpustakaan Kampus</h5>
                              <p class="card-text">Perpustakaan yang ada di kampus Udinus</p>
                            </div>
                            <div class="card-footer">
                              <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="img/img2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Ruang Kelas</h5>
                              <p class="card-text">Ruang kelas yang rapi dan bagus yang ada di Udinus.</p>
                            </div>
                            <div class="card-footer">
                              <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="img/img3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Kelompok Belajar</h5>
                              <p class="card-text">Perkuliahan dengan membuat sebuah kelompok belajar untuk menyelesaikan tugas dari dosen.</p>
                            </div>
                            <div class="card-footer">
                              <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                              <img src="img/img2.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Ruang Kelas</h5>
                                <p class="card-text">Ruang kelas yang rapi dan bagus yang ada di Udinus</p>
                              </div>
                              <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card h-100">
                              <img src="img/img1.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Perpustakaan Kampus</h5>
                                <p class="card-text">Ruang kelas yang rapi dan bagus yang ada di Udinus.</p>
                              </div>
                              <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card h-100">
                              <img src="img/img3.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Kelompok Belajar</h5>
                                <p class="card-text">Perkuliahan dengan membuat sebuah kelompok belajar untuk menyelesaikan tugas dari dosen.</p>
                              </div>
                              <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </article>
    </div>

    <!-- content end -->


    <!-- footer -->
     <footer class="bg-dark">
        <div class="footerSection mt-3">
            <div class="mediaSocial d-flex justify-content-center mb-2">
                <a class="text-light" href="">
                    <i class="fa-brands fa-instagram me-2"></i>
                  </a>
                  <a class="text-light" href="">
                    <i class="fa-brands fa-twitter ms-2 me-2"></i>
                  </a>
                  <a class="text-light" href="">
                    <i class="fa-brands fa-whatsapp ms-2"></i>
                  </a>
            </div>
            <div class="nameYear">
                <p class="text-light">Oddy Bagus Ifanda @ 2024</p>
            </div>
        </div>
     </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>