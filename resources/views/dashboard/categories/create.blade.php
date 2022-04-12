@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new category</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/categories" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama category</label>
                <input type="text" class="form-control @error('name')
                    is-invalid
                @enderror" id="name" name="name" autofocus required value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="text" class="form-control @error('slug')
                    is-invalid
                @enderror" id="slug" name="slug" readonly required value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">Create post</button>
        </form>
    </div>

    <script>

        // bagian slug
        const title = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
            fetch('/dashboard/categories/checkSlug?name=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });


        // trix editor
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })

        // preview edit image
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');


            imgPreview.style.display = 'block';

            const oFReader = new FileReader();

            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection