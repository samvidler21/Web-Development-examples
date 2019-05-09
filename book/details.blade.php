@extends('layouts.master')
@section('title', 'Book details')
@section('content')
<section>
    <br>
<button onclick="goBack()">Go back to View Books page</button>
<script>
function goBack() {
    window.history.back();
}
</script>
<h1>Book Details</h1>
<p>This is the book details page showing you more detail of the chosen book like author and genre. To go back to the list of books click the back button above.</p>
<ul1>
<li1>Title: {{$book->title}}</li1>
<br>
<li1>Author: {{$book->author}}</li1>
<br>
<li1>Genre: {{$book->genre->name}}</li1>
<br>
<li1>Genre Description: {{$book->genre->description}}</li1>
<br>
<br>
</ul1>
<footer>John Smith's Second Hand Bookshop Copyright @ 2017</footer>
</section>
@endsection