@extends('template')
@section('main')
    <h1>ini halaman coba</h1>
    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            <h1>ini perulangan menggunakan blade</h1>
        @endif
    @endfor
    @php
        $no = 5;
        echo $no;
    @endphp
    <img src="{{ asset('img/bg.jpg') }}" width="400" alt="">
@endsection
