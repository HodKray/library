@extends('layout')
@section('content')
    <div class="d-flex justify-content-center">
        <form action="/tag/create" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="text-center mt-3">Создание тэга</h1>
            <div class="mb-2 mt-3">
                <label for="title" class="form-label">Название:</label>
                <input  type="text" class="form-control" name="title" maxlength="20" required>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <input class="btn btn-primary" type="submit" value="Создать тэг">
            </div>
        </form>
    </div>
@endsection
