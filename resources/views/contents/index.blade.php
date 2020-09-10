@extends('base')
@section('main')
@include('navbar')

<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<!-- original image for BeMo website! -->
<!-- <img src="https://cdainterview.com/resources/cda-interview-guide.jpg" alt="" class="img-fluid img-size">  -->


    
    <div class="container-fluid" style="padding: 0; min-width: 100%;">
        @foreach($images as $image)
        <div class="row" style="margin-left:0; margin-right: 0">
            <div class="container" style="position:relative; min-width: 100%; padding: 0px;">
            
                <!-- here we are replacing the image -->
                <img src="{{$image->image_name}}" alt="" class="img-fluid img-size"> 
                    
                <div class="container" style="position:absolute; top: 50%; left: 0; right: 0;">

                    <p class="img-text">CDA Interview Guide</p>
                    <hr style=" top: 55%; left: 0; right: 0;  width: 60%; border: 1px solid white;">
                
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-left:0; margin-right:0; margin-top: 15px;">
                <span class="col-9" style="padding-right: 100px"></span>
                <span class="col">
                    <a href="{{ route('images.edit',$image->id)}}" class="btn btn-primary" >Edit Image</a>
                   
                    <a href="{{ route('images.create')}}" class="btn btn-primary" >Create Image</a>
                </span>

                
                <form action="{{ route('images.destroy', $image->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete Image</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <a style="margin: 19px;" href="{{ route('images.create')}}" class="btn btn-primary">New Content</a>


<br><br><br>

<div class="container" style="padding-right: 0; padding-left: 0; max-width: 1400px;">
    
    <span class="row" style="margin-left:0; margin-right:0;">
        <span class="col-9">

            @foreach($contents as $content)
            <span class="row" style="margin-left:0; margin-right:0;">
                <span class="col-9" style="padding-right: 100px">
                    <span  style="  {{ $content->bold == 1 ?            'font-weight: bold' : '' }}; 
                                    {{ $content->italics == 1 ?         'font-style: italic' : '' }};
                                    {{ $content->strikethrough == 1 ?   'text-decoration: line-through' : '' }}; 
                                    {{ $content->createlinks == 1 ?     '' : '' }};
                                    {{ $content->centertext == 1 ?      'margin:auto; display:table;' : '' }};">
                                    
                                    <!-- determines which h style to use -->
                                    <h1 style="white-space: pre-wrap;">{{ $content->h1 == 1 ?              $content->text : '' }}</h1>
                                    <h2 style="white-space: pre-wrap;">{{ $content->h2 == 1 ?              $content->text : '' }}</h2>
                                    <h3 style="white-space: pre-wrap;">{{ $content->h3 == 1 ?              $content->text : '' }}</h3>

                                    <!-- if there are no h's chosen then simply use a regular span for the text -->
                                    <span style="white-space: pre-wrap;">{{ $content->h1 == 0 ? ($content->h2 == 0 ? ($content->h3 == 0 ? $content->text : '' ) : '' ) : '' }}</span> </span ><br><br>
                </span>
                <span class="col-3">
                    <div class="container">
                        <div class="row">
                            <a href="{{ route('contents.edit',$content->id)}}" class="btn btn-primary" style="margin-right: 5px;">Edit</a>
                            <form action="{{ route('contents.destroy', $content->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </span>
            </span>
            @endforeach
        </span>
        

        <span class="col-2" style="margin-top:0">
            <input type="text" id="meta-input">
            <button class="btn btn-primary" style="margin-top: 15px;" onclick="changeMetaTag()">Change Meta Tag</button>
        </span>

    </span>
    
    <div>
        <a style="margin: 19px;" href="{{ route('contents.create')}}" class="btn btn-primary">New Content</a>
    </div> 
</div>



<div class="container-fluid" style="background-color: #000066; min-width: 100%;">
    <div class="row" style="margin-left:0; margin-right: 0">

        <div class="column-8" style="color: white; padding: 15px; padding-left: 20px; margin-left: 40px; margin-right: 200px">

            <span >©2013-2016 BeMo Academic Consulting Inc. All rights reserved. <span style="color: #ff6600;">Disclaimer & Privacy Policy Contact Us</span></span>

        </div>
        <div class="column-4" style="padding-left: 50px; padding-top: 10px;">

            <img src="photos/social_media_images.PNG" alt="">

        </div>

    </div>
    
</div>

<script>
    // changes the meta tag to "no-index"
    function changeMetaTag(){
        var newTagName = document.getElementById("meta-input");
        document.querySelector('meta[name="robots"]').setAttribute("content", newTagName.value);
    }
</script>

@endsection