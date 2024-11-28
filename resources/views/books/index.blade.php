@foreach($books as $book)
    <div>
        <h3>{{ $book->title }}</h3>
        <p>{{ $book->author }}</p>
        <p>{{ $book->genre }}</p>
        <p>{{ $book->image }}</p>
        <p>{{ $book->year_pub }}</p>


        <a href="{{ url('books/'.$book->id.'/edit') }}">Edit</a>
        <form action="{{ url('books/'.$book->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach