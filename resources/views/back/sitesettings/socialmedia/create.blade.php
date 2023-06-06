@extends('back.layouts.master')
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="x_panel">
            <form action="{{ route('socialmedia.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                        maxlength="100">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="link">Link:</label>
                    <input type="text" class="form-control" id="link" name="link" value="{{ old('link') }}">
                    @error('link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-check d-flex align-center">
                    <input type="checkbox" class="form-check-input" id="status" name="status" checked="checked"
                        {{ old('status') ? 'checked' : '' }}>
                    <label class="form-check-label" for="status" style="padding-top: 3px">Social Media Status</label>
                </div>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </form>

        </div>
    </div>
@stop
