@extends('layouts.app')

@section('content')
    <a href="/animals" class="btn btn-dark">Go Back</a>
    <hr>
    <h1>{{$animal->name}}</h1>
    <img class="card-img-top" class="img-thumbnail" style="max-width: 25%;" src="/storage/animal_images/{{$animal->image}}">

    <div>
        {{$animal->description}}
    </div>
    <hr>
    <small>Posted on {{$animal->created_at->format('d-m-Y')}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->role == 1)
        <a href="/animals/{{$animal->id}}/edit" class="btn btn-dark">Edit</a>
        {!!Form::open(['action' => ['AnimalsController@destroy', $animal->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif


        <a href="/adoptions" class="btn btn-success">Adopt</a>
            
    @endif
@endsection