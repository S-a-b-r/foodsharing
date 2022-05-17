
@extends('admin.layouts.main')

@section('title')
    Магазин
@endsection

@section('subtitle')
    <div class="d-flex">
        Магазин {{$shop->name}}
        <a href="{{route('admin.shops.edit', $shop->id)}}"><i class="fas fa-pen text-success ml-2" style="font-size: 18px;"></i></a>
        <form action="{{route('admin.shops.delete', $shop->id)}}" method="post" class="ml-2">
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
                                        <td>{{$shop->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{$shop->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Адрес</td>
                                        <td>{{$shop->address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Контакты</td>
                                        <td>{{$shop->contacts}}</td>
                                    </tr>
                                    <tr>
                                        <td>Создан</td>
                                        <td>{{$shop->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <td>Обновлен</td>
                                        <td>{{$shop->updated_at}}</td>
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
