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

        <title>Quottime | Masuk</title>
    </head>
    <body>
        <!-- start daftar -->
        <section>
            <div class="container">
                <div class="row mt-2">
                    <div class="col-md-6 my-auto">

                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if (session()->has('hasError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session('hasError') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        
                        <form action="/login" method="POST">
                            @csrf
                            <h4 class="text-header mb-4">Masuk</h4>
                            <div class="mb-3">
                                <label
                                    for="exampleFormControlInput1"
                                    class="form-label"
                                    >Email</label>
                                <input
                                    type="email"
                                    id="exampleFormControlInput1"
                                    placeholder="name@example.com"
                                    name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    style="background: rgba(255, 255, 255, 0.20);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.18);"
                                    autofocus
                                    required
                                    value="{{ old('email') }}"/>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label
                                    for="exampleFormControlInput1"
                                    class="form-label"
                                    >Password</label>
                                <input
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror" style="background: rgba(255, 255, 255, 0.20);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.18);"
                                    id="exampleFormControlInput1"
                                    placeholder="Password"
                                    name="password"
                                    required/>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button class="btn-daftar-login mt-2" type="submit">Masuk</button>

                            <p class="mt-2">
                                Tidak Memiliki Akun?
                                <a href="/daftar">Daftar</a>
                            </p>
                        </form>
                    </div>
                    <div class="col-md-6 mt-3 img-daftar">
                        <img
                            src="/asset/Sign-In-img.png"
                            alt="Quottime"
                            class="w-100"
                        />
                    </div>
                </div>
            </div>
        </section>
        <!-- end daftar -->

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

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    --></body>
</html>
