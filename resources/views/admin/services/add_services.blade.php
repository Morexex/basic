@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



<div class="page-content">
    <div class="container-fluid">
        <div class="card">
        <div class="card-body">

            <h4 class="card-title">Add Services Page</h4>

            <form method="post" action="{{ route('store.services') }}" enctype="multipart/form-data">
                @csrf

            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Service Name</label>
                <div class="col-sm-10">
                    <input name="service_name" class="form-control" type="text" id="title">
                    @error('service_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="short_title" class="col-sm-2 col-form-label">Service Title</label>
                <div class="col-sm-10">
                    <input name="services_title" class="form-control" type="text" id="short_title">
                    @error('services_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="short_title" class="col-sm-2 col-form-label">Short Description</label>
                <div class="col-sm-10">
                    <input name="services_description" class="form-control" type="text" id="short_title">
                    @error('services_description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="long_description" class="col-sm-2 col-form-label">Service Long Details</label>
                <div class="col-sm-10">
                    <textarea id="elm1" name="services_details"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="about_image" class="col-sm-2 col-form-label">Service Image</label>
                <div class="col-sm-10">
                    <input name="services_images" class="form-control" type="file" id="image">
                </div>
            </div>

            <div class="row mb-3">
                <label for="about_image" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg')}}" alt="Card image cap">
                </div>
            </div>
            <input type="submit" class="btn btn-info waves-effect waves-light" value=" Insert Services Data">
            </form>

        </div>
    </div>
    </div>
</div>


@endsection
