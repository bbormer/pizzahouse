@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref h-5/6">

    <div class="content">
        <img class="block mx-auto"  src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md text-pizza">
            The North's Best Pizzas
        </div>
        {{-- <p>{{ session('msg') }}</p> --}}
        {{-- @if(session()->has('msg'))
            <p>{{ session('msg') }}</p>
        @endif --}}
        <x-flash-msg></x-flash-msg>
        <a href="/pizzas/create" class="text-2xl underline hover:italic">Order a Pizza</a>

    </div>
</div>
@endsection