@extends('admin.layouts.main')

@section('title')
    Расписание
@endsection


@section('content')
    <div class="row justify-content-center m-2">
        <div class="col-6 light" style="height: 400px">
            <table class="table border-width-1 table-hover">
                <thead>
                <tr>
                    <th scope="col">День недели</th>
                    <th scope="col">Имя</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Понедельник</td>
                    <td>Вася</td>
                </tr>
                <tr>
                    <td>Вторник</td>
                    <td>Петя</td>
                </tr>
                <tr>
                    <td>Среда</td>
                    <td><button class="btn btn-success">Занять</button></td>
                </tr>
                <tr>
                    <td>Четверг</td>
                    <td><button class="btn btn-success">Занять</button></td>
                </tr>
                <tr>
                    <td>Пятница</td>
                    <td><button class="btn btn-success">Занять</button></td>
                </tr>
                <tr>
                    <td>Суббота</td>
                    <td><button class="btn btn-success">Занять</button></td>
                </tr>
                <tr>
                    <td>Воскресенье</td>
                    <td><button class="btn btn-success">Занять</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
