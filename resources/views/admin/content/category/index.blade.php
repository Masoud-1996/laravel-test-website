@extends('admin.layouts.master')

@section('head-tag')
<style>

    .btn{
    
    border-radius: 7px;
    font-size: 13px;
    
    }
        
</style>
    <title>دسته بندی</title>
@endsection

@section('content')
    {{-- {{ dd($postCategories)}} --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش محتوا</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> دسته بندی</li>
        </ol>
    </nav>

    <div class="container-fluid">
    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        دسته بندی
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.content.category.create') }}" class="btn btn-info btn-sm">ایجاد دسته بندی</a>
                </section>
                <div class="col-sm-4 mb-2">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>

                
            @if ($message = Session::get('text'))
        
            <div class="alert alert-purple">
    
                <h4> {{ $message }} </h4>
    
            </div>
            
           @endif
        
                
                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>نام دسته بندی</th>
                                <th> توضیحات</th>
                                <th> اسلاگ</th>
                                <th> عکس</th>
                                <th> تگ ها</th>
                                <th> وضعیت</th>
                                <th class="text-left"><i class="fa fa-cogs"></i> تنظیمات</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($postCategories as $postCategory)
                                <tr>
                                    <th>1</th>
                                    <td>{{ $postCategory->name }}</td>
                                    <td>{{ $postCategory->description }}</td>
                                    <td>{{ $postCategory->slug }}</td>
                                    <td>
                                        <img src="{{ asset($postCategory->image['indexArray'][$postCategory->image['currentImage']] ) }}" alt="" width="50"
                                            height="50">
                                    </td>
                                    <td>{{ $postCategory->tags }}</td>
                                    <td>
                                        <label>

                                            <input type="checkbox" @if ($postCategory->status == 1) checked @endif>
                                        </label>


                                    </td>


                                    <td class="text-left">
                                        <a href="{{ route('admin.content.category.edit', $postCategory->id) }}"
                                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>

                                        <form class="d-inline" action="{{ route('admin.content.category.destroy', $postCategory->id) }}" method="post">
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
