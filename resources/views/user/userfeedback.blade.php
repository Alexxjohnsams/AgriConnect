@extends('layouts.app')

@section('content')

    <div class="pagetitle">
        <h1>{{$pageTitle}}</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">{{$pageTitle}}</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->    

    <div class="card">
        <div class="card-body">
                    
        </div>
    </div>

@endsection
