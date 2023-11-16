@extends('layouts.app')

@section('content')

    <div class="pagetitle">
        <h1>{{$pageTitle}}</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">{{$pageTitle}}</a></li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="mb-3">
        <a href="{{route('createpost')}}" class="btn btn-primary mt-2 w-100"> <i class="bi bi-pencil-square"></i> New Feed </a>
    </div>
    

    <div class="card">
        <div class="card-body">
            <div class="row justify-text-between">
                <div class="col-10">
                    <h5 class="card-title text-sm">
                        <a href="{{route('userprofile')}}">
                            <img src="{{ asset('image/profile-img.jpg' )}}" alt="Profile" class="rounded-circle circle-sm"> Samson John | <span class="">4weeks ago</span>
                        </a>
                    </h5>
                </div>
                <div class="col-2 text-end">
                    <button class="btn "><i class="bi bi-pen"></i> </button>
                </div>
            </div>
            
            
            <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit cupiditate accusamus 
            repellendus odio? Voluptatem, eaque dolores! Laudantium id quis delectus asperiores 
            recusandae praesentium adipisci, minima quidem minus cupiditate possimus quod!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit cupiditate accusamus 
            repellendus odio? Voluptatem, eaque dolores! Laudantium id quis delectus asperiores 
            recusandae praesentium adipisci, minima quidem minus cupiditate possimus quod!
            </p>

            <div class="row">
                <div class="col-sm-4 mb-2">
                    <img src="{{ asset('image/product-1.jpg' )}}" class="img-fluid w-100" alt="...">
                </div>
                <div class="col-sm-4 mb-2">
                    <img src="{{ asset('image/product-2.jpg' )}}" class="img-fluid w-100" alt="...">
                </div>
                <div class="col-sm-4 mb-2">
                    <img src="{{ asset('image/product-3.jpg' )}}" class="img-fluid w-100" alt="...">
                </div>
            </div>
            
        </div>
        <div class="card-footer bg-white d-flex">           
            <a class="btn"><i class="bi bi-chat-right"></i> Respond</a>  
            <div class="btn text-success"> | 3 Response</div>          
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-sm"><img src="{{ asset('image/profile-img.jpg' )}}" alt="Profile" class="rounded-circle circle-sm"> Samson John | <span class="">4weeks ago</span></h5>
            <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit cupiditate accusamus repellendus odio? Voluptatem, eaque dolores! Laudantium id quis delectus asperiores 
            recusandae praesentium adipisci, minima quidem minus cupiditate possimus quod!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit cupiditate accusamus 
            repellendus odio? Voluptatem, eaque dolores! Laudantium id quis delectus asperiores 
            recusandae praesentium adipisci, minima quidem minus cupiditate possimus quod!
            </p> 
            <div class="row">
                <div class="col-12">
                    <video controls class="w-100"> 
                    <source src ="{{ asset('video/sample.mp4' )}}" type="video/mp4">
                </video>
                </div>
            </div>           
        </div>
        <div class="card-footer bg-white d-flex">           
            <div class="btn"><i class="bi bi-chat-right"></i> Respond</div>  
            <div class="btn text-success"> | 3 Response</div>          
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-sm"><img src="{{ asset('image/profile-img.jpg' )}}" alt="Profile" class="rounded-circle circle-sm"> Samson John | <span class="">4weeks ago</span></h5>
            <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit cupiditate accusamus 
            repellendus odio? Voluptatem, eaque dolores! Laudantium id quis delectus asperiores 
            recusandae praesentium adipisci, minima quidem minus cupiditate possimus quod!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit cupiditate accusamus 
            repellendus odio? Voluptatem, eaque dolores! Laudantium id quis delectus asperiores 
            recusandae praesentium adipisci, minima quidem minus cupiditate possimus quod!
            </p>
            
        </div>
        <div class="card-footer bg-white d-flex">           
            <div class="btn"><i class="bi bi-chat-right"></i> Respond</div>  
            <div class="btn text-success"> | 3 Response</div>          
        </div>
    </div>

@endsection
