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
            <th> النص بالعربي :  </th>
            <th>النص بالانكليزي :  </th>

            <th>الرابط</th>
            <th>أكشن</th>
        </tr>
        </thead>

        <tbody>
        @foreach($tickers as $ticker)
            <tr>
                <th>{!! $ticker->text_ar !!}</th>
                <th>{!! $ticker->text_en !!}</th>

                <th style="text-align: center"><a href="{{$ticker->link}}"> {{$ticker->link}} </a></th>
                <th style="text-align: center">

                    <button type="button" data-remodal-target="remodal{{$ticker->id}}" class="btn btn-primary waves-effect waves-light">edit</button>
                    <a href="/deletetikker/{{$ticker->id}}">  <button class="btn btn-danger">delete</button></a>
                </th>
            </tr>
            <div class="remodal" data-remodal-id="remodal{{$ticker->id}}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div class="remodal-content">
                    <h2 id="modal1Title">{{$ticker->id}}</h2>
                    <form action="/editTiker/{{$ticker->id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <br>
                        <span>النص : </span>
                        <br>
                        <div class="form-group">
                            <textarea name="desc"   id="text{{$ticker->id}}" >{!! $ticker->text_ar !!} </textarea>
                            <br>
                            <span>النص بالانكليزي : </span>
                            <br>
                            <textarea name="desc_en"  id="text1{{$ticker->id}}" > {!! $ticker->text_en !!}</textarea>
                            <!-- bootstrap-imageupload. -->
                            <br><br>
                            <span>الرابط : </span>
                            <br>
                            <input type="text" name="link" class="form-control" value="{{$ticker->link}}"/>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="remodal-confirm"  type="submit" name="button">+ تعديل </button>
                                <button data-remodal-action="cancel" class="remodal-cancel">إلغاء </button>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <script> CKEDITOR.replace( 'text{{$ticker->id}}' );</script>
            <script> CKEDITOR.replace( 'text1{{$ticker->id}}' );</script>
        @endforeach
        </tbody>
    </table>
    <a href="/addTicker"> <button class="btn btn-primary">إضافة + </button></a>


@stop
