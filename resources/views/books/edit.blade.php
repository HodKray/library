@extends('layout')
@section('content')
    <div class="d-flex justify-content-center">
        <form action="/books/update/{{$books->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="text-center mt-3">Редактирование книги</h1>
            <div class="mb-2 mt-5">
                <label for="title" class="form-label">Название:</label>
                <input  type="text" class="form-control" name="title" maxlength="20" value=" {{$books->title}}"  required>
            </div>

            <label for="shelf_id" class="form-label">Полка:</label>
            <select class="form-select" name="shelf_id">
                @foreach($shelves as $shelf)
                    <div class="form_input">
                        <option  value="{{$shelf->id}}" >{{$shelf->title}}</option>
                    </div>
                @endforeach
            </select>
            <div class="mb-2 mt-3">
                <label for="count" class="form-label">Количество:</label>
                <input  type="text" class="form-control" name="count" maxlength="20" value="{{$books->count}}" required>
            </div>

            <div class="mt-3">
                <label for="title" class="form-label">Фото книги:</label>
                <input type="file" class="form-control" name="photo" style="background-color: khaki" accept="image/jpg,image/jpeg,image/png,image/bmp" required>
            </div>

            <label for="category_id" class="form-label mt-3">Категория</label>
            <select class="form-select" name="category_id">
                @foreach($categories as $category)
                    <div class="form_input">
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    </div>
                @endforeach
            </select>
            <div class="d-flex justify-content-center mt-5">
                <input class="btn btn-primary" type="submit" value="Редактировать">
            </div>
        </form>
    </div>
@endsection
