@extends('books.layout')

@section('content')
    <h1>Edit Book</h1>
    <hr>
     <form action="{{url('books', [$book->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" value="{{$book->title}}" class="form-control" id="bookTitle"  name="title" >
      </div>
	  
      <div class="form-group">
        <label for="author">Author</label>
        <input type="text" value="{{$book->author}}" class="form-control" id="author" name="author" >
      </div>
	  <div class="form-group">
        <label for="publisher">Publisher</label>
        <input type="text" value="{{$book->publisher}}" class="form-control" id="publisher" name="publisher" >
      </div>
	  <div class="form-group">
        <label for="author">Type</label>
         <select class="form-control" name="type">
			@foreach($selectedType as $item)
			  <option value="{{$item}}" selected>{{$item}}</option>
			@endforeach
		  </select>
      </div>
	  <div class="form-group">
        <label for="year">Year</label>
        <input type="text" value="{{$book->year}}" class="form-control" id="year" name="year" >
      </div>
	  <div class="form-group">
        <label for="pages">No. pages</label>
        <input type="text" value="{{$book->pages}}" class="form-control" id="pages" name="pages" >
      </div>
	   <div class="form-group">
        <label for="price">Price</label>
        <input type="text" value="{{$book->price}}" class="form-control" id="price" name="price" >
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Edit book</button>
    </form>
@endsection