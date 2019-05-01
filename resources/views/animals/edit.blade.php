@extends('layouts.app')

@section('content')
    <h2>Edit</h2>
    {!! Form::open(['action' => ['AnimalsController@update', $animal->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{form::label('name', 'Name')}}
            {{form::text('name', $animal->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{form::label('date_of_birth', 'Date Of Birth')}}
            {{form::text('date_of_birth', $animal->date_of_birth, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd'])}}
        </div>
        <div class="form-group">
            {{form::label('description', 'Description')}}
            {{form::text('description', $animal->description, ['class' => 'form-control', 'placeholder' => 'Animal type'])}}
        </div>   
        <div class="form-group">
            {{form::label('availability', 'Availability')}}
            {{form::text('availability', $animal->availability, ['class' => 'form-control', 'placeholder' => 'Yes / No'])}}
        </div>
        <div class="form-group">
            {{form::file('image')}}
        </div> 
    {{form::hidden('_method', 'PUT')}}
    {{form::submit('Submit', ['class' =>'btn btn-primary'])}}

    {!! Form::close() !!}﻿
@endsection