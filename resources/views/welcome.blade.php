@extends('master')
@section('content')
    <img src="https://cataas.com/cat/says/holaa" alt="Cat saying hello">
    <div class="flex gap-4">
        <a href="{{ route('catImages') }} " class="mt-6 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Cat images</a>
        <a href="{{ route('api.index') }} " class="mt-6 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">API</a>
    </div>
@endsection
