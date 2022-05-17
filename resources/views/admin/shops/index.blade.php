
@extends('admin.layouts.main')

@section('title')
    Магазины
@endsection
@section('subtitle')
    Магазины
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-2">
                    <a href="{{route('admin.shops.create')}}" class="btn btn-block btn-info mb-3">Добавить магазин</a>
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
                                    <th>Название</th>
                                    <th>Адрес</th>
                                    <th>Телефон</th>
                                    <th colspan="2" class="text-center">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($shops as $shop)
                                <tr>
                                    <td>{{$shop->id}}</td>
                                    <td>{{$shop->name}}</td>
                                    <td>{{$shop->address}}</td>
                                    <td>{{$shop->contacts}}</td>
                                    <td><a href="{{route('admin.shops.show',$shop->id)}}"><i class="far fa-eye"></i></a></td>
                                    <td><a href="{{route('admin.shops.edit', $shop->id)}}"><i class="fas fa-pen text-success"></i></a></td>
                                    <td>
                                        <form action="{{route('admin.shops.delete', $shop->id)}}" method="post">
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
