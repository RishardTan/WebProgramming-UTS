@include('header')

@extends('template')

@section('cont')
<div style="display:flex; justify-content: center; align-items:center; padding-top:50px">
    <h1>{{$category->category_name}}</h1>
</div>


<div style="display:flex; justify-content:center; align-items: center; background-color:white; padding-left:70px">
    @foreach ($book_data as $book)
    <div class="card" style="width: 250px; height:550px ; margin-right:50px; margin-top: 50px">
        <img src={{url('storage/'.$book->image)}} class="card-img-top" alt="..." style="width: 250px; height: 370px">
        <div class="card-body">
            <a href="/book/{{$book->book_id}}" style="text-decoration:none; font-weight:bolder; color:rgb(44, 44, 44); font-size:17px">
                {{$book->title}}
            </a>
            <p class="card-title">{{$book->author}}</p>
            <a href="/book/{{$book->book_id}}" class="btn btn-dark" role="button">Details</a>
        </div>
        </div>
    @endforeach    
</div>
@endsection