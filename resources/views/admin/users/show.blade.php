
@extends('admin.layouts.main')

@section('title')
    Пользователь
@endsection

@section('subtitle')
    <div class="d-flex">
        Пользователь {{$user->name}}
        <a href="{{route('admin.users.edit',$user->id)}}"><i class="fas fa-pen text-success ml-2" style="font-size: 18px;"></i></a>
        <form action="{{route('admin.users.delete', $user->id)}}" method="post" class="ml-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="border-0 bg-transparent ">
                <i class="fas fa-trash text-danger" style="font-size: 18px;"></i>
            </button>
        </form>
    </div>


@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$user->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Роль</td>
                                        <td>{{$user->role}}</td>
                                    </tr>
                                    <tr>
                                        <td>Имя</td>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Подробная информация</td>
                                        <td>{{$user->personal_data}}</td>
                                    </tr>
                                    <tr>
                                        <td>Создан</td>
                                        <td>{{$user->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <td>Обновлен</td>
                                        <td>{{$user->updated_at}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card -->
            <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </section>
    <!-- /.content -->
@endsection
