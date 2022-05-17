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
                        <div class="form-group">
                            <label>Описание</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="personal_data">{{$user->personal_data}}</textarea>
                                @error('personal_data')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-9">
                            <label>
                                Сменить роль
                            </label>
                            <select class="form-control" name="role_id">
                                    <option value="1" {{($user->role_id == 1)? 'selected':''}}> Admin </option>
                                    <option value="2" {{($user->role_id == 2)? 'selected':''}}> Moderator </option>
                                    <option value="3" {{($user->role_id == 3)? 'selected':''}}> Куратор </option>
                                    <option value="4" {{($user->role_id == 4)? 'selected':''}}> Волонтер </option>
                                    <option value="5" {{($user->role_id == 5)? 'selected':''}}> Подопечный </option>
                                    <option value="6" {{($user->role_id == 6)? 'selected':''}}> Продавец </option>
                            </select>
                        </div>
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <input type="submit" class="btn btn-primary" value="Сохранить">
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
