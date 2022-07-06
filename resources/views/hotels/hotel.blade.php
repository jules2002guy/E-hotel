@extends('layout')
@section('content')
<div class="hotel-featured">
        <h2 class="title">{{$hotel->nom}}</h2>

        <div class="showcase-wrapper has-scrollbar">

            <div class="showcase-container">
                <div class="showcase">
                    <div class="showcase-banner">
                        <img src="{{$hotel->image}}" 
                        alt="{{$hotel->description1}}" class="showcase-img">
                    </div>
                    <div class="showcase-content">

                        <a href="#">
                            <h3 class="showcase-title">{{$hotel->description1}}</h3>
                        </a>

                        <p class="showcase-desc">
                        {{$hotel->description2}}
                        </p>

                        <button class="add-cart-btn">Reservation</button>

                    </div>
                </div>
            </div>

           <!-- <div class="showcase-container">
                <div class="showcase">
                    <div class="showcase-banner">
                        <img src="./assets/images/3d-rendering-loft-luxury-living-room-with-shelf-near-dining-table.jpg" 
                        alt="Hôtel kara vous souhaite la bienvenue" class="showcase-img">
                    </div>
                    <div class="showcase-content">

                        <a href="#">
                            <h3 class="showcase-title">Hôtel Kamaka vous souhaite la bienvenue</h3>
                        </a>

                        <p class="showcase-desc">
                            Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor dolor
                             sit amet consectetur Lorem ipsum dolor
                        </p>

                        <button class="add-cart-btn">Reservation</button>

                    </div>
                </div>
            </div>

        </div>
    </div> -->

@endsection
@section('content1')
    @foreach($images as $image)
    <div class="showcase">
                <div class="showcase-banner">
                    <img src="{{$image->nomImage}}"
                     alt="Hôtel de luxe" width="300" height="300" class="hotel-img default">
                </div>
    @endforeach


@endsection