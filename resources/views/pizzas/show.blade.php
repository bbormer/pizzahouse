@extends('layouts.layout')

@section('content')
{{-- @include('partials._search') --}}
{{-- <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md text-pizza">
                    Pizza List - {{ $id }}
                </div>
            </div>
        </div> --}}

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="wrapper pizza-details mb-10">
            <h1 class="title m-b-md text-pizza">Order for {{ $pizza->name }}</h1>
            <img class="w-1/6 block mx-auto pb-2 h-52 w-52" src="{{ $pizza->imgpath ?asset('storage/' . $pizza->imgpath) : asset('/img/pizza.png') }}" alt="pizza icon">
            <p class="type">Type - {{ $pizza->type }}</p>
            <p class="base mb-5">Base - {{ $pizza->base }}</p>
            <p class="toppings">Extra toppings:</p>
            <div class="flex flex-col items-center justity-center mt-2">
            @if ($pizza->toppings)
                <ul class="flex">
                    @foreach($pizza->toppings as $topping)
                    <li class="bg-pizza text-white rounded-2xl px-3 py-1 mr-2">{{ $topping }}</li>
                    @endforeach
                </ul>
                @else
                <p class="text-red-500">-----</p>
            @endif  
            </div>     
        </div>
        <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="rounded py-1 px-2 hover:bg-violet-300 bg-pizza text-white">Complete Order</button><br><br>
    </form>
        <a class="underline hover:bg-violet-100" href="/pizzas">Back to list</a>
    </div>
</div>
@endsection
