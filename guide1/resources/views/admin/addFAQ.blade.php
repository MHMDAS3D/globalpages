@extends('admin.admin_master')
@section('content')

    <div class="row">
        <hr>
        <div class="col-md-10">


            <form action="/addFAQs" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <br>
                <span>السؤال  بالعربي  : </span>
                <br>
                <div class="form-group">
                    <input name="quation_ar" class="form-control"  type="text">
                    <br>
                    <span>السؤال بالانكليزي : </span>
                    <br>
                    <input name="quation_en" class="form-control" type="text" >
                    <br>
                    <span>الجواب بالعربي : </span>
                    <br>
                    <input name="answer_ar" class="form-control" type="text" >
                    <br>
                    <span>الجواب بالانكليزي : </span>
                    <br>
                    <input name="answer_en" class="form-control" type="text" >
                    <!-- bootstrap-imageupload. -->
                    <br><br>

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
