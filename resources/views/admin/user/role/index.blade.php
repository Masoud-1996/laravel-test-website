@extends('admin.layouts.master')

@section('head-tag')
<style>

    .btn{
    
    border-radius: 7px;
    font-size: 13px;
    
    }
        
</style>
<title>نقش ها</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">بخش کاربران</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> نقش ها</li>
    </ol>
  </nav>

  <div class="container-fluid">

  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    نقش ها
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.user.role.create') }}" class="btn btn-info btn-sm">ایجاد نقش جدید</a>
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
                            <th>نام نقش	</th>
                            <th>دسترسی ها</th>
                            <th class="text-left"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $key => $role)

                        <tr>
                            <th>{{$key +1}}</th>
                            <td> {{ $role->name }}</td>
                            <td>
                                @if(empty($role->permissions()->get()->toArray()))
                                    <span class="text-danger">برای این نقش  هیچ سطح دسترسی تعریف نشده است</span>
                                @else
                                @foreach ($role->permissions as $permission)
                                {{$permission->name}}<br>
                                    
                                @endforeach
                        @endif
                                </td>
                            <td class="text-left">
                                <a href="{{ route('admin.user.role.permission-form' , $role->id) }}" class="btn btn-success btn-sm"><i class="fa fa-user-graduate"></i> دسترسی ها</a>
                                <a href="{{ route('admin.user.role.edit' , $role->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                <form class="d-inline"
                                action="{{ route('admin.user.role.destroy', $role->id) }}"
                                method="post">
                                @csrf
                                {{ method_field('delete') }}
                                <button class="btn btn-danger btn-sm" type="submit"><i
                                        class="fa fa-trash-alt"></i>
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
