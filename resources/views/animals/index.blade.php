@extends('layouts.app')

@section('content')
    <h1>Animals</h1>
    <hr>
    @if(!Auth::guest())
    @if(Auth::user()->role == 1)
        <div><a href="/animals/create" class="btn btn-dark">Add New Animal Entry</a></div>
    @endif
    @endif
    <hr>
    @if(count($animals) > 0)
        @foreach($animals as $animal)
        <div class="card card-body bg-light">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/animal_images/{{$animal->image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/animals/{{$animal->id}}">{{$animal->name}}</a></h3>
                        <p class="card-text">{{$animal->description}}</p> 
                        <small>Posted on {{$animal->created_at}}</small>
                    </div>
                </div>
            </div>
        @endforeach 
        {{$animals->links()}}
    @else
        <p>No Animals Found</p>
    @endif
    <hr>
@endsection