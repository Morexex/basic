@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



<div class="page-content">
    <div class="container-fluid">
        <div class="card">
        <div class="card-body">

            <h4 class="card-title">Footer Setup Page</h4>

            <form method="post" action="{{ route('update.footer') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $allfooter->id }}">
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Number</label>
                <div class="col-sm-10">
                    <input name="number" class="form-control" type="text" value="{{ $allfooter->number }}" id="number">
                </div>
            </div>

            <div class="row mb-3">
                <label for="short_description" class="col-sm-2 col-form-label">Short Description</label>
                <div class="col-sm-10">
                    <textarea required="" name="short_description" class="form-control" rows="5">{{ $allfooter->short_description }}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input name="address" class="form-control" type="text" value="{{ $allfooter->address }}" id="address">
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input name="email" class="form-control" type="text" value="{{ $allfooter->email }}" id="email">
                </div>
            </div>

            <div class="row mb-3">
                <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                <div class="col-sm-10">
                    <input name="facebook" class="form-control" type="text" value="{{ $allfooter->facebook }}" id="facebook">
                </div>
            </div>

            <div class="row mb-3">
                <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                <div class="col-sm-10">
                    <input name="twitter" class="form-control" type="text" value="{{ $allfooter->twitter }}" id="twitter">
                </div>
            </div>

            <div class="row mb-3">
                <label for="copyright" class="col-sm-2 col-form-label">Copyright</label>
                <div class="col-sm-10">
                    <input name="copyright" class="form-control" type="text" value="{{ $allfooter->copyright }}" id="copyright">
                </div>
            </div>
            <input type="submit" class="btn btn-info waves-effect waves-light" value=" Update Footer ">
            </form>

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
