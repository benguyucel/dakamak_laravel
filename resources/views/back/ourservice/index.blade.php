@extends('back.layouts.master')
@section('page_title', 'Dakamak Providing Solutions')
@section('content')

    <div class="col-md-12">
        <div class="x_panel">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="x_content">

                @if (count($ourServices) < 1)
                    <div class="alert alert-success">
                        No Data Found
                    </div>
                @endif

                @foreach ($ourServices as $ourService)
                    <div class="col-md-55">
                        <div class="thumbnail">
                            <div class="image view view-first" style="background-color: #000">
                                <img style="width: 100%; height: 100%; object-fit:contain"
                                    src="{{ asset('storage/uploads/ourservice/' . $ourService->item_icon) }}"
                                    alt=" {{ $ourService->description }}" />
                                <div class="mask">

                                    <div class="tools tools-bottom">
                                        <form method="POST" onsubmit="return handleDelete()"
                                            action="{{ route('ourservice.destroy', $ourService->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('ourservice.edit', $ourService->id) }}"><i
                                                    class="fa fa-pencil"></i></a>
                                            <button onclick="confirmDelete" style="border:none;background: none; color:#fff"
                                                type="Submit"><i class="fa fa-times"></i></<button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                {{ $ourService->description }}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

@stop
@section('js')
    <script src="{{ asset('back/assets/js/app.js') }}"></script>
@endsection
