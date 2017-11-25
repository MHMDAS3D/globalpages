@extends('admin.admin_master')
@section('content')

    <div class="row">
        <h1 style="text-align: center">إضافة منطقة </h1>
        <hr>
        <div class="col-md-10">


            <form action="/addNewArea" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <br>
                <span>المنطقة  بالعربي : </span>
                <br>
                <div class="form-group">
                    <input name="name_ar" > </input>
                    <br>
                    <span>المنطقة بالانكليزي : </span>
                    <br>
                    <input name="name_en" > </input>
                    <div class="form-group">
                        <label for="sel1">Select list:</label>
                        <select name="country_id" class="form-control" id="sel1">
                            @foreach($Governonates as $Governonate)

                            <option>{{$Governonate->id}}</option>

                            @endforeach
                        </select>
                    </div>    <br><br>

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
