<div class="jumbotron position-relative">

    <div class="tag bg-primary d-inline-block position-absolute text-center">
        <span class="fw-bold text-white align-middle">CURRENT SERIES</span>
    </div>
</div>


<div class="grid bg-dark">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-6 pt-5">
            @foreach ($comics as $comic)
            <div class="col">
                <img src="{{$comic['thumb']}}" alt="...">
                <h6 class="text-white">{{$comic['title']}}</h6>
            </div>
            @endforeach
        </div>
        <div class="bg-primary d-inline-block text-center">
            <span class="fw-bold text-white">LOAD MORE</span>
        </div>
    </div>
</div>