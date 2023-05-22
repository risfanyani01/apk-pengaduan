<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SKPK</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/images/logo.png')}}" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('assets/css/styles1.css')}}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5 d-flex justify-content-between">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">
                        <img src="{{asset('assets/images/logo.png')}}" alt="" height="80px"></span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder" style="cursor:pointer">
                            <li class="nav-item"><a class="nav-link">Beranda</a></li>
                            <li class="nav-item"><a href="#tataCara" class="nav-link">Tata Cara</a></li>
                        </ul>
                    </div>
                    <a style="background-color: #0081C9; border-radius:10px" href="{{route('login')}}" class="nav-link text-white px-3 py-2 ms-3">Masuk</a>
                </div>
            </nav>
            <!-- Header-->
            <header class="py-5">
                <div class="container py-5 pb-5" style="background-color: #0081C9; border-radius:20px">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Selamat Datang di</div></div>
                                <div class="fs-3 fw-light text-light"><span style="font-size: 24px"> Sistem Informasi Penerbitan SPKP <br> (Surat Perintah Kerja Perbaikan)</span></div>
                                <P class="display-3 fw-bolder mb-5"><span class="text-light d-inline" style="font-size: 48px">PDAM TIRTANADI SUMATERA UTARA</span></P>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About Section-->
            <section class="bg-light py-5" id="tataCara">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Tata Cara</span></h2>
                                <p class="lead fw-light mb-4">Penggunaan Sistem SPKP</p>

                                        </div>
                                        <div class="row business gx-2 justify-content-center">
                                            <div class="col-lg-3 col-xl-3">
                                                <div class="card mb-5 mb-xl-0 rounded-lg pt-4">
                                                  <img height="150px" src="{{asset('assets/images/tulis.svg')}}" class="card-img-top rounded-0" alt="...">
                                                    <div class="card-body px-4 py-4">
                                                        <p>1. Tulis laporan keluhan Anda dengan jelas.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-xl-3">
                                              <div class="card mb-5 mb-xl-0 rounded-lg pt-4">
                                                <img height="150px" src="{{asset('assets/images/processing.svg')}}" class="card-img-top rounded-0" alt="...">
                                                  <div class="card-body px-4 py-4">
                                                      <p>2.Tunggu sampai laporan Anda di verifikasi.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-3 col-xl-3">
                                            <div class="card mb-5 mb-xl-0 rounded-lg pt-4">
                                              <img height="150px" src="{{asset('assets/images/act.svg')}}" class="card-img-top rounded-0" alt="...">
                                                <div class="card-body px-4 py-4">
                                                    <p>3. Laporan Anda sedang dalam tindak lanjut.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                          <div class="card mb-5 mb-xl-0 rounded-lg pt-4">
                                            <img height="150px" src="{{asset('assets/images/verification.svg')}}" class="card-img-top rounded-0" alt="...">
                                              <div class="card-body px-4 py-4">
                                                  <p>4. Laporan pengaduan telah selesai ditindak.</p>
                                              </div>
                                          </div>
                                      </div>
                                        </div>
                                      </div>
                                    </div>
                                  </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="text-center">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; <span style="color:#0081C9; font-weight:bold">Tirtanadi</span> | {{now()->year}}</div></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
