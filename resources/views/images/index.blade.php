@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Images</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Image Name</td>
        </tr>
    </thead>
    <tbody>
        @foreach($images as $image)
        <tr>
            <td>{{$image->id}}</td>
            <td>{{$image->image_name}} </td>
            <td>
                <a href="{{ route('images.edit',$image->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <!-- <td>
                <form action="{{ route('images.destroy', $image->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td> -->
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection