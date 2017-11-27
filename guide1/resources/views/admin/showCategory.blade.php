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
            <th>التصنيف بالعربي  </th>
            <th>التصنيف الانكليزي </th>

            <th>أكشن</th>
        </tr>
        </thead>

        <tbody>
        @foreach($categories as $category)
            <tr>
                <th>{{$category->name_ar}}</th>
                <th>{{$category->name_en}}</th>

                <th style="text-align: center">
                    <button type="button" data-remodal-target="remodal{{$category->id}}" class="btn btn-primary waves-effect waves-light">edit</button>
                    <a href="/deletefaq/{{$category->id}}">  <button class="btn btn-danger">delete</button></a>
                </th>
            </tr>
            <div class="remodal" data-remodal-id="remodal{{$category->id}}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div class="remodal-content">
                    <h2 id="modal1Title">{{$category->id}}</h2>
                    <form action="/editeFAQs/{{$category->id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <br>
                        <span>السؤال  بالعربي  : </span>
                        <br>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="remodal-confirm" type="submit" name="button">+ إضافة </button>
                                <button data-remodal-action="cancel" class="remodal-cancel">إلغاء </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        @endforeach
        </tbody>
    </table>
    <a href="/addSubCat"> <button class="btn btn-primary">إضافة + </button></a>


@stop
