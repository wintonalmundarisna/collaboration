<!DOCTYPE html>
<html lang="en">
    <head>

        <link rel="stylesheet" type="text/css" href="/css/trix.css">
        <script type="text/javascript" src="/js/trix.js"></script>
        
        <style>
            trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
            }
        </style>

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

        <title>Quottime | Buat Quotes</title>
    </head>
    <body>
        

        <!-- start buat quote -->
        <section>
            <div class="container">
                    <div class="col-md-8 my-auto mt-5 m-auto">
                        <form action="/mypost/quottime" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h4 class="text-header mb-4">Buat Quotes</h4>
                            <div class="mb-3">
                                <label
                                    for="exampleFormControlInput1"
                                    class="form-label"
                                    >Tagar</label>
                                <input
                                    type="text"
                                    placeholder="Buat Tagar..."
                                    name="tagar"
                                    class="form-control @error('tagar') is-invalid @enderror" style="background: rgba(255, 255, 255, 0.20);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.18);"
                                    autofocus
                                    required
                                    value="{{ old('tagar') }}"/>
                                    @error('tagar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label
                                    for="isi"
                                    class="form-label"
                                    >Isi Quote</label>
                                    @error('isi')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                <input id="isi" type="hidden" name="isi" value="{{ old('isi') }}" required>
                                <trix-editor input="isi" style="background: rgba(255, 255, 255, 0.20);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.18);"></trix-editor>
                            </div>

                            <div class="mb-3">
                                <label
                                    for="image"
                                    class="form-label"
                                    >Upload Foto</label
                                >
                                <img alt="" class="img-preview img-fluid mb-3 col-sm-5">
                                <input
                                    type="file"
                                    class="form-control-buat @error('gambar') is-invalid @enderror"
                                    id="image"
                                    name="gambar"
                                    required
                                    onchange="previewImage()"
                                    />
                                @error('gambar')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                @if(session()->has('gagal'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ session('gagal') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <button class="btn-buat-quote mt-2 me-2">
                                Simpan
                            </button>

                            <button class="btn-batal">
                                <a href="/quottime">Batal</a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end buat quote -->

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
        <script>
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"

            document.addEventListener('trix-file-accept', function(e) {
                e.preventDefault();
              })

            function previewImage() {
                const image = document.querySelector('#image');
                const imgPreview = document.querySelector('.img-preview');
                imgPreview.style.display = 'block';
                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);
                oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                }
             }

        </script>

        </body>
</html>
