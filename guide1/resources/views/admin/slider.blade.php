@extends('admin.admin_master')
@section('content')
    @if (Session::has('delete'))
        <div class="alert alert-success">
            {{Session::get('delete')}}
        </div>

        @elseif (Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @elseif(Session::has('update'))
        <div class="alert alert-success">
            {{Session::get('update')}}
        </div>
    @endif
    <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
        <tr>
            <th>لنص </th>
            <th>الصورة</th>
            <th>أكشن</th>
        </tr>
        </thead>

        <tbody>
@foreach($sliders as $slider)
        <tr>
            <th>{!! $slider->title_ar !!}</th>
            <th style="text-align: center"><img  width="250px" height="250px" src="upload/{{$slider->img_link}}"> </th>
            <th style="text-align: center">

                <button type="button" data-remodal-target="remodal{{$slider->id}}" class="btn btn-primary waves-effect waves-light">edit</button>
                <a href="/deleteslider/{{$slider->id}}">  <button class="btn btn-danger">delete</button></a>
            </th>
        </tr>
        <div class="remodal" data-remodal-id="remodal{{$slider->id}}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div class="remodal-content">
                <h2 id="modal1Title">{{$slider->id}}</h2>
                <form action="/editSlider/{{$slider->id}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input class="dropify"  type="file"   name="img_link" />
                    <br>
                    <span>النص بالعربي  : </span>
                    <br>
                    <div class="form-group">
                        <textarea name="desc" id="text{{$slider->id}}">{!! $slider->title_ar !!}</textarea>

                        <br>
                        <span>النص بالانكليزي : </span>
                        <br>
                        <textarea name="desc_en" id="text1{{$slider->id}}">{!! $slider->title_en !!}</textarea>

                        <!-- bootstrap-imageupload. -->
                        <br><br>
                        <span>الصورة : </span>
                        <br>


                    <div class="row">
                        <div class="col-md-12">
                            <button class="remodal-confirm" type="submit" name="button">+ تعديل  </button>
                            <button data-remodal-action="cancel" class="remodal-cancel">إلغاء </button>

                        </div>
                    </div>
                </form>

            </div>

        </div>
        <script> CKEDITOR.replace( 'text{{$slider->id}}' );</script>
        <script> CKEDITOR.replace( 'text1{{$slider->id}}' );</script>
@endforeach
        </tbody>
    </table>
<a href="/addSlider"> <button class="btn btn-primary">إضافة + </button></a>

@stop
