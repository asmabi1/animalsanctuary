@extends('layouts.app')

@section('content')
    <h2>Add Adoption Entry</h2>
    {!! Form::open(['action' => 'AdoptionsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
            {{form::label('animal_id', 'Animal_ID')}}
            {{form::text('Animal_id', '', ['class' => 'form-control', 'placeholder' => 'Animal_id'])}}
        </div>
    
    {{form::submit('Submit', ['class' =>'btn btn-primary'])}}

    {!! Form::close() !!}﻿

@endsection