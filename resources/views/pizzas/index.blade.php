@extends('layouts.app')

@section('content')

    <div class="wrapper pizza-indxt">
        <h1>Pizza Order</h1>
        @foreach($pizzas as $pizza)
            <div class="pizza-item">
                <img src="/img/pizza-1.jpg" alt="">
                <h4><a href="/pizzas/{{ $pizza->id }}"> {{ $pizza->name }}</a></h4>
            </div>    

        @endforeach
    </div>

@endsection