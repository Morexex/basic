@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #00b740;
        font-weight: 700px;
    }
</style>



<div class="page-content">
    <div class="container-fluid">
        <div class="card">
        <div class="card-body">

            <h4 class="card-title">Add Blogs Page</h4>

            <form method="post" action="{{ route('store.blog') }}" enctype="multipart/form-data">
                @csrf

            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Blog Category Name</label>
                <div class="col-sm-10">
                    <select class="form-select" name="blog_category_id" aria-label="Default select example">
                        <option selected="">-------</option>
                        @foreach ($categories as $cat)

                        <option value="{{ $cat->id }}">{{ $cat->blog_category }}</option>
                        @endforeach
                        </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="blog_title" class="col-sm-2 col-form-label">Blog Title</label>
                <div class="col-sm-10">
                    <input name="blog_title" class="form-control" type="text" id="blog_title">
                    @error('blog_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="blog_tags" class="col-sm-2 col-form-label">Blog Tags</label>
                <div class="col-sm-10">
                    <input name="blog_tags" class="form-control" type="text" value="home,tech" data-role="tagsinput">
                </div>
            </div>

            <div class="row mb-3">
                <label for="blog_description" class="col-sm-2 col-form-label">Blog Description</label>
                <div class="col-sm-10">
                    <textarea id="elm1" name="blog_description"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="blog_image" class="col-sm-2 col-form-label">Blog Image</label>
                <div class="col-sm-10">
                    <input name="blog_image" class="form-control" type="file" id="image">
                </div>
            </div>

            <div class="row mb-3">
                <label for="blog_image" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg')}}" alt="Card image cap">
                </div>
            </div>
            <input type="submit" class="btn btn-info waves-effect waves-light" value=" Insert Blog Data">
            </form>

        </div>
    </div>
    </div>
</div>


@endsection
