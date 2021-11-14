@extends('admin.layouts.main')

@section('title')
    Главная
@endsection

@section('content')
    <style>
        .answer div {
            background-color: lightgrey;
        }
        .answer input:checked + div{
            background-color: lightgreen;
        }
    </style>

    <div class="col-md-8 p-2 col mx-2">
        <form action="" class="mb-4">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Название параграфа</label>
                <input type="text" name="paragraph_name" class="form-control" id="formGroupExampleInput" placeholder="Название параграфа">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Текст параграфа</label>
                <textarea name="paragraph_text" placeholder="Текст параграфа" class="form-control" cols="30" rows="6"></textarea>
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn-dark rounded-pill py-2 px-3">Сохранить</button>
            </div>
        </form>


        <form action="" class="mb-4">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Название параграфа</label>
                <input type="text" name="paragraph_name" class="form-control" id="formGroupExampleInput" placeholder="Название параграфа">
            </div>
            <div class="mb-2">
                <label for="formGroupExampleInput2" class="form-label">Текст параграфа</label>
                <textarea name="paragraph_text" placeholder="Текст параграфа" class="form-control" cols="30" rows="6"></textarea>
            </div>

            <div class="row mt-1 d-flex justify-content-around">
                <label class="flex-grow-1 ml-2 answer">
                    <input type="radio" name="answer1" value="yes" class="d-none">
                    <div class="col m-0 p-2 rounded-left text-center">
                        <span>Да</span>
                    </div>
                </label>
                <label class="flex-grow-1 mr-2 answer">
                    <input type="radio" name="answer1" value="no" class="d-none">
                    <div class="col m-0 p-2 rounded-right text-center">
                        <span>Нет</span>
                    </div>
                </label>
            </div>

            <div class="row justify-content-center">
                <button type="submit" class="btn-dark rounded-pill py-2 px-3">Сохранить</button>
            </div>
        </form>
    </div>

@endsection

