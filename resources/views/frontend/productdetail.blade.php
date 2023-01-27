<div class="modal fade" id="addToCart" tabindex="-1" aria-labelledby="addToCartLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addToCartLabel">Nike Air Jordans</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row align-items-start">
                        <div class="col-sm-6 for-m">
                            <div class="main-product-image">
                                <img src="{{asset('./images/products/img-big.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="swiper-container overflow-hidden swiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-img="./images/products/">
                                        <img src="{{asset('./images/products/home-9/product-1.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="swiper-slide" data-img="./images/products/">
                                        <img src="{{asset('./images/products/home-9/product-2.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="swiper-slide" data-img="./images/products/">
                                        <img src="{{asset('./images/products/home-9/product-3.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="swiper-slide" data-img="./images/products/">
                                        <img src="{{asset('./images/products/home-9/product-4.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="swiper-slide" data-img="./images/products/">
                                        <img src="{{asset('./images/products/home-9/product-5.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="swiper-slide" data-img="./images/products/">
                                        <img src="{{asset('./images/products/home-9/product-6.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="swiper-slide" data-img="./images/products/">
                                        <img src="{{asset('./images/products/home-9/product-7.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="swiper-slide" data-img="./images/products/">
                                        <img src="{{asset('./images/products/home-9/product-8.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h3 class="product-main-title">
                                Nike Air Jordans
                            </h3>
                            <p class="main-price">
                                <del>NRs. 45000</del> <ins>Nrs. 39999</ins>
                            </p>
                            <p class="main-descriptions">
                                Originally released in November 1993, the Air Jordan IX model was the first
                                model released after
                                Michael Jordan's retirement. Jordan never played an NBA season wearing these
                                shoes. This model
                                was inspired by baseball cleats that Jordan wore when playing minor-league
                                baseball.

                                Like the VII and VIII models, the Air Jordan IX featured an inner sock sleeve
                                and nubuck
                                accents. The sole featured different symbols and languages of different
                                countries. The Air
                                Jordan IX has been the shoe chosen to adorn Jordan's feet for his statue outside
                                of the United
                                Center in Chicago.
                            </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="variant-wrapper">
                                        <p class="variant-title">
                                            Select Size
                                        </p>
                                        <div class="radio-group">
                                            <div>
                                                <input class="variant-radio" hidden="" type="radio" id="x-small"
                                                    name="size" value="x-small">
                                                <label class="variant-label square-boxes" for="x-small">XS</label>
                                            </div>
                                            <div>
                                                <input class="variant-radio" hidden="" type="radio" id="small"
                                                    name="size" value="small">
                                                <label class="variant-label square-boxes" for="small">S</label>
                                            </div>
                                            <div>
                                                <input class="variant-radio" hidden="" type="radio" id="medium"
                                                    name="size" value="medium">
                                                <label class="variant-label square-boxes" for="medium">M</label>
                                            </div>
                                            <div>
                                                <input class="variant-radio" hidden="" type="radio" id="large"
                                                    name="size" value="large">
                                                <label class="variant-label square-boxes" for="large">L</label>
                                            </div>
                                            <div>
                                                <input class="variant-radio" hidden="" type="radio" id="extralarge"
                                                    name="size" value="extralarge">
                                                <label class="variant-label square-boxes"
                                                    for="extralarge">XL</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="variant-wrapper">
                                        <p class="variant-title">
                                            Select Color
                                        </p>
                                        <div class="radio-group">
                                            <div>
                                                <input class="variant-radio" hidden="" type="radio" id="color1"
                                                    name="color" value="color1">
                                                <label class="variant-label color-boxes" for="color1"
                                                    style="background-color:red">
                                                    <i class="fas fa-check text-xs text-white"></i>
                                                </label>
                                            </div>
                                            <div>
                                                <input class="variant-radio" hidden="" type="radio" id="color2"
                                                    name="color" value="color2">
                                                <label class="variant-label color-boxes" for="color2"
                                                    style="background-color:midnightblue">
                                                    <i class="fas fa-check text-xs text-white"></i>
                                                </label>
                                            </div>
                                            <div>
                                                <input class="variant-radio" hidden="" type="radio" id="color3"
                                                    name="color" value="color3">
                                                <label class="variant-label color-boxes" for="color3"
                                                    style="background-color:green">
                                                    <i class="fas fa-check text-xs text-white"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-product-add">
                                <div class="increase-decrease">
                                    <button type="button" class="decrease">-</button>
                                    <input type="number" class="number-change text-base w-24" value="1">
                                    <button type="button" class="increase">+</button>
                                </div>
                                <button type="button" class="main-button">Add To Cart <i
                                        class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>