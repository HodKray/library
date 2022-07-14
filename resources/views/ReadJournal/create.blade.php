@extends('layout')
@section('content')
    <div class="d-flex justify-content-center">
        <form action="/readJournal/add" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="text-center mt-3 ">Добавить в журнал чтения</h1>

            <select class="form-select" name="reader_id">
                @foreach($readers as $reader)
                    <div class="form_input">
                        <option value="{{$reader->id}}">{{$reader->fio}}</option>
                    </div>
                @endforeach
            </select>
            <select class="form-select mt-3" name="book_id">
                @foreach($books as $book)
                    <div class="form_input">
                        <option value="{{$book->id}}">{{$book->title}}</option>
                    </div>
                @endforeach
            </select>

            <div class="mb-2 mt-3">
                <label for="start_date" class="form-label">Дата Начала:</label>
                <input type="date" class="form-control" name="start_date" maxlength="20" required>
            </div>
            <div class="mb-2 mt-3">
                <label for="end_date" class="form-label">Дата конца:</label>
                <input type="date" class="form-control"  name="end_date" maxlength="20" required>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <input class="btn btn-primary" type="submit" value="Добавить">
            </div>
        </form>
    </div>

@endsection
