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
        <a class="navbar-brand" href="/quottime" style="color: #0c1b31"><img src="/asset/logo-quottime.png" alt="" width="30" height="30" class="d-inline-block align-text-center" /> Quottime</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" style="color: #0c1b31" aria-current="page" href="/quottime">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #0c1b31" aria-current="page" href="/quotes">Quotes</a>
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

    <!-- start hero -->
    <section id="#">
      <div class="container">
        <div class="row mt-2">
          <div class="col-md-6 my-auto">
            <h1 class="mb-3" >Hai, <span>{!! auth()->user()->nama !!} :)</span></h1>
            <h3 class="mb-3">Ayo Mulai Membuat Quote-mu Sekarang!</h3>
            <button class="btn-buat mt-3 mb-3"><a href="/buat-quote" >Buat Quote</a></button>
            <button class="btn-edit mt-3 mb-3"><a href="/mypost/quottime">Edit Quote</a></button>
            @can('admin')
            <button class="btn-edit mt-3 mb-3"><a href="/users/quottime">Edit Users</a></button>
            @endcan
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
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col">
            <h4 class="title-judul ">Postingan Terbaru</h4>
          </div>
        </div>
        
        <!-- carousel -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="container">
              <div class="carousel-item active pe-3">
                <div class="row justify-content-center">
                  <div class="col-md-4 d-none d-sm-block">
                    <div class="card-box text-center py-5">
                      <div class="img-card">
                        @if($data[0]->gambar)
                          <div style="max-height: 201; overflow:hidden;">
                            <img
                            src="{{ asset('img/' . $data[0]->gambar) }}"
                            {{-- src="{{ $data[0]->gambar }}" --}}
                            alt="Quottime"
                            />
                          </div>
                        @else
                          <img
                            src="https://source.unsplash.com/random/201x201?{{ $data[0]->gambar }}"
                            alt="Quottime"
                          />
                        @endif
                      </div>
                      <div class="img-body">
                        <p>{!! $data[0]->user->nama !!}</p>
                      </div>
                      <div class="quote-text p-2">
                        <p><i>" {!! $data[0]->isi !!} "</i></p>
                      </div>
                      <div class="tagar text-tagar">
                        <p># {!! $data[0]->tagar !!}</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-none d-sm-block">
                    <div class="card-box text-center py-5">
                      <div class="img-card">
                        @if($data[1]->gambar)
                          <div style="max-height: 201; overflow:hidden;">
                            <img
                            src="{{ asset('img/' . $data[1]->gambar) }}"
                            alt="Quottime"
                            />
                          </div>
                        @else
                          <img
                            src="https://source.unsplash.com/random/201x201?{{ $data[1]->gambar }}"
                            alt="Quottime"
                          />
                        @endif
                      </div>
                      <div class="img-body">
                        <p>{!! $data[1]->user->nama !!}</p>
                      </div>
                      <div class="quote-text p-2">
                        <p><i>" {!! $data[1]->isi !!} "</i></p>
                      </div>
                      <div class="tagar text-tagar">
                        <p># {!! $data[1]->tagar !!}</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-none d-sm-block">
                    <div class="card-box text-center py-5">
                      <div class="img-card">
                        @if($data[2]->gambar)
                          <div style="max-height: 201; overflow:hidden;">
                            <img
                            src="{{ asset('img/' . $data[2]->gambar) }}"
                            alt="Quottime"
                            />
                          </div>
                        @else
                          <img
                            src="https://source.unsplash.com/random/201x201?{{ $data[2]->gambar }}"
                            alt="Quottime"
                          />
                        @endif
                      </div>
                      <div class="img-body">
                        <p>{!! $data[2]->user->nama !!}</p>
                      </div>
                      <div class="quote-text p-2">
                        <p><i>" {!! $data[2]->isi !!} "</i></p>
                      </div>
                      <div class="tagar text-tagar">
                        <p># {!! $data[2]->tagar !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item pe-3">
                <div class="row justify-content-center">
                  <div class="col-md-4 d-none d-sm-block">
                    <div class="card-box text-center py-5">
                      <div class="img-card">
                        @if($data[3]->gambar)
                          <div style="max-height: 201; overflow:hidden;">
                            <img
                            src="{{ asset('img/' . $data[3]->gambar) }}"
                            alt="Quottime"
                            />
                          </div>
                        @else
                          <img
                            src="https://source.unsplash.com/random/201x201?{{ $data[3]->gambar }}"
                            alt="Quottime"
                          />
                        @endif
                      </div>
                      <div class="img-body">
                        <p>{!! $data[3]->user->nama !!}</p>
                      </div>
                      <div class="quote-text p-2">
                        <p><i>" {!! $data[3]->isi !!} "</i></p>
                      </div>
                      <div class="tagar text-tagar">
                        <p># {!! $data[3]->tagar !!}</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-none d-sm-block">
                    <div class="card-box text-center py-5">
                      <div class="img-card">
                        @if($data[4]->gambar)
                          <div style="max-height: 201; overflow:hidden;">
                            <img
                            src="{{ asset('img/' . $data[4]->gambar) }}"
                            alt="Quottime"
                            />
                          </div>
                        @else
                          <img
                            src="https://source.unsplash.com/random/201x201?{{ $data[4]->gambar }}"
                            alt="Quottime"
                          />
                        @endif
                      </div>
                      <div class="img-body">
                        <p>{!! $data[4]->user->nama !!}</p>
                      </div>
                      <div class="quote-text p-2">
                        <p><i>" {!! $data[4]->isi !!} "</i></p>
                      </div>
                      <div class="tagar text-tagar">
                        <p># {!! $data[4]->tagar !!}</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-none d-sm-block">
                    <div class="card-box text-center py-5">
                      <div class="img-card">
                        @if($data[5]->gambar)
                          <div style="max-height: 201; overflow:hidden;">
                            <img
                            src="{{ asset('img/' . $data[5]->gambar) }}"
                            alt="Quottime"
                            />
                          </div>
                        @else
                          <img
                            src="https://source.unsplash.com/random/201x201?{{ $data[5]->gambar }}"
                            alt="Quottime"
                          />
                        @endif
                      </div>
                      <div class="img-body">
                        <p>{!! $data[5]->user->nama !!}</p>
                      </div>
                      <div class="quote-text p-2">
                        <p><i>" {!! $data[5]->isi !!} "</i></p>
                      </div>
                      <div class="tagar text-tagar">
                        <p># {!! $data[5]->tagar !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <button class="carousel-control-prev d-none d-sm-block" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next d-none d-sm-block" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <!-- mobile -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators d-block d-sm-none text-center">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active btn-radius" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            class="btn-radius" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            class="btn-radius" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
            class="btn-radius" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
            class="btn-radius" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
            class="btn-radius" aria-label="Slide 6"></button>
          </div>
          <div class="carousel-inner">
            <div class="container">
              <div class="carousel-item active p-3">
                <div class="row justify-content-center">
                  <div class="col-md-12 d-block d-sm-none">
                    <div class="card-box text-center py-5">
                      <div class="img-card">
                        @if($data[6]->gambar)
                          <div style="max-height: 201; overflow:hidden;">
                            <img
                            src="{{ asset('img/' . $data[6]->gambar) }}"
                            alt="Quottime"
                            />
                          </div>
                        @else
                          <img
                            src="https://source.unsplash.com/random/201x201?{{ $data[6]->gambar }}"
                            alt="Quottime"
                          />
                        @endif
                      </div>
                      <div class="img-body">
                        <p>{!! $data[6]->user->nama !!}</p>
                      </div>
                      <div class="quote-text p-2">
                        <p><i>" {!! $data[6]->isi !!} "</i></p>
                      </div>
                      <div class="tagar text-tagar">
                        <p># {!! $data[6]->tagar !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item p-3">
                <div class="row justify-content-center">
                  <div class="col-md-12 d-block d-sm-none">
                    <div class="card-box text-center py-5">
                      <div class="img-card">
                        @if($data[7]->gambar)
                        <div style="max-height: 201; overflow:hidden;">
                          <img
                          src="{{ asset('img/' . $data[7]->gambar) }}"
                          alt="Quottime"
                          />
                        </div>
                      @else
                        <img
                          src="https://source.unsplash.com/random/201x201?{{ $data[7]->gambar }}"
                          alt="Quottime"
                        />
                      @endif
                      </div>
                      <div class="img-body">
                        <p>{!! $data[7]->user->nama !!}</p>
                      </div>
                      <div class="quote-text p-2">
                        <p><i>" {!! $data[7]->isi !!} "</i></p>
                      </div>
                      <div class="tagar text-tagar">
                        <p># {!! $data[7]->tagar !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item p-3">
                <div class="row justify-content-center">
                  <div class="col-md-12 d-block d-sm-none">
                    <div class="card-box text-center py-5">
                      <div class="img-card">
                        @if($data[8]->gambar)
                          <div style="max-height: 201; overflow:hidden;">
                            <img
                            src="{{ asset('img/' . $data[8]->gambar) }}"
                            alt="Quottime"
                            />
                          </div>
                        @else
                          <img
                            src="https://source.unsplash.com/random/201x201?{{ $data[8]->gambar }}"
                            alt="Quottime"
                          />
                        @endif
                      </div>
                      <div class="img-body">
                        <p>{!! $data[8]->user->nama !!}</p>
                      </div>
                      <div class="quote-text p-2">
                        <p><i>" {!! $data[8]->isi !!} "</i></p>
                      </div>
                      <div class="tagar text-tagar">
                        <p># {!! $data[8]->tagar !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item p-3">
                <div class="row justify-content-center">
                  <div class="col-md-12 d-block d-sm-none">
                    <div class="card-box text-center py-5">
                      <div class="img-card">
                        @if($data[8]->gambar)
                          <div style="max-height: 201; overflow:hidden;">
                            <img
                            src="{{ asset('img/' . $data[8]->gambar) }}"
                            alt="Quottime"
                            />
                          </div>
                        @else
                          <img
                            src="https://source.unsplash.com/random/201x201?{{ $data[8]->gambar }}"
                            alt="Quottime"
                          />
                        @endif
                      </div>
                      <div class="img-body">
                        <p>{!! $data[8]->user->nama !!}</p>
                      </div>
                      <div class="quote-text p-2">
                        <p><i>" {!! $data[8]->isi !!} "</i></p>
                      </div>
                      <div class="tagar text-tagar">
                        <p># {!! $data[8]->tagar !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item p-3">
                <div class="row justify-content-center">
                  <div class="col-md-12 d-block d-sm-none">
                    <div class="card-box text-center py-5">
                      <div class="img-card">
                        @if($data[8]->gambar)
                          <div style="max-height: 201; overflow:hidden;">
                            <img
                            src="{{ asset('img/' . $data[8]->gambar) }}"
                            alt="Quottime"
                            />
                          </div>
                        @else
                          <img
                            src="https://source.unsplash.com/random/201x201?{{ $data[8]->gambar }}"
                            alt="Quottime"
                          />
                        @endif
                      </div>
                      <div class="img-body">
                        <p>{!! $data[8]->user->nama !!}</p>
                      </div>
                      <div class="quote-text p-2">
                        <p><i>" {!! $data[8]->isi !!} "</i></p>
                      </div>
                      <div class="tagar text-tagar">
                        <p># {!! $data[8]->tagar !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item p-3">
                <div class="row justify-content-center">
                  <div class="col-md-12 d-block d-sm-none">
                    <div class="card-box text-center py-5">
                      <div class="img-card">
                        @if($data[8]->gambar)
                          <div style="max-height: 201; overflow:hidden;">
                            <img
                            src="{{ asset('img/' . $data[8]->gambar) }}"
                            alt="Quottime"
                            />
                          </div>
                        @else
                          <img
                            src="https://source.unsplash.com/random/201x201?{{ $data[8]->gambar }}"
                            alt="Quottime"
                          />
                        @endif
                      </div>
                      <div class="img-body">
                        <p>{!! $data[8]->user->nama !!}</p>
                      </div>
                      <div class="quote-text p-2">
                        <p><i>" {!! $data[8]->isi !!} "</i></p>
                      </div>
                      <div class="tagar text-tagar">
                        <p># {!! $data[8]->tagar !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- mobile -->
        <!-- carousel -->

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
            
            @if ($data->count())
            <div class="row mt-4">
              <div class="col-md-4 mt-3">
                <div class="card-box text-center py-5">
                        <div class="img-card">
                        @if($data[9]->gambar)
                          <div style="max-height: 201; overflow:hidden;">
                            <img
                            src="{{ asset('img/' . $data[9]->gambar) }}"
                            alt="Quottime"
                            />
                          </div>
                          @else
                            <img
                            src="https://source.unsplash.com/random/201x201?{{ $data[9]->gambar }}"
                            alt="Quottime"
                          />
                            @endif
                        </div>
                        <div class="img-body">
                            <p>{!! $data[9]->user->nama !!} </p>
                        </div>
                        <div class="quote-text p-2">
                          <p><i>" {!! $data[9]->isi !!} "</i></p>
                        </div>
                        <div class="tagar text-tagar">
                          <p># {!! $data[9]->tagar !!}</p>
                        </div>
                </div>  
              </div>
              <div class="col-md-4 mt-3">
                <div class="card-box text-center py-5">
                        <div class="img-card position-relative mx-auto">
                        @if($data[10]->gambar)
                          <div style="max-height: 201; overflow:hidden;">
                            <img
                            src="{{ asset('img/' . $data[10]->gambar) }}"
                            alt="Quottime"
                            />
                          </div>
                        @else
                             <img src="https://source.unsplash.com/random/201x201?{{ $data[10]->gambar }}" alt="Quottime" class="position-absolute top-50 start-50 translate-middle">
                        @endif
                        </div>
                        <div class="img-body">
                            <p>{!! $data[10]->user->nama !!} </p>
                        </div>
                        <div class="quote-text p-2">
                          <p><i>" {!! $data[10]->isi !!} "</i></p>
                        </div>
                        <div class="tagar text-tagar">
                          <p># {!! $data[10]->tagar !!}</p>
                        </div>
                </div>  
              </div>
              <div class="col-md-4 mt-3">
                <div class="card-box text-center py-5">
                        <div class="img-card">
                        @if($data[11]->gambar)
                          <div style="max-height: 201; overflow:hidden;">
                            <img
                            src="{{ asset('img/' . $data[11]->gambar) }}"
                            alt="Quottime"
                            />
                          </div>
                        @else
                             <img src="https://source.unsplash.com/random/201x201?{{ $data[11]->gambar }}" alt="Quottime" class="position-absolute top-50 start-50 translate-middle">
                        @endif
                        </div>
                        <div class="img-body">
                            <p>{!! $data[11]->user->nama !!} </p>
                        </div>
                        <div class="quote-text p-2">
                          <p><i>" {!! $data[11]->isi !!} "</i></p>
                        </div>
                        <div class="tagar text-tagar">
                          <p># {!! $data[11]->tagar !!}</p>
                        </div>
                </div>  
              </div>
            <div class="row text-center">
              <div class="col-md-12">
                    <button class="btn-read-more"><a href="/quotes">Seluruhnya</a></button>
              </div>
            </div>
            @endif
          </div>
    </section>
    <!-- end quotes -->

    <!-- start footer -->
    <section id="footer">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <p class="footer">Copyright &copy; 2022 - Quottime ~ by ryan and winton.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- end footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </body>
</html>