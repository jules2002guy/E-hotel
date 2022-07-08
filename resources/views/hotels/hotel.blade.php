@extends('/layouts.layout')
@include('partials.head')
@section('content')
<!-- <div class="hotel-featured">
        <h2 class="title">{{$hotel->nom}}</h2>

        <div class="showcase-wrapper has-scrollbar">

            <div class="showcase-container">
                <div class="showcase">
                    
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
            </div> -->


@endsection
@section('content1')

    <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Hôtel les plus visitées.</h3>
                </div>
                <div class="row">
                @foreach($images as $image)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- hotel item -->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#">
                                
                                <img class="img-fluid" src="{{$image->nomImage}}" alt="" />
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        
    </section>


@endsection