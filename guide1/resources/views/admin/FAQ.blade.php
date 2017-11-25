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
            <th>لسؤال بالعربي  </th>
            <th>لسؤال الانكليزي </th>
            <th>الجواب العربي </th>
            <th>الجواب الانكليزي </th>
            <th>أكشن</th>
        </tr>
        </thead>

        <tbody>
        @foreach($FAQs as $FAQ)
            <tr>
                <th>{{$FAQ->quation_ar}}</th>
                <th>{{$FAQ->quation_en}}</th>
                <th>{{$FAQ->answer_ar}}</th>

                <th style="text-align: center">{{$FAQ->answer_en}} </th>
                <th style="text-align: center">
                    <button type="button" data-remodal-target="remodal{{$FAQ->id}}" class="btn btn-primary waves-effect waves-light">edit</button>
                    <a href="/deletefaq/{{$FAQ->id}}">  <button class="btn btn-danger">delete</button></a>
                </th>
            </tr>
            <div class="remodal" data-remodal-id="remodal{{$FAQ->id}}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div class="remodal-content">
                    <h2 id="modal1Title">{{$FAQ->id}}</h2>
                    <form action="/editeFAQs/{{$FAQ->id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <br>
                        <span>السؤال  بالعربي  : </span>
                        <br>
                        <div class="form-group">
                            <input name="quation_ar" class="form-control"  type="text" value="{{$FAQ->quation_ar}}">
                            <br>
                            <span>السؤال بالانكليزي : </span>
                            <br>
                            <input name="quation_en" type="text" class="form-control"  value="{{$FAQ->quation_en}}">
                            <br>
                            <span>الجواب بالعربي : </span>
                            <br>
                            <input name="answer_ar" type="text" class="form-control"  value="{{$FAQ->answer_ar}}">
                            <br>
                            <span>الجواب بالانكليزي : </span>
                            <br>
                            <input name="answer_en" type="text" class="form-control"  value="{{$FAQ->answer_ar}}">
                            <!-- bootstrap-imageupload. -->
                            <br><br>

                        </div>
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
    <a href="/addFAQ"> <button class="btn btn-primary">إضافة + </button></a>


@stop
