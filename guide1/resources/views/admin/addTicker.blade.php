@extends('admin.admin_master')
@section('content')

    <div class="row">
        <h1 style="text-align: center">إضافة شريط إخباري </h1>
        <hr>
        <div class="col-md-10">


            <form action="/addNewsTicker" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <br>
                <span>النص بالانكليزي : </span>
                <br>
                <div class="form-group">
                    <textarea name="title_ar" id="text"></textarea><script> CKEDITOR.replace( 'text' );</script>
                    <br>
                    <span>النص بالانكليزي : </span>
                    <br>
                    <textarea name="title_en" id="text1"></textarea><script> CKEDITOR.replace( 'text1' );</script>
                    <!-- bootstrap-imageupload. -->
                    <br><br>
                    <span>الرابط : </span>
                    <br>
                    <input type="text" name="link" class="form-control" />

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
