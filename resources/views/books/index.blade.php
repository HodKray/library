@extends('layout')
@section('content')
<h2 class="d-flex justify-content-center mt-3">Книги</h2>
<div class="container mt-4">

<div class="d-flex text-center">
    <table class="table bg-body table-striped">
        <thead class="thead-dark">
        <tr>
            <th>id</th>
            <th>Фото</th>
            <th>Название</th>
            <th>Автор</th>
            <th>Тэг</th>
            <th>Категория</th>
            <th>Полка</th>
            <th>Редактировать</th>
            <th>Удалить</th>
        </tr>
        <thead>
        <tbody>
        @foreach($books as  $book )
            <tr>
                <td>{{$book->id}}</td>
                <td><img width="140px" height="200px" src="/img/{{$book->photo}}"></td>
                <td>
                {{$book->title}}
                </td>
                <td>
                @foreach($book->authors as  $author )
                    {{$author->fio}}
                @endforeach
                </td>
                <td>
                    @foreach($book->tags as  $tag )
                        {{$tag->title}}
                    @endforeach
                </td>
                <td>{{$book->Category->title}}</td>
                <td>{{$book->Shelf->title}}</td>
                <td><a href="update/{{$book->id}}">
                        <button class="btn btn-warning">Редактировать</button>
                    </a></td>
                <td><a href="delete/{{$book->id}}">
                <button class="btn btn-danger">Удалить</button>
                </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection
