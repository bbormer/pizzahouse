<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PizzaController extends Controller
{
    //
    public function index() {
        // $pizzas = [
        //     ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        //     ['type' => 'volcano', 'base' => 'garlic crust'],
        //     ['type' => 'veg supreme', 'base' => 'thin & crispy']
        // ];
    
        $pizzas = Pizza::latest()->filter(request(['search']))->paginate(3)->withQueryString();
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name')->get();
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        // $pizzas = Pizza::latest()->get();

        // $fname = request('fname');
        // $lname = request('lname');
        
        return view('pizzas.index', [
            'pizzas' => $pizzas
            // 'fname' => request('fname'),
            // 'lname' => request('lname')
        ]);
        // return "Pizzas!";
        // return ["name" => 'veg pizzas', "base" => 'classic'];
    }

    public function show($id) {
        $pizza = Pizza::findorFail($id);

        return view('pizzas.show', [
            'pizza' => $pizza
        ]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {
        // dd(request('name'));
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('base'));

        $formFields = request()->validate([
            'name' => ['required', Rule::unique('pizzas', 'name')],
            'type' => 'required',
            'base' => 'required',
            'price' => 'numeric',
            'toppings' => 'nullable'
        ]);

        if(request()->hasFile('img')) {
            $formFields['imgpath'] = request()->file('img')->store('imgs', 'public');
        }
        // $formFields = request()->validate(
        //     [
        //         // 'name' => ['required', Rule::unique('pizzas', 'name')],
        //         // 'type' => 'required',
        //         // 'base' => 'required',
        //         // 'price' => 10,
        //         // 'toppings' => 'nullable|string'
        //     ]);

        // $pizza = new Pizza();

        // $pizza->name = request('name');
        // $pizza->type = request('type');
        // $pizza->base = request('base');
        // $pizza->price = 10;
        // $pizza->toppings = request('toppings');
        // // dd($pizza);

        // $pizza->save();
        Pizza::create($formFields);

        return redirect('/')->with('msg', 'ご注文ありがとうございました');
    }

    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
