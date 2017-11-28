@extends('admin.admin_master')
@section('content')

    <div class="row">
        <h1 style="text-align: center">إضافة تصنيف  </h1>
        <hr>
        <div class="col-md-10">


            <form action="/addTypeItem" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <br>
                <span>النص بالعربي : </span>
                <br>
                <div class="form-group">
                    <input name="name_ar" class="form-control" > </input>
                    <br>
                    <span>النص بالانكليزي : </span>
                    <br>
                    <input name="name_en" class="form-control"> </input>
                    <!-- bootstrap-imageupload. -->
                    <br><br>
                    <span>الصورة : </span>
                    <br>
                    <input name="img_link" type="file" class="dropify" > </input>


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
