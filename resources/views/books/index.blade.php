@extends('books.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Simple Book Management CRUD Application</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{ route('books.create') }}"> Add Book</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($books) > 0)
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Author</th>
				<th>Publisher</th>
				<th>Type</th>
				<th>Year</th>
				<th>No. pages</th>
				<th>Price</th>
                <th width="280px">More</th>
            </tr>
            @foreach ($books as $book)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
					<td>{{ $book->publisher }}</td>
                    <td>{{ $book->type }}</td>
					<td>{{ $book->year }}</td>
					<td>{{ $book->pages }}</td>
                    <td>{{ $book->price }}</td>
                    <td>
                        <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">Start Adding to the Database.</div>
    @endif

    {!! $books->links() !!}

@endsection