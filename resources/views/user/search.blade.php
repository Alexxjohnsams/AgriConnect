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
            <div class="row w-100">
                <div class="col-lg-6 my-4">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62811.87040609609!2d11.12858585068385!3d10.282367903415393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10ffd064e67aba0f%3A0x4c72d9e7299289ef!2sGombe!5e0!3m2!1sen!2sng!4v1700095890078!5m2!1sen!2sng"
                    class="w-100" height="400" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-lg-6 my-4">
                    <div class="row">
                        <div class="col-12">
                            <label for="">Search Keyword</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" placeholder="input keyword to search...">
                                {{-- <button class="btn btn-outline-success">Search</button> --}}
                            </div> 
                        </div>               
                        
                    </div>  
                    
                    <div class="row pt-3">
                        <label for="">Filter</label>
                        <div class="col-6">
                            
                            <div class="input-group has-validation">
                                <select name="" id="" class="form-select form-control">
                                    <option value="" selected disabled>Crop type...</option>
                                    <option value="">All</option>
                                    <option value="">Maize</option>
                                    <option value="">Corn</option>
                                    <option value="">Beans</option>
                                </select>
                            </div> 
                        </div>
                        <div class="col-6">
                            <div class="input-group has-validation">
                                <select name="" id="" class="form-select form-control">
                                    <option value="" selected disabled>Market Rate (%)...</option>
                                    <option value="">All</option>
                                    <option value="">10-20</option>
                                    <option value="">21-40</option>
                                    <option value="">41-60</option>
                                    <option value="">61-80</option>
                                    <option value="">81-100</option>
                                </select>
                            </div> 
                        </div>
                    </div>
                </div>
                
        </div>
    </div>

@endsection
