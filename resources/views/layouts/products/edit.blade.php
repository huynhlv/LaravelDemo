<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    Name: <input type="text" name="name" value="{{ $product->name }}"> <br>
    Quantity: <input type="number" name="quantity" value="{{ $product->quantity }}"> <br>
    <button type="submit">Update</button>
</form>