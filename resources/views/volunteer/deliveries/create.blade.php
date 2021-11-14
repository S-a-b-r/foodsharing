@extends('volunteer.layouts.main')

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
                    <form class="col-4" action="{{route('volunteer.deliveries.store')}}" method="post">
                        @csrf

                        <div class="form-group col-9">
                            <input hidden value="{{$curator_id}}" name="curator_id">
                        </div>
                        <div class="form-group col-9">
                            <input hidden value="{{$shop_id}}" name="shop_id">
                        </div>
                        <div class="form-group col-9">
                            <input hidden value="{{$volunteer_id}}" name="volunteer_id">
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

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
