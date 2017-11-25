
@extends('admin.admin_master')
@section('content')

    <div class="row">
        <hr>
        <div class="col-md-10">


            <form action="/addcategory" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <br>
                <span>العنوان بالعربية  : </span>
                <br>
                <div class="form-group">
                    <textarea name="title_ar" > </textarea>
                    <br>
                    <span>العنوان بالعربية : </span>
                    <br>
                    <textarea name="title_en" > </textarea>
                    <!-- bootstrap-imageupload. -->
                    <br>

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
