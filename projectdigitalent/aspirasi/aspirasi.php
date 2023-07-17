<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Web Digitalent</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="aspirasi.css">
</head>
<body>
        <div class="container-fluid">
            <!-- HeadBar -->
            <div class="row">
              <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid container-xl d-flex">
                  <a class="navbar-brand" href="#">
                    <img src="../asset/img/logohimatif.png" alt="">
                    <span>HIMATIF</span>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form> -->
                  <ul class="nav justify-content-end">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="../index.php">Beranda</a>
                    </li>
                    <li class="dropdown">
                      <a class="nav-link dropdown-toggle" href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Sejarah Himatif</a></li>
                        <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./aspirasi/aspirasi.html">Aspirasi</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link">Galeri</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
            <!-- End of HeadBar--> 
        </div>
        <br>
        <!-- Table Aspirasi-->
        <br>
        <div class="card">
            <h5 class="card-header">Tabel Aspirasi</h5>
            <button type="button" class="btn btn-primary" style="width: 100px; margin-top: 15px; margin-left: 15px;" data-bs-toggle="modal" data-bs-target="#modalAspirasi">Tambah</button>
            <div class="card-body">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>No.</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Aspirasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>20210120030</td>
                            <td>Rachmat Ashari</td>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium aliquam quae vel a veniam quaerat odio quibusdam in dolores. Rerum facere ex quam minus suscipit eligendi illo fugit libero! Corrupti? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos officiis, non facilis in totam itaque numquam, ex sed nostrum quas incidunt expedita? Nobis aperiam, numquam quidem maxime inventore corporis doloribus?</td>
                            <td></td>
                        </tr>
                    </tbody>
                  </table>
            </div>
            <div class="modal fade" id="modalAspirasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Aspirasi</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="tambah_aspirasi.php" class="form-floating" method="post" role="form">
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="NIM" name="nim">
                                    <label for="floatingInput">NIM</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama Lengkap" name="nama">
                                    <label for="floatingInput">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="aspirasi"></textarea>
                                <label for="floatingTextarea" style="margin-left: 10px;">Aspirasi</label>
                              </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <input value="Simpan" type="submit" name="submit" class="btn btn-primary">
                    </div> 
                    </form>
                  </div>
                </div>
              </div>
        </div>
    <!-- JavaScript -->
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>