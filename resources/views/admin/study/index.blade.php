@extends('admin.layouts.main')

@section('title')
    Главная
@endsection

@section('content')
    <div class="row ml-2">
        <div class="card m-2 col-11">
            <div class="card-body">
                <h5 class="card-title">Lorem ipsum</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <div class="row ml-2 mt-5">
        <form action="" class="ml-2">
            <div class="row">
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body pb-1">
                        <div class="row">
                            <p class="card-text">Сложный вопрос</p>
                        </div>
                        <div class="row mt-3 justify-content-around">
                            <label>
                                <span>Да</span>
                                <input type="radio" name="answer" value="yes">
                            </label>
                            <label>
                                <span>Нет</span>
                                <input type="radio" name="answer" value="no">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <div class="row">
                            <p class="card-text">Сложный вопрос</p>
                        </div>
                        <div class="row mt-3 justify-content-around">
                            <label>
                                <span>Да</span>
                                <input type="radio" name="answer" value="yes">
                            </label>
                            <label>
                                <span>Нет</span>
                                <input type="radio" name="answer" value="no">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <div class="row">
                            <p class="card-text">Сложный вопрос</p>
                        </div>
                        <div class="row mt-3 justify-content-around">
                            <label>
                                <span>Да</span>
                                <input type="radio" name="answer" value="yes">
                            </label>
                            <label>
                                <span>Нет</span>
                                <input type="radio" name="answer" value="no">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <div class="row">
                            <p class="card-text">Сложный вопрос</p>
                        </div>
                        <div class="row mt-3 justify-content-around">
                            <label>
                                <span>Да</span>
                                <input type="radio" name="answer" value="yes">
                            </label>
                            <label>
                                <span>Нет</span>
                                <input type="radio" name="answer" value="no">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center m-2">
                <button type="submit" class="btn-dark">Отправить</button>
            </div>
        </form>
    </div>
@endsection
