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
    <h2>المحلات المشتركة : </h2>
    <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
        <tr>
            <th>الصورة  </th>
            <th>الاسم  </th>

            <th>الشرح </th>
            <th>أكشن</th>
        </tr>
        </thead>

        <tbody>
        @foreach($markets as $market)
            @if($market->isApprove == 1)
            <tr>
                <th> <img width="150px" height="150px" src="/upload/{{$market->img_link}}" > </th>
                <th>{{$market->name}}</th>

                <th style="text-align: center">{!! $market->desc !!}</th>
                <th style="text-align: center">

                    <button type="button" data-remodal-target="remodal{{$market->id}}" class="btn btn-primary waves-effect waves-light">edit</button>
                    <button type="button" data-remodal-target="remodal{{$market->id}}1" class="btn btn-primary waves-effect waves-light">view</button>

                    <a href="/delete/{{$market->id}}">  <button class="btn btn-danger">delete</button></a>
                </th>
            </tr>
            <div class="remodal" data-remodal-id="remodal{{$market->id}}1" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div class="remodal-content">
                    <h2 id="modal1Title">الصورة </h2>
                    <img src="upload/{{$market->img_link}}" width="150px" height="150px">
                    <br><br><h2 id="modal1Title">الغلاف </h2>
                    <img src="upload/{{$market->cover_img}}" width="150px" height="150px">
                    <br>
                    <br>
                        <span style="font-size:30px "  >الاسم بالعربي : </span><span style="font-size: 20px">{{$market->name_ar}}</span>
                    <br>
                    <br>
                    <span style="font-size:30px "  >الاسم بالانكليزي : </span><span style="font-size: 20px">{{$market->name}}</span>
                    <br>

                    <span style="font-size:30px "  >الوصف بالعربي : </span>
                    <br>
                    {!! $market->desc_ar !!}
                    <br>

                    <span style="font-size:30px "  >الوصف بالانكليزي : </span>
                    <br>
                    {!! $market->desc_ar !!}
                    <br>
                    <br>
                    <span style="font-size:30px "  >العنوان بالعربي : </span><span style="font-size: 20px">{{$market->address}}</span>
                    <br>
                    <span style="font-size:30px "  >العنوان بالانكليزي : </span><span style="font-size: 20px">{{$market->address_ar}}</span>
                    <br>
                    <br>
                    <span style="font-size:30px "  >الرقم 1: </span><span style="font-size: 20px">{{$market->phone}}</span>
                    <br>
                    <br>
                    <span style="font-size:30px "  >الرقم 2 : </span><span style="font-size: 20px">{{$market->phone2}}</span>
                    <br>
                    <br>
                    <span style="font-size:30px "  >الرقم 3 : </span><span style="font-size: 20px">{{$market->phone3}}</span>
                    <br>
                    <span style="font-size:30px "  >الرقم 3 : </span><span style="font-size: 20px">{{$market->phone3}}</span>
                    <br>
                    <span style="font-size:30px "  >الموقع : </span><span style="font-size: 20px">{{$market->website}}</span>
                    <br>
                    <span style="font-size:30px "  >الايميل  : </span><span style="font-size: 20px">{{$market->email}}</span>
                    <br>
                    <span style="font-size:30px "  >فيس بوك  : </span><span style="font-size: 20px">{{$market->FB}}</span>
                    <br>
                    <span style="font-size:30px "  >تويتر  : </span><span style="font-size: 20px">{{$market->twitter}}</span>
                    <br>
                    <span style="font-size:30px "  >يوتيوب  : </span><span style="font-size: 20px">{{$market->youtube}}</span>
                    <br>
                    <span style="font-size:30px "  >سكايب  : </span><span style="font-size: 20px">{{$market->skype}}</span>
                    <br>
                    <span style="font-size:30px "  >انستغرام  : </span><span style="font-size: 20px">{{$market->instagram}}</span>
                    <br>
                    <br>
                    <br>



                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                <button data-remodal-action="confirm"   class="remodal-confirm">OK</button>
            </div>


            <div class="remodal" data-remodal-id="remodal{{$market->id}}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div class="remodal-content">
                    <h2 id="modal1Title">{{$market->id}}</h2>
                    <form action="/editMarket/{{$market->id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <span>الصورة : </span>
                        <br>
                        <div class="form-group">
                            <input type="file" id="input-file-now" name="image" class="dropify" data-default-file="upload/{{$market->img_link}}" />
                            <br>
                            <span>صورة الغلاف  : </span>
                            <br>
                            <input type="file" id="input-file-now" name="cover" class="dropify" value="{{$market->cover_img}}" />
                            <!-- bootstrap-imageupload. -->
                            <br><br>
                            <span>الاسم بالانكليزي : </span>
                            <br>
                            <input type="text" name="name_en" value="{{$market->name}}" class="form-control" />
                            <br>
                            <span>الاسم بالعربي : </span>
                            <br>
                            <input type="text" name="name_ar" value="{{$market->name_ar}}" class="form-control"/>
                            <br>
                            <span>الوصف بالانكليزي : </span>
                            <br>
                            <textarea  name="desc_en" id="text{{$market->id}}">{{$market->desc}}</textarea>
                            <br>
                            <span>الوصف بالعربي : </span>
                            <br>
                            <textarea type="text" name="desc_ar" id="text1{{$market->id}}" >{{$market->desc_ar}} </textarea>
                            <br>
                            <span>العنوان بالانكليزي : </span>
                            <br>
                            <input type="text" name="address_ar"  value="{{$market->address_ar}}" class="form-control"/>
                            <br>
                            <span>العنوان بالعربي  : </span>
                            <br>
                            <input type="text" name="address_en" value="{{$market->address}}" class="form-control"/>
                            <br>
                            <span>الرقم 1   : </span>
                            <br>
                            <input type="text" name="num_1" value="{{$market->phone}}" class="form-control"/>
                            <br>
                            <span>الرقم 2  : </span>
                            <br>
                            <input type="text" name="num_2" value="{{$market->phone2}}" class="form-control"/>

                            <br>
                            <span>الرقم 3  : </span>
                            <br>
                            <input type="text" name="num_3" value="{{$market->phone3}}" class="form-control"/>
                            <br>
                            <span>الموقع الالكتروني   : </span>
                            <br>
                            <input type="text" name="website" value="{{$market->website}}" class="form-control" />
                            <br>
                            <span>البريد الالكتروني   : </span>
                            <br>
                            <input type="text" name="email"  value="{{$market->email}}" class="form-control"/>
                            <br>
                            <span>الفيس بوك : </span>
                            <br>
                            <input type="text" name="fb" value="{{$market->FB}}" class="form-control"/>
                            <br>
                            <span>تويتر   : </span>
                            <br>
                            <input type="text" name="twitter" value="{{$market->twitter}}" class="form-control"/>
                            <br>
                            <span>يوتيوب  : </span>
                            <br>
                            <input type="text" name="youtube" value="{{$market->youtube}}"class="form-control" />
                            <br>
                            <span>سكايب   : </span>
                            <br>
                            <input type="text" name="skype" value="{{$market->skype}}" class="form-control" />
                            <br>
                            <span>انستغرام  : </span>
                            <br>
                            <input type="text" name="instagram" value="{{$market->instagram}}" class="form-control"/>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="remodal-confirm" type="submit" name="button">+إضافة  </button>
                                <button data-remodal-action="cancel" class="remodal-cancel">إلغاء</button>
                            </div>
                        </div>
                        </div>
                    </form>

                </div>
            </div>
            </div>
            <script> CKEDITOR.replace( 'text{{$market->id}}' );</script>
            <script> CKEDITOR.replace( 'text1{{$market->id}}' );</script>
            @endif
        @endforeach
        </tbody>

    </table>
    <a href="/addMarket"> <button class="btn btn-primary">إضافة + </button></a>
    <hr>
    <h2>المحال بانتظار الموافقة : </h2>
    <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
        <tr>
            <th>الصورة  </th>
            <th>الاسم  </th>

            <th>الشرح </th>
            <th>أكشن</th>
        </tr>
        </thead>

        <tbody>
        @foreach($markets as $market)
            @if($market->isApprove == 0)
            <tr>
                <th> <img  width="150px" height="150px"  src="/upload/{{$market->img_link}}" > </th>
                <th>{{$market->name}}</th>

                <th style="text-align: center">{{$market->desc}}</th>
                <th style="text-align: center">

                    <button type="button" data-remodal-target="remodal{{$market->id}}44" class="btn btn-primary waves-effect waves-light">view</button>
                    <a href="/approve/{{$market->id}}">  <button class="btn btn-success">Approve</button></a>

                    <a href="/delete/{{$market->id}}">  <button class="btn btn-danger">delete</button></a>
                </th>
            </tr>
            <div class="remodal" data-remodal-id="remodal{{$market->id}}44" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div class="remodal-content">
                    <h2 id="modal1Title">الصورة </h2>
                    <img src="upload/{{$market->img_link}}" width="150px" height="150px">
                    <br><br><h2 id="modal1Title">الغلاف </h2>
                    <img src="upload/{{$market->cover_img}}" width="150px" height="150px">
                    <br>
                    <br>
                    <span style="font-size:30px "  >الاسم بالعربي : </span><span style="font-size: 20px">{{$market->name_ar}}</span>
                    <br>
                    <br>
                    <span style="font-size:30px "  >الاسم بالانكليزي : </span><span style="font-size: 20px">{{$market->name}}</span>
                    <br>

                    <span style="font-size:30px "  >الوصف بالعربي : </span>
                    <br>
                    {!! $market->desc_ar !!}
                    <br>

                    <span style="font-size:30px "  >الوصف بالانكليزي : </span>
                    <br>
                    {!! $market->desc_ar !!}
                    <br>
                    <br>
                    <span style="font-size:30px "  >العنوان بالعربي : </span><span style="font-size: 20px">{{$market->address}}</span>
                    <br>
                    <span style="font-size:30px "  >العنوان بالانكليزي : </span><span style="font-size: 20px">{{$market->address_ar}}</span>
                    <br>
                    <br>
                    <span style="font-size:30px "  >الرقم 1: </span><span style="font-size: 20px">{{$market->phone}}</span>
                    <br>
                    <br>
                    <span style="font-size:30px "  >الرقم 2 : </span><span style="font-size: 20px">{{$market->phone2}}</span>
                    <br>
                    <br>
                    <span style="font-size:30px "  >الرقم 3 : </span><span style="font-size: 20px">{{$market->phone3}}</span>
                    <br>
                    <span style="font-size:30px "  >الرقم 3 : </span><span style="font-size: 20px">{{$market->phone3}}</span>
                    <br>
                    <span style="font-size:30px "  >الموقع : </span><span style="font-size: 20px">{{$market->website}}</span>
                    <br>
                    <span style="font-size:30px "  >الايميل  : </span><span style="font-size: 20px">{{$market->email}}</span>
                    <br>
                    <span style="font-size:30px "  >فيس بوك  : </span><span style="font-size: 20px">{{$market->FB}}</span>
                    <br>
                    <span style="font-size:30px "  >تويتر  : </span><span style="font-size: 20px">{{$market->twitter}}</span>
                    <br>
                    <span style="font-size:30px "  >يوتيوب  : </span><span style="font-size: 20px">{{$market->youtube}}</span>
                    <br>
                    <span style="font-size:30px "  >سكايب  : </span><span style="font-size: 20px">{{$market->skype}}</span>
                    <br>
                    <span style="font-size:30px "  >انستغرام  : </span><span style="font-size: 20px">{{$market->instagram}}</span>
                    <br>
                    <br>

                    <br>



                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                    <button data-remodal-action="confirm"   class="remodal-confirm">OK</button>
                </div>

            </div>



