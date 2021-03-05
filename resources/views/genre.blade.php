

<form action='/genres' method='POST'>   
    <div class="form-group">  
        @csrf 
        <label for="genre">Genre: </label> 
        <input type="text" id="genre" name="genre">
        <button type="submit" class="btn btn-primary">OK</button> 
    </div>
 </form>