@extends('layouts.app')

@section('content')

<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    @if(session('mssg'))
        <div class="alert alert-success">
            {{ session('mssg') }}  
        </div><br />
    @endif
    <p>
        Displaying {{$pizzas->count()}} of {{ $pizzas->total() }} pizza(s).
    </p>
    <table class="table table-bordered table-hover pizza-item">
        <thead>
            <th></th>
            <th>Name</th>
            <th>Type</th>
            <th>Base</th>
            <th>Toppings</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @if ($pizzas->count() == 0)
            <tr>
                <td colspan="5">No pizzas to display.</td>
            </tr>
            @endif
    
            @foreach ($pizzas as $pizza)
            <tr>
                <td class="icon"><img src="/img/pizza.png" alt="pizza icon"></td>
                <td>
                    <a href="{{ route('pizzas.show', $pizza->id)  }}">
                        {{ $pizza->name }}
                    </a>
                </td>
                <td> {{ $pizza->type }} </td>
                <td>{{ $pizza->base }}</td>
                <td>
                    <ul>
                    @foreach ($pizza->toppings as $topping)
                        <li> {{ $topping }} </li>
                    @endforeach
                    </ul>
                </td>
                <td>
                    <a class="btn btn-sm btn-success" href="{{ route('pizzas.edit', $pizza->id) }}">Edit</a>
    
                    <form style="display:inline-block" action="{{ action('PizzaController@destroy', ['id' => $pizza->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-sm btn-danger"> Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    {{ $pizzas->links() }}
    
    

    {{-- @foreach($pizzas as $pizza)
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="pizza icon">
            <h4>
            <a href="/pizzas/{{ $pizza->id }}">
                {{ $pizza->name }}
            </a>
            </h4>
        </div>
    @endforeach --}}

    {{-- {{ $pizzas->links() }} --}}
</div>
        
        



@endsection