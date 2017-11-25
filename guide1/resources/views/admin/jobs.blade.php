@extends('admin.admin_master')
@section('content')
    <h2>الوظائف : </h2>
    <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
        <tr>
            <th>أسم الشركة  </th>

            <th>شرح الوظيفة  </th>
            <th>أكشن</th>
        </tr>
        </thead>

        <tbody>
        @foreach($jobs as $job)
            <tr>
                <th>{{$job->company_name_ar}}</th>

                <th style="text-align: center">{{$job->desc_ar}}</th>
                <th style="text-align: center">

                    <button type="button" data-remodal-target="remodal{{$job->id}}" class="btn btn-primary waves-effect waves-light">edit</button>
                    <button type="button" data-remodal-target="remodal{{$job->id}}1" class="btn btn-primary waves-effect waves-light">view</button>

                    <a href="/deleteJob/{{$job->id}}">  <button class="btn btn-danger">delete</button></a>
                </th>
            </tr>
            <div class="remodal" data-remodal-id="remodal{{$job->id}}1" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div class="remodal-content">
                    <h2 id="modal1Title">{{$job->name}}</h2>
                    <br>
                    <span>النص : </span>
                    <br>

                    <div class="form-group">
                        <span>description :   {{$job->desc}} </span>
                        <br>
                        <span>النص بالانكليزي : </span>



                    </div>
                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                    <button data-remodal-action="confirm"   class="remodal-confirm">OK</button>
                </div>


                <div class="remodal" data-remodal-id="remodal{{$job->id}}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                    <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                    <div class="remodal-content">
                        <h2 id="modal1Title">{{$job->id}}</h2>
                        <form action="/editMarket/{{$job->id}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <span>الصورة : </span>
                            <br>
                            <div class="form-group">

                                <span>الاسم بالانكليزي : </span>
                                <br>
                                <input type="text" name="name_en" value="{{$job->name}}" />
                                <br>
                                <span>الاسم بالعربي : </span>
                                <br>
                                <input type="text" name="name_ar" value="{{$job->name_ar}}" />

                                <span>الوصف بالانكليزي : </span>
                                <br>
                                <input type="text" name="desc_en" value="{{$job->desc}}" />
                                <br>
                                <span>الوصف بالعربي : </span>
                                <br>
                                <input type="text" name="desc_ar" value="{{$job->desc_ar}}" />
                                <br>
                                <span>العنوان بالانكليزي : </span>
                                <br>
                                <input type="text" name="address_ar" value="{{$job->address_ar}}"/>
                                <br>
                                <span>العنوان بالعربي  : </span>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary" type="submit" name="button">+ j </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                    <button data-remodal-action="confirm"   class="remodal-confirm">OK</button>
                </div>
            </div>
        @endforeach
        </tbody>
    </table>
    <a href="/addJobs"> <button class="btn btn-primary">إضافة + </button></a>
    <hr>
    <h2>تصنيفات الأعمال : </h2>
    <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
        <tr>
            <th>الاسم  </th>
            <th>الاسم بالانكليزي  </th>

            <th>أكشن</th>
        </tr>
        </thead>

        <tbody>
        @foreach($cats as $cat)

                <tr>
                  <th>{{$cat->name_ar}}</th>
                    <th>{{$cat->name_en}}</th>


                    <th style="text-align: center">

                        <button type="button" data-remodal-target="remodal{{$cat->id}}" class="btn btn-primary waves-effect waves-light">edit</button>

                        <a href="/delete/{{$cat->id}}">  <button class="btn btn-danger">delete</button></a>
                    </th>
                </tr>
                <div class="remodal" data-remodal-id="remodal{{$cat->id}}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                    <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                    <div class="remodal-content">
                        <h2 id="modal1Title">{{$cat->id}}</h2>
                        <form action="/editTiker/{{$cat->id}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <br>
                            <span>النص : </span>
                            <br>
                            <div class="form-group">
                                <textarea name="desc"  >{{$cat->text_ar}} </textarea>
                                <br>
                                <span>النص بالانكليزي : </span>
                                <br>
                                <textarea name="desc_en" > {{$cat->text_en}}</textarea>
                                <!-- bootstrap-imageupload. -->
                                <br><br>

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

    <a href="/addcate"> <button class="btn btn-primary">إضافة + </button></a>

@stop
