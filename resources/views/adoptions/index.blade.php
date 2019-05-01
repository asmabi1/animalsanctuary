@extends('layouts.app')

@section('content')
    <h1>Adopt With Us!</h1>
    <br>
    @if(!Auth::guest())
        @if(Auth::user()->role == 1)
    <div><a href="/adoptions/create" class="btn btn-dark">Add New Adoption Entry</a></div>
        @endif
    @endif
<br>
        @if(count($adoptions) > 1)
        @foreach($adoptions as $adoption)
        <div class="card card-body bg-light">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/adoptions">{{$adoption->animal_id}}</a></h3>
                    </div>
                </div>
            </div>
        @endforeach 
        {{$animals->links()}}
        @else
            <p>No Adoption Requests Found</p>
        @endif


@endsection