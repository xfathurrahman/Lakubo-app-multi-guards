@extends('layout.app.main')

@section('head')
    <title>Lakubo - Lapak UMKM Boyolali</title>
@endsection

@section('content')
    <div class="main-carousel-promo carousel mb-2">
        <div class="owl-carousel owl-theme owl-wrapper carousel-promo">
            <div class="carousel-promo-item">
                <a href="#">
                    <img class="d-block ca-img h-full"
                         src="{{ asset('assets/images/app/caro.jpg')}}"
                         alt="Carousel">
                </a>
            </div>
            <div class="carousel-promo-item">
                <a href="#">
                    <img class="d-block ca-img h-full"
                         src="{{ asset('assets/images/app/caro.jpg')}}"
                         alt="Carousel">
                </a>
            </div>
            <div class="carousel-promo-item">
                <a href="#">
                    <img class="d-block ca-img h-full"
                         src="{{ asset('assets/images/app/caro.jpg')}}"
                         alt="Carousel">
                </a>
            </div>
        </div>
    </div>

    <div class="carousel-category my-4">
        <div class="mb-2 text-center font-semibold">
            <h4>Kategori</h4>
            <hr class="mt-1.5 mx-2">
        </div>
        <div class="slick-wrapper px-4">
            <div id="sc-category-carousel">
                {{--@foreach($listcategories as $listcategory)--}}
                <div class="item">
                    <a href="{{ route('category-detail') }}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{--{{ url('view-category').'/'.Str::slug($listcategory -> name) }}--}}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{--{{ url('view-category').'/'.Str::slug($listcategory -> name) }}--}}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{--{{ url('view-category').'/'.Str::slug($listcategory -> name) }}--}}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{--{{ url('view-category').'/'.Str::slug($listcategory -> name) }}--}}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{--{{ url('view-category').'/'.Str::slug($listcategory -> name) }}--}}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{--{{ url('view-category').'/'.Str::slug($listcategory -> name) }}--}}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{--{{ url('view-category').'/'.Str::slug($listcategory -> name) }}--}}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{--{{ url('view-category').'/'.Str::slug($listcategory -> name) }}--}}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{--{{ url('view-category').'/'.Str::slug($listcategory -> name) }}--}}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{--{{ url('view-category').'/'.Str::slug($listcategory -> name) }}--}}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{--{{ url('view-category').'/'.Str::slug($listcategory -> name) }}--}}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{--{{ url('view-category').'/'.Str::slug($listcategory -> name) }}--}}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{--{{ url('view-category').'/'.Str::slug($listcategory -> name) }}--}}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{--{{ url('view-category').'/'.Str::slug($listcategory -> name) }}--}}#" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg")}}" alt="category-image">
                        <div class="card-body text-center">
                            <p>zzz</p>
                        </div>
                    </a>
                </div>
        </div>
    </div>
    </div>

    <div class="carousel-product my-4">
        <div class="mb-8 w-100 text-center ">
            <h4 class="mx-4 mb-3 font-semibold">Produk Terbaru</h4>
            <hr>
        </div>
        <div class="owl-carousel sc-products-carousel owl-theme">
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="{{ route('product-detail') }}">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item ml-2">
                <div class="card shadow-xl bg-gray-200">
                    <div class="date-option text-center">
                               <span class="date-post">
                                   12 Menit yang lalu
                               </span>
                    </div>
                    {{--<div class="add-to-cart product_data">
                        <button class="">
                            <input type="hidden" class="qty_input" name="product_qty" value="1">
                            <input type="hidden" class="prod_id" name="product_id" value="1">
                            <button type="button" class="btn addToCartBtn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </button>
                    </div>--}}
                    <a class="a-link" href="#">
                        <img class="image-product" src="{{ asset("assets/images/app/game.jpg") }}" alt="admin">
                        <div class="card-body p-2">
                            <div class="tag-price">
                                <div class="tag-img"></div>
                                <div class="tag-text">{{ "Rp.".number_format(1000000) }}</div>
                            </div>
                            <div class="product-name text-left">gameeea wdaw AWDAWA WAW DA ADWAD AWAW A WA AW W AWDAW WA WA AW AW WA   </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-end">
            <h5 class="m-0 p-0 align-middle"><a href="#" class="btn-new-product-all text-decoration-none">Lihat Semua</a></h5>
        </div>
    </div>

@endsection

@section('script')
<script>
/*##########################################################
                        *CAROUSEL PROMO*
##########################################################*/
$(document).ready(function () {
    $('.carousel-promo').owlCarousel({
        center: true,
        items: 2,
        loop: true,
        /*stagePadding: 70,
        margin: 10,*/
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 5000,
        delay: 1000,
        dots: true,
        smartSpeed: 1000,
        navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
        nav: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            }
        }
    })
});
/*##########################################################
                     *CAROUSEL PROMO END*
##########################################################*/
/*##########################################################
                      *CAROUSEL CATEGORY*
##########################################################*/
$('#sc-category-carousel').slick({
    rows: 2,
    infinite: false,
    speed: 300,
    slidesToShow: 7,
    slidesToScroll: 7,
    arrows: true,
    dots: false,
    lazyLoad: 'ondemand',
    prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    responsive: [
        {
            breakpoint: 850,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 6,
            }
        },
        {
            breakpoint: 650,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 5,
            }
        }
    ]
});
/*##########################################################
                  *CAROUSEL CATEGORY END*
##########################################################*/
/*##########################################################
                     *CAROUSEL PRODUCT*
##########################################################*/
$(document).ready(function () {
    $('.sc-products-carousel').owlCarousel({
        loop: false,
        center: false,
        margin: 3,
        lazyLoad: true,
        autoWidth: true,
        nav: true,
        item: 7,
        slideBy: 7,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        dots: false,
        responsive: {
            350: {
                items: 2,
                slideBy: 2,
                margin: 5,
            },
            600: {
                items: 4,
                slideBy: 4
            },
            1000: {
                items: 5,
                slideBy: 5
            }
        }
    })
});
/*##########################################################
                  *CAROUSEL PRODUCT END*
##########################################################*/
</script>
@endsection