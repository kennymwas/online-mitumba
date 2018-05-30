@extends('layout.main')

 @section('title','Clothes')

 @section('content')
     
     <div class="subheader text-center">
             <h2>
            Featured Clothes

        </h2>
        <img src="dist/img/under-heading.png" alt=""  >
        </div>
 <!-- products listing -->
         <!-- Latest SHirts -->
        <div class="row">
            @forelse($clothes->chunk(4) as $chunk)     <!--ony to show 4 products-->
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
           
    @endsection