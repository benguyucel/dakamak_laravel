@extends('back.layouts.master')
@section('page_title', __('Dakamak Edit Best Value'))
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <form method="POST" action="{{ route('bestvalue.update', $bestValue->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input name="description" value="{{ $bestValue->description }}" type="text" class="form-control"
                        id="Description" aria-describedby="Description">
                </div>
                <div class="mb-3">
                    @error('itemIcon')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="itemIcon" class="form-label">Provoding Icon (Optional)</label>
                    <input type="file" id="itemIcon" name="itemIcon">
                </div>
                <button type="submit" class="btn btn-primary">Update Changes</button>
            </form>
        </div>
    </div>
@stop
