@extends('admin.layouts.main')

@section('title')
    Добавление акта приема-передачи
@endsection


@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form class="col-4" action="{{route('admin.acts.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group col-9">
                            <label for="exampleInputFile">Добавьте изображение акта, если он в бумажном виде</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name='act_img' type="file" class="custom-file-input">
                                    <label class="custom-file-label">Выберите изображение</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            @error('act_img')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
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
