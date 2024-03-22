@extends('admin.layouts.master')

@section('head-tag')
<style>

    .btn{
    
    border-radius: 7px;
    font-size: 13px;
    
    }
        
</style>
<title>تنظیمات</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> تنظیمات</li>
    </ol>
  </nav>

  <div class="container-fluid">
  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                 تنظیمات
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="" class="btn btn-info btn-sm disabled">ایجاد تنظیمات جدید</a>
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
                            <th>نام سایت</th>
                            <th>عنوان سایت</th>
                            <th class="text-left"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>فروشگاه من	</td>
                            <td>فروشگاه من	</td>
                            <td class="text-left">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                <button disabled class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i> حذف</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>
</div>
@endsection
