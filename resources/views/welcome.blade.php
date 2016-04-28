<!-- extending code stored in app/resources/views/layouts/app.blade.php file-->
@extends('layouts.app')
@section('title')
    Laravel App
@stop
<!-- content section -->
@section('content') 
    <!-- Slider-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- /Indicators -->
          <!-- slide -->
          <div class="carousel-inner" role="listbox">
              <div class="item active">
                 <img src="image/hotel1.jpg" alt="First slide">
              </div>
              <div class="item">
                 <img src="image/hotel2.jpg"alt="Second slide">
              </div>
              <div class="item">
                 <img src="image/hotel3.jpg" alt="Third slide">
              </div>
          </div>
          <!-- /slide -->
          <!-- Previous slide and nex slide icon -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!-- /Previous slide and nex slide icon -->
    </div><!-- /.slider -->
    <!-- hotel list container-->
    <div class="container marketing">
            <!-- three hotel list in each row containin image,name,price and view details button-->
            <div class="row">
                @if(empty($hotels))
                    <h3>No Result found</h3>
                @else
                    @foreach ($hotels as $hotel)
                      <div class="col-lg-4"><!-- col-lg-4 -->
                            @if($hotel->img == '')
                                <img class="img-circle" 
                                src="image/noimage.jpg"
                                alt="No image" width="140" height="140">
                            @else
                               <img class="img-circle" 
                                src="image/hotel/{{$hotel->img}}"
                                alt="Generic placeholder image" width="140" height="140">
                            @endif
                            <h2>{{ $hotel->hotelname }}</h2><!-- /hotel name -->
                            <p>Price : {{ $hotel->price }}</p><!-- /hotel price -->
                            <p>{!! link_to_route('detail.show', 'View details >>', [$hotel->id] , ['class'=>'btn btn-default']) !!}</p>
                      </div><!-- /.col-lg-4 -->
                    @endforeach
                @endif
            </div><!-- / hotel list row -->
    </div>
    <!-- /hotel list container-->    
@endsection
<!-- /content section -->