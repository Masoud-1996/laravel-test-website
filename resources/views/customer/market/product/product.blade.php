@extends('customer.layouts.master-two-col')


@section('head-tag')

<title> {{ $product->name }}</title>
@endsection


@section('content')


        <!-- start cart -->
        <section class="mb-4">
            <section class="container-xxl" >
                <section class="row">
                    <section class="col">
                        <!-- start vontent header -->
                        <section class="content-header">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title">
                                    <span>  {{ $product->name }} </span>
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>

                        <section class="row mt-4">
                            <!-- start image gallery -->
                            <section class="col-md-4">
                                <section class="content-wrapper bg-white p-3 rounded-2 mb-4">
                                    <section class="product-gallery">

                                    @php
                                        $images= $product->images()->get();
                                    @endphp
                                        <section class="product-gallery-selected-image mb-3">
                                            <img src="{{ asset($images->first()->image['indexArray']['medium']) }}" alt="">
                                        </section>
                                        <section class="product-gallery-thumbs">

                                            @foreach ($images as $key => $image)
                                                
                                            
                                            <img class="product-gallery-thumb" src="{{ asset($image->image['indexArray']['medium']) }}"
                                             alt="{{ asset($image->image['indexArray']['medium']) .'-' . ($key+1)}}"
                                            data-input="{{ asset($image->image['indexArray']['medium']) }}">
                                            
                                            
                                            @endforeach
                                           
                                        </section>
                                    </section>
                                </section>
                            </section>
                            <!-- end image gallery -->

                            <!-- start product info -->
                            <section class="col-md-5">

                                <section class="content-wrapper bg-white p-3 rounded-2 mb-4">

                                    <!-- start vontent header -->
                                    <section class="content-header mb-3">
                                        <section class="d-flex justify-content-between align-items-center">
                                            <h2 class="content-header-title content-header-title-small">
                                                {{ $product->name }}
                                            </h2>
                                            <section class="content-header-link">
                                                <!--<a href="#">مشاهده همه</a>-->
                                            </section>
                                        </section>
                                    </section>
                                    <section class="product-info">
                                        <form id="add_to_cart" action="{{route('customer.sales-process.add-to-cart', $product)}}" method="post" class="product-info">
                                            @csrf

                                        <p>
                                            @if($product->marketable_number > 0)
                                            <i class="fa fa-store-alt cart-product-selected-store me-1"></i> <span>کالا موجود در انبار</span>
                                            @else
                                            <i class="fa fa-store-alt cart-product-selected-store me-1"></i> <span>کالا ناموجود</span>
                                            @endif
                                        </p>
                                        <section>
                                            <section class="cart-product-number d-inline-block ">
                                                <button class="cart-number cart-number-down" type="button">-</button>
                                                <input type="number" id="number" name="number" min="1" max="5" step="1" value="1" readonly="readonly">
                                                <button class="cart-number cart-number-up" type="button">+</button>
                                            </section>
                                        </section>
                                        <p class="mb-3 mt-5">
                                            <i class="fa fa-info-circle me-1"></i>کاربر گرامی  خرید شما هنوز نهایی نشده است. برای ثبت سفارش و تکمیل خرید باید ابتدا آدرس خود را انتخاب کنید و سپس نحوه ارسال را انتخاب کنید. نحوه ارسال انتخابی شما محاسبه و به این مبلغ اضافه شده خواهد شد. و در نهایت پرداخت این سفارش صورت میگیرد. پس از ثبت سفارش کالا بر اساس نحوه ارسال که شما انتخاب کرده اید کالا برای شما در مدت زمان مذکور ارسال می گردد.
                                        </p>
                                    </section>
                                </section>

                            </section>
                            <!-- end product info -->

                            <section class="col-md-3">
                                <section class="content-wrapper bg-white p-3 rounded-2 cart-total-price">
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class="text-muted">قیمت کالا</p>
                                        <p class="text-muted">{{ priceFormat($product->price) }} <span class="small">تومان</span></p>
                                    </section>

                                 
                                    <section class="border-bottom mb-3"></section>

                                    <section class="d-flex justify-content-end align-items-center">
                                                                   

                                        <p class="fw-bolder">{{ priceFormat($product->price) }}<span class="small">تومان</span></p>
                                    </section>

                                    <section class="">
                                        @if($product->marketable_number > 0)
                                        <button id="next-level"  class="btn btn-success d-block w-100" onclick="document.getElementById('add_to_cart').submit();">افزودن به سبد خرید</button>
                                        @else
                                        <button id="next-level" class="btn btn-secondary disabled d-block">محصول نا موجود میباشد</button>
                                        @endif
                                    </section>
                                </form>

                                </section>
                            </section>
                        </section>
                    </section>
                </section>

            </section>
        </section>
        <!-- end cart -->



        <!-- start product lazy load -->
        <section class="mb-4">
            <section class="container-xxl" >
                <section class="row">
                    <section class="col">
                        <section class="content-wrapper bg-white p-3 rounded-2">
                            <!-- start vontent header -->
                            <section class="content-header">
                                <section class="d-flex justify-content-between align-items-center">
                                    <h2 class="content-header-title">
                                        <span>کالاهای مرتبط</span>
                                    </h2>
                                    <section class="content-header-link">
                                        <!--<a href="#">مشاهده همه</a>-->
                                    </section>
                                </section>
                            </section>
                            <!-- start vontent header -->
                            <section class="lazyload-wrapper" >
                                <section class="lazyload light-owl-nav owl-carousel owl-theme">

                                    @foreach ($relatedProducts as $relatedProduct)


                                    <section class="item">
                                        <section class="lazyload-item-wrapper">
                                            <section class="product">
                                                
                                                <a class="product-link" href="{{ route('customer.market.product', $relatedProduct)}}">
                                                    <section class="product-image">
                                                        <img class="" src="{{ asset($relatedProduct->image['indexArray']['medium']) }}" alt="">
                                                    </section>
                                                    <section class="product-name"><h3>{{ $relatedProduct->name }}</h3></section>
                                                    <section class="product-price-wrapper">
                                                        <section class="product-price">{{ priceFormat($relatedProduct->price) }} تومان</section>
                                                    </section>
                                                    
                                                </a>
                                            </section>
                                        </section>
                                    </section>
                                    @endforeach
                                    
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
        </section>
        <!-- end product lazy load -->

        <!-- start description, features and comments -->
        <section class="mb-4">
            <section class="container-xxl" >
                <section class="row">
                    <section class="col">
                        <section class="content-wrapper bg-white p-3 rounded-2">
                            <!-- start content header -->
                            <section id="introduction-features-comments" class="introduction-features-comments">
                                <section class="content-header">
                                    <section class="d-flex justify-content-between align-items-center">
                                        <h2 class="content-header-title">
                                            <span class="me-2"><a class="text-decoration-none text-dark" href="#introduction">معرفی</a></span>
                                            <span class="me-2"><a class="text-decoration-none text-dark" href="#features">ویژگی ها</a></span>
                                           
                                        </h2>
                                        <section class="content-header-link">
                                            <!--<a href="#">مشاهده همه</a>-->
                                        </section>
                                    </section>
                                </section>
                            </section>
                            <!-- start content header -->

                            <section class="py-4">

                                <!-- start vontent header -->
                                <section id="introduction" class="content-header mt-2 mb-4">
                                    <section class="d-flex justify-content-between align-items-center">
                                        <h2 class="content-header-title content-header-title-small">
                                            معرفی
                                        </h2>
                                        <section class="content-header-link">
                                            <!--<a href="#">مشاهده همه</a>-->
                                        </section>
                                    </section>
                                </section>
                                <section class="product-introduction mb-4">
                                    {!! $product->introduction !!}
                                </section>

                                <!-- start vontent header -->
                                <section id="features" class="content-header mt-2 mb-4">
                                    <section class="d-flex justify-content-between align-items-center">
                                        <h2 class="content-header-title content-header-title-small">
                                            ویژگی ها
                                        </h2>
                                        <section class="content-header-link">
                                            <!--<a href="#">مشاهده همه</a>-->
                                        </section>
                                    </section>
                                </section>
                                <section class="product-features mb-4 table-responsive">
                                    <table class="table table-bordered border-white">

                                        @foreach ($product->values()->get() as $value)

                                        <tr>
                                            <td>{{ $value->attribute->name }}</td>
                                            <td> {{ json_decode($value->value)->value }} {{ $value->attribute->unit }}</td>
                                        </tr>

                                        @endforeach

                                        
                                      
                                    </table>
                                </section>
                              
                            </section>

                        </section>
                    </section>
                </section>
            </section>
        </section>
        <!-- end description, features and comments -->

@endsection


@section('script')

    <script>
    $(document).ready(function(){
      bill();

     //number
     $('.cart-number').click(function(){
        bill();
    })
    })

    function bill() {
       

        //price computing
    ;
        var number = 1;

        var product_original_price = parseFloat($('#product_price').attr('data-product-original-price'));


        if($('#number').val() > 0)
        {
            number = parseFloat($('#number').val());
        }

        //final price
        var product_price = product_original_price;
        $('#product-price').html(toFarsiNumber(product_price));
    
    }
function toFarsiNumber(number)
{
    const farsiDigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    // add comma
    number = new Intl.NumberFormat().format(number);
    //convert to persian
    return number.toString().replace(/\d/g, x => farsiDigits[x]);
}

</script>
   
<script>

    //start product introduction, features and comment
$(document).ready(function() {
    var s = $("#introduction-features-comments");
    var pos = s.position();
    $(window).scroll(function() {
        var windowpos = $(window).scrollTop();

        if (windowpos >= pos.top) {
            s.addClass("stick");
        } else {
            s.removeClass("stick");
        }
    });
});
//end product introduction, features and comment

</script>
@endsection