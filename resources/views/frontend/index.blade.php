@extends('layouts.front')
@section('title')
    Welcome Eshop
@endsection
@section('content')
@include('layouts.inc.slider')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2 style="color: #d63384">Trending Product</h2>
                <div class="owl-carousel trending-carousel owl-theme">
        @foreach ($feature_products as $prod)
        <div class="item">
            <div class="card">
                <img class="trending-image" src="{{asset('assets/upload/product/'.$prod->image)}}" alt="Product Image">
                <div class="card-body">
                    <h5>{{$prod->name}}</h5>
                    <span class="float-start">{{$prod->selling_price}}</span>
                    <span class="float-end"> <s>{{$prod->original_price}} </s></span>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
        </div>
    </div>
@endsection

 @section('scripts')
 <script>
 $('.trending-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
 </script>
 @endsection




