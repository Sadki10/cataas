@extends('master')
@section('content')
    <div class="flex flex-wrap items-center justify-center">
        @foreach($catImages as $catImage)
            <a href="{{ route('api.show', $catImage) }}">
                <img src="https://cataas.com/cat/{{ $catImage->_id }}" width="400px" alt="Cat image: {{ implode(",", $catImage->tags) }}">
            </a>
        @endforeach
    </div>
@endsection
