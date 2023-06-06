@extends('back.layouts.master')
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="x_panel">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <form action="{{ route('logo.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="resim">Chose a Image Seçin</label>
                    <input type="file" class="form-control-file" id="resim" name="logo">
                </div>
                <button type="submit" class="btn btn-primary">Upload Image</button>
            </form>
        </div>
    </div>
@stop
