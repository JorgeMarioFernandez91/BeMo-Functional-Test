@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add Content</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contents.store') }}">
          @csrf
          <div class="form-group">    
              <label for="text">Text:</label>
              <input type="text" class="form-control" name="text"/>
          </div>
          <div class="form-group">    
              <label for="bold">bold:</label>
              <input type="text" class="form-control" name="bold"/>
          </div>
          <div class="form-group">    
              <label for="italics">italics:</label>
              <input type="text" class="form-control" name="italics"/>
          </div>
          <div class="form-group">    
              <label for="strikethrough">strikethrough:</label>
              <input type="text" class="form-control" name="strikethrough"/>
          </div>
          <div class="form-group">    
              <label for="createlinks">createlinks:</label>
              <input type="text" class="form-control" name="createlinks"/>
          </div>
          <div class="form-group">    
              <label for="centertext">centertext:</label>
              <input type="text" class="form-control" name="centertext"/>
          </div>
          <div class="form-group">    
              <label for="h1">h1:</label>
              <input type="text" class="form-control" name="h1"/>
          </div>
          <div class="form-group">    
              <label for="h2">h2:</label>
              <input type="text" class="form-control" name="h2"/>
          </div>
          <div class="form-group">    
              <label for="h3">h3:</label>
              <input type="text" class="form-control" name="h3"/>
          </div>

          <!-- <div class="form-group">
              <label for="body">Body:</label>
              <input type="text" class="form-control" name="body"/>
          </div> -->
                    
          <button type="submit" class="btn btn-primary-outline">Add Content</button>
      </form>
  </div>
</div>
</div>
@endsection