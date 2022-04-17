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

        <title>Quottime | Halaman Admin</title>
    </head>
    <body>
        <!-- header -->
        <section>
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h4 class="table-header text-center">All Quotes</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- header -->

        {{-- Cari --}}
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <form action="/cari">
            <div class="input-group mb-3 mt-3">
                <input type="text" class="form-control" style="background: rgba(255, 255, 255, 0.20); backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px); border-radius: 5px 0 0 5px; border: 1px solid rgba(255, 255, 255, 0.18);" placeholder="Cari Berdasarkan #..." name="cari" value="{{ request('cari') }}" autocomplete="none">
                <button class="btn" style="background: linear-gradient(290deg, #22c1c3, #fdbb2d); border :1px solid var(--color-2);
                color: var(--color-2);" type="submit">Cari</button>
            </div>
            </form>
            </div>
        </div>
        </div>

        <!-- start table -->
        <table class="table-md table-striped text-center mt-3 w-100">
            <thead style="background: rgba(255, 255, 255, 0.20)">
                <tr>
                    <td style="color: var(--color-2); width: 5%">No</td>
                    <td style="color: var(--color-2); width: 15%">Nama</td>
                    <td style="color: var(--color-2); width: 15%">Gambar</td>
                    <td style="color: var(--color-2); width: 40%">Quotes</td>
                    <td style="color: var(--color-2); width: 15%">tagar</td>
                    <td style="color: var(--color-2)">Edit / Hapus</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->user->nama }}</td>
                    <td>
                        @if ($d->gambar)
                        <img
                        class="img-table"
                        src="{{ asset('img/' . $d->gambar) }}"
                        alt="Quottime"
                        />
                        @else
                        <p>Kosong</p>                            
                        @endif
                    </td>
                    <td>
                        {!! $d->isi !!}
                    </td>
                    <td>
                        {!! $d->tagar !!}
                    </td>
                    <td>
                        <div class="btn-mypost d-flex">
                        <form action="/user/{{ $d->id }}">
                            @csrf
                            <button class="btn-edit-table m-1" type="submit">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </form>
                            <form action="/users/quottime/{{ $d->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn-hapus-table" type="submit" onclick="return confirm('Yakin ingin menghapus ?')">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
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