@endif
        @endforeach
        </tbody>
    </table>
    <hr>
    <h2>التصنيفات : </h2>
    <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
        <tr>
            <th>الصورة  </th>
            <th>الاسم  </th>

            <th>أكشن</th>
        </tr>
        </thead>

        <tbody>
        @foreach($cats as $cat)

                <tr>
                    <th> <img height="150px" width="150px" src="/upload/{{$cat->img_link}}" > </th>
                    <th>{{$cat->name_ar}}</th>


                    <th style="text-align: center">
                      <a href="/viewSubCat/{{$cat->id}}">  <button type="button"  class="btn btn-primary waves-effect waves-light">view</button></a>

                        <button type="button" data-remodal-target="remodal{{$cat->id}}" class="btn btn-primary waves-effect waves-light">edit</button>
                       @if($cat->isMain == 0)
                        <a href="/isMain/{{$cat->id}}">  <button class="btn btn-success">إضافة إلى الرئيسية </button></a>
                        @else
                            <a href="/isNotMain/{{$cat->id}}">  <button class="btn btn-success">إزالة من الرئيسية </button></a>

                        @endif
                        <a href="/deletecat/{{$cat->id}}">  <button class="btn btn-danger">حذف</button></a>
                    </th>
                </tr>







        @endforeach
        </tbody>
    </table>
    <a href="/addMarketCat"> <button class="btn btn-primary">إضافة + </button></a>

@stop
