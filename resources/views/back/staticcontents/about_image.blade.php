@extends('back.layouts.master')
@section('page_title', 'About US IMAGE')
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
            <form method="POST" action="{{ route('staticcontent.about_image.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="itemIcon" class="form-label">About Us Home Image </label>
                    <input type="file" id="aboutHome" name="aboutHome">
                </div>
                <div class="mb-3">

                    <label for="itemIcon" class="form-label">About Us Page Image</label>
                    <input type="file" id="aboutPage" name="aboutPage">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Finish The Process</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@stop
@section('js')
    <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script>
        FilePond.registerPlugin(FilePondPluginFileValidateType);
        FilePond.registerPlugin(FilePondPluginImagePreview);
        FilePond.registerPlugin(FilePondPluginImageResize);
        // Get a reference to the file input element
        const inputElement_home = document.querySelector('#aboutHome');
        const inputElement_about_page = document.querySelector('#aboutPage');

        // Create a FilePond instance
        FilePond.create(inputElement_home, {
            acceptedFileTypes: ['image/jpeg', 'image/png'],
            labelFileTypeNotAllowed: "You can only upload  JPG and PNG files.",

        });

        FilePond.create(inputElement_about_page, {
            acceptedFileTypes: ['image/jpeg', 'image/png'],
            labelFileTypeNotAllowed: "You can only upload  JPG and PNG files.",
        });
        FilePond.setOptions({
            server: {
                process: "/admin/tmpfile/tmp-upload",
                revert: '/admin/tmpfile/tmp-delete',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                allowImagePreview: true,
                imagePreviewHeight: 400,
                imagePreviewWidth: 400,
            },
        });
    </script>

@endsection
@section('css')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
@endsection
