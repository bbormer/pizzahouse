@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
{{-- <div class="wrapper create-pizza"></div> --}}
  <div class="content">
    <h1 class="title m-b-md text-pizza">Create a New Pizza</h1>
    {{-- <h1 class="title m-b-md text-pizza">新しいピザを注文</h1> --}}
    <form action="/pizzas" method="POST" class="text-pizza text-2xl" enctype="multipart/form-data">
      @csrf
      <div class="block text-2xl mb-5">
        <label class="px-2" for="name">Your name:</label>
        <input class="border-pizza border rounded" type="text" name="name" id="name" required>
        @error('name')
          <p class="text-red-500 text-lg mt-1">{{ $message }}</p>
        @enderror
      </div>
      <div class="block text-2xl mb-5">
        <label class="px-2" for="type">Choose type of pizza:</label>
        <select name="type" id="type" class="border-pizza border rounded">
          <option value="margarita">Margarita</option>
          <option value="hawaiian">Hawaiian</option>
          <option value="veg supreme">Veg Supreme</option>
          <option value="volcano">Volcano</option>
        </select>
        <label class="px-2" for="base">Choose crust:</label>
        <select name="base" id="base" class="border-pizza border rounded">
          <option value="thick">Thick</option>
          <option value="thin & crispy">Thin & Crispy</option>
          <option value="cheese crust">Cheese Crust</option>
          <option value="garlic crust">Garlic Crust</option>
        </select>
      </div>
      <div class="hidden">
        <input type="text" value='10' name="price">
      </div>
      <div class="block text-2xl">
        <fieldset class="mb-5">
          <label>Extra toppings:</label><br>
          <input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms<br />
          <input type="checkbox" name="toppings[]" value="peppers"> Peppers<br />
          <input type="checkbox" name="toppings[]" value="garlic"> Garlic<br />
          <input type="checkbox" name="toppings[]" value="olives"> Olives<br />
        </fieldset>
      </div>
      <div class="block mb-5">
        <label class="px-2" for="img">ID:</label>
        <input class="border-pizza border rounded text-sm" type="file" name="img" id="img" >
      </div>
      <input class="rounded py-1 px-2 hover:bg-violet-300 bg-pizza text-white" type="submit" value="Order Pizza">
    </form>
  </div>
</div>
@endsection
