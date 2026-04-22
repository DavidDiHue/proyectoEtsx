<h1>Tienda </h1>
<a href="/login">Login</a>

@foreach($products as $product)
    <div style="border:1px solid #ccc; padding:10px; margin:10px;">
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <strong>${{ $product->price }}</strong>
    </div>
@endforeach
