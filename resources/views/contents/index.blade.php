@extends('base')

@section('main')

<div class="col-sm-12">
    <p>admin contents</p>
    <li class="logout">
                    <a class="nav-links" href="{{ route('logout') }}"
                        onclick="   event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Contents</h1>    
        <table class="table table-striped">
            <thead>
                <tr>
                <td>ID</td>
                <td>TITLE</td>
                <td>BODY</td>
                <td colspan = 2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($contents as $content)
                <tr>
                    <td>{{$content->id}}</td>
                    <td>{{$content->title}}</td>
                    <td>{{$content->body}}</td>
                    <td>
                        <a href="{{ route('contents.edit',$content->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('contents.destroy', $content->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div>
    <a style="margin: 19px;" href="{{ route('contents.create')}}" class="btn btn-primary">New contact</a>
</div>  

@endsection