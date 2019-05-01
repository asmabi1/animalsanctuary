@extends('layouts.app')

@section('content')
    <h2>Add New Animal Entry</h2>
    {!! Form::open(['action' => 'AnimalsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{form::label('name', 'Name')}}
            {{form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{form::label('date_of_birth', 'Date Of Birth')}}
            {{form::text('date_of_birth', '', ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd'])}}
        </div>
        <div class="form-group">
            {{form::label('description', 'Description')}}
            {{form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Animal type'])}}
        </div>
        <div class="form-group">
            {{form::label('availability', 'Availability')}}
            {{form::text('availability', '', ['class' => 'form-control', 'placeholder' => 'Yes / No'])}}
        </div>
        <div class="form-group">
            {{form::file('image')}}
       </div> 
    {{form::submit('Submit', ['class' =>'btn btn-primary'])}}

    {!! Form::close() !!}﻿
@endsection