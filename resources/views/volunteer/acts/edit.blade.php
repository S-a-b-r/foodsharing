@extends('admin.layouts.main')
@section('title')
    Редактирование пользователя {{$user->name}}
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form class="col-4" action="{{route('admin.users.update', $user->id)}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label>Имя пользователя</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="name" placeholder="Имя пользователя" value="{{$user->name}}">
                                @error('title')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="email" placeholder="Email" value="{{$user->email}}">
                                @error('email')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                        </div>

                        <div class="form-group col-9">
                            <label>
                                Изменить
                            </label>
                            <select class="form-control" name="role_id">
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}"
                                        {{($role->id == $user->role_id)? 'selected':''}} >{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Сохранить">
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
