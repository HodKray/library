@extends('layout')
@section('content')
    <div class="d-flex justify-content-center">
    <form action="/reader/create" method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="text-center mt-3 ">Создать читателя</h1>
        <div class="mb-2 mt-3">
            <label for="title" class="form-label">fio:</label>
            <input  type="text" class="form-control" name="fio" maxlength="20" required>
        </div>
        <div class="mb-2 mt-3">
            <label for="title" class="form-label">День рождения:</label>
            <input  type="datetime-local" class="form-control" name="date_of_birth" maxlength="20" required>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <input class="btn btn-primary" type="submit" value="Создать читателя">
        </div>
    </form>
    </div>
@endsection
