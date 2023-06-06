@extends('back.layouts.master')
@section('content')
    <form method="POST" action="{{ route('maintain.store') }}">
        @csrf
        <div class="form-check form-switch">
            <input name="status" class="form-check-input" type="checkbox" id="maintain"
                {{ $status->status == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="maintain">Maintain The Web site</label>
            <p>
                <span>If you want to publish not select that tick</span>
            </p>
        </div>
        <br />
        <br />
        <button type="submit" class="btn btn-primary">Continue Processing</button>
    </form>

@stop
