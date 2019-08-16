<form action="{{route('products.update')}}" method="POST">
    @csrf
    Name: <input type="text" name="name" value="{{ $product->name }}"> <br>
    Quantity: <input type="number" name="quantity" value="{{ $product->quantity }}"> <br>
    <button type="submit">Update</button>
</form>