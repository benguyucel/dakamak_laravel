@extends('back.layouts.master')
@section('page_title', 'Our service Language Options')
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="x_panel">
            <form method="POST" action="{{ route('ourservicetranslation.store') }}">
                @csrf
                <input type="hidden" name="ourservice_id" value="{{ Crypt::encrypt($ourservice->id) }}">
                @foreach ($languages as $key => $language)
                    <div class="alert alert-info" role="alert">
                        Translate for {{ $language->language }}
                    </div>
                    <div class="mb-3">
                        <label for="Title" class="form-label">Our Service Title</label>
                        @error('title.' . $key)
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input name="title[]" value="{{ @$ourservicetrans[$key]['title'] }}" type="text" class="form-control"
                            id="Title" aria-describedby="Title">
                    </div>
                    <div class="mb-3">
                        <label for="Text" class="form-label">Our Service Text</label>
                        @error('text.' . $key)
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input name="text[]"  value="{{ @$ourservicetrans[$key]['text'] }}" type="text" class="form-control" id="Text" aria-describedby="Text">
                    </div>
                    <hr class="mt-5 mb-5">
                @endforeach
                <button type="submit" class="btn btn-primary">Finish the process</button>
            </form>
        </div>
    </div>
@stop
