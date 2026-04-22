<h1>Productos</h1>
<a href="/products/create">Crear Productos</a>
@foreach($products as $product)
    <div>
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->description }}</p>
        <p>${{ $product->price }}</p>

        <a href="/products/{{ $product->id }}/edit">Editar</a>

        <form method="POST" action="/products/{{ $product->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </div>
@endforeach
