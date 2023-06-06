@extends('back.layouts.master')
@section('page_title', __('Dakamak Add New Best Values '))

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <form method="POST" action="{{ route('bestvalue.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input name="description" type="text" class="form-control" id="Description"
                        aria-describedby="Description">
                </div>
                <div class="mb-3">
                    @error('itemIcon')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="itemIcon" class="form-label">Best Value Icon</label>
                    <input type="file" id="itemIcon" name="itemIcon">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@stop
@section('css')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
@endsection
