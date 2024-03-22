@extends('admin.layouts.master')

@section('head-tag')
    <style>
        .btn {

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
            <li class="breadcrumb-item font-size-12"> <a href="#">منو</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد منو</li>
        </ol>
    </nav>

    <div class="container-fluid">
        <section class="row">
            <section class="col-12">
                <section class="main-body-container">
                    <section class="main-body-container-header">
                        <h5>
                            ایجاد منو
                        </h5>
                    </section>

                    <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                        <a href="{{ route('admin.content.menu.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                    </section>

                    <section>
                        <form action="{{ route('admin.content.menu.store') }}" method="post">
                            @csrf
                            <section class="row">

                                <section class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">عنوان منو</label>
                                        <input type="text" name="name" class="form-control form-control-sm"
                                            value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                        <span class="alert_reqiured bg-warning p-1 rounded" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </section>

                                <section class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">منو والد</label>
                                        <select name="parent_id" id="" class="form-control form-control-sm"
                                            value="{{ old('parent_id') }}">
                                            <option value="">منوی اصلی</option>
                                            @foreach ($menus as $menu)
                                                <option value="{{ $menu->id }}"
                                                    @if (old('parent_id') == $menu->id) selected @endif> {{ $menu->name }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                    @error('parent_id')
                                        <span class="alert_reqiured bg-warning p-1 rounded" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </section>

                                <section class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">آدرس URL</label>
                                        <input type="text" name="url" class="form-control form-control-sm"
                                            value="{{ old('url') }}">
                                    </div>
                                    @error('url')
                                        <span class="alert_reqiured bg-warning p-1 rounded" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror

                                </section>
                                <section class="col-12 col-md-6 my-2">
                                    <div class="form-group">
                                        <label for="status">وضعیت</label>
                                        <select name="status" id="" class="form-control form-control-sm"
                                            id="status">
                                            <option value="0" @if (old('status') == 0) selected @endif>غیرفعال
                                            </option>
                                            <option value="1" @if (old('status') == 1) selected @endif>فعال
                                            </option>
                                        </select>
                                    </div>
                                    @error('status')
                                        <span class="alert_reqiured bg-warning p-1 rounded" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror

                                </section>
                                <section class="col-12">
                                    <button class="btn btn-primary btn-sm">ثبت</button>
                                </section>
                            </section>
                        </form>
                    </section>

                </section>
            </section>
        </section>
    </div>
@endsection


@section('script')
    <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('description');
    </script>

    <script>

        $(document).ready(function() {

            var tags_input = $('#tags');
            var select_tags = $('#select_tags');
            var default_tags = tags_input.val();
            var default_data = null;

            if (tags_input.val() !== null && tags_input.val().length > 0) {

                default_data = default_tags.split(',');

            }



            select_tags.select2({

                placeholder: 'لطفا تگ های خود را وارد نمایید',
                tags: true,
                data: default_data

            });


            select_tags.children('option').attr('selected', true).trigger('change');

            $('#form').submit(function(event) {

                if (select_tags.val() !== null && select_tags.val().length > 0)

                    var selectedSource = select_tags.val().join(',');

                tags_input.val(selectedSource)

            })

        })
    </script>
@endsection
