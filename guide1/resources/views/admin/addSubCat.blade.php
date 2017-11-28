@extends('admin.admin_master')
@section('content')

    <div class="row">
        <h1 style="text-align: center">إضافة تصنيف </h1>
        <hr>
        <div class="col-md-10">


            <form action="/storeSubCategory/{{$id}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <br>
                <span>النص بالعربي : </span>
                <br>
                <div class="form-group">
                    <textarea name="name_ar" > </textarea>
                    <br>
                    <span>النص بالانكليزي : </span>
                    <br>
                    <textarea name="name_en" > </textarea>
                    <!-- bootstrap-imageupload. -->

                </div>



                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit" name="button">+ إضافة </button>
                    </div>
                </div>
            </form>

        </div>

    </div>

    </div>



@stop
