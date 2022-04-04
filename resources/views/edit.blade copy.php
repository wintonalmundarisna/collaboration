<!DOCTYPE html>
<html lang="en">
    <head>

        <link rel="stylesheet" type="text/css" href="trix.css">
        <script type="text/javascript" src="trix.js"></script>

        {{-- <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script> --}}
        
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

        <title>Quottime | Edit Quotes</title>
    </head>
    <body>
        <!-- start buat quote -->
        <section>
            <div class="container">
                    <div class="col-md-8 my-auto mt-5 m-auto">
                        <form action="mypost/quottime/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <h4 class="text-header mb-4">Edit Quote</h4>
                            <div class="mb-3">
                                <label
                                    for="exampleFormControlInput1"
                                    class="form-label"
                                    >Tagar</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="exampleFormControlInput1"
                                    placeholder="Nama Lengkap"
                                    name="tagar"
                                    value="{{ $data->tagar }}"
                                    />
                            </div>
                            {{-- <div class="mb-3">
                                    <label
                                    for="exampleFormControlInput1"
                                    class="form-label"
                                    >Upload Foto</label
                                    >
                                    <input
                                    type="file"
                                    class="form-control-buat"
                                    id="exampleFormControlInput1"
                                    placeholder="name@example.com"
                                    name="file-upload"
                                    value="{{ $data->gambar }}"
                                />
                            </div> --}}
                            <div class="mb-3">
                                <label
                                    for="isi"
                                    class="form-label"
                                    >Isi Quote</label>
                                    @error('isi')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    {{-- <div id="isi"> --}}
                                        <input id="isi" type="hidden" name="isi" required>
                                        <trix-editor input="isi" aria-valuetext="{{ old('isi', $data->isi) }}"></trix-editor>
                                    {{-- </div> --}}
                            </div>

                            <button class="btn-buat-quote mt-2 me-2">
                                <a href="#">Simpan</a>
                            </button>

                            <button class="btn-batal">
                                <a href="#">Batal</a>
                            </button>
                        </form>
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
                            Copyright &copy; 2022 - Quottime All rights
                            reserved.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script>
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"

            document.addEventListener('trix-file-accept', function(e) {
                e.preventDefault();
              })

            // ClassicEditor
            //     .create( document.querySelector( '#isi' ) )
            //     .catch( error => {
            //         console.error( error );
            //     } );
        </script>
        

       </body>
</html>