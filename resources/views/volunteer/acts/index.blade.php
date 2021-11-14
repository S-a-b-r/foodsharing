
@extends('admin.layouts.main')

@section('title')
    Акты
@endsection
@section('subtitle')
    Акты
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-2">
                    <a href="{{route('admin.acts.create')}}" class="btn btn-block btn-info mb-3">Загрузить акт</a>
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
                                    <th>Продавец</th>
                                    <th>Получатель</th>
                                    <th>Договор</th>
                                    <th colspan="3" class="text-center">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($acts as $act)
                                <tr>
                                    <td>{{$act->id}}</td>
                                    <td>{{$act->seller_id}}</td>
                                    <td>{{$act->customer_id}}</td>
                                    <td><img src="{{asset('storage/'.$act->act_img)}}" class="col-10"> </td>
                                    <td><a href="{{route('admin.acts.show',$act->id)}}"><i class="far fa-eye"></i></a></td>
                                    <td><a href="{{route('admin.acts.edit',$act->id)}}"><i class="fas fa-pen text-success"></i></a></td>
                                    <td>
                                        <form action="{{route('admin.acts.delete', $act->id)}}" method="post">
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
