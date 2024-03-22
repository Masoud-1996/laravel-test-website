@extends('customer.layouts.master-two-col')

@section('head-tag')
    <title> سبد خرید شما</title>
@endsection


@section('content')
    <!-- start cart -->
    <section class="mb-4">
        <section class="container-xxl">
            <section class="row">
                <section class="col">
                    <!-- start vontent header -->
                    <section class="content-header">
                        <section class="d-flex justify-content-between align-items-center">
                            <h2 class="content-header-title">
                                <span>سبد خرید شما</span>
                            </h2>
                            <section class="content-header-link">
                                <!--<a href="#">مشاهده همه</a>-->
                            </section>
                        </section>
                    </section>

                    <section class="row mt-4">
                        <section class="col-md-9 mb-3">
                            <form action="" id="cart_items" method="post"
                                class="content-wrapper bg-white p-3 rounded-2">
                                @csrf

                                @php
                                    $totalProductPrice = 0;

                                @endphp


                                @foreach ($cartItems as $cartItem)
                                    @php
                                        $totalProductPrice += $cartItem->cartItemProductPrice();

                                    @endphp


                                    <section class="cart-item d-md-flex py-3">
                                        <section class="cart-img align-self-start flex-shrink-1">
                                            <img src="{{ asset($cartItem->product->image['indexArray']['medium']) }}"
                                                alt="">
                                        </section>
                                        <section class="align-self-start w-100">
                                            <p class="fw-bold"> {{ $cartItem->product->name }} </p>

                                            <i class="fa fa-shield-alt cart-product-selected-warranty me-1"></i> <span>
                                                گارانتی اصالت و سلامت فیزیکی کالا</span></p>
                                            <p><i class="fa fa-store-alt cart-product-selected-store me-1"></i>
                                                <span>کالا
                                                    موجود
                                                    در انبار</span>
                                            </p>
                                            <section>
                                                <section class="cart-product-number d-inline-block ">
                                                    <button class="cart-number cart-number-down" type="button">-</button>
                                                    <input class="number" name="number[{{ $cartItem->id }}]"
                                                        data-product-price={{ $cartItem->cartItemProductPrice() }}
                                                        type="number" min="1" max="5" step="1"
                                                        value="{{ $cartItem->number }}" readonly="readonly">

                                                    <button class="cart-number cart-number-up" type="button">+</button>
                                                </section>
                                                <a class="text-decoration-none ms-4 cart-delete"
                                                    href="{{ route('customer.sales-process.remove-from-cart', $cartItem) }}">
                                                    <i class="fa fa-trash-alt"></i> حذف از سبد</a>
                                            </section>
                                        </section>
                                        <section class="align-self-end flex-shrink-1">
                                            <section class="text-nowrap fw-bold">
                                                {{ priceFormat($cartItem->cartItemProductPrice()) }} </section>
                                        </section>
                                    </section>
                                @endforeach


                            </form>

                        </section>
                        <section class="col-md-3">
                            <section class="content-wrapper bg-white p-3 rounded-2 cart-total-price">
                                <section class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted">قیمت کالاها ({{ $cartItems->count() }})</p>
                                    <p class="text-muted" id="total_product_price">{{ priceFormat($totalProductPrice) }}</p>
                                </section>

                                <section class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted">تخفیف کالاها</p>
                                    <p class="text-danger fw-bolder"> - - - -</p>
                                </section>
                                <section class="border-bottom mb-3"></section>
                                <section class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted">جمع سبد خرید</p>
                                    <p class="fw-bolder" id="total_price"> {{ priceFormat($totalProductPrice) }}</p>
                                </section>

                                <p class="my-3">
                                    <i class="fa fa-info-circle me-1"></i>کاربر گرامی خرید شما هنوز نهایی نشده است. برای ثبت
                                    سفارش و تکمیل خرید باید ابتدا آدرس خود را انتخاب کنید و سپس نحوه ارسال را انتخاب کنید.
                                    نحوه ارسال انتخابی شما محاسبه و به این مبلغ اضافه شده خواهد شد. و در نهایت پرداخت این
                                    سفارش صورت میگیرد.
                                </p>


                                <section class="">
                                    <button onclick="document.getElementById('cart_items').submit();"
                                        class="btn btn-danger d-block">تکمیل فرآیند خرید</button>
                                </section>

                            </section>
                        </section>
                    </section>
                </section>
            </section>

        </section>
    </section>
    <!-- end cart -->


    <section class="mb-4">
        <section class="container-xxl">
            <section class="row">
                <section class="col">
                    <section class="content-wrapper bg-white p-3 rounded-2">
                        <!-- start vontent header -->
                        <section class="content-header">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title">
                                    <span>کالاهای مرتبط با سبد خرید شما</span>
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>
                        <!-- start vontent header -->
                        <section class="lazyload-wrapper">
                            <section class="lazyload light-owl-nav owl-carousel owl-theme">

                                @foreach ($relatedProducts as $relatedProduct)
                                    <section class="item">
                                        <section class="lazyload-item-wrapper">
                                            <section class="product">
                                                <a class="product-link" href="{{ route('customer.market.product', $relatedProduct)}}">
                                                    <section class="product-image">
                                                        <img class=""
                                                            src="{{ asset($relatedProduct->image['indexArray']['medium']) }}"
                                                            alt="">
                                                    </section>
                                                    <section class="product-name">
                                                        <h3>{{ $relatedProduct->name }}</h3>
                                                    </section>
                                                    <section class="product-price-wrapper">
                                                        <section class="product-price">
                                                            {{ priceFormat($relatedProduct->price) }} تومان</section>
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
@endsection


@section('script')
    <script>
        $(document).ready(function() {
            bill();

            $('.cart-number').click(function() {
                bill();
            })
        })


        function bill() {
            var total_product_price = 0;

            var total_price = 0;

            $('.number').each(function() {
                var productPrice = parseFloat($(this).data('product-price'));

                var number = parseFloat($(this).val());

                total_product_price += productPrice * number;

            })

            total_price = total_product_price;

            $('#total_product_price').html(toFarsiNumber(total_product_price));

            $('#total_price').html(toFarsiNumber(total_price));


            function toFarsiNumber(number) {
                const farsiDigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
                // add comma
                number = new Intl.NumberFormat().format(number);
                //convert to persian
                return number.toString().replace(/\d/g, x => farsiDigits[x]);
            }

        }
    </script>
@endsection
