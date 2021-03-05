



<div class="row">

    @foreach ($membre as $item)


    <div class="card ml-5" style="width: 18rem;" >
        <img src="{{asset('storage/img/'.$item->src)}}" class="card-img-top" height="350px" >
        <div class="card-body">
        <h5 class="card-title">Nom:{{$item->nom}} </h5>
        <p class="card-text">Genre:{{$item->genre}} </p>
        <p class="card-text">Age:{{$item->age}} </p>
        <a href="#" class="btn btn-danger">Delet</a>
        </div>
    </div>

    @if ($loop->iteration % 3 == 0 ) 
        </div>
        <div class="row">
    @endif
    @endforeach

</div> 