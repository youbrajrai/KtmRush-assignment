@extends('frontend.layout')
@section('content')
    <!-- navbar -->
    <div id="topbar" class="pt8 pb8">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="logo">
                        @forelse($logos as $val)
                            @if($val->is_current === 1)
                                <img src="{{asset('assets/img/logo/'.$val->image)}}" style="object-fit:fill;width:300px;heigth:90px" alt="">
                            @endif
                        @empty
                        <img src="https://via.placeholder.com/300x90" alt="">
                        @endforelse
                    </div>
                </div>
                <div class="col-9">
                    <ul class="topbarinfo">
                        <li>
                            <div class="" id="desktop-cart">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>My Cart</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            @if(Auth::check())
                            <a href="{{route('dashboard')}}">
                                <i class="fa fa-user"></i>
                                <span>Dashboard</span>
                            </a>
                            @else
                                <a href="" data-bs-toggle="modal" data-bs-target="#logIn">
                                    <i class="fa fa-user"></i>
                                    <span>Log In</span>
                                </a>
                            @endif
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar -->
    
    <!-- banner -->
    <div class="banner position-relative">
        <div class="swiper-container swiper1">
            <div class="swiper-wrapper">
                @forelse($banners as $val)

                @if($val->is_current == 1)
                    <div class="swiper-slide">
                        <img src="{{asset('assets/img/banner/'.$val->image)}}" alt="" style="object-fit:fill;width:100%;height:450px" class="img-fluid">
                    </div>
                @endif
                @empty
                <div class="swiper-slide">
                    <img src="{{asset('./images/banners/slider-1.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('./images/banners/slider-2.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('./images/banners/slider-3.jpg')}}" alt="" class="img-fluid">
                </div>
                @endforelse
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- banner -->
    <main>
        <!-- Products -->
        @forelse($categories as $cat_val)        
            <div class="pt40">            
                <div class="container">
                    <h2 class="text-center mb-4"><strong>{{$cat_val->title}}</strong></h2>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                        @if (count($products))
                            @foreach($products as $val)
                                @if($val->category_id == $cat_val->id)
                                    <div class="swiper-slide">
                                        <div class="product-wrapper-main theme-2">
                                            <div class="product-image">
                                                <img src="{{asset('assets/img/products/'.$val->image)}}" style="height: 270px;object-fit: cover;" class="img-fluid" alt="">
                                            </div>
                                            <div class="product-details">
                                                <p class="product-title">
                                                    {{$val->title}}
                                                </p>
                                                <p class="price">
                                                    <del>Nrs. {{$val->original_price}}</del>
                                                    <ins>Nrs. {{$val->selling_price}}</ins>
                                                </p>         
                                                #{{ $val->id}}                                      
                                                <p>
                                                    <a href="#" class="main-button " data-bs-toggle="modal"
                                                        data-bs-target="#modal-quickview{{$val->id}}">View <i class="fa fa-eye"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @else
                        <div class="col-12 text-center my-4">
                            <h3>{{ __('message.no__products_available') }}</h3>
                        </div>                        
                        @endif

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
            @empty
            <div class="col-12 text-center my-4">
                <h3>{{ __('message.no__products_for_category_available') }}</h3>
            </div>             
        @endforelse        
        <!-- Products -->
        <!-- map -->
        <div class="map-wrapper">
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.31397712412!2d85.3261328!3d27.708960349999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1672746796918!5m2!1sen!2snp"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- map -->


    </main>
    <!-- Product Detail Modal -->
    @forelse($products as $prod)
        <div class="modal fade" id="modal-quickview{{$prod->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addToCartLabel">{{$prod->title}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row align-items-start">
                                <div class="col-sm-6 for-m">
                                    <div class="main-product-image">
                                        <img src="{{asset('assets/img/products/'.$prod->image)}}" style="object-fit: fill;width: 400px;height:350px;"class="img-fluid" alt="">
                                    </div>
                                    <div class="swiper-container overflow-hidden swiper2">
                                        @foreach($products as $prod_val)
                                            @if($prod_val->trending == "1")
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide" data-img="./images/products/">
                                                        <img src="{{asset('assets/img/products/'.$prod_val->image)}}" class="img-fluid"  alt="">
                                                    </div>
                                                </div>    
                                            @endif
                                        @endforeach
                                        
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="product-main-title" id="title">
                                        {{$prod->title}}
                                    </h3>
                                    <p class="main-price">
                                        <del>Nrs. {{$prod->original_price}}</del> <ins>Nrs. {{$prod->selling_price}}</ins>
                                    </p>
                                    <p class="main-descriptions">
                                        {{$prod->description}}
                                    </p>
                                    <div class="row">
                                    <input type="hidden" name="product_id" id="prod_id" value="{{ $prod->id }}">
                                        <div class="col-sm-6">
                                            <div class="variant-wrapper">
                                                <p class="variant-title">
                                                    Select Size
                                                </p>
                                                @if (isset($prod->size) && unserialize($prod->size))
                                                @foreach (unserialize($prod->size) as $key => $size)         
                                                
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="size" id="sizeRadio_{{ $key }}" {{ $key == 0 ? 'checked' : '' }} value="{{ $size }}">
                                                        <label class="form-check-label" for="sizeRadio_{{ $key }}">{{ $size }}</label>
                                                    </div>
                                                
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="variant-wrapper">
                                                <p class="variant-title">
                                                    Select Color
                                                </p>
                                                @if (isset($prod->color) && unserialize($prod->color))                                                    
                                                        <!-- select color with radio box well designed in flex radio bg filled with respective color -->
                                                        <div class="flex-wrap">
                                                            @foreach (unserialize($prod->color) as $key => $color)
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="color" id="colorRadio_{{ $key }}" {{ $key == 0 ? 'checked' : '' }} value="{{ $color }}">
                                                                    <label class="form-check-label" for="colorRadio_{{ $key }}">
                                                                        {{ $color }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <!-- <a class="btn btn-primary text-light">Sky Blue</a> &nbsp; <a class="btn btn-danger text-light"> red</a>&nbsp; <a class="btn btn-info text-light"> blue </a> &nbsp; <a class="btn btn-warning text-light"> yellow</a> &nbsp; <a class="btn btn-success text-light"> green</a> -->                                                    
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-product-add">
                                        <div class="increase-decrease">
                                            <button type="button" class="decrease btn-number" data-type="minus" data-field="quantity">-</button>
                                            <input type="number" class="number-change text-base w-24 input-number" name="quantity" value="1" min="1" max="{{$prod->quantity}}">
                                            <button type="button" class="increase btn-number" data-type="plus" data-field="quantity">+</button>
                                        </div>
                                        <button type="button" class="main-button" id="{{$prod->id}}">Add To Cart <i
                                                class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @empty        
    @endforelse
    <!-- Product Detail Modal -->
    <!-- cart -->
    
    <div id="cart">
        <div class="container-fluid">
            <div class="cart-title">
                <h4>My Cart</h4>
                <a href="javascript:void();">
                    <i class="fa fa-times"></i>
                </a>
                <hr>
            </div>
        </div>
        @auth
        <div class="cart-wrapper">
            <div class="cart-item-wrapper">
                @forelse (auth()->user()->carts as $item)
                    <div class="cart-item">
                        <div class="cart-image-wrapper">
                            <a href="javascript:void(0);">
                                <i class="fa fa-times"></i>
                            </a>
                            <img src="{{asset('assets/img/products/'.$item->product->image)}}" alt="">
                        </div>
                        <div class="cart-details">
                            <p class="cart-title">
                                {{$item->product->title}}
                            </p>
                            <p class="cart-price">
                                Nrs. {{ $item->product->getNetPrice }}
                            </p>
                            <div class="cart-extra">
                                <p>Size: <span>{{$item->size}}</span></p>
                                <p>Color: <span class="cart-color" style="background-color:{{$item->color}}"></span></p>
                            </div>
                            <div class="increase-decrease">
                                <p>Qty: <span>{{$item->quantity}}</span></p>
                            </div>
                            <div class="increase-decrease">
                                <p>Sub-Total: <span>Rs.{{ $item->product->getNetPrice * $item->quantity }}</span></p>                                
                            </div>
                            <div class="increase-decrease">                                
                                <p>Delete: <span><a href="{{ route('cart.destroy', $item->id) }}" class="text-dark">
                                <i class="fa fa-trash"></i></a></span></p>
                            </div>
                        </div>

                    </div>
                @empty
                <div class="align-center">
                    <p>Empty Items</p>
                </div>
                @endforelse               
            </div>
            <div class="cart-bottom">
                        <!-- button on left for proceed to checkout -->
                        <div class="bg-light  px-4 py-2 text-uppercase font-weight-bold">Order summary </div>
                            <div class="p-2">
                                <ul class="list-unstyled mb-2">
                                    <li class="d-flex justify-content-between py-1 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>Rs.{{ auth()->user()->cartSubTotal }}</strong></li>                                    
                                    <li class="d-flex justify-content-between py-1 border-bottom"><strong class="text-muted">Tax</strong><strong>Rs.0</strong></li>
                                    <li class="d-flex justify-content-between py-1 border-bottom"><strong class="text-muted">Total</strong>
                                        <h5 class="font-weight-bold">Rs.{{ auth()->user()->cartSubTotal }}</h5>
                                    </li>
                                </ul>
                            </div>                                   
                <a href="#" id="check-out" class="main-button add-to-cart">Checkout <i
                        class="fa fa-arrow-right"></i></a>
            </div>             
        
        </div>
        @else
        <div class="div-col-12 my-4">
            <p>Please login to view your cart</p>
            <a href="" data-bs-toggle="modal" data-bs-target="#logIn">
                                    <i class="fa fa-user"></i>
                                    <span>Log In</span>
            </a>            
        </div>
        @endauth        
    </div>
    
    <!-- cart -->    
    
@push('frontend-script')    
<script>
    @foreach($products as $val)
        $(document).ready(function() {
            $('#{{$val->id}}').click(function(e) {
                e.preventDefault();
                var button = $(this);
                const product_id = e.target.id;
                const color = $('input[name=color]:checked').val();
                const quantity = $('input[name=quantity]').val();
                const size = $('input[name=size]:checked').val();
                $(".loading-overlay").addClass('is-active');
                $.ajax({
                    url: "{{ route('cart.store') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id,
                        color,
                        quantity,
                        size
                    },
                    success: function(res) {
                        $(".loading-overlay").removeClass('is-active');
                        if(res.success) {
                            $('#viewProduct').modal('toggle');
                            var cart = $('#add_cart_move');
                            var cartTotal = cart.attr('data-totalitems');
                            var newCartTotal = parseInt(cartTotal) + parseInt(quantity);
                            cart.attr('data-totalitems', newCartTotal);
                            toastr.success(res.success)
                            Swal.fire(
                                'Success!',
                                res.success,
                                'success'
                            )
                        } else {
                            $('#viewProduct').modal('toggle');
                            toastr.error(res.error)
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: res.error
                            })
                        }
                    },
                    error: function(err) {
                        $(".loading-overlay").removeClass('is-active');
                        console.log(err);
                    }
                });
            });
        });
    @endforeach    
</script>    
<script>
    $('.btn-number').click(function(e) {
        e.preventDefault();

        var fieldName = $(this).attr('data-field');
        var type = $(this).attr('data-type');
        var input = $("input[name='quantity']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if (type == 'minus') {
                var minValue = parseInt(input.attr('min'));
                if (!minValue)
                    minValue = 1;
                if (currentVal > minValue) {
                    input.val(currentVal - 1).change();
                }
                if (parseInt(input.val()) == minValue) {
                    $(this).attr('disabled', true);
                }
            } else if (type == 'plus') {
                var maxValue = parseInt(input.attr('max'));
                if (!maxValue)
                    maxValue = 9999999999999;
                if (currentVal < maxValue) {
                    input.val(currentVal + 1).change();
                }
                if (parseInt(input.val()) == maxValue) {
                    $(this).attr('disabled', true);
                }
            }
        } else {
            input.val(0);
        }
    });
</script>
@endpush
@endsection