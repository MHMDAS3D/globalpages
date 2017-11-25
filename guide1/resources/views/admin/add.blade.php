@extends('admin.admin_master')
@section('content')

<div class="row">
    <h1 style="text-align: center">إضافة سلايدر </h1>
    <hr>
    <div class="col-md-10">

        <form action="/addSlider_ar" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <br>
            <span>النص بالعربي : </span>
            <br>
            <div class="form-group">
                <textarea name="desc" id="text1"></textarea><script> CKEDITOR.replace( 'text1' );</script>
                <br>
                <span>النص بالانكليزي : </span>
                <br>
                <textarea name="desc_en" id="text"></textarea><script> CKEDITOR.replace( 'text' );</script>
                <!-- bootstrap-imageupload. -->
                <br><br>
                <span>الصورة : </span>
                <br>
                    <input type="file" id="input-file-now-custom-1" class="dropify" name="img_link" data-default-file="http://placehold.it/1000x667" />

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
