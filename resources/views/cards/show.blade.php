@extends('layouts.app')

@section('content')

<div class="single_product bg-light">

    <div class="container py-5">

        <div class="row">
            <div class="col text-center">
                <img width="320" height="430" src="{{$card['thumb']}}" alt="">
            </div>
            <div class="col">
                <div class="product_title d-flex">
                    <img width="80" height="100" src="{{$card['thumb']}}" alt="">
                    <div class="text_card ms-2">
                        <h1>{{$card['title']}}</h1>
                        <small>({{$card['series']}})</small>
                    </div>

                </div>
                <div class="content">
                    {!! $card['description'] !!}
                </div>
                <hr>
                <div class="metadata">
                    <span class="text-uppercase">
                        <strong>Tipo: </strong>
                        {{$card['type']}}
                    </span>
                    <span>
                        <strong>Prezzo: </strong>
                        {{$card['price']}}
                    </span>
                    <span>
                        <strong>Sale Date: </strong>
                        {{$card['sale_date']}}
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection