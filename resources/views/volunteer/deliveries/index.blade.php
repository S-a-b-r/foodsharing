@extends('volunteer.layouts.main')

@section('title')
    Доставки
@endsection
@section('subtitle')
    Все доставки
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-2">
                    <a href="{{route('volunteer.deliveries.create')}}" class="btn btn-block btn-info mb-3">Записать доставку</a>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Куратор</th>
                                    <th>Волонтер</th>
                                    <th>Благополучатель</th>
                                    <th>Магазин</th>
                                    <th>Товары</th>
                                    <th>Дата составления</th>
                                    <th>ЭЦП</th>
                                    <th colspan="2" class="text-center">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($deliveries as $delivery)
                                <tr>
                                    <td>{{$delivery->id}}</td>
                                    <td>{{$delivery->curator_id}}</td>
                                    <td>{{$delivery->volunteer_id}}</td>
                                    <td>{{$delivery->ward_id}}</td>
                                    <td>{{$delivery->shop_id}}</td>
                                    <td>
                                        @foreach($delivery->products as $product)
                                            {{$product->name}}<br>
                                        @endforeach
                                        <a href="{{route('volunteer.deliveries.product', $delivery)}}"><i class="fas fa-plus-square"></i></a>
                                    </td>
                                    <td>{{$delivery->created_at}}</td>
                                    <td>
                                        @if($delivery->signature_volunteer == 0)
                                            <form action="{{route('volunteer.deliveries.confirm', $delivery)}}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-info">Подтвердить*</button>
                                            </form>
                                        @else
                                            Подтверждено
                                        @endif

                                    </td>
                                    <td><a href="{{route('volunteer.deliveries.show',$delivery->id)}}" title="Подробнее"><i class="far fa-eye"></i></a></td>
                                    <td>
                                        <form action="{{route('volunteer.deliveries.delete', $delivery->id)}}" method="post">
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
