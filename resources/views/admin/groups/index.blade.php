
@extends('admin.layouts.main')

@section('title')
    Группы
@endsection
@section('subtitle')
    Группы
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-2">
                    <a href="{{route('admin.groups.create')}}" class="btn btn-block btn-info mb-3">Добавить магазин</a>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Куратор</th>
                                    <th>Волонтеры</th>
                                    <th>Благополучатели</th>
                                    <th>Продавцы магазина</th>
                                    <th>Магазин</th>
                                    <th>Расписание</th>
                                    <th colspan="2" class="text-center">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($groups as $group)
                                <tr>
                                    <td>{{$group->id}}</td>
                                    <td>{{$group->curator_id}}</td>

                                    <td>
                                        @foreach($group->volunteers as $volunteer)
                                            {{$volunteer->name}}<br>
                                        @endforeach
                                            <i class="fas fa-plus-square"></i>
                                    </td>
                                    <td>
                                        @foreach($group->wards as $ward)
                                            {{$ward->name}}
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($group->sellers as $seller)
                                            {{$seller->name}}
                                        @endforeach
                                    </td>
                                    <td>{{$group->shop_id}}</td>
                                    <td><a href="{{route('admin.groups.schedules', $group)}}">Ссылка</a></td>
                                    <td><a href="{{route('admin.groups.show',$group->id)}}"><i class="far fa-eye"></i></a></td>
{{--                                    <td><a href="{{route('admin.groups.edit',$group->id)}}"><i class="fas fa-pen text-success"></i></a></td>--}}
                                    <td>
                                        <form action="{{route('admin.groups.delete', $group->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash text-danger" ></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
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
