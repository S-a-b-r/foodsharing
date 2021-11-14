@extends('admin.layouts.main')

@section('title')
    Добавление волонтера
@endsection


@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form class="col-4" action="{{route('admin.groups.addVolunteer', $group)}}" method="post">
                        @csrf

                        <div class="form-group col-9">
                            <label>
                                Выберите волонтера, которого хотите добавить в группу
                            </label>
                            <select class="form-control" name="volunteer_id">
                                @foreach($volunteers as $volunteer)
                                    <option value="{{$volunteer->id}}"
                                        {{$volunteer->id == old('volunteer_id')? 'selected':''}} >{{$volunteer->name}}</option>
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
