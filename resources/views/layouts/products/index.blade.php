<table>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->quantity }}</td>
            <td><a href="{{ route('products.edit', $product->id) }}">Edit</a></td>
            <td><a href="{{ route('products.destroy', $product->id) }}">Delete</a></td>
            <td></td>
        </tr>
    @endforeach
</table>