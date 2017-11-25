@extends('admin.admin_master')
@section('content')

    <div class="row">
        <h1 style="text-align: center">إضافة عمل  </h1>
        <hr>
        <div class="col-md-10">


            <form action="/addNewJob" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <br>
                <span>اسم الشركة  بالعربي : </span>
                <br>
                <div class="form-group">
                    <input name="company_name_ar" > </input>
                    <br>
                    <span>اسم الشركة  بالانكليزي : </span>
                    <br>
                    <input name="company_name_en" > </input>
                    <br>
                    <span>الوصف بالعربي : </span>
                    <br>
                    <input name="desc_ar" > </input>
                    <br>
                    <span>الوصف بالانكليزي  : </span>
                    <br>
                    <input name="desc_en" > </input>
                    <br>
                    <span>عنوان الوظيفة بالعربي  : </span>
                    <br>
                    <input name="job_ar" > </input>
                    <br>
                    <span>عنوان الوظيفة بالانكليزي  : </span>
                    <br>
                    <input name="job_en" > </input>
                    <br>
                    <span>الراتب  : </span>
                    <br>
                    <input name="salary" > </input>
                    <div class="form-group">
                        <label for="sel1">Select list:</label>
                        <select name="cat_id" class="form-control" id="sel1">
                            @foreach($cats as $cat)

                                <option>{{$cat->id}}</option>

                            @endforeach
                        </select>
                    </div>
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
