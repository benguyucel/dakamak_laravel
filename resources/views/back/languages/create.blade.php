@extends('back.layouts.master')
@section('page_title', 'Edit Current Language Category')
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
            <form method="POST" action="{{ route('system_languages.store') }}">
                @method('POST')
                @csrf
                <div class="mb-3">
                    <label for="languageLocale" class="form-label">Language Locale</label>
                    <input type="text" name="locale" class="form-control" id="languageLocale">
                </div>
                <div class="mb-3">
                    <label for="language" class="form-label">Language</label>
                    <input type="text" name="language" class="form-control" id="language">
                </div>
                <div class="form-group">
                    <label for="languageOpt">Language Status</label>
                    <select name="status" class="form-control" id="languageOpt">
                        <option value="1">Show</option>
                        <option value="0">Hide</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="{{ route('system_languages.index') }}" class="btn btn-warning">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    </div>

@stop
