@extends('layouts.app')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>   
@section('content')
<div class="content">
    <div class="title m-b-md text-bold">
        Aston Animal Sanctuary
    </div>

    <div class="links">
        <a href="/about" class="btn btn-info">Learn more</a>
        <a href="/animals" class="btn btn-info">Adopt Today!</a>
    </div>
</div>
<br>
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">A pet is not just a pet. It is part of the family.</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Animals that are up for adoption come with a personality thats unique, a past that has made them who they are.</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Adopt an Animal today and welcome someone new to your life.</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div> 
      </body>
@endsection