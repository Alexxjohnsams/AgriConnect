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

    <div class="row">
        <div class="col-sm-8">
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4 ">
                    <img src="{{asset('image/product-1.jpg')}}" class="img-fluid rounded-start w-auto p-2" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Maize </h5> 
                      <h2></h2>
                        <div class="row form-group">
                            <div class="col-8">
                                <h3 class="m-0"><strong>NGN30,000</strong></h3>
                                <p class="card-text">Bag of Maize produce</p>
                                <p class="card-text"><small class="text-body-secondary">6 Left</small></p>
                            </div>
                            <div class="col-4">
                                <div class="input-group has-validation">
                                    <input type="number" class="form-control" value="1">                                
                                </div>                                 
                            </div>     
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>

        <div class="card col-sm-4">
            <div class="row g-0">
              <div class="col">
                <div class="card-body">
                  <h5 class="card-title">Summary </h5> 
                  <hr>
                    <div class="row form-group">
                        <div class="">
                            <p class="card-text m-0">Total Items</p>
                            <h5><strong>2</strong></h5>
                            <p class="card-text m-0">Tax</p>
                            <h5><strong>NGN500 (5%)</strong></h5>
                            <hr>
                            <p class="card-text m-0">Total</p>
                            <h5><strong>NGN1,000</strong></h5>
                            <a href="{{route('payment')}}" class="btn btn-sm btn-success">Proceed <i class="bi bi-arrow-right"></i></a>
                            
                        </div>    
                    </div>
                </div>
              </div>
            </div>
          </div>
            
        
    </div>
    

@endsection
