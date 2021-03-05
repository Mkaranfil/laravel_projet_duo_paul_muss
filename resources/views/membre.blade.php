


<form action="/membres" method='POST' enctype="multipart/form-data">
    @csrf
 
      <label for="exampleInputEmail1">Image</label>
    
        <div class="form-group">
          <label for="src">Upload image</label>
          <input type="file" class="form-control-file" id="src "name='src'>
        </div>
      
 

    <div class="form-group">
      <label for="nom">Nom:</label>
      <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" name="nom">

    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="text" class="form-control" id="age" aria-describedby="emailHelp" name="age">

    </div>
  


    <div class="form-group form-check">
        
        @foreach ($genre as $item)

        
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="genre" value="{{$item->id}}" name="genre">
            <label class="form-check-label" for="genre">{{$item->genre}}</label>
        </div>
          
        @endforeach
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>