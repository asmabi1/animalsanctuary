@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <div>
    <p>Aston Animal Sanctuary is home to many beautiful animals waiting to be adopted. If you are looking to adopt, this is the place for you.There are many animals that have never experienced love and care. Can you make a difference and give these animals what they deserve? We offer: </p>
    </div>
    <hr>
    @if(count($about) > 0)
    <ul class="list-group list-group-flush">
        @foreach($about as $aboutus)
            <li class="list-group-item">{{$aboutus}}</li>
        @endforeach
    </ul>
    <div> 
      <!--   <img src="pug.jpg" class="img-thumbnail float-right" alt="pug"> -->
     </div
    @endif
@endsection