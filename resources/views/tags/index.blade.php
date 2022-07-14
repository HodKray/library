@extends('layout')
@section('content')
    <h2 class="text-center mt-3"></h2>
    <div class="container mt-4">
        <div class="d-flex justify-content-center mt-3 mb-3">
            <a href="/tag/create/"><button class="btn btn-primary">Добавить тэг</button></a>
        </div>
        <div class="d-flex text-center">
            <table class="table table-warning table-border">

                    <thead>
                    <tr>
                        <th style="background-color: #7a624d; color:white;">id</th>
                        <th style="background-color: #7a624d; color:white;"><p>Название</p></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>


            </table>
        </div>
    </div>
@endsection
