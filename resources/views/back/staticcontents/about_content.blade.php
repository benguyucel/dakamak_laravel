@extends('back.layouts.master')
@section('page_title', 'Our service Static Content Translate')
@section('content')
    <form method="POST" action="{{ route('staticcontent.about_content.store') }}">
        @csrf
        @foreach ($languages as $key => $language)
            <div class="alert alert-info" role="alert">
                Translate for {{ $language->language }}
            </div>
            <div class="mb-3">
                <div class="form-group mb-4">
                    <label for="forTitle">About us title for {{ $language->language }}</label>
                    <input class="form-control" id="forTitle" name="title[]"
                        value="{{ @$aboutContent[$key]['about_us_title'] }}" />
                </div>
                <div class="form-group">
                    <label for="foraboutContent"> About us content text for {{ $language->language }}</label>
                    <textarea class="form-control" name="about[]" id="foraboutContent" rows="10" cols="6">{{ @$aboutContent[$key]['about_us_content_text'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="forHeroText"> Hero text content for {{ $language->language }}</label>
                    <input class="form-control" name="hero[]" id="forHeroText"
                        value="{{ @$aboutContent[$key]['hero_text'] }}" />
                </div>
            </div>
            <hr class="mt-5 mb-5">
        @endforeach
        <button type="submit" class="btn btn-primary">Finish the process</button>
    </form>
@stop
