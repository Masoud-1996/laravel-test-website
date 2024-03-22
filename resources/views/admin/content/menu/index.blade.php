@extends('admin.layouts.master')

@section('head-tag')
<style>

    .btn{
    
    border-radius: 7px;
    font-size: 13px;
    
    }
        
</style>
<title>منو</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">بخش محتوا</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> منو</li>
    </ol>
  </nav>

<div class="container-fluid">

  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  منو
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.content.menu.create') }}" class="btn btn-info btn-sm">ایجاد منوی جدید</a>
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
                            <th>نام منو</th>
                            <th>منوی والد</th>
                            <th> لینک منو</th>
                            <th>  وضعیت </th>
                            <th class="text-left"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $key => $menu)
                                                                                    
                        <tr>
                            <th>{{ $key + 1}}</th>
                            <td>{{ $menu->name }}</td>
                            <td> {{ $menu->parent_id ? $menu->parent->name : 'منوی اصلی '}} </td>
                            <td>{{ $menu->url }}</td>
                            <td>
                                <label>

                                    <input type="checkbox" @if ($menu->status == 1) checked @endif>
                                </label>


                            </td>

                            <td class="text-left">
                                <a href="{{ route('admin.content.menu.edit', $menu->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                <form class="d-inline" action="{{ route('admin.content.menu.destroy', $menu->id) }}" method="post">
                                    @csrf
                                    {{ method_field('delete')}}
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i>
                                        حذف</button>
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
