@extends('layouts.app')

@section('content')

<div class="wrapper create-pizza">
    <h1>Order a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiin">Hawaiin</option>
            <option value="veg supreme">Veg supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="type">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin & cripsy">thin & cripsy</option>
            <option value="thick">thick</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br />
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic <br />
            <input type="checkbox" name="toppings[]" value="olives">Olives <br />

        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>

@endsection