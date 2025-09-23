@extends('layout')

@section('title','Home')
@section('page_title','Home')
@section('content')

    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="{{url('user/img/slider-1.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="{{url('user/img/slider-2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="{{url('user/img/slider-3.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="{{url('user/img/icons/f-delivery.png')}}" alt="">
                            <h4>Free shipping</h4>
                            <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal
                                esuada aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="{{url('user/img/icons/coin.png')}}" alt="">
                            <h4>100% Money back </h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="{{url('user/img/icons/chat.png')}}" alt="">
                            <h4>Online support 24/7</h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Product List</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="product-list">
                @foreach($products as $product)
                    <div class="col-lg-3 col-sm-6 mix all dresses bags">
                        <div class="single-product-item">
                            <figure>
                                <a href="{{route('detail',$product->id)}}"><img src="{{asset('uploads/product/'. $product->image)}}" alt="Product Image"></a>
                            </figure>
                            <div class="product-text">
                                <h6>{{$product->name}}</h6>
                                <p>{{$product->price.' VND'}}</p>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
    <!-- Latest Product End -->

    <!-- Logo Section Begin -->
    <div class="logo-section spad">
        <div class="logo-items owl-carousel">
            <div class="logo-item">
                <img src="{{url('user/img/logos/logo-1.png')}}" alt="">
            </div>
            <div class="logo-item">
                <img src="{{url('user/img/logos/logo-2.png')}}" alt="">
            </div>
            <div class="logo-item">
                <img src="{{url('user/img/logos/logo-3.png')}}" alt="">
            </div>
            <div class="logo-item">
                <img src="{{url('user/img/logos/logo-4.png')}}" alt="">
            </div>
            <div class="logo-item">
                <img src="{{url('user/img/logos/logo-5.png')}}" alt="">
            </div>
        </div>
    </div>
    <!-- Logo Section End -->

@endsection
