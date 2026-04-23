<h1>Carrito 🛒</h1>

@if(session('cart'))
    @foreach(session('cart') as $id => $item)
        <div style="border:1px solid #ccc; margin:10px; padding:10px;">
            <h3>{{ $item['name'] }}</h3>
            <p>Precio: ${{ $item['price'] }}</p>
            <p>Cantidad: {{ $item['quantity'] }}</p>

            <form method="POST" action="/cart/remove/{{ $id }}">
                @csrf
                <button type="submit">Eliminar ❌</button>
            </form>
        </div>
    @endforeach
@else
    <p>Carrito vacío</p>
@endif
