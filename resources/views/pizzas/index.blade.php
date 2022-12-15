{{-- @php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Pizza;
@endphp --}}

@extends('layouts.layout')

@section('content')
@include('partials._search')



{{-- <div class="flex-center position-ref full-height"> --}}
    <div class="flex-center position-ref h-5/6">

            <div class="content">
                <div class="title m-b-md text-pizza">
                    Pizza Orders!!　<i class="fa-solid fa-arrow-up-a-z"></i>
                </div>
                {{-- <p>{{ $fname }} - {{ $lname }}</p> --}}
                @if ($pizzas->count()) 
                    @foreach($pizzas as $pizza)
                    {{-- <div>{{ $pizza['type'] }} - {{ $pizza['base'] }} - {{ $pizza['name'] }}</div> --}}
                    {{-- <img class="w-1/6 block mx-auto pb-2" src="/img/pizza.png" alt="pizza icon"> --}}
                    <img class="w-1/6 block mx-auto pb-2 h-40 w-40" src="{{ $pizza->imgpath ?asset('storage/' . $pizza->imgpath) : asset('/img/pizza.png') }}" alt="pizza icon">

                    <h4 class="text-2xl text-pizza" ><a class="hover:underline" href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
                    <div class="mb-8">{{ $pizza->type }} - {{ $pizza->base }}</div>
                    @endforeach
                @else
                    <div>Pizza Orders not found!!</div>
                    @php
                        // request()->query->remove('search');
                        // request()->request->remove('search');
                        // 
                        
                        // unset(request()->$query['search']);
                        // request()->query->remove('search');
                        // dd(request()->query());
                        // $oldQuery = request()->query(); // status=published&category=sport

                        // $newQuery = request()->except('search');
                        // dd($newQuery)
                        // return to_route('/pizzas');
                        // dd($newQuery)

                        // $url = route([PizzaController::class, 'index'], [$pizzas, Arr::query($newQuery)]) 
                        //users/{user}/articles?status=published
                        // $url = request()->fullUrlWithQuery($newQuery);
                        // dd($url)


                    @endphp
                @endif
                
            </div>
        </div>
        <div class="mt-6 p-4">
            {{ $pizzas->links('vendor.pagination.custom_paginate') }}
        </div>
@endsection
