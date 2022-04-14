<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
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

        <title>Quottime | Selamat Datang Di Quottime</title>
    </head>
    <body>
        <!-- start hero -->
        <section>
            <div class="container">
                <div class="row text-center mt-4">
                    <div class="col-12">
                        <div class="welcome-banner">
                            <img
                                src="/asset/welcome.png"
                                alt="Quottime"
                            />
                        </div>
                        <div class="title-welcome">
                            <h5>My Dhasboard</h5>
                            <h1 class="title-welcome">
                                Hi <span>{{ auth()->user()->nama }}</span>
                            </h1>
                            <button class="btn-welcome mt-3 mb-3">
                                <a href="/buat-quote" target="_blank"
                                    >Aku Mau Buat Quotes!</a
                                >
                            </button>

                            <p class="mt-2">
                                <a href="/quottime">Lewati</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero -->

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
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    --></body>
</html>
