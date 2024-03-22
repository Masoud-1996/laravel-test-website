@extends('admin.layouts.master')

@section('head-tag')
    <title> داشبورد اصلی </title>
@endsection



@section('content')
    <div class="container-fluid">


        <!-- cards  -->
        <section>

            <div class="row">
                <div class="col-lg-12 col-md-8 mr-auto">
                    <div class="row pt-md-5 mt-md-4 mb-5 ">
                        <!-- card1  -->
                        <div class="col-lg-3 col-md-6 p-2">

                            <div class="card c1">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-secondary">
                                            <h5> فروش</h5>
                                            <h5 class="mt-4 "> 30 میلیون</h5>
                                        </div>
                                        <i class="fas fa-shopping-cart text-warning fa-3x"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary text-center ">
                                    <i class="fas fa-sync ml-2"></i>
                                    <span>به روز رسانی</span>
                                </div>

                            </div>



                        </div>
                        <!-- end of card1  -->


                        <!-- card2  -->
                        <div class="col-lg-3 col-md-6 p-2">

                            <div class="card c1">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-secondary">
                                            <h5> آمار</h5>
                                            <h5 class="mt-4 "> 1500 نفر</h5>
                                        </div>
                                        <i class="fas fa-chart-line text-danger fa-3x"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary text-center ">
                                    <i class="fas fa-sync ml-2"></i>
                                    <span>به روز رسانی</span>
                                </div>

                            </div>





                        </div>

                        <!-- end of card2  -->


                        <!-- card3  -->
                        <div class="col-lg-3 col-md-6 p-2">

                            <div class="card c1">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-secondary">
                                            <h5> هزینه ها</h5>
                                            <h5 class="mt-4 "> 3 میلیون</h5>
                                        </div>
                                        <i class="fas fa-money-bill-alt text-success fa-3x"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary text-center ">
                                    <i class="fas fa-sync ml-2"></i>
                                    <span>به روز رسانی</span>
                                </div>

                            </div>

                        </div>

                        <!-- end of card3  -->


                        <!-- card4  -->
                        <div class="col-lg-3 col-md-6 p-2">

                            <div class="card c1">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-secondary">
                                            <h5> تعداد </h5>
                                            <h5 class="mt-4 "> 3000</h5>
                                        </div>
                                        <i class="fas fa-users text-info fa-3x"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary text-center ">
                                    <i class="fas fa-sync ml-2"></i>
                                    <span>به روز رسانی</span>
                                </div>
                            </div>
                        </div>
                        <!-- end of card4  -->
                    </div>
                </div>
            </div>


        </section>

        <!-- end cards  -->


        <!-- progress  -->
        <section>

            <div class="row">
                <div class="col-lg-12 col-md-8 mr-auto">
                    <div class="row">
                        <!-- progress  -->
                        <div class="col-lg-6">
                            <div class="bg-dark text-white p-4 rounded text-right">
                                <h4 class="mb-4">پروژه ها</h4>

                                <!-- progress1  -->
                                <h4 class="mb-2 mt-4">کتابخانه</h4>
                                <div class="progress" style="height: 20px;">
                                    <div class="progress-bar progress-bar-striped bg-danger"
                                        style="width: 85%; font-size: 13px;">85%
                                    </div>
                                </div>
                                <!-- progress1 end  -->



                                <!-- progress2  -->
                                <h4 class="mb-2 mt-4">وب سرویس</h4>
                                <div class="progress" style="height: 20px;">
                                    <div class="progress-bar progress-bar-striped bg-success"
                                        style="width: 45%; font-size: 13px;">45%
                                    </div>
                                </div>
                                <!-- progress2 end  -->


                                <!-- progress3 -->
                                <h4 class="mb-2 mt-4">اپلیکیشن</h4>
                                <div class="progress" style="height: 20px;">
                                    <div class="progress-bar progress-bar-striped bg-primary"
                                        style="width: 30%; font-size: 13px;">30%
                                    </div>
                                </div>
                                <!-- progress3 end  -->
                            </div>
                        </div>
                        <!-- progress  end -->


                        <!-- tasks  -->
                        <div class="col-lg-6 text-right">

                            <h3 class="text-muted m-3 p-3">تسک ها :</h3>

                            <div class="container-fluid bg-light">
                                <div class="row py-3 mb-4 align-content-center tborder">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-9">بررسی موارد
                                    </div>

                                    <div class="col-1">
                                        <a href="" data-toggle="tooltip" data-html=true title="<h6>ویرایش</h6>"
                                            data-placement="top">
                                            <i class="fas fa-edit fa-lg text-success ml-2"></i></a>
                                    </div>

                                    <div class="col-1">
                                        <a href="" data-toggle="tooltip" data-html=true title="<h6>حذف</h6>"
                                            data-placement="top">
                                            <i class="fas fa-trash fa-lg text-danger ml-2"></i></a>
                                    </div>

                                </div>
                            </div>

                            <div class="container-fluid bg-light">
                                <div class="row py-3 mb-4 align-content-center tborder">
                                    <div class="col-1">
                                        <input type="checkbox">
                                    </div>
                                    <div class="col-9">تست موارد
                                    </div>

                                    <div class="col-1">
                                        <a href="" data-toggle="tooltip" data-html=true title="<h6>ویرایش</h6>"
                                            data-placement="top">
                                            <i class="fas fa-edit fa-lg text-success ml-2"></i></a>
                                    </div>

                                    <div class="col-1">
                                        <a href="" data-toggle="tooltip" data-html=true title="<h6>حذف</h6>"
                                            data-placement="top">
                                            <i class="fas fa-trash fa-lg text-danger ml-2"></i></a>
                                    </div>

                                </div>
                            </div>

                            <div class="container-fluid bg-light">
                                <div class="row py-3 mb-4 align-content-center tborder">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-9">بررسی موارد
                                    </div>

                                    <div class="col-1">
                                        <a href="" data-toggle="tooltip" data-html=true title="<h6>ویرایش</h6>"
                                            data-placement="top">
                                            <i class="fas fa-edit fa-lg text-success ml-2"></i></a>
                                    </div>

                                    <div class="col-1">
                                        <a href="" data-toggle="tooltip" data-html=true title="<h6>حذف</h6>"
                                            data-placement="top">
                                            <i class="fas fa-trash fa-lg text-danger ml-2"></i></a>
                                    </div>

                                </div>
                            </div>




                        </div>

                        <!-- tasks end -->
                    </div>

                </div>

            </div>


        </section>

        <!-- end of progress  -->



        <!-- table  -->
        <section>

            <div class="row mb-5">
                <div class="col-lg-12 col-md-8 mr-auto">
                    <div class="row">
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <h3 class="text-muted text-center mb-3">پرداختی ها</h3>
                            <table class="table table-dark  table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام</th>
                                        <th>مبلغ</th>
                                        <th>تاریخ</th>
                                        <th>وضعیت</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>محمد</td>
                                        <td>20 میلیون</td>
                                        <td>5 شهریور</td>
                                        <td>
                                            <span class="badge py-2 w-75 badge-success">پرداخت</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>رضا</td>
                                        <td>20 میلیون</td>
                                        <td> 26 آذر</td>
                                        <td>
                                            <span class="badge py-2 w-75 badge-danger">رد شده</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>امین</td>
                                        <td>20 میلیون</td>
                                        <td>6 آبان</td>
                                        <td>
                                            <span class="badge py-2 w-75 badge-warning">در انتظار بررسی</span>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>4</td>
                                        <td>علی</td>
                                        <td>20 میلیون</td>
                                        <td>20 مهر</td>
                                        <td>
                                            <span class="badge py-2 w-75 badge-success">پرداخت</span>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>

                            <!-- pagination  -->

                            <ul class="pagination justify-content-center">
                                <li class="page-item ">
                                    <a href="" class="page-link py-2 px-3">&laquo;</a>
                                </li>

                                <li class="page-item ">
                                    <a href="" class="page-link py-2 px-3">...</a>
                                </li>

                                <li class="page-item ">
                                    <a href="" class="page-link py-2 px-3">3</a>
                                </li>

                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3">2</a>
                                </li>

                                <li class="page-item active">
                                    <a href="" class="page-link py-2 px-3">1</a>
                                </li>

                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3">&raquo;</a>
                                </li>
                            </ul>


                            <!-- pagination end -->


                        </div>


                        <div class="col-lg-6">

                            <h3 class="text-muted text-center mb-3">تیکت ها</h3>
                            <table class="table bg-light table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام</th>
                                        <th>تاریخ</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>رضا</td>
                                        <td>25 اردیبهشت</td>
                                        <td><button class="btn btn-info btn-sm">انجام شده</button></td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>امیر</td>
                                        <td>30 مرداد</td>
                                        <td><button class="btn btn-primary btn-sm">انجام شده</button></td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>محمد</td>
                                        <td>13 اسفند</td>
                                        <td><button class="btn btn-success btn-sm">انجام شده</button></td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>سعید</td>
                                        <td>14 دی</td>
                                        <td><button class="btn btn-success btn-sm">انجام شده</button></td>
                                    </tr>

                                </tbody>
                            </table>

                            <!-- pagination  -->

                            <ul class="pagination justify-content-center">
                                <li class="page-item ">
                                    <a href="" class="page-link py-2 px-3">&laquo;</a>
                                </li>

                                <li class="page-item ">
                                    <a href="" class="page-link py-2 px-3">...</a>
                                </li>

                                <li class="page-item ">
                                    <a href="" class="page-link py-2 px-3">3</a>
                                </li>

                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3">2</a>
                                </li>

                                <li class="page-item active">
                                    <a href="" class="page-link py-2 px-3">1</a>
                                </li>

                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3">&raquo;</a>
                                </li>
                            </ul>


                            <!-- pagination end -->
                        </div>


                    </div>


                </div>


            </div>


        </section>

        <!--end of table  -->

        <!--footer -->

        <footer>

            <div class="row mt-5 mb-3">
                <div class="col-lg-12 col-md-8 mr-auto">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <ul class="list-inline">
                                <li class="list-inline-item ml-4">
                                    <a href="" class="text-dark">درباره ما</a>
                                </li>

                                <li class="list-inline-item ml-4">
                                    <a href="" class="text-dark">پشتیبانی</a>
                                </li>

                                <li class="list-inline-item ml-4">
                                    <a href="" class="text-dark">وبلاگ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-center">
                            این یک پنل ادمین جهت تست می باشد.
                        
                        </div>

                    </div>
                </div>
            </div>

        </footer>
        <!-- end footer  -->




        <footer class="footer text-center">
          
        </footer>
    @endsection
