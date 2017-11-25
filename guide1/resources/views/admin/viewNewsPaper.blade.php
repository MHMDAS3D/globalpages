@extends('admin.admin_master')
@section('content')
    <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
        <tr>
            <th>الصورة </th>
            <th>العنوان بالانكليزي </th>
            <th>الشرح بالانكليزي </th>
            <th>أكشن</th>
        </tr>
        </thead>

        <tbody>
        @foreach($items as $item)
            <tr>
                <th> <img href="upload/{{$item->img_link}}" width="150px" height="150px" ></th>
                <th style="text-align: center"> {{$item->title_en}}</th>

                <th style="text-align: center">  {{$item->desc_en}}</th>
                <th style="text-align: center">

                    <button type="button" data-remodal-target="remodal{{$item->id}}" class="btn btn-primary waves-effect waves-light">edit</button>
                    <a href="/delete/{{$item->id}}">  <button class="btn btn-danger">delete</button></a>
                </th>
            </tr>
            <div class="remodal" data-remodal-id="remodal{{$item->id}}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div class="remodal-content">
                    <h2 id="modal1Title">{{$item->id}}</h2>
                    <form action="/editTiker/{{$item->id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <br>
                        <span>النص : </span>
                        <br>
                        <div class="form-group">
                            <textarea name="title_ar"  >{{$item->title_ar}} </textarea>
                            <br>
                            <span>النص بالانكليزي : </span>
                            <br>
                            <textarea name="title_en" > {{$item->title_en}}</textarea>
                            <!-- bootstrap-imageupload. -->
                            <br><br>
                            <span>الشرح بالعربي : </span>
                            <br>
                            <input type="text" name="desc_ar" value="{{$item->desc_ar}}"/>
                            <br>
                            <span>الشرح بالانكليزي  : </span>
                            <br>
                            <input type="text" name="desc_en" value="{{$item->desc_en}}"/>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit" name="button">+ j </button>
                            </div>
                        </div>
                    </form>

                </div>
                <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                <button data-remodal-action="confirm"   class="remodal-confirm">OK</button>
            </div>
        @endforeach
        </tbody>
    </table>
    <a href="/addItem/{{$id}}"> <button class="btn btn-primary">إضافة + </button></a>


@stop
