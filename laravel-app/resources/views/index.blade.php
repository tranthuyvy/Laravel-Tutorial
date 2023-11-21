@extends('layouts.app')

@section('content')
<h1>PageController.index, with shared Header, Footer</h1>
{{-- The storage is more secure ! --}}
<img
    src="{{ asset('storage/hinh.jpg') }}"
    width="200"
    height="300"
    alt="">
@endsection
