@extends('layout')

@section('content')
    <h1>{{ $card->title }}</h1><br>
    @foreach ($card->notes as $note)
        <h5>{{ $note->body }}</h5>
    @endforeach
    
    <hr>
    <h3>Add New Note</h3>
    <form action="/cards/{{ $card->id }}/notes" method="POST">


    <textarea name="body" id="" cols="30" rows="10">
    </textarea><br>
    <button type="submit">Add Note</button>
    </form>
@stop