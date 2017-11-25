@extends('admin.admin_master')
@section('content')

    {{--map hehre--}}
    <form action="/addMap" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <input type="text" id="latitude" name="lat" placeholder="latitude">
    <input type="text" id="longitude" name="long" placeholder="longitude">
    <div id="map" style="width:900px; height:700px"></div>
        <button type="submit" class="btn btn-primary"> edite map </button>
    </form>
    <br>
    <br>
    <hr>

    <h2>مواقع التواصل الاجتماعي </h2>
    @foreach($contact as $contac)

        <form action="/editeSocial" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
        <span>فيس بوك : </span><input type="text" name="fb" value="{{$contac->FB}}" class="form-control"><br>
        <span>تويتر : </span> <input type="text" name="twitter" value="{{$contac->twitter}}" class="form-control"><br>
        <span>يوتيوب : </span> <input type="text" name="youtube" value="{{$contac->youtube}}" class="form-control"><br>
        <span>أنستغرام : </span> <input type="text" name="instagram" value="{{$contac->instagram}}" class="form-control"><br>
        <span>سكايب : </span> <input type="text" name="skype" value="{{$contac->skype}}" class="form-control"><br>
<button type="submit" class="btn btn-primary">add</button>
        </form>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>

        function initialize() {
            var $latitude = document.getElementById('latitude');
            var $longitude = document.getElementById('longitude');
            var latitude ={{$contac->lat}} ;
            var longitude = {{$contac->lang}};
            var zoom = 7;

@endforeach
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
