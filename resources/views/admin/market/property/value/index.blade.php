@extends('admin.layouts.master')

@section('head-tag')
<style>

    .btn{
    
    border-radius: 7px;
    font-size: 13px;
    
    }
        
        </style>
    <title>مقدار فرم کالا</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ویژگی ها </li>
        </ol>
    </nav>

    <div class="container-fluid">

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                       ویژگی ها
                    </h5>
                </section>

                <section class="d-flex align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.market.value.create', $categoryAttribute->id) }}"
                        class="btn btn-info btn-sm ml-3">ایجاد ویژگی جدید</a>
                        <a href="{{ route('admin.market.property.index') }}" class="btn btn-dark btn-sm">بازگشت</a>
                    </section>
                    <div class="col-sm-4 mb-2">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>

            @if ($message = Session::get('text'))
            <div class="alert alert-info">
    
                <h4> {{ $message }} </h4>
    
            </div>
            @endif
                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>نام فرم</th>
                                <th>نام محصول</th>
                                <th>مقدار</th>
                                <th>افزایش قیمت</th>
                                <th>نوع</th>
                                <th class="text-left"><i class="fa fa-cogs"></i> تنظیمات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categoryAttribute->values as $value)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $categoryAttribute->name }}</td>
                                    <td>{{ $value->product->name }}</td>
                                    <td>{{ json_decode($value->value)->value }}</td>
                                    <td>{{ json_decode($value->value)->price_increase }}</td>
                                    <td>{{ $value->type == 0 ? 'ساده' : 'انتخابی' }}</td>
                                    <td class="text-left">
                                        <a href="{{ route('admin.market.value.edit', ['categoryAttribute' => $categoryAttribute->id, 'value' => $value->id]) }}"
                                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                        <form class="d-inline"
                                            action="{{ route('admin.market.value.destroy', ['categoryAttribute' => $categoryAttribute->id, 'value' => $value->id]) }}"
                                            method="post">
                                            @csrf
                                            {{ method_field('delete') }}
                                            <button class="btn btn-danger btn-sm delete" type="submit"><i
                                                    class="fa fa-trash-alt"></i> حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </section>

            </section>
        </section>
    </section>
    </div>
@endsection
