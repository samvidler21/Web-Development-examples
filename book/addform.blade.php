@extends('layouts.master')
@section('title', 'Add a book')
@section('content')
@if (count($errors) > 0)

@endif
<form action="{{url('addbook')}}" method="POST">
{{ csrf_field() }}
<section>

<h1>Add a Book</h1>
<p>To add a book simply enter the boxes below and then click the add a book button.Once you have added a book click on view books to see the book you have added. Note, if you do not enter any data into the fields and click add a book you will get an error message.</p>
<div>
    <label for="title">Enter the title of a book:</label>
<input type="text" name="title" id="title">
</div>
<br>
<div>
<label for="title">Enter the author of the book:</label>
<input type="text" name="author" id="author">
</div>
<br>
<fieldset>
<legend>Select the book's genre</legend>
@foreach($genres as $genre)
    <div>
        <label for="dirBtn{{$genre->id}}">
        <input id="dirBtn{{$genre->id}}" type="radio" name="genre" value="{{$genre->id}}">
        {{$genre->name}}
        </label>
    </div>
@endforeach
</fieldset>
<br>
<input type="submit" name="submitBtn" value="Add a Book">
<br>
<br>
   <ul2>
            @foreach ($errors->all() as $error)
                <li2>{{ $error }}</li2>
            @endforeach
    </ul2>
<br>
<br>
<footer>John Smith's Second Hand Bookshop Copyright @ 2017</footer>
</section>
@endsection