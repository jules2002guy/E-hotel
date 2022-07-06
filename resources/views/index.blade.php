@extends('layouts.layout')
@section('content')
  
   
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
                                <img class="img-fluid" src="{{$hotel->image}}" alt="{{$hotel->description1}}" />
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