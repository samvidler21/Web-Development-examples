@extends('layouts.master')

@section('title', 'All Books')

@section('content')
<section>
<h1>View All Books</h1>
<p>Below is a list of all the books. To view more information about them click on the title of the book.</p>
@foreach ($books as $book)
        <p>
            <a href="{{url('details/'.$book->id)}}">{{$book->title}}</a>        
        </p>
    @endforeach
<footer>John Smith's Second Hand Bookshop Copyright @ 2017</footer>
</section>
@endsection