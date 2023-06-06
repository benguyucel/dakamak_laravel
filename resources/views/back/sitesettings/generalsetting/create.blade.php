@extends('back.layouts.master')
@section('page_title', 'Dakamak General Setting')
@section('content')
 
            <form method="POST" action="{{ route('generalsettings.store') }}">
                @csrf
                <div class="form-group">
                    @error('video_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label for="video_link">Video Link</label>
                    <input type="text" value="{{ @$generalSetting->video_link }}" class="form-control" id="video_link"
                        name="video_link" maxlength="150">
                </div>
                <div class="form-group">
                    @error('video_link')
                        <div class="mail_address">{{ $message }}</div>
                    @enderror
                    <label for="mail_address">Email Address</label>
                    <input type="email" value="{{ @$generalSetting->mail_address }}" class="form-control"
                        id="mail_address" name="mail_address" maxlength="150" required>
                </div>
                <div class="form-group">
                    @error('video_link')
                        <div class="map">{{ $message }}</div>
                    @enderror
                    <label for="map">Map</label>
                    <textarea class="form-control" id="map" name="map" rows="3" required>{{ @$generalSetting->map }}</textarea>
                </div>
                <div class="form-group">
                    @error('video_link')
                        <div class="address">{{ $message }}</div>
                    @enderror
                    <label for="address">Address</label>
                    <input type="text" class="form-control" value="{{ @$generalSetting->address }}" id="address"
                        name="address" maxlength="300" required>
                </div>
                <div class="form-group">
                    @error('video_link')
                        <div class="date">{{ $message }}</div>
                    @enderror
                    <label for="date">Date</label>
                    <input type="text" class="form-control" id="date" value="{{ date('Y') }}" readonly
                        name="date" maxlength="4" required>
                </div>
                <button type="submit" class="btn btn-primary">Continue Processing</button>
            </form>

@stop
