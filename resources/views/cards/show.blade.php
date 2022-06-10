@extends('layouts.app')

@section('content')

<div class="single_product bg-light">

    <div class="container py-5">

        <div class="row">
            <div class="col">
                <img width="600" src="{{$card['thumb']}}" alt="">
            </div>
            <div class="col">
                <div class="product_title d-flex">
                    <img width="50" src="{{$card['thumb']}}" alt="">
                    <h1 class="pb-2">{{$card['title']}}</h1>
                </div>                
            </div>
        </div>
    </div>

</div>


@endsection
