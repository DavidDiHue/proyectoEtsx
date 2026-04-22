<form method="POST" action="/products">
    @csrf
    <input type="text" name="name" placeholder="Nombre"><br>
    <textarea name="description"></textarea><br>
    <input type="number" step="0.01" name="price"><br>
    <input type="number" name="stock"><br>
    <button type="submit">Guardar</button>
</form>
