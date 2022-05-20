@extends('admin.layouts.main')

@section('title')
    Добавление группы
@endsection


@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form class="col-4" action="{{route('admin.groups.store')}}" method="post">
                        @csrf

                        <div class="form-group col-9">
                            <label>
                                Название группы
                            </label>
                            <input class="form-control" type="text" name="title" placeholder="Введите название группы">
                        </div>

                        <div class="form-group col-9">
                            <label>
                                Выберите магазин, который обслуживает группа
                            </label>
                            <select class="form-control" name="shop_id">
                                @foreach($shops as $shop)
                                    <option value="{{$shop->id}}"
                                        {{$shop->id == old('shop_id')? 'selected':''}} >{{$shop->name}}</option>
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
