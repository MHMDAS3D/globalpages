@extends('admin.admin_master')
@section('content')
    <h2>الجرائد  : </h2>
    <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
        <tr>
            <th>الصورة  </th>
            <th>العنوان  </th>

            <th>أكشن</th>
        </tr>
        </thead>

        <tbody>
        @foreach($newspapers as $newspaper)
            <tr>
                <th> <img width="150px" height="100px" src="/upload/{{$newspaper->img_link}}" > </th>
                <th>{{$newspaper->title_ar}}</th>

                <th style="text-align: center">

                    <button type="button" data-remodal-target="remodal{{$newspaper->id}}12" class="btn btn-primary waves-effect waves-light">edit</button>
                 <a href="view/{{$newspaper->id}}">  <button type="button"  class="btn btn-primary waves-effect waves-light">view</button></a>

                    <a href="/delete/{{$newspaper->id}}">  <button class="btn btn-danger">delete</button></a>
                </th>
            </tr>
            <div class="remodal" data-remodal-id="remodal{{$newspaper->id}}12" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div class="remodal-content">
                    <form action="/editNewsPaper/{{$newspaper->id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <span>لعنوان بالانكليزي : </span>
                        <br>
                        <input type="text" name="title_ar" value="{{$newspaper->title_ar}}" />
                        <br>
                        <span>العنوان بالعربي : </span>
                        <br>
                        <input type="text" name="title_en" value="{{$newspaper->title_en}}" />
                        <br>
                        <span>الشرح بالانكليزي : </span>
                        <br>
                        <input type="text" name="desc_ar" value="{{$newspaper->desc_ar}}" />
                        <br>
                        <span>الشرح بالعربي : </span>
                        <br>
                        <input type="text" name="desc_en" value="{{$newspaper->desc_en}}" />
                        <br>
                        <span>الصورة : </span>
                        <br>
                        <input type="file" id="input-file-now" name="img_link" class="dropify" data-default-file="/upload/{{$newspaper->img_link}}"  />
                        <br>


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


                <div class="remodal" data-remodal-id="remodal{{$newspaper->id}}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                    <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>

                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                    <button data-remodal-action="confirm"   class="remodal-confirm">OK</button>
                </div>
</div>
        @endforeach
        </tbody>
    </table>
    <a href="/addNewspaper"> <button class="btn btn-primary">إضافة + </button></a>
    <hr>


    <h2>التصنيفات : </h2>
    <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
        <tr>
            <th>الاسم  </th>


            <th>أكشن</th>
        </tr>
        </thead>

        <tbody>
        @foreach($Types as $type)

                <tr>

                    <th>{{$type->name_ar}}</th>


                    <th style="text-align: center">

                        <button type="button" data-remodal-target="remodal{{$type->id}}4" class="btn btn-primary waves-effect waves-light">edit</button>

                        <a href="/deletetype/{{$type->id}}">  <button class="btn btn-danger">delete</button></a>
                    </th>
                </tr>
                <div class="remodal" data-remodal-id="remodal{{$type->id}}4" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                    <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                    <div class="remodal-content">
                        <h2 id="modal1Title">{{$type->id}}</h2>
                        <form action="/editType/{{$type->id}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <span>الاسم بالانكليزي : </span>
                                <br>
                                <input type="text" name="name_en" value="{{$type->name_en}}" />
                                <br>
                                <span>الاسم بالعربي : </span>
                                <br>
                                <input type="text" name="name_ar" value="{{$type->name_ar}}" />
                                <br>

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
    <a href="/addType"> <button class="btn btn-primary">إضافة + </button></a>

@stop
