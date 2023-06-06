@extends('back.layouts.master')
@section('page_title', 'Dakamak System Language')
@section('content')
<<<<<<< HEAD
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Locale</th>
                <th>Language</th>
                <th>Status</th>
                <th class="text-center">Edit</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($languages as $language)
                <tr>
                    <th scope="row">{{ $language->id }}</th>
                    <td>{{ $language->locale }}</td>
                    <td>{{ $language->language }}</td>
                    <td>{{ $language->status == 1 ? 'Active' : 'InActive' }}</td>
                    <td class="text-center">

                        <form method="POST" onsubmit="return handleDelete()"
                            action="{{ route('system_languages.destroy', $language->id) }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('system_languages.edit', $language->id) }}">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <button style="border:none;background: none;" type="Submit"><i class="fa fa-times"></i>
                                </<button>
                        </form>
                    </td>

                </tr>
            @endforeach
=======
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="x_title">
                <h2>System Languages</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Locale</th>
                            <th>Language</th>
                            <th class="text-center">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach ($languages as $language)
                            <tr>
                                <th scope="row">{{ $language->id }}</th>
                                <td>{{ $language->locale }}</td>
                                <td>{{ $language->language }}</td>
                                <td class="text-center">
                                    <a href="{{ route('system_languages.edit', $language->id) }}"><i class="fa fa-pencil"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
>>>>>>> parent of 81a0a8f (ddd)

@stop
