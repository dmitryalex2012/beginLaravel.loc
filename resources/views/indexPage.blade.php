
@extends('layout')

@section('content')

{{--    <h1>Hello, world!</h1>--}}

{{--    <p class="myClass">My class</p>--}}

    <div class="container">

        <?php for ($i = 0; $i<2; $i++ ): ?>
            <div class="row">
                <div class="cardImages col-md-6">
                    <div class="indexImages">
                        <div><img src="{{ asset('images/testImage1.png') }}" alt="100%"></div>
                        <div><img src="{{ asset('images/testImage2.png') }}" alt="100%"></div>
                        <div><img src="{{ asset('images/testImage3.png') }}" alt="100%"></div>
                    </div>
                </div>
                <div class="cardImages col-md-6">
                    <div class="indexImages">
                        <div><img src="{{ asset('images/testImage2.png') }}" alt="100%"></div>
                        <div><img src="{{ asset('images/testImage3.png') }}" alt="100%"></div>
                        <div><img src="{{ asset('images/testImage1.png') }}" alt="100%"></div>
                    </div>
                </div>
{{--                <div class="cardImages col-md-4">--}}
{{--                    Одна из трёх колонок--}}
{{--                </div>--}}
            </div>
        <?php endfor; ?>

    </div>

@endsection






