@extends('back.layouts.master')
@section('page_title', 'Tagline image')
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="x_panel">
            <form method="POST" action="{{ route('staticcontent.taglineimage.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="taglineImage" class="form-label">Tagline Image </label>
                    <input type="file" id="taglineImage" name="tagline_image">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Finish The Process</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@stop
