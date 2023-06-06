@extends('back.layouts.master')
@section('page_title', 'Our service Static Content Translate')
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="x_panel">
            <form method="POST" action="{{ route('staticcontent.tagline.store') }}">
                @csrf
                @foreach ($languages as $key => $language)
                    <div class="alert alert-info" role="alert">
                        Translate for {{ $language->language }}
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="fortaglineContent"> Tagline content text for {{ $language->language }}</label>
                            <textarea class="form-control" name="bottom_tagline_text[]" id="fortaglineContent" rows="10" cols="6">{{ @$taglineContent[$key]['bottom_tagline_text'] }}</textarea>
                        </div>
                    </div>
                    <hr class="mt-5 mb-5">
                @endforeach
                <button type="submit" class="btn btn-primary">Finish the process</button>
            </form>
        </div>
    </div>
@stop
