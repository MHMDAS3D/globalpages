@extends('admin.admin_master')
@section('content')

    <div class="row">
        <h1 style="text-align: center">إضافة شريط إخباري </h1>
        <hr>
        <div class="col-md-10">


            <form action="/storeNewsPaper" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <span>العنوان بالعربي : </span>
                <br>
                <div class="form-group">
                    <input name="title_ar" > </input>
                    <br>
                    <span>العنوان بالانكليزي : </span>
                    <b\r>
                    <input name="title_en" > </input>
                </div>
                <br>

                <span>النص بالعربي: </span>
                <br>
                <div class="form-group">
                    <textarea name="desc_ar" > </textarea>
                    <br>
                    <span>النص بالانكليزي : </span>
                    <br>
                    <textarea name="desc_en" > </textarea>
                    <!-- bootstrap-imageupload. -->
                    <br><br>
                    <span>الصورة : </span>
                    <br>
                    <input type="file" id="input-file-now" name="image" class="dropify" />

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
