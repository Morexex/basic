@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



<div class="page-content">
    <div class="container-fluid">
        <div class="card">
        <div class="card-body">

            <h4 class="card-title">Portfolio Page</h4>

            <form method="post" action="{{ route('store.portfolio') }}" enctype="multipart/form-data">
                @csrf

            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Portfolio Name</label>
                <div class="col-sm-10">
                    <input name="portfolio_name" class="form-control" type="text" id="title">
                    @error('portfolio_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="short_title" class="col-sm-2 col-form-label">Portfolio Title</label>
                <div class="col-sm-10">
                    <input name="portfolio_title" class="form-control" type="text" id="short_title">
                    @error('portfolio_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="long_description" class="col-sm-2 col-form-label">Portfolio Description</label>
                <div class="col-sm-10">
                    <textarea id="elm1" name="portfolio_description"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="about_image" class="col-sm-2 col-form-label">Portfolio Image</label>
                <div class="col-sm-10">
                    <input name="portfolio_image" class="form-control" type="file" id="image">
                </div>
            </div>

            <div class="row mb-3">
                <label for="about_image" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg')}}" alt="Card image cap">
                </div>
            </div>
            <input type="submit" class="btn btn-info waves-effect waves-light" value=" Insert Portfolio Data">
            </form>

        </div>
    </div>
    </div>
</div>


@endsection
