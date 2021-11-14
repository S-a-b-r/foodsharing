@extends('admin.layouts.main')

@section('title')
    Запись доставки
@endsection

@section('subtitle')
    Запись доставки
@endsection


@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form class="col-4" action="{{route('admin.deliveries.store')}}" method="post">
                        @csrf

                        <div class="form-group col-9">
                            <label>
                                Выберите Куратора, ответственного за доставку
                            </label>
                            <select class="form-control" name="curator_id">
                                @foreach($curators as $curator)
                                    <option value="{{$curator->id}}"
                                        {{$curator->id == old('curator_id')? 'selected':''}} >{{$curator->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label>
                                Выберите Магазин-партнер
                            </label>
                            <select class="form-control" name="shop_id">
                                @foreach($shops as $shop)
                                    <option value="{{$shop->id}}"
                                        {{$shop->id == old('curator_id')? 'selected':''}} >{{$shop->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label>
                                Выберите Волонтера, ответственного за доставку
                            </label>
                            <select class="form-control" name="volunteer_id">
                                @foreach($volunteers as $volunteer)
                                    <option value="{{$volunteer->id}}"
                                        {{$volunteer->id == old('volunteer_id')? 'selected':''}} >{{$volunteer->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label>
                                Выберите Благополучателя
                            </label>
                            <select class="form-control" name="ward_id">
                                @foreach($wards as $ward)
                                    <option value="{{$ward->id}}"
                                        {{$ward->id == old('ward_id')? 'selected':''}} >{{$ward->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label>
                                Выберите Акт приема-передачи
                            </label>
                            <select class="form-control" name="act_id">
                                <option value="0">Не прикреплять</option>
                                @foreach($acts as $act)
                                    <option value="{{$act->id}}"
                                        {{$act->id == old('act_id')? 'selected':''}} >Акт №{{$act->id}}</option>
                                @endforeach
                            </select>
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
