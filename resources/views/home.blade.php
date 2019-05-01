@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">USER Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>USER</strong>!
                </div>
                <a href="/animals" class="btn btn-dark">View Animals</a>
                <br>
                @if(Auth::user()->role == 1)
                <a href="/adoptions" class="btn btn-dark">View Adoption Request</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
