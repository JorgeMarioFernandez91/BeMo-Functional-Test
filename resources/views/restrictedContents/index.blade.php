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

@foreach($images as $image)
    
    <div class="container-fluid" style="padding: 0; min-width: 100%;">

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
    </div>
@endforeach

<br><br><br>

<div class="container">
    @foreach($restrictedContents as $restrictedContent)
    <span class="row" style="margin-left:0; margin-right:0;">
        <span class="col-12" style="padding-right: 100px">
            <span  style="  {{ $restrictedContent->bold == 1 ?            'font-weight: bold' : '' }}; 
                            {{ $restrictedContent->italics == 1 ?         'font-style: italic' : '' }};
                            {{ $restrictedContent->strikethrough == 1 ?   'text-decoration: line-through' : '' }}; 
                            {{ $restrictedContent->createlinks == 1 ?     '' : '' }};
                            {{ $restrictedContent->centertext == 1 ?      'margin:auto; display:table;' : '' }};">
                            
                            <!-- determines which h style to use -->
                            <h1>{{ $restrictedContent->h1 == 1 ?              $restrictedContent->text : '' }}</h1>
                            <h2>{{ $restrictedContent->h2 == 1 ?              $restrictedContent->text : '' }}</h2>
                            <h3>{{ $restrictedContent->h3 == 1 ?              $restrictedContent->text : '' }}</h3>

                            <!-- if there are no h's chosen then simply use a regular span for the text -->
                            <span>{{ $restrictedContent->h1 == 0 ? ($restrictedContent->h2 == 0 ? ($restrictedContent->h3 == 0 ? $restrictedContent->text : '' ) : '' ) : '' }}</span> </span ><br><br>
        </span>
    </span>
    @endforeach
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

@endsection