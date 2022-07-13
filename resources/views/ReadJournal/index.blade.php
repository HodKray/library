@extends('layout')
@section('content')
    <h2 class="text-center mt-3">Журнал чтения</h2>
    <div class="container mt-4">

        <div class="d-flex text-center">
            <table class="table table-warning table-borderless">
                @foreach($readers as $reader)
                <thead>
                <tr>
                    <td style="background-color: #7a624d; color:white;" colspan="3">{{$reader->fio}}</td>
                </tr>
                <tr>
                    <th scope="col">Книга</th>
                    <th scope="col">Дата начала</th>
                    <th scope="col">Дата конца</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($reader->books as $book)
                        <tr>
                            <td>{{$book->title}}</td>
                            <td>{{$book->pivot->start_date}}</td>
                            <td>{{$book->pivot->end_date}}</td>
                        </tr>
                    @endforeach
                </tbody>
                @endforeach
            </table>
        </div>
    </div>









@endsection
