@extends('back.layouts.master')
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="x_panel">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th style="text-align: center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($socialMediaLinks as $socialMediaLink)
                            <tr>
                                <td>{{ $socialMediaLink->name }}</td>
                                <td>{{ $socialMediaLink->link }}</td>
                                <td>{{ $socialMediaLink->status ? 'Active' : 'Inactive' }}</td>
                                <td style="text-align: center">
                                    <form action="{{ route('socialmedia.destroy', $socialMediaLink->id) }}" method="POST"
                                        onsubmit="return handleDelete()">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('socialmedia.edit', $socialMediaLink->id) }}"
                                            class="btn btn-primary">Edit</a>

                                        <button class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@stop
@section('js')
    <script src="{{ asset('back/assets/js/app.js') }}"></script>
@endsection
