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

                        <div class="form-group row">
                            <label>Введите название магазина-партнера</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="name" placeholder="Название магазина" value="{{old('name')}}">
                                @error('name')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Адрес</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="address" placeholder="Address" value="{{old('address')}}">
                                @error('address')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label>Как с вами связаться?</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="contacts" placeholder="Contact" value="{{old('contacts')}}">
                                @error('contacts')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
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
