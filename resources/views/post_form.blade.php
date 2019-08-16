<form action="{{route('postForm')}}" method="post">
    @csrf
    <input type="text" name="hoTen">
    <input type="submit">
</form>