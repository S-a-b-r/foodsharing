
@extends('admin.layouts.main')

@section('title')
    Пользователь
@endsection

@section('subtitle')
    <div class="d-flex">
        Информация по доставке {{$delivery->id}}
        <a href="{{route('admin.users.edit',$delivery->id)}}"><i class="fas fa-pen text-success ml-2" style="font-size: 18px;"></i></a>
        <form action="{{route('admin.users.delete', $delivery->id)}}" method="post" class="ml-2">
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
                                        <td>{{$delivery->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Куратор</td>
                                        <td>{{$delivery->curator_id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Магазин</td>
                                        <td>{{$delivery->shop_id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Волонтер</td>
                                        <td>{{$delivery->volunteer_id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Благополучатель</td>
                                        <td>{{$delivery->ward_id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Документ</td>
                                        <td>{{$delivery->delivery_act_id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Создан</td>
                                        <td>{{$delivery->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <td>Обновлен</td>
                                        <td>{{$delivery->updated_at}}</td>
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
