<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />

        <!-- font google -->
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Quicksand:wght@300;600;700&display=swap"
            rel="stylesheet"
        />

        <!-- CSS -->
        <link rel="stylesheet" href="/css/style.css" />

        <!-- Fav-icon -->
        <link rel="shortcut icon" href="/asset/logo-quottime.png" />

        <title>Quottime | Temukan Quote-mu Disini.</title>
    </head>
    <body>
        <!-- start navbar -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" style="color: #0c1b31"
                    ><img
                        src="asset/logo-quottime.png"
                        alt=""
                        width="30"
                        height="30"
                        class="d-inline-block align-text-center"
                    />
                    Quottime</a
                >
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <button class="btn-login-nav">
                            <a href="/login" target="_blank">Masuk</a>
                        </button>

                        <button class="btn-daftar-nav">
                            <a href="/daftar" target="_blank">Daftar</a>
                        </button>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navbar -->

        <!-- start hero -->
        <section id="#">
            <div class="container">
                <div class="row mt-2">
                    <div class="col-md-6 my-auto">
                        <h1 class="mb-3" style="color: #fdbb2d">
                            Hai, <span>Selamat Datang.</span>
                        </h1>
                        <h3 class="mb-3">
                            <span>Quottime</span> Membantumu Untuk Membuat
                            Quote-mu Sendiri Dan Bisa Dibaca Orang Lain.
                        </h3>
                        <button class="btn-mulai-hero mt-3 mb-3">
                            <a href="/daftar" target="_blank">Daftar Yuk !</a>
                        </button>
                        <button class="btn-daftar-hero mt-3 mb-3">
                            <a href="/daftar" target="_blank">Daftar</a>
                        </button>
                        <button class="btn-login-hero mt-3 mb-3">
                            <a href="/login" target="_blank">Masuk</a>
                        </button>
                    </div>
                    <div class="col-md-6">
                        <img
                            src="asset/hero-img-1.png"
                            alt="Quottime"
                            class="w-100"
                        />
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero -->

        <!-- start tentang -->
        <section id="tentang">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-4 mb-4 hero-img-2">
                        <img
                            src="asset/hero-img-2.png"
                            alt="Quottime"
                            class="w-100"
                        />
                    </div>
                    <div class="col-md-6 my-auto text-center">
                        <h2>
                            <span>Quottime</span> adalah website yang dibuat
                            untuk menyalurkan imajinasimu atau kata - kata
                            menyentuh yang kamu punya.
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end tentang -->

        <!-- start quotes -->
        <section id="quotes">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h4
                            class="title-judul"
                            style="font-weight: 500; color: #0c1b31"
                        >
                            Quotes
                        </h4>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4 mt-3">
                        <div class="card-box text-center py-5">
                            <div class="img-card">
                                <div style="max-height: 201; overflow:hidden;">
                                    <img
                                    src="{{ asset('img/' . $data[0]->gambar) }}"
                                    alt="Quottime"
                                     />
                                </div>
                            </div>
                            <div class="img-body">
                                <p>{!! $data[0]->user->nama !!}</p>
                            </div>
                            <div class="quote-text p-2">
                                <p>
                                    <i
                                        >" {!! $data[0]->isi !!} "</i
                                    >
                                </p>
                            </div>
                            <div class="tagar text-tagar">
                                <p># {!! $data[0]->tagar !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card-box text-center py-5">
                            <div class="img-card">
                                <img
                                    src="{{ asset('img/' . $data[1]->gambar) }}"
                                    alt="Quottime"
                                    />
                            </div>
                            <div class="img-body">
                                <p>{!! $data[1]->user->nama !!}</p>
                            </div>
                            <div class="quote-text p-2">
                                <p>
                                    <i
                                        >" {!! $data[1]->isi !!} "</i
                                    >
                                </p>
                            </div>
                            <div class="tagar text-tagar">
                                <p># {!! $data[1]->tagar !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card-box text-center py-5">
                            <div class="img-card">
                                <img
                                src="{{ asset('img/' . $data[2]->gambar) }}"
                                alt="Quottime"
                                />
                            </div>
                            <div class="img-body">
                                <p>{!! $data[2]->user->nama !!}</p>
                            </div>
                            <div class="quote-text p-2">
                                <p>
                                    <i
                                        >" {!! $data[2]->isi !!} "</i
                                    >
                                </p>
                            </div>
                            <div class="tagar text-tagar">
                                <p># {!! $data[2]->tagar !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card-box text-center py-5">
                            <div class="img-card">
                                <img
                                src="{!! asset('img/' . $data[3]->gambar) !!}"
                                alt="Quottime"
                                />
                            </div>
                            <div class="img-body">
                                <p>{!! $data[3]->user->nama !!}</p>
                            </div>
                            <div class="quote-text p-2">
                                <p>
                                    <i
                                        >" {!! $data[3]->isi !!} "</i
                                    >
                                </p>
                            </div>
                            <div class="tagar text-tagar">
                                <p># {!! $data[3]->tagar !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card-box text-center py-5">
                            <div class="img-card">
                                <img
                                src="{!! asset('img/' . $data[4]->gambar) !!}"
                                alt="Quottime"
                                />
                            </div>
                            <div class="img-body">
                                <p>{!! $data[4]->user->nama !!}</p>
                            </div>
                            <div class="quote-text p-2">
                                <p>
                                    <i
                                        >" {!! $data[4]->isi !!} "</i
                                    >
                                </p>
                            </div>
                            <div class="tagar text-tagar">
                                <p># {!! $data[4]->tagar !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card-box text-center py-5">
                            <div class="img-card">
                                <img
                                src="{{ asset('img/' . $data[5]->gambar) }}"
                                alt="Quottime"
                                />
                            </div>
                            <div class="img-body">
                                <p>{!! $data[5]->user->nama !!}</p>
                            </div>
                            <div class="quote-text p-2">
                                <p>
                                    <i
                                        >" {!! $data[5]->isi !!} "</i
                                    >
                                </p>
                            </div>
                            <div class="tagar text-tagar">
                                <p># {!! $data[5]->tagar !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-md-12">
                        <button class="btn-read-more">
                            <a href="/daftar" target="_blank">Buat Sekarang</a>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- end quotes -->

        <!-- start footer -->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <p class="footer">
                            Copyright &copy; 2022 - Quottime ~ by ryan and winton.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
