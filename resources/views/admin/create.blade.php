@extends('admin.template')

@section('content')
    <div class="container-fluid shadow bg-white p-4 mb-4">
        <form action="/product/store" method="post" enctype="multipart/form-data">
            @csrf
            <h4>Create Product</h4>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <input type="text" name="product" id="Product" class="form-input" placeholder="Your product's Name (Required)">
                    @error('product')
                        <div class="text-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-lg-4">
                    <input type="number" name="price" id="Price" class="form-input" placeholder="Product Price (Required)">
                    @error('price')
                        <div class="text-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-lg-4">
                    <input type="number" name="stock" id="Stock" class="form-input" placeholder="Stock (Required)">
                    @error('stock')
                        <div class="text-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="">Product Description <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="textarea" rows="3" name="description"></textarea>
                    @error('description')
                        <div class="text-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <select name="category" id="category" class="form-control">
                        <option selected>--Choose Category--</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-2" id="upload-image">
                <div class="col-sm-12">
                    <label for="image">Image <span class="text-danger">*</span></label><br>
                    @error('cover')
                        <div class="text-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                    <img src="{{ asset("img/default.png") }}" class="img-fluid img-thumbnail cover-preview img">
                    <span>Cover : </span><input type="file" name="cover" id="cover" onchange="coverpreview()">
                </div>
                <div class="col-sm-12 mt-1">
                    @error('image1')
                        <div class="text-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                    <img src="{{ asset("img/default.png") }}" class="img-fluid img-thumbnail img img1-preview">
                    <span>Image 1 : </span><input type="file" name="image1" id="image1" onchange="img1preview()">
                </div>
                <div class="col-sm-12 mt-1">
                    @error('image2')
                        <div class="text-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                    <img src="{{ asset("img/default.png") }}" class="img-fluid img-thumbnail img img2-preview">
                    <span>Image 2 : </span><input type="file" name="image2" id="image2" onchange="img2preview()">
                </div>
            </div>
            <hr>
            <button type="submit" class="btn" id="btn-submit">Create</button>
        </form>
    </div>
@endsection
@push('script')
<script>
    CKEDITOR.replace( 'textarea' );
</script>
@endpush

@push('script')
    <script>
        function coverpreview(){
            const cover = document.querySelector(".cover-preview");
            const input = document.querySelector("#cover");

            const filereader = new FileReader();
            filereader.readAsDataURL(input.files[0]);
            
            filereader.onload = function(e){
               cover.src = e.target.result;
           }
        }
    </script>
@endpush

@push('script')
    <script>
        function img1preview(){
            const image1 = document.querySelector(".img1-preview");
            const input = document.querySelector("#image1");

            const filereader = new FileReader();
            filereader.readAsDataURL(input.files[0]);
            
            filereader.onload = function(e){
               image1.src = e.target.result;
           }
        }
    </script>
@endpush

@push('script')
    <script>
        function img2preview(){
            const image2 = document.querySelector(".img2-preview");
            const input = document.querySelector("#image2");

            const filereader = new FileReader();
            filereader.readAsDataURL(input.files[0]);
            
            filereader.onload = function(e){
               image2.src = e.target.result;
           }
        }
    </script>
@endpush