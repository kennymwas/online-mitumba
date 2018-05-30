@extends('layout.main')

 @section('content')
<section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong class="bg-success" style="opacity: 0.7;">
                    Hey! Welcome to OnlineMitumba Store
                </strong>
            </h2>
            <br>
            <a href="{{ url('/clothes') }}"><button class="button large">Check out our Clothes</button></a>
        </section>
        <div class="underline">
            
        </div>
        <br/>
        <div class="subheader text-center">
             <h2>
            Our Latest Clothes

        </h2>
        <img src="dist/img/under-heading.png" alt=""  >
        </div>

       
        <!-- Latest SHirts -->
        <div class="row">
            @forelse($clothes->chunk(8) as $chunk)     <!--ony to show 4 products-->
              @foreach($chunk as $cloth)
                    <div class="col-md-3">
                        <div class="item-wrapper">
                            <div class="img-wrapper">
                                <a href="{{route('cart.addItem',$cloth->id)}}" class="button expanded add-to-cart">
                                    Add to Cart
                                </a>
                                <a href="{{ Route('singlecloth')}}">
                                    <img src="{{url('images',$cloth->image)}}"/>
                                </a>
                            </div>
                            <a href="#">
                                <h3>
                                    {{$cloth->name}}
                                </h3>
                            </a>
                            <h5>
                                ksh{{$cloth->price}}
                            </h5>
                            <p>
                               {{$cloth->description}}
                            </p>
                        </div>
                    </div>
                @endforeach
              @empty
              <h3>No products to display</h3>

            @endforelse
        </div>
        <!-- Footer -->
        <br>
        <!--  ABOUT US start -->
        <!-- ================ -->
        <div class="section ">
            <div class="container">
                    <div class="col-md-12 col-xs-6 col1 center-block">
                            <h1 id="about"  class="text-center title"><strong>Who We Are</strong></h1>
                
                            <p class="lead text-center">We are your solution to second hand clothes.Just relax and order any cloth featured on our site. </p>
                            <p class="lead text-center"><a href="#services">Order Now</a> for your cloth from us today, and experience convinience like never before.</p>
                                <br>
                            <div class="text-center">       
                                <p class="btn btn-primary">VIEW MORE CLOTHES</p>
                            </div>
                    </div>                      
            </div>
        </div>

 @endsection
