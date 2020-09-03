@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Ordered Pizza') }}</div>

                <div class="card-body create-pizza">
                    <form action="{{ route('pizzas.update', $pizza->id) }}" method="POST">
                        @csrf
                        <label for="name">Your name:</label>
                        <input type="text" id="name" name="name" value="{{ $pizza->name }}">
                        <label for="type">Choose pizza type:</label>
                        <select name="type" id="type">
                            <option {{ $pizza->type == "margarita" ? "selected" : ""}} value="margarita">Margarita</option>
                            <option {{ $pizza->type == "hawaiin" ? "selected" : ""}} value="hawaiin">Hawaiin</option>
                            <option {{ $pizza->type == "veg supreme" ? "selected" : ""}} value="veg supreme">Veg supreme</option>
                            <option {{ $pizza->type == "volcano" ? "selected" : ""}} value="volcano">Volcano</option>
                        </select>
                        <label for="type">Choose base type:</label>
                        <select name="base" id="base">
                            <option {{$pizza->base == "cheesy crust" ? "selected" : ""}} value="cheesy crust">cheesy crust</option>
                            <option {{$pizza->base == "garlic crust" ? "selected" : ""}} value="garlic crust">garlic crust</option>
                            <option {{$pizza->base == "thin & cripsy" ? "selected" : ""}} value="thin & cripsy">thin & cripsy</option>
                            <option {{$pizza->base == "thick" ? "selected" : ""}} value="thick">thick</option>
                        </select>
                        <fieldset>
                            <label>Extra toppings:</label>
                            <input {{ in_array("mushrooms", $pizza->toppings) ? "checked" : "" }} type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br />
                            <input {{ in_array("peppers", $pizza->toppings) ? "checked" : "" }} type="checkbox" name="toppings[]" value="peppers">Peppers <br />
                            <input {{ in_array("garlic", $pizza->toppings) ? "checked" : "" }} type="checkbox" name="toppings[]" value="garlic">Garlic <br />
                            <input {{ in_array("olives", $pizza->toppings) ? "checked" : "" }} type="checkbox" name="toppings[]" value="olives">Olives <br />

                        </fieldset>
                        <input type="submit" value="Order Pizza">
                        <a href="{{ route('pizzas.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper create-pizza">
    
</div>

@endsection