@extends('back.layouts.master')
@section('page_title', 'Dakamak Best Values Solutions')
@section('content')

    <div class="col-md-12">
        <div class="x_panel">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="x_content">
                    
                @if (count($bestvalues) < 1)
                    <div class="alert alert-success">
                        No Data Found
                    </div>
                @endif

                @foreach ($bestvalues as $bestvalue)
                    <div class="col-md-55">
                        <div class="thumbnail">
                            <div class="image view view-first" style="background-color: #000">
                                <img style="width: 100%; height: 100%; object-fit:contain"
                                    src="{{ asset('storage/uploads/bestvalue/' . $bestvalue->item_icon) }}"
                                    alt=" {{ $bestvalue->description }}" />
                                <div class="mask">

<<<<<<< HEAD
                        <div class="tools tools-bottom">
                            <form method="POST" onsubmit="return handleDelete()"
                                action="{{ route('bestvalue.destroy', $bestvalue->id) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('bestvalue.edit', $bestvalue->id) }}"><i class="fa fa-pencil"></i></a>
                                <button  style="border:none;background: none; color:#fff"
                                    type="Submit"><i class="fa fa-times"></i></<button>
                            </form>
=======
                                    <div class="tools tools-bottom">
                                        <form method="POST" onsubmit="return handleDelete()"
                                            action="{{ route('bestvalue.destroy', $bestvalue->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('bestvalue.edit', $bestvalue->id) }}"><i
                                                    class="fa fa-pencil"></i></a>
                                            <button onclick="confirmDelete" style="border:none;background: none; color:#fff"
                                                type="Submit"><i class="fa fa-times"></i></<button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                {{ $bestvalue->description }}
                            </div>
>>>>>>> parent of 81a0a8f (ddd)
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
