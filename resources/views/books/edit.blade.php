<form action="{{ url('books') }}" method="POST">
    @csrf
    @method ('PUT')
    <input type="text" name="title" placeholder="Title" value="{{$book->title}}" required>
    <input type="text" name="author" placeholder="Author" value="{{$book->author}}" required>
    <input type="text" name="genre" placeholder="Genre" value="{{$book->genre}}" required>
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
    <input type="number" name="year_pub" placeholder="Year Publication" value="{{$book->year_pub}}" required>

    <button type="submit">Edit Book</button>
</form>