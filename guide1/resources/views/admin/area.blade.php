@extends('admin.admin_master')
@section('content')

    <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
        <tr>
            <th>المدينة بالعربي  </th>
            <th>المدينة بالانكليزي </th>
            <th>أكشن</th>
        </tr>
        </thead>
        <tbody>
        @foreach($areas as $area)
            <tr>
                <th>{{$area->name_ar}}</th>
                <th>{{$area->name_en}}</th>

                <th style="text-align: center">

                    <button type="button" data-remodal-target="remodal{{$area->id}}" class="btn btn-primary waves-effect waves-light">edit</button>
                    <a href="/area/delete/{{$area->id}}">  <button class="btn btn-danger">delete</button></a>
                </th>
            </tr>
            <div class="remodal" data-remodal-id="remodal{{$area->id}}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div class="remodal-content">
                    <h2 id="modal1Title">{{$area->id}}</h2>
                    <form action="/editArea/{{$area->id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <br>
                        <span>النص : </span>
                        <br>
                        <div class="form-group">
                            <input name="desc"  value="{{$area->name_ar}}" >  </input>
                            <br>
                            <span>النص بالانكليزي : </span>
                            <br>
                            <input name="desc_en" value="{{$area->name_en}}" > </input>
                            <!-- bootstrap-imageupload. -->
                            <br><br>
                            <div class="form-group">
                                <label for="sel1">Select list:</label>
                                <select name="country_id" class="form-control" id="sel1">
                                    @foreach($Governonates as $Governonate)

                                        <option> {{$Governonate->id}} </option>

                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit" name="button">+ update </button>
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
    <a href="/addArea"> <button class="btn btn-primary">إضافة + </button></a>

<h2>المحافظات </h2>
    <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
        <tr>
            <th>المدينة بالعربي  </th>
            <th>المدينة بالانكليزي </th>


            <th>أكشن</th>
        </tr>
        </thead>

        <tbody>
        @foreach($areas as $area)
            <tr>
                <th>{{$area->name_ar}}</th>
                <th>{{$area->name_en}}</th>

                <th style="text-align: center">

                    <button type="button" data-remodal-target="remodal{{$area->id}}" class="btn btn-primary waves-effect waves-light">edit</button>
                    <a href="/delete/{{$area->id}}">  <button class="btn btn-danger">delete</button></a>
                </th>
            </tr>
            <div class="remodal" data-remodal-id="remodal{{$area->id}}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div class="remodal-content">
                    <h2 id="modal1Title">{{$area->id}}</h2>
                    <form action="/editTiker/{{$area->id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <br>
                        <span>النص : </span>
                        <br>
                        <div class="form-group">
                            <textarea name="desc"  >{{$area->text_ar}} </textarea>
                            <br>
                            <span>النص بالانكليزي : </span>
                            <br>
                            <textarea name="desc_en" > {{$area->text_en}}</textarea>
                            <!-- bootstrap-imageupload. -->
                            <br><br>
                            <div class="form-group">
                                <label for="sel1">Select list:</label>
                                <select name="country_id" class="form-control" id="sel1">
                                    @foreach($Governonates as $Governonate)

                                        <option>{{$Governonate->id}}</option>

                                    @endforeach
                                </select>
                            </div>
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
    <a href="/addTicker"> <button class="btn btn-primary">إضافة + </button></a>


@stop
