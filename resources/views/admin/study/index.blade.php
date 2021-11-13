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
    <div class="col">
        <div class="col-10 m-2 p-2">
            <h3 class="ml-2">Вопрос 1</h3>
            <div id="text">
                <div class="row ml-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo facilis natus non ratione recusandae. Dolorem doloremque earum explicabo hic laudantium nesciunt odio porro provident quam rerum? Accusantium doloribus sint velit?
                </div>
                <div class="row ml-2 justify-content-center">
                    <script>function showQuestions() {
                            document.getElementById('questions').className = "ml-2";
                            document.getElementById('text').className = "d-none";
                        }
                    </script>
                    <button onclick="showQuestions()" class="btn-dark rounded-pill p-1 pl-2 pr-2 m-3">Пройти нест</button>
                </div>
            </div>
            <form action="" id="questions" class="d-none">
                <div class="col justify-content-between ml-1 mt-2">
                    <div class="row justify-content-between">
                        <div class="card m-2" style="width: 18rem;">
                            <div class="card-body pb-2">
                                <div class="row">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at doloribus est eveniet ipsam iste, iure laboriosam molestias nam omnis quaerat quam quis quod repellat sunt veritatis vero voluptas voluptates.</p>
                                </div>
                                <div class="row mt-1 d-flex justify-content-around">
                                    <label class="flex-grow-1 border-dark border-1 answer">
                                        <input type="radio" name="answer1" value="yes" class="d-none">
                                        <div class="col m-0 p-2 text-center">
                                            <span>Да</span>
                                        </div>
                                    </label>
                                    <label class="flex-grow-1 border-dark border-1 answer">
                                        <input type="radio" name="answer1" value="no" class="d-none">
                                        <div class="col m-0 p-2 text-center">
                                            <span>Нет</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <div class="card-body pb-2">
                                <div class="row">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at doloribus est eveniet ipsam iste, iure laboriosam molestias nam omnis quaerat quam quis quod repellat sunt veritatis vero voluptas voluptates.</p>
                                </div>
                                <div class="row mt-1 d-flex justify-content-around">
                                    <label class="flex-grow-1 border-dark border-1 answer">
                                        <input type="radio" name="answer2" value="yes" class="d-none">
                                        <div class="col m-0 p-2 text-center">
                                            <span>Да</span>
                                        </div>
                                    </label>
                                    <label class="flex-grow-1 border-dark border-1 answer">
                                        <input type="radio" name="answer2" value="no" class="d-none">
                                        <div class="col m-0 p-2 text-center">
                                            <span>Нет</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <div class="card-body pb-2">
                                <div class="row">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at doloribus est eveniet ipsam iste, iure laboriosam molestias nam omnis quaerat quam quis quod repellat sunt veritatis vero voluptas voluptates.</p>
                                </div>
                                <div class="row mt-1 d-flex justify-content-around">
                                    <label class="flex-grow-1 border-dark border-1 answer">
                                        <input type="radio" name="answer3" value="yes" class="d-none">
                                        <div class="col m-0 p-2 text-center">
                                            <span>Да</span>
                                        </div>
                                    </label>
                                    <label class="flex-grow-1 border-dark border-1 answer">
                                        <input type="radio" name="answer3" value="no" class="d-none">
                                        <div class="col m-0 p-2 text-center">
                                            <span>Нет</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center m-2">
                        <button type="submit" class="btn-dark rounded-pill p-1 pl-2 pr-2">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
