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

<div class="container-fluid" style="padding: 0; min-width: 100%;">

    <div class="row" style="margin-left:0; margin-right: 0">
    <div class="container" style="position:relative; min-width: 100%; padding: 0px;">
            <img src="https://cdainterview.com/resources/cda-interview-guide.jpg" alt="" class="img-fluid img-size"> 
                
            <div class="container" style="position:absolute; top: 50%; left: 0; right: 0;">

                <p class="img-text">CDA Interview Guide</p>
                <hr style=" top: 55%; left: 0; right: 0;  width: 60%; border: 1px solid white;">
            
            </div>
        </div>

    </div>
    <div class="row" style="margin-left:0; margin-right: 0">
    
        <div class="container" style="position:relative;">

    </div>     
</div>

<br><br><br>

<div class="container">
    @foreach($contents as $content)
    <span class="row" style="margin-left:0; margin-right:0;">
        <span class="col-8" style="padding-right: 100px">
        <span  style="  {{ $content->bold == 1 ?            'font-weight: bold' : '' }}; 
                        {{ $content->italics == 1 ?         'font-style: italic' : '' }};
                        {{ $content->strikethrough == 1 ?   'text-decoration: line-through' : '' }}; 
                        {{ $content->createlinks == 1 ?     '' : '' }};
                        {{ $content->centertext == 1 ?      'text-align:center' : '' }};">
                        
                        
                        <h1>{{ $content->h1 == 1 ?          $content->text : '' }}</h1>
                        <h2>{{ $content->h2 == 1 ?              $content->text : '' }}</h2>
                        <h3>{{ $content->h3 == 1 ?              $content->text : '' }}</h3>
                        
                        </span ><br><br>
        </span>
        <span class="col">
            <div class="container">
                <div class="row">
                    <a href="{{ route('contents.edit',$content->id)}}" class="btn btn-primary">Edit</a>
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
    <div>
        <a style="margin: 19px;" href="{{ route('contents.create')}}" class="btn btn-primary">New Content</a>
    </div> 
</div>

 

@endsection