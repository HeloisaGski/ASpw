<form action="{{ url('books') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" required>
    <input type="text" name="author" placeholder="Author" required>
    <input type="text" name="genre" placeholder="Genre" required>
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
    <input type="number" name="year_pub" placeholder="Year Publication" required>



    <button type="submit">Create Book</button>
</form>