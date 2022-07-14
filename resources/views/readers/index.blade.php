@extends('layout')
@section('content')
    <div class="container col-lg-8">
        <div class="d-flex justify-content-center mt-3 mb-3">
        <a href="/reader/create/"><button class="btn btn-primary">Добавить читателя</button></a>
        </div>
        <table class="table table-warning table-border ">

            <thead>
            <tr>
                <th class="text-center" style="background-color: #7a624d; color:white;">id</th>
                <th class="text-center" style="background-color: #7a624d; color:white;">ФИО</th>
                <th class="text-center" style="background-color: #7a624d; color:white;">Дата рождения</th>
                <th class="text-center" style="background-color: #7a624d; color:white;">Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($readers as $reader)
                <tr>
                    <td class="text-center">{{$reader->id}}</td>
                    <td class="text-center">{{$reader->fio}}</td>
                    <td class="text-center">{{$reader->date_of_birth}}</td>
                    <td>
                        <div class="text-center">
                        <a href="delete/{{$reader->id}}"><button class="justify-content-center btn btn-danger">Удалить</button></a>
                        </div>
                    </td>

                </tr>

            @endforeach
            </tbody>


        </table>
    </div>



@endsection

