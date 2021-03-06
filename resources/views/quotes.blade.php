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
        <link rel="stylesheet" href="/css/quottime.css" />

        <!-- Fav-icon -->
        <link rel="shortcut icon" href="/asset/logo-quottime.png" />

        <title>Quottime | Temukan Quote-mu Disini.</title>
    </head>
    <body>
        <!-- start navbar -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-light">
            <div class="container">
                <a
                    class="navbar-brand"
                    href="/quottime"
                    style="color: #0c1b31"
                    ><img
                        src="/asset/logo-quottime.png"
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
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                style="color: #0c1b31"
                                aria-current="page"
                                href="/quottime"
                                >Beranda</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                style="color: #0c1b31"
                                aria-current="page"
                                href="/quotes"
                                >Quotes</a
                            >
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="post">
                            @csrf
                            <button class="nav-link bg-transparent border-0" style="color: #0c1b31" aria-current="page" type="submit">Keluar</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navbar -->

        <!-- start quotes -->
        <section id="quotess">
            <div class="container">
                <div class="row text-center">
                    <div class="cpl-md-12">
                        <h4 class="title-judul">Quotes</h4>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form action="/quotes">
                                <div class="input-group mb-3 mt-3">
                                    <input type="text" class="form-control" style="background: rgba(255, 255, 255, 0.20);
                                        backdrop-filter: blur(4px);
                                        -webkit-backdrop-filter: blur(4px);
                                        border-radius: 5px 0 0 5px;
                                        border: 1px solid rgba(255, 255, 255, 0.18);" placeholder="Cari Berdasarkan #..." name="cari" value="{{ request('cari') }}" autocomplete="none">
                                    <button class="btn" style="background: linear-gradient(290deg, #22c1c3, #fdbb2d); border :1px solid var(--color-2); color: var(--color-2);" type="submit">Cari</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                    @foreach ($data as $d)
                    <div class="col-md-4 mt-3">
                        <div class="card-box text-center py-5">
                            <div class="img-card">
                                @if($d->gambar)
                                <div style="max-height: 201; overflow:hidden;">
                                    <img
                                    src="{{ asset('img/' . $d->gambar) }}"
                                    alt="Quottime"
                                    />
                                </div>
                                @else
                                <img
                                src="https://source.unsplash.com/random/201x201?{{ $d->gambar }}"
                                alt="Quottime" class="position-absolute top-50 start-50 translate-middle">
                                />
                                @endif
                            </div>
                            <div class="img-body">
                                <p>{!! $d->user->nama !!}</p>
                            </div>
                            <div class="quote-text p-2">
                                <p>
                                    <i>
                                        " {!! $d->isi !!} "
                                    </i>
                                </p>
                            </div>
                            <div class="tagar text-center">
                                <p># {!! $d->tagar !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
