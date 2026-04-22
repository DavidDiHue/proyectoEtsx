<form method="POST" action="/products/{{ $product->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}"><br>
    <textarea name="description">{{ $product->description }}</textarea><br>
    <input type="number" step="0.01" name="price" value="{{ $product->price }}"><br>
    <input type="number" name="stock" value="{{ $product->stock }}"><br>

    <button type="submit">Actualizar</button>
</form>
