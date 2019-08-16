<form action="{{route('products.store')}}" method="post">
    @csrf
    Name: <input type="text" name="name"> <br>
    Quantity: <input type="number" name="quantity"> <br>
    <button type="submit">Create</button>
</form>