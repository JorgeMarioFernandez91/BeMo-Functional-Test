@extends('base') 
@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-3 " style="text-align: center;">Update Content</h1>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br /> 
            @endif
            <form method="post" action="{{ route('contents.update', $content->id) }}">
                @method('PATCH') 
                @csrf
                <div class="form-group">

                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" value={{ $content->title }} />
                </div>

                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea  class="form-control" class="span6" rows="3" name="body" value={{ $content->body }} ></textarea>
                </div>
                <div class="row justify-content-center" style="min-width: 100%">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
            
            
        </div>
        
    </div>
    
</div>


@endsection