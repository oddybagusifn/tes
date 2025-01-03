<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Daily Journal</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  </head>
  <body>

    <!-- navbar -->

    <nav class="navbar navbar-dark navbar-expand-lg bg-dark sticky-top">
        <div class="container">
          <a class="navbar-brand fw-bold" href="#">My Daily Journal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#article">Article</a>
              <a class="nav-link" href="#gallery">Gallery</a>
              <a class="nav-link" href="#schedule">Schedule</a>
              <a class="nav-link" href="#profile">Profile</a>
            </div>
            <div class="nav-icon">
            <a class="nav-link" href="login.php">
              <i class="fa-solid fa-user text-light"></i>
            </a>
          </div>
          </div>
        </div>
      </nav>

    <!-- navbar end -->

    <!-- Hero Section -->
     
    <div class="heroSection">
        <a href="" style="text-decoration: none;">
            <div class="heroImage container-fluid">
                <p class="heroText text-light fw-bold d-flex justify-content-center align-items-center flex-column fs-1" style="text-shadow: rgba(255, 255, 255, .7);">Create Memories, Save Memories, Everyday
                  <br>
                  <span class="fw-light fs-3">
                    Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali
                  </span>
                </p>
            </div>
        </a>
    </div>
    
    <!-- Hero Section end -->

    <!-- article -->
    
    <div class="content m-5" id="article">
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

  <!-- article end -->

  <!-- gallery -->
    
  <div class="content m-5" id="gallery">
    <div class="gallery container">
        <header>
            <h1 class="fw-bold text-center p-5">Gallery</h1>
        </header>

        <div class="carouselImage">
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/img1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/img2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/img3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>


        <div class="cardGallery mt-5 container">
          <div class="card-group mx-auto p-2">
            <div class="card" style="width: 18rem;">
              <img src="img/img2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>

            <div class="card" style="width: 18rem;">
              <img src="img/img3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>

            <div class="card" style="width: 18rem;">
              <img src="img/img1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
</div>

<!-- gallery end -->


<!-- schedule -->

<div class="content m-5" id="schedule">
  <article>
      <div class="articleSection container border">
          <header>
              <h1 class="fw-bold text-center pb-5">Schedule</h1>
          </header>

          <div class="scheduleCard container">
              <div class="row row-cols-1 row-cols-md-4 g-4 text-center d-flex justify-content-start">
                  <div class="col">
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                      <div class="card-header fw-bold bg-primary text-light">Senin</div>
                      <div class="card-body text-dark">
                        <p class="card-title fw-bold">10:20 - 12:00</p>
                        <p class="card-text">Basis Data</p>
                        <p class="card-title fw-bold">12:30 - 15:00</p>
                        <p class="card-text">Rekayasa Perangkat Lunak</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card border-danger mb-3" style="max-width: 18rem;">
                      <div class="card-header fw-bold bg-danger text-light">Selasa</div>
                      <div class="card-body text-dark">
                        <p class="card-title fw-bold">10:20 - 12:00</p>
                        <p class="card-text">Basis Data</p>
                        <p class="card-title fw-bold">14:10 - 16:00</p>
                        <p class="card-text">Pendidikan Kewarganegaraan</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card border-warning mb-3" style="max-width: 18rem;">
                      <div class="card-header fw-bold bg-warning text-light">Rabu</div>
                      <div class="card-body text-dark">
                        <p class="card-title fw-bold">09:30 - 12:00</p>
                        <p class="card-text">Probabilitas dan Statistika</p>
                        <p class="card-title fw-bold">12:30 - 15:00</p>
                        <p class="card-text">Sistem Operasi</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card border-success mb-3" style="max-width: 18rem;">
                      <div class="card-header fw-bold bg-success text-light">Kamis</div>
                      <div class="card-body text-dark">
                        <p class="card-title fw-bold">09:30 - 12:00</p>
                        <p class="card-text">Logika Informatika</p>
                        <p class="card-title fw-bold">14:10 - 15:30</p>
                        <p class="card-text">Pemrograman Web</p>
                      </div>
                    </div>
                  </div>
                  <div class="col h-100">
                    <div class="card h-100 border-info mb-3" style="max-width: 18rem;min-height: 13rem;">
                      <div class="card-header fw-bold bg-info text-light">Jumat</div>
                      <div class="card-body text-dark">
                        <p class="card-title fw-bold">15:30 - 18:00</p>
                        <p class="card-text">Kriptografi</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col">
                    <div class="card border-dark mb-3" style="max-width: 18rem;min-height: 13rem;">
                      <div class="card-header fw-bold bg-dark text-light">Sabtu</div>
                      <div class="card-body text-dark d-flex align-items-center justify-content-center">
                        <p class="card-title fw-bold">Jadwal Kosong</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card border-secondary mb-3" style="max-width: 18rem;min-height: 13rem;">
                      <div class="card-header fw-bold bg-secondary text-light">Minggu</div>
                      <div class="card-body text-dark d-flex align-items-center justify-content-center">
                        <p class="card-title fw-bold">Jadwal Kosong</p>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
      </div>
  </article>
</div>

<!-- schedule end -->

<!-- profile -->
    
<div class="content m-5" id="profile">
  <div class="gallery container">
      <header>
          <h1 class="fw-bold text-center p-5">Profile</h1>
      </header>

      <div class="profile">
        <div class="profileBox  h-100">
          <div class="row row-cols-1 row-cols-md-3 g-4 d-flex flex-row">
            <div class="col-lg">
              <div class="imageProfile  w-100 d-flex justify-content-center align-items-center h-100">
                <img src="img/profile.jpg" class="w-75 rounded-circle" alt="">
              </div>
            </div>

            <div class="col-lg  d-flex justify-content-center align-items-center flex-column">
              <div class="bioProfile  w-100 ">
                <table class="table  w-100">
                  <thead>
                    <h2 class="text-center mb-5">Biodata Mahasiswa</h2>
                  </thead>
                  <tr>
                    <td class="fw-semibold p-2">Nama</td>
                    <td class="p-2">:</td>
                    <td class="p-2">Oddy Bagus Ifanda</td>
                  </tr>
                  <tr>
                    <td class="fw-semibold p-2">NIM</td>
                    <td class="p-2">:</td>
                    <td class="p-2">A11.2023.15276</td>
                  </tr>
                  <tr>
                    <td class="fw-semibold p-2">Program Studi</td>
                    <td class="p-2">:</td>
                    <td class="p-2">Teknik Informatika</td>
                  </tr>
                  <tr>
                    <td class="fw-semibold p-2">Fakultas</td>
                    <td class="p-2">:</td>
                    <td class="p-2">Ilmu Komputer</td>
                  </tr>
                  <tr>
                    <td class="fw-semibold p-2">Nama Universitas</td>
                    <td class="p-2">:</td>
                    <td class="p-2">Universitas Dian Nuswantoro</td>
                  </tr>
                  <tr>
                    <td class="fw-semibold p-2">Umur</td>
                    <td class="p-2">:</td>
                    <td class="p-2">20 Tahun</td>
                  </tr>
                  <tr>
                    <td class="fw-semibold p-2">No. Telp</td>
                    <td class="p-2">:</td>
                    <td class="p-2">081393265417</td>
                  </tr>
                </table>
                
                
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- profile end -->




    <!-- footer -->
     <footer class="bg-dark mt-5">
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