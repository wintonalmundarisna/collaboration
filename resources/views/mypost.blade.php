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

        <!-- icon bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

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
        <!-- header -->
        <section>
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h4 class="table-header text-center">My Quotes</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- header -->
        <!-- start table -->
        <table class="table-md table-striped text-center mt-3">
            <thead style="background: rgba(255, 255, 255, 0.20)">
                <tr>
                    <td style="color: var(--color-2); width: 5%">No</td>
                    <td style="color: var(--color-2); width: 15%">Nama</td>
                    <td style="color: var(--color-2); width: 15%">Foto</td>
                    <td style="color: var(--color-2); width: 40%">Quotes</td>
                    <td style="color: var(--color-2)">Edit / Hapus</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->user->nama }}</td>
                    <td>
                        <img
                            class="img-table"
                            src="{{ asset('storage/' . $d->gambar) }}"
                            alt="Quottime"
                        />
                    </td>
                    <td>
                        {!! $d->isi !!}
                    </td>
                    <td>
                        <div class="btn-mypost ">
                            <form action="/mypost/quottime/{{ $d->id }}/edit" method="GET">
                                @csrf
                                <button class="btn-edit-table m-1" type="submit"><i class="bi bi-pencil-square"></i></button>
                            </form>
                            <form action="/mypost/quottime/{{ $d->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn-hapus-table " type="submit"><i class="bi bi-trash3-fill"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- end table -->

        <section>
            <div class="container">
            <div class="row text-center">
              <div class="col-md-12">
                    <button class="btn-read-more"><a href="/quottime">Kembali</a></button>
              </div>
            </div>
            </div>
            </section>

        <!-- start footer -->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <p class="footer">
                            Copyright &copy; 2022 - Quottime All rights
                            reserved.
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
