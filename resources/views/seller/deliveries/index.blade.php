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
                <div class="col-8">
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
