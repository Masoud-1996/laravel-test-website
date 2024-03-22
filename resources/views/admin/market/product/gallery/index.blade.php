@extends('admin.layouts.master')

@section('head-tag')
<style>

    .btn{
    
    border-radius: 7px;
    font-size: 13px;
    
    }
        
 </style>
<title>گالری</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش  </a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">کالاها  </a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> گالری</li>
    </ol>
  </nav>

  <div class="container-fluid">

  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    گالری
                </h5>
            </section>

            <section class="d-flex align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.gallery.create', $product->id) }}" class="btn btn-info btn-sm ml-5">ایجاد عکس جدید </a>
                <a href="{{ route('admin.market.product.index') }}" class="btn btn-dark btn-sm">بازگشت</a>
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
                <table class="table table-striped table-hover h-150px">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام کالا</th>
                            <th> تصویر کالا</th>
                            <th class="text-left"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product->images as $image)

                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $product->name }}</td>
                            <td>
                                <img src="{{ asset($image->image['indexArray'][$image->image['currentImage']] ) }}" alt="" width="100" height="100">
                            </td>

                            <td class="text-left">
                                <form class="d-inline" action="{{ route('admin.market.gallery.destroy', ['product' => $product->id , 'gallery' => $image->id] ) }}" method="post">
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

