
@extends('layout')

@section('content')

{{--    <h1>Hello, world!</h1>--}}

{{--    <p class="myClass">My class</p>--}}

    <div class="container">

        <?php for ($i = 0; $i<2; $i++ ): ?>
            <div class="row">
                <div class="cardImages col-md-4">
                    Одна из трёх колонок
                </div>
                <div class="cardImages col-md-4">
                    Одна из трёх колонок
                </div>
                <div class="cardImages col-md-4">
                    Одна из трёх колонок
                </div>
            </div>
        <?php endfor; ?>

    </div>

@endsection






