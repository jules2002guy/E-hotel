@extends('layout')
@section('content')
  
   <!-- @foreach($hotels as $hotel)
            <div class="showcase">
                <div class="showcase-banner">
                    <img src="{{$hotel->image}}"
                     alt="Hôtel de luxe" width="300" height="300" class="hotel-img default">
                </div>
                <div class="showcase-content">
                    <a href="{{route('hotelpage' , $hotel->id)}}" class="showcase-category">{{$hotel->nom}}</a>
                    <a href="{{route('hotelpage' , $hotel->id)}}">
                        <h3 class="showcase-title">{{$hotel->description1}}</h3>
                        
                    </a>
                    <button class="add-cart-btn btn-action"><a href="{{route('hotelpage' , $hotel->id)}}">Voir Plus</a> </button>
                    
    
                </div>
            </div>
    @endforeach -->
@endsection

@section('content1')
        
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Hôtel les plus visitées.</h3>
                </div>
                <div class="row">
                @foreach($hotels as $hotel)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- hotel item -->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="{{route('hotelpage', $hotel->id)}}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><ion-icon name="arrow-forward-outline"></ion-icon></div>
                                </div>
                                <img class="img-fluid" src="{{$hotel->image}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$hotel->description1}}</div>
                                <div class="portfolio-caption-subheading text-muted">{{$hotel->description2}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
       
@endsection