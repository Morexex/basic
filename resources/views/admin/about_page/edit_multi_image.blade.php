@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



<div class="page-content">
    <div class="container-fluid">
        <div class="card">
        <div class="card-body">

            <h4 class="card-title">Update Image</h4><br>

            <form method="post" action="{{ route('update.multi.image') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $multiImage->id }}">
            <div class="row mb-3">
                <label for="about_multimage" class="col-sm-2 col-form-label">Update Image</label>
                <div class="col-sm-10">
                    <input name="multi_image" class="form-control" type="file" value="" id="image" >
                </div>
            </div><br>

            <div class="row mb-3">
                <label for="about_multiimage" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="{{ asset($multiImage->multi_image)}}" alt="Card image cap">
                </div>
            </div><br>
            <input type="submit" class="btn btn-info waves-effect waves-light" value=" Update">
            </form><br>

        </div>
    </div>
    </div>
</div>

<script type="text/javascript">

$(document).ready(function(){
    $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload =function(e){
            $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});

</script>
@endsection
