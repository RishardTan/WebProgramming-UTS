@include('header')

@extends('template')

@section('cont')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
<div style="padding-top: 50px; padding-bottom: 50px; background-color:white">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn" style="padding-left: 200px">
            <div class="card border-0 shadow" style="background-color: rgb(50, 50, 50); color:white; width: 350px">
                <img src={{url('storage/'.$curr_publisher->image)}} alt="...">
                <div class="card-body p-1-9 p-xl-5">
                    <div class="mb-4">
                        <h3 class="h4 mb-0">{{$curr_publisher->name}}</h3>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-3"><i class="me-3 text-secondary">Address: </i>{{$curr_publisher->address}}</a></li>
                        <li class="mb-3"><i class="me-3 text-secondary">Phone: </i>{{$curr_publisher->phone}}</a></li>
                        <li class="mb-3"><i class="me-3 text-secondary">Email: </i>{{$curr_publisher->email}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8" style="background-color: white">  
            <h2 class="h1 mb-0">Books by {{$curr_publisher->name}}</h2>
            <div style="display:flex; justify-content:left; align-items: center; background-color:white">
                @foreach ($book_data as $book)
                <div class="card" style="width: 250px; height:550px ; margin-right:50px; margin-top: 50px">
                    <img src={{url('storage/'.$book->image)}} class="card-img-top" alt="..." style="width: 250px; height: 370px">
                    <div class="card-body">
                        <a style="text-decoration:none; font-weight:bolder; color:rgb(44, 44, 44); font-size:17px">
                            {{$book->title}}
                        </a>
                        <p class="card-title">{{$book->author}}</p>
                        <a href="/book/{{$book->id}}" class="btn btn-dark" role="button">Details</a>
                    </div>
                    </div>
                @endforeach    
            </div>

        </div>
    </div>
</div>
@endsection