@extends('layout')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center mt-3">
        <a href="/reader/create/"><button class="btn btn-primary">Добавить читателя</button></a>
        </div>
        @foreach($readers as $reader)
        <p>{{$reader->fio}}</p>
        <p>{{$reader->date_of_birth}}</p>
        @endforeach
    </div>
@endsection
