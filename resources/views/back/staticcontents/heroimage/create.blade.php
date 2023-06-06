@extends('back.layouts.master')
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <div class="x_panel">
            @error('hero_image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <form method="POST" action="{{ route('heroimage.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="hero_image">Image</label>
                    <input type="file" class="form-control-file" id="hero_image" name="hero_image">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>

@stop
@section('js')
@endsection


{{-- <div class="container col-md-6">
    <div class="mb-5">
        <label for="Image" class="form-label">Bootstrap 5 image Upload with Preview</label>
        <input class="form-control" type="file" id="formFile" onchange="preview()">
        <button onclick="clearImage()" class="btn btn-primary mt-3">Click me</button>
    </div>
    <img id="frame" src="" class="img-fluid" />
</div>

<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
    function clearImage() {
        document.getElementById('formFile').value = null;
        frame.src = "";
    }
</script> --}}
