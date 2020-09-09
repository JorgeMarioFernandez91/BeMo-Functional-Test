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

                    <label for="text">Text:</label>
                    <textarea type="text" class="form-control" name="text" >{{ $content->text }}</textarea>
                </div>
                <!-- <div class="form-group">    
              <label for="text">Text:</label>
              <input type="text" class="form-control" name="text"/>
          </div> -->

          <div class="form-check">
            <!-- this hidden input will help deliver a 0 and not null to the database preventing an error from popping up! -->
            <input type="hidden" name="bold" id="bold" value="0">
            <input class="form-check-input" type="checkbox" name="bold" id="bold" value=1 {{ $content->bold ? 'checked' : '' }}>
            <label class="form-check-label" for="bold">
              Bold
            </label>
          </div>

          <div class="form-check">
            <input type="hidden" name="italics" id="italics" value="0">
            <input class="form-check-input" type="checkbox" name="italics" id="italics" value=1 {{ $content->italics ? 'checked' : '' }}>
            <label class="form-check-label" for="italics">
              Italics
            </label>
          </div>

          <div class="form-check">
            <input type="hidden" name="strikethrough" id="strikethrough" value="0">
            <input class="form-check-input" type="checkbox" name="strikethrough" id="strikethrough" value=1 {{ $content->strikethrough ? 'checked' : '' }}>
            <label class="form-check-label" for="strikethrough">
              Strikethrough
            </label>
          </div>

          <div class="form-check">
          <input type="hidden" name="createlinks" id="createlinks" value="0">
            <input class="form-check-input" type="checkbox" name="createlinks" id="createlinks" value=1 {{ $content->createlinks ? 'checked' : '' }}>
            <label class="form-check-label" for="createlinks">
              Createlinks
            </label>
          </div>

          <div class="form-check">
          <input type="hidden" name="centertext" id="centertext" value="0">
            <input class="form-check-input" type="checkbox" name="centertext" id="centertext" value=1 {{ $content->centertext ? 'checked' : '' }}>
            <label class="form-check-label" for="centertext">
              Centertext
            </label>
          </div>

          <div class="form-check" id="form-h1">
            <input type="hidden" name="h1" id="h1" value="0">
            <input class="form-check-input" type="checkbox" name="h1" id="h1" value=1 onclick="hideH2H3()" {{ $content->h1 ? 'checked' : '' }}>
            <label class="form-check-label" for="h1">
              H1
            </label>
          </div>

          <div class="form-check" id="form-h2">
            <input type="hidden" name="h2" id="h2" value="0">
            <input class="form-check-input" type="checkbox" name="h2" id="h2" value=1 onclick="hideH1H3()" {{ $content->h2 ? 'checked' : '' }}>
            <label class="form-check-label" for="h2">
              H2
            </label>
          </div>

          <div class="form-check" id="form-h3">
            <input type="hidden" name="h3" id="h3" value="0">
            <input class="form-check-input" type="checkbox" name="h3" id="h3" value=1 onclick="hideH1H2()" {{ $content->h3 ? 'checked' : '' }}>
            <label class="form-check-label" for="h3">
              H3
            </label>
          </div>
                    
            <button type="submit" class="btn btn-primary" style="margin-top: 10px;" onclick="checkRadios()">Add Content</button>

                <!-- <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea  class="form-control" class="span6" rows="3" name="body" value={{ $content->body }} ></textarea>
                </div> -->
                <!-- <div class="row justify-content-center" style="min-width: 100%">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div> -->
            </form>
            
            
        </div>
        
    </div>
    <script> 
  function checkRadios() {  
    // checks each input tag and goes through each seeing if they are checked or not
    // if yes set value to 1, else set value to 0. But 0 gets interpreted as null so we have
    // an invisible input in each for to help handle this case
    var elements = document.getElementsByTagName("input");
    for (var i = 2; i < elements.length; i++) {
        if(elements[i].checked) {
          elements[i].value = 1;
        }
        else {
            if (elements[i].name != "text"){ // ensures we are not overriding the previous text
                elements[i].value = 0;
            }
        }
    }

  }
  
  function hideH2H3(){

      var h2 = document.getElementById("form-h2");
      var h3 = document.getElementById("form-h3");
      if (h2.style.display === "none") {
        h2.style.display = "block";
        h3.style.display = "block";
      } else {
        h2.style.display = "none";
        h3.style.display = "none";
      }

  }

  function hideH1H3(){

      var h1 = document.getElementById("form-h1");
      var h3 = document.getElementById("form-h3");
      if (h1.style.display === "none") {
        h1.style.display = "block";
        h3.style.display = "block";
      } else {
        h1.style.display = "none";
        h3.style.display = "none";
      }

}

function hideH1H2(){

      var h1 = document.getElementById("form-h1");
      var h2 = document.getElementById("form-h2");
      if (h1.style.display === "none") {
        h1.style.display = "block";
        h2.style.display = "block";
      } else {
        h1.style.display = "none";
        h2.style.display = "none";
      }

}
</script> 
    
</div>


@endsection