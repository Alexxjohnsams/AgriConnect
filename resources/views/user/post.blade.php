@extends('layouts.app')
 <script defer>
window.addEventListener("DOMContentLoaded", function() {

const realPhotoBtn = document.getElementById("real-photo");
const customPhotoBtn = document.getElementById("custom-photo-upload");
const customPhotoTxt = document.getElementById("custom-photo-text");
const previewPhoto =document.getElementById("preview-photo");
     
    function previewSelectedPhoto(){
        const file = realPhotoBtn.file[0];
        if (file) {
            const reader = new FileReader();
            reader = readAsDataUrl(file);
            reader.onload = function(e){
                previewPhoto.src =e.target.result;
            }
        }
    }
    realPhotoBtn.addEventListener('change',previewSelectedPhoto);
if(customPhotoBtn){
    customPhotoBtn.addEventListener('click', function() {
        realPhotoBtn.click();
    });
}

if(realPhotoBtn){
    realPhotoBtn.addEventListener("change", function() {
    if (realPhotoBtn.value) {
        customPhotoTxt.innerHTML = realPhotoBtn.value.match(
        /[\/\\]([\w\d\s\.\-\(\)]+)$/
        )[1];
    } else {
        customPhotoTxt.innerHTML = "No file chosen, yet.";
    }
    });
}
});

 </script>
<script defer>
    window.addEventListener("DOMContentLoaded", function() {
    
    const realVideoBtn = document.getElementById("real-video");
    const customVideoBtn = document.getElementById("custom-video-upload");
    const customVideoTxt = document.getElementById("custom-video-text");
    
    if(customVideoBtn){
        customVideoBtn.addEventListener('click', function() {
            realVideoBtn.click();
        });
    }
    
    if(reamVideoBtn){
        reamVideoBtn.addEventListener("change", function() {
        if (reamVideoBtn.value) {
            customVideoTxt.innerHTML = reamVideoBtn.value.match(
            /[\/\\]([\w\d\s\.\-\(\)]+)$/
            )[1];
        } else {
            customVideoTxt.innerHTML = "No file chosen, yet.";
        }
        });
    }
    });
    

     </script>
@section('content')
<div class="pagetitle">
    <h1>{{$pageTitle}}</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active">{{$pageTitle}}</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

<div class="card">
    <div class="card-body">

        <form action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 my-3">
                    <div class="input-group has-validation">
                      <input type="checkbox" name="Farming" id="" class="mx-2"> 
                      <label for="">Farming</label>
                      <input type="checkbox" name="Farming" id="" class="mx-2"> 
                      <label for="">Buying</label>
                      <input type="checkbox" name="Farming" id="" class="mx-2"> 
                      <label for="">Selling</label>
                    </div>
                  </div>

                <div class="col-12 mb-3">
                    <div class="input-group has-validation">
                      <textarea name="post_text" id="" cols="30" rows="6" class="form-control" placeholder="What do you have in mind?..."></textarea>
                    </div>
                  </div>  
                <div class="d-flex mb-3">
                <div class="">
                    <div class="input-group has-validation">
                        <input type="file" accept="image" id="real-photo" name="photo" class="form-control" hidden="hidden">
                        <button class="btn" id="custom-photo-upload">
                            <i class="bi bi-camera mx-1"></i>Photo
                        </button>
                    </div>
                    </div>

                    {{-- <div class="col-8">
                    <img id="preview-photo" height="200" width="150"> No Photo selected</img>
                    </div> --}}

                    <div class="">
                    <div class="input-group has-validation">
                        <input type="file" accept="video" id="real-video" class="form-control" hidden="hidden">
                        <button class="btn" id="custom-video-upload">
                            <i class="bi bi-camera-video mx-1"></i>Video
                        </button>
                    </div>
                    </div>

                    {{-- <div class="col-8">
                    <image id="custom-Video-text">No video selected</image>
                    </div> --}}
                </div>
                
                </div>

            <div class="row mb-3">
                <div class="col">
                    <a href="" class="btn btn-primary w-100">Publish</a>
                </div>
            </div>
        </form>
        
    </div>
</div>
@endsection
