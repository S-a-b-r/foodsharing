@extends('admin.layouts.main')

@section('title')
    Расписание
@endsection


@section('content')
    <script>
        function select(id, name){
            document.getElementById(id).innerHTML = name;
        }
    </script>
    <div class="row justify-content-center m-2">
        <div class="col-6 light" style="height: 400px">
            <table class="table border-width-1 table-hover">
                <thead>
                <tr>
                    <th scope="col" class="col-1">День недели</th>
                    <th scope="col">Имя</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="col-2">Понедельник</td>
                    <td id="1">Вася</td>
                </tr>
                <tr>
                    <td class="col-2">Вторник</td>
                    <td id="2">Петя</td>
                </tr>
                <tr>
                    <td class="col-2">Среда</td>
                    <td id="3">
                        <button onclick="select('3', 'Вася')" class="btn btn-success">Вася</button>
                        <button onclick="select('3', 'Маша')" class="btn btn-success">Маша</button>
                        <button onclick="select('3', 'Леша')" class="btn btn-success">Леша</button>
                    </td>
                </tr>
                <tr>
                    <td class="col-2">Четверг</td>
                    <td id="4">
                        <button onclick="select('4', 'Вася')" class="btn btn-success">Вася</button>
                        <button onclick="select('4', 'Маша')" class="btn btn-success">Маша</button>
                    </td>
                </tr>
                <tr>
                    <td class="col-2">Пятница</td>
                    <td id="5">
                        <button onclick="select('5', 'Леша')" class="btn btn-success">Леша</button>
                    </td>
                </tr>
                <tr>
                    <td class="col-2">Суббота</td>
                    <td id="6">
                        <button onclick="select('6', 'Вася')" class="btn btn-success">Вася</button>
                    </td>
                </tr>
                <tr>
                    <td class="col-2">Воскресенье</td>
                    <td id="7">
                        <button onclick="select('7', 'Леша')" class="btn btn-success">Леша</button>
                        <button onclick="select('7', 'Маша')" class="btn btn-success">Маша</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
