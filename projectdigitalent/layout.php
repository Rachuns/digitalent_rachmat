<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--
        <link rel="stylesheet" href="css/bootstrap.min.css">
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>layout</title>
    <style>
        .row{
            border: 1px solid royalblue;
        }
        .box{
            padding: 30px;
            background: rgb(181, 170, 170);
            margin: 10px 0px;
        }
    </style>

</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <div class="box">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="https://polindra.ac.id/">POLINDRA</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="beranda.html">Beranda</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Informasi</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Jurusan
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Teknik Informatika</a></li>
                                  <li><a class="dropdown-item" href="#">Teknik Mesin</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Teknik Pendingin dan tata udara</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled">Pendaftaran</a>
                              </li>
                            </ul>
                            <form class="d-flex" role="search">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                          </div>
                        </div>
                      </nav>
                </div>

            </div>

        </div>


        <div class="row">
            <div class="col-sm-3">
                <div class="box">
                    side bar kiri
                </div>
            </div>
            <div class="col-sm-6">
                <div class="box">
                    konten
                </div>
            </div>
            <div class="col-sm-3">
                <div class="box">
                    side bar kanan
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                bootstrap
            </div>
            <div class="col-sm-2">
                link
            </div>
            <div class="col-sm-2">
                guide
            </div>
            <div class="col-sm-2">
                projek
            </div>
            <div class="col-sm-2">
                komunitas
            </div>
        </div>

    </div>

    <!--library js
    <script src="js/bootstrap.min.js"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>