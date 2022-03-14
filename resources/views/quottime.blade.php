<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- font google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Quicksand:wght@300;600;700&display=swap" rel="stylesheet" />

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
        <a class="navbar-brand" href="/quottime" style="color: #6c63ff"><img src="/asset/logo-quottime.png" alt="" width="30" height="30" class="d-inline-block align-text-center" /> Quottime</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" style="color: #6c63ff" aria-current="page" href="/quottime">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #6c63ff" aria-current="page" href="/quotes">Quotes</a>
            </li>
            <li class="nav-item">
              <form action="/logout" method="post">
                @csrf
              <button class="nav-link bg-transparent border-0" style="color: #6c63ff" aria-current="page" type="submit">Logout</button>
            </form>
            </li>
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
            <h3 class="mb-2"><span>Hai</span>, {{ auth()->user()->nama }} :)</h3>
            <h1 class="mb-3">Ayo Mulai Membuat Quote-mu Sekarang!</h1>
            <button class="btn-buat mt-3 mb-3"><a href="/daftar" target="_blank">Buat Quote</a></button>
            <button class="btn-edit mt-3 mb-3"><a href="/daftar" target="_blank">Edit Quote</a></button>
          </div>
          <div class="col-md-6">
            <img src="/asset/hero-img-1.png" alt="Quottime" class="w-100" />
          </div>
        </div>
      </div>
    </section>
    <!-- end hero -->

    <!-- start Postingan terbaru -->
    <section id="post">
      <div classz="container">
        <div class="row text-center">
          <div class="col">
            <h4 class="title-judul">Postingan Terbaru</h4>
          </div>
        </div>
        <div class="row justify-content-center mt-5">
              
          <div class="col-md-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                @if ($data->count())
                <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 m-auto">
                                <div class="card-box text-center py-5">
                                    <div class="img-card">
                                        <img src="https://source.unsplash.com/random/201x201" alt="Quottime">
                                    </div>
                                    <div class="img-body">
                                        <p>{{ $data[0]->user->nama }}</p>
                                    </div>
                                    <div class="quote-text p-2">
                                        <p><i>"{{ $data[0]->isi }}"</i></p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                      </div>
                      @endif
                      
                      @if ($data->count())
                      <div class="carousel-item">
                        <div class="row">
                          <div class="col-md-4 m-auto">
                            <div class="card-box text-center py-5">
                                    <div class="img-card">
                                        <img src="/asset/postingan/profile.png" alt="Quottime">
                                    </div>
                                    <div class="img-body">
                                        <p>{{ $data[1]->user->nama }}</p>
                                      </div>
                                      <div class="quote-text p-2">
                                        <p><i>{{ $data[1]->isi }}</i></p>
                                      </div>
                                    </div>  
                                  </div>
                                </div>
                              </div>
                              @endif
                              
                          @if ($data->count())
                          <div class="carousel-item">
                            <div class="row">
                              <div class="col-md-4 m-auto">
                                <div class="card-box text-center py-5">
                                    <div class="img-card">
                                        <img src="https://source.unsplash.com/random/201x201" alt="Quottime">
                                    </div>
                                    <div class="img-body">
                                      <p>{{ $data[2]->user->nama }}</p>
                                    </div>
                                    <div class="quote-text p-2">
                                        <p><i>{{ $data[2]->isi }}</i></p>
                                    </div>
                                  </div>  
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 m-auto">
                                <div class="card-box text-center py-5">
                                    <div class="img-card">
                                        <img src="https://source.unsplash.com/random/201x201" alt="Quottime">
                                    </div>
                                    <div class="img-body">
                                        <p>ryan</p>
                                    </div>
                                    <div class="quote-text p-2">
                                        <p><i>"Berbuat baik adalah kewajiban, tetapi merasa lebih baik adalah sebuah kesalahan."</i></p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end Postingan terbaru -->
        
        <!-- start quotes -->
    <section id="quotes">
        <div class="container">
            <div class="row text-center">
                <div class="cpl-md-12">
                    <h4 class="title-judul">Quotes</h4>
                </div>
            </div>
            
            
            {{-- @if ($data->count()) --}}
            <div class="row mt-4">
              {{-- @for ($i = 0; $i < 4; $i++) --}}
              @foreach ($data as $u)
              <div class="col-md-4 mt-3">
                <div class="card-box text-center py-5">
                        <div class="img-card position-relative mx-auto">
                            <img src="asset/postingan/Winton Almundarisna.jpg" alt="Quottime" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <div class="img-body">
                            <p>{{ $u->nama }} </p>
                        </div>
                        <div class="quote-text p-2">
                          <p><i>isi</i></p>
                        </div>
                      </div>  
                    </div>
                    @endforeach
                  </div>
                  <div class="img-body">
                    <p>{{ $u->user->nama }} </p>
                  </div>
                  <div class="quote-text p-2">
                    <p><i>{{ $u->isi }}</i></p>
                  </div>
                </div>  
              </div>
              @endforeach
              {{-- @endfor --}}
            </div>
            {{-- @endif --}}

            <div class="row text-center">
                <div class="col-md-12">
                    <button class="btn-read-more"><a href="/quotes">Seluruhnya</a></button>
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
            <p class="footer">Copyright &copy; 2022 - Quottime All rights reserved.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- end footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
