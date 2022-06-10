<div class="jumbotron position-relative">

    <div class="tag bg-primary d-inline-block position-absolute text-center">
        <a class="fw-bold text-white align-middle text-decoration-none">CURRENT SERIES</a>
    </div>
</div>


<div class="grid bg-dark pb-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-6 pt-5">
            @foreach ($comics as $comic)
            <div class="col">
                <img height="250" width="200" src="{{$comic['thumb']}}" alt="...">
                <h6 class="text-white">{{$comic['series']}}</h6>
            </div>
            @endforeach
        </div>
        <div class="load text-center">
            <a class="fw-bold text-white bg-primary text-decoration-none">LOAD MORE</a>
        </div>
    </div>
</div>


<div class="banner bg-primary text-white text-center">
    <div class="container">
        <div class="row p-4">
            <div class="col p-2">
                <img height="60" src="../img/buy-comics-digital-comics.png" alt="...">
                <span class="text-uppercase">digital comics</span>
            </div>
            <div class="col p-2">
                <img height="60" src="../img/buy-comics-merchandise.png" alt="...">
                <span class="text-uppercase">digital comics</span>
            </div>
            <div class="col p-2">
                <img height="60" src="../img/buy-comics-subscriptions.png" alt="...">
                <span class="text-uppercase">digital comics</span>
            </div>
            <div class="col p-2">
                <img height="60" src="../img/buy-comics-shop-locator.png" alt="...">
                <span class="text-uppercase">digital comics</span>
            </div>
            <div class="col p-2">
                <img height="60" src="../img/buy-comics-shop-locator.png" alt="...">
                <span class="text-uppercase">digital comics</span>
            </div>
        </div>
    </div>
</div>