@extends('admin.admin_master')
@section('content')

    <div class="row">
        <h1 style="text-align: center">إضافة محل  </h1>
        <hr>
        <div class="col-md-10">


            <form action="/addNewMarket" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <br>
                <span>الصورة : </span>
                <br>
                <div class="form-group">
                    <input type="file" id="input-file-now" name="image" class="dropify" />
                    <br>
                    <span>صورة الغلاف  : </span>
                    <br>
                    <input type="file" id="input-file-now" name="cover" class="dropify" />
                    <!-- bootstrap-imageupload. -->
                    <br><br>
                    <span>الاسم بالانكليزي : </span>
                    <br>
                    <input type="text" name="name_en" class="form-control" />
                    <br>
                    <span>الاسم بالعربي : </span>
                    <br>
                    <input type="text" name="name_ar" class="form-control"/>
                    <br>
                    <span>الوصف بالانكليزي : </span>
                    <br>
                    <textarea name="desc_en" id="text1"></textarea><script> CKEDITOR.replace( 'text1' );</script>
                    <br>
                    <span>الوصف بالعربي : </span>
                    <br>
                    <textarea name="desc_ar" id="text"></textarea><script> CKEDITOR.replace( 'text' );</script>
                    <br>
                    <span>العنوان بالانكليزي : </span>
                    <br>
                    <input type="text" name="address_en" class="form-control" />
                    <br>
                    <span>العنوان بالعربي  : </span>
                    <br>
                    <input type="text" name="address_ar" class="form-control"/>
                    <br>
                    <span>الرقم 1   : </span>
                    <br>
                    <input type="text" name="num_1" class="form-control"/>
                    <br>
                    <span>الرقم 2  : </span>
                    <br>
                    <input type="text" name="num_2" class="form-control"/>
                    <br>
                    <span>الرقم 3  : </span>
                    <br>
                    <input type="text" name="num_3"class="form-control"/>
                    <br>
                    <span>الموقع الالكتروني   : </span>
                    <br>
                    <input type="text" name="website" class="form-control" />
                    <br>
                    <span>البريد الالكتروني   : </span>
                    <br>
                    <input type="text" name="email" class="form-control"/>
                    <br>
                    <span>الفيس بوك : </span>
                    <br>
                    <input type="text" name="fb" class="form-control"/>
                    <br>
                    <span>تويتر   : </span>
                    <br>
                    <input type="text" name="twitter" class="form-control"/>
                    <br>
                    <span>يوتيوب  : </span>
                    <br>
                    <input type="text" name="youtube" class="form-control"/>
                    <br>
                    <span>سكايب   : </span>
                    <br>
                    <input type="text" name="skype" class="form-control"/>
                    <br>
                    <span>انستغرام  : </span>
                    <br>
                    <input type="text" name="instagram" class="form-control"/>
<br><br>
                    <input type="text" id="latitude" class="form-control" name="lat" placeholder="latitude">
                    <input type="text" id="longitude" class="form-control" name="long" placeholder="longitude">
                    <div id="map" style="width:900px; height:700px"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit" name="button">+ إضافة </button>
                    </div>
                </div>
            </form>

        </div>

    </div>

    </div>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>

        function initialize() {
            var $latitude = document.getElementById('latitude');
            var $longitude = document.getElementById('longitude');
            var latitude =23 ;
            var longitude = 23;
            var zoom = 7;


            var LatLng = new google.maps.LatLng(latitude, longitude);

            var mapOptions = {
                zoom: zoom,
                center: LatLng,
                panControl: false,
                zoomControl: false,
                scaleControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            var map = new google.maps.Map(document.getElementById('map'),mapOptions);

            var marker = new google.maps.Marker({
                position: LatLng,
                map: map,
                title: 'Drag Me!',
                draggable: true
            });

            google.maps.event.addListener(marker, 'dragend', function(marker){
                var latLng = marker.latLng;
                $latitude.value = latLng.lat();
                $longitude.value = latLng.lng();
            });

        }
        initialize();
    </script>

@stop
