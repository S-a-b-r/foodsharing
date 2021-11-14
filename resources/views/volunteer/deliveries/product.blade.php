@extends('volunteer.layouts.main')

@section('title')
    Добавление товара к доставке
@endsection

@section('subtitle')
    Добавление товара к доставке
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form class="col-4" action="{{route('volunteer.deliveries.addProduct', $delivery)}}" method="post">
                        @csrf

                        <div class="form-group row">
                            <label>Введите название товара</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="name" placeholder="Название" value="{{old('name')}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label>Введите вес товара в граммах</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="weight" placeholder="Вес" value="{{old('weight')}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label>Введите количество товара</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="count" placeholder="Количество" value="{{old('count')}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label>Введите стоимость товара в рублях</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="cost" placeholder="Стоимость" value="{{old('cost')}}">
                            </div>
                        </div>


                        <div class="col-10 form-group">
                            <label for="inputDate">Выберите срок годности продукта:</label>
                            <input type="date" name="expiration_date" class="form-control">
                        </div>

                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
