@extends('admin.layouts.master')

@section('head-tag')

<style>

    .btn{
    
    border-radius: 7px;
    font-size: 13px;
    
    }
        
        </style>
<title>فرم کالا</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> فرم کالا</li>
    </ol>
  </nav>

  <div class="container-fluid">

  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                 فرم کالا
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.property.create') }}" class="btn btn-info btn-sm">ایجاد فرم جدید</a>
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
                            <th>واحد اندازه گیری</th>
                            <th>دسته والد</th>
                            <th class=" text-left"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category_attributes as $category_attribute)

                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $category_attribute->name }}</td>
                            <td>{{ $category_attribute->unit }}</td>
                            <td>{{ $category_attribute->category->name }}</td>
                            <td class="text-left">
                                <a href="{{ route('admin.market.value.index' , $category_attribute->id)}}" class="btn btn-warning btn-sm text-info "><i class="fa fa-edit"></i> ویژگی ها</a>
                                <a href="{{ route('admin.market.property.edit', $category_attribute->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                <form class="d-inline" action="{{ route('admin.market.property.destroy', $category_attribute->id) }}" method="post">
                                    @csrf
                                    {{ method_field('delete') }}
                                <button class="btn btn-danger btn-sm delete" type="submit"><i class="fa fa-trash-alt"></i> حذف</button>
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



