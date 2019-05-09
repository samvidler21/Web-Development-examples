@extends('layouts.master')
@section('title', 'Delete books')
@section('content')
<section>
<form action="{{url('deletebooks')}}" method="POST">
    {{ csrf_field() }}
    <h1>Delete Books</h1>
    <p>To delete a book select the book you want to delete by clicking the box next to it and then click the delete books button at the bottom.</p>
     @foreach ($books as $book)
        <div>
            <label>{{$book->title}}</label>
            <input type='checkbox' value='{{$book->id}}' name='books[]'/>
        </div>
    @endforeach
    <br>
    <input type="submit" name="submitBtn" value="Delete Books">
</form>
<footer>John Smith's Second Hand Bookshop Copyright @ 2017</footer>
</section>
@endsection