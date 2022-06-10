<div class="jumbotron position-relative">

    <div class="tag bg-primary d-inline-block position-absolute text-center">
        <span class="fw-bold text-white">CURRENT SERIES</span>
    </div>
</div>


<div class="grid bg-dark">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-6 mt-5">
            @foreach ($comics as $comic)
            <div class="col">
                <img src="{{$comic['thumb']}}" alt="...">
                <h5>{{$comic['title']}}</h5>
            </div>
            @endforeach
        </div>
    </div>
</div>