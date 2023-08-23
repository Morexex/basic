@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



<div class="page-content">
    <div class="container-fluid">
        <div class="card">
        <div class="card-body">

            <h4 class="card-title">Blog Category Edit Page</h4>

            <form method="post" action="{{ route('update.blog.category') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $blogcategory->id }}" >
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Blog Category Name</label>
                <div class="col-sm-10">
                    <input name="blog_category" class="form-control" type="text" value="{{ $blogcategory->blog_category }}" id="title">
                    @error('blog_category')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <input type="submit" class="btn btn-info waves-effect waves-light" value=" Update Blog Category">
            </form>

        </div>
    </div>
    </div>
</div>


@endsection
