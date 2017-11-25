@extends('index')

@section('content')

    <h2>عرض متقدم <a href="javascript:void(0)" onclick="toggleAS()" style="font-size: 18px;">تعديل</a></h2>
    <form id="ast" action="/applicant/doedit/{{$app->id}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="panel panel-default">
            <div class="panel-heading">معلومات عامة</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <label>الاسم</label>
                        <input value="{{ $app->name }}" type="text" name="name" class="form-control col-md-6" readonly="true"></div>
                    <div class="col-md-6">
                        <label>الجنس</label>
                        <select name="sex" class="form-control" disabled="">
                            <option <?php if($app->sex == "ذكر"){?> selected <?php }?> value="ذكر">ذكر</option>
                            <option <?php if($app->sex == "أنثى"){?> selected <?php }?> value="أنثى">أنثى</option>
                        </select></div>
                </div>
                <div class="col-md-12 margin-top-10">
                    <div class="col-md-6">
                        <label>المواليد</label>
                        <input value="{{ $app->birth_date }}" type="date" name="birth_date" class="form-control col-md-6" readonly="true"></div>
                    <div class="col-md-6">
                        <label>الخدمة العسكرية</label>
                        <input value="{{ $app->military_statue }}" type="text" name="military_statue" class="form-control col-md-6" readonly="true"></div>
                </div>
                <div class="col-md-12 margin-top-10">
                    <div class="col-md-6">
                        <label>الحالة الاجنماعية</label>
                        <input value="{{ $app->social_statue }}" type="text" name="social_statue" class="form-control col-md-6" readonly="true"></div>
                    <div class="col-md-6">
                        <label>العنوان</label>
                        <input value="{{ $app->address }}" type="text" name="address" class="form-control col-md-6" readonly="true"></div>
                </div>
                <div class="col-md-12 margin-top-10">
                    <div class="col-md-6">
                        <label>الهاتف</label>
                        <input value="{{ $app->phone }}" type="number" name="phone" class="form-control col-md-6" readonly="true"></div>
                    <div class="col-md-6">
                        <label>الموبايل</label>
                        <input value="{{ $app->mobile }}" type="number" name="mobile" class="form-control col-md-6" readonly="true"></div>
                </div>
                <div class="col-md-12 margin-top-10">
                    <div class="col-md-6">
                        <label>الموبايل 2</label>
                        <input value="{{ $app->replace_mobile }}" type="numbers" name="replace_mobile" class="form-control col-md-6" readonly="true"></div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">استمارة التقديم</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <label>اخر راتب تم تقاضيه</label>
                        <?php $per = $app->applicants[0] ?>
                        <input value="{{ $per['last_salary'] }}" type="number" name="last_salary" class="form-control col-md-6" readonly="true"></div>
                    <div class="col-md-6">
                        <label>الوقت اللازم لبدء العمل</label>
                        <input value="{{ $per['time_to_get_work'] }}" type="text" name="time_to_get_work" class="form-control col-md-6" readonly="true"></div>
                </div>
                <div class="col-md-12 margin-top-10">
                    <div class="col-md-6">
                        <label>اشخاص موثوقة</label>
                        <textarea value="{{ $per['confident_people'] }}" name="confident_people" class="form-control col-md-6" readonly="true">{{ $per['confident_people'] }}</textarea></div>
                    <div class="col-md-6">
                        <label>التقييم الفني</label>
                        <textarea value="{{ $per['technical_rate'] }}" type="text" name="technical_rate" class="form-control col-md-6" readonly="true">{{ $per['technical_rate'] }}</textarea></div>
                </div>
                <div class="col-md-12 margin-top-10">
                    <div class="col-md-6">
                        <label>الوظيفة المناسبة</label>
                        <input value="{{ $per['job'] }}" type="text" name="job" class="form-control col-md-6" readonly="true"></div>
                    <div class="col-md-6">
                        <label>التقييم العددي</label>
                        <input value="{{ $per['numric_evalution'] }}" type="number" name="numric_evalution" class="form-control col-md-6" readonly="true"></div>
                </div>
                <div class="col-md-12 margin-top-10">
                    <div class="col-md-6">
                        <label>تاريخ المقابلة</label>
                        <input value="{{ $per['interview_date'] }}" type="date" name="interview_date" class="form-control col-md-6" readonly="true"></div>
                    <div class="col-md-6">
                        <label>تاريخ التقدم</label>
                        <input value="{{ $per['implement_date'] }}" type="date" name="implement_date" class="form-control col-md-6" readonly="true"></div>
                </div>
                <div class="col-md-12 margin-top-10">
                    <div class="col-md-12">
                        <label>السيرة الذاتية</label>
                        <a target="_blank" href="{{asset('upload').'/'.$per['pdf_link'] }}">تحميل السيرة الذاتية الحالية</a>
                        <input value="{{ $per['pdf_link'] }}" type="file" name="pdf_link" class="form-control col-md-6" readonly="true" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">الشهادات</div>
            <div class="panel-body">
                <div class="col-md-12">

                    @foreach($per->certificates as $cer)
                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <div class="box-content js__card">
                                <h4 class="box-title with-control">

                                    <span class="controls">
							<button type="button" class="control fa fa-minus js__card_minus"></button>
							<a href="/certificate/delete/{{ $cer['id'] }}">
                                <button type="button" style="color:red;" class="control fa fa-times"></button>
                            </a>
						</span>
                                    <!-- /.controls -->
                                </h4>
                                <!-- /.box-title -->
                                <div class="js__card_content"><img src="{{ asset('upload').'/'.$cer['name'] }}" style="width:100%;height:250px;"></div>
                            </div>
                            <!-- /.box-content -->
                        </div>

                    @endforeach
                    <div class="col-md-12" style="margin-top:15px;">
                        <input placeholder="" type="file" name="certificates[]" class="form-control col-md-6" multiple disabled></div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">الوظائف السابقة</div>
            <div class="panel-body">
                <div class="col-md-12">
                    @foreach($per->jobs as $job)
                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <div class="box-content js__card">
                                <h4 class="box-title with-control" style="margin: 0px;">
                                    {{ $job['work_type'] }}
                                    <span class="controls">

							<a href="/lastJobs/delete/{{ $job['id'] }}">
                                <button type="button" style="color:red;" class="control fa fa-times"></button>
                            </a>
						</span>
                                    <!-- /.controls -->
                                </h4>
                              </div>
                            <!-- /.box-content -->
                        </div>

                    @endforeach

                    <div class="col-md-12" id="yourdiveID">

                    </div>
                    <button type="button" onclick="doadd()" class="btn btn-primary waves-effect waves-light margin-top-10" disabled>إضافة وظيفة</button>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary waves-effect waves-light" disabled>تعديل</button>
    </form>
    <script>
        var booldis = 1;
        function toggleAS() {
            var form = document.getElementById("ast");
            var elements = form.elements;
            for (var i = 0, len = elements.length; i < len; ++i) {
               if(booldis == 0) {
                   elements[i].readOnly = true;
                   elements[i].disabled = true;

               }else{
                   elements[i].readOnly = false;
                   elements[i].disabled = false;

               }

            }
            if(booldis == 0) {booldis = 1;}else{booldis = 0;}
        }
        var u=1;
        function del(x) {
            document.getElementById(x).remove();
        }
        function doadd() {
            document.getElementById('yourdiveID').innerHTML +=
                "<div class='col-md-12' id='div"+u+"'>" +
                "<div class=\"col-md-11\">" +
                "<input  placeholder=\"\" type=\"text\" name=\"jobs[]\" class=\"form-control col-md-6 margin-top-10\" /><br />" +
                "</div>" +
                "<div class=\"col-md-1\"  style=\"padding-top: 15px\">\n" +
                "                        <i class=\"fa fa-close\" onclick=\"del('div"+u+"')\"></i>\n" +
                "                    </div></div>";
            u++;
        }
    </script>
@endsection
