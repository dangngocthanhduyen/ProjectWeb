
  
<body> 


  
  <div class="HeadBackground" style="background:url(image/about/trangdiem.jpg) no-repeat center top;">
    <h2 style="color:red;">ABOUT</h2>
  </div>
  <!-- IMAGE -->
  <div class="text-google" style="width: 100%;height: 100%;">
    <div style="text-align:center;"> 
      <h3 style="color:green;"> Giới thiệu về Shop 2min-corner</h3>
      <p> Shop 2min-corner là một shop chuyên bán mỹ phẩm, sản phẩm dưỡng da online. </p>
      <br>
    </div>
    <div style="text-align:center;">
      <h3 style="color:green;"> Liên hệ với Shop 2min-corner </h3>
      <li>
        <strong> * Số điện thoại liên hệ: </strong><a style="color:blue;">xxxxxxxxxx</a>
      </li>
      <li>
        <strong> * Fanpage: </strong> <a href="https://www.facebook.com/2mins-corner-1109281215839012/" style="color:blue;">facebook.com/2mins-corner-1109281215839012</a>
      </li>
      <li>
        <strong> * Instagram: </strong> <a href="https://www.instagram.com/2mins_corner/" style="color:blue;">instagram.com/2mins_corner/</a>
      </li>
    </div>

    <div class="gg-map">
      <strong> Địa chỉ liên hệ</strong> 
      <div>Tòa BA1, Ký túc xá khu B, Đại học Quốc gia TPHCM</div>
      <div class="container">
        <div class="row">
           <div class="col-md-12 api-google">
            <a href="https://www.google.com/maps/search/nh%C3%A0+a1+ktx+khu+b+dhqg+tphcm+t%C3%B4+v%C4%A9nh+di%E1%BB%87n+th%E1%BB%8B+x%C3%A3+d%C4%A9+an+binh+duong+vietnam/@10.8843521,106.7821318,16z" style="color:blue;"></a> 
          </div>
          <div class="hinh" id="googleMap" style="width: 100%;height: 400px;">Google Map</div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- MAP -->
  <script type="text/javascript">
    var gmap = new google.maps.LatLng(10.8819594,106.7817238);

    var marker;
    function initialize()
    {
      var mapProp = {
       center:new google.maps.LatLng(10.8819594,106.7817238),
       zoom:16,
       mapTypeId:google.maps.MapTypeId.ROADMAP
     };

     var map=new google.maps.Map(document.getElementById("googleMap")
      ,mapProp);


     var styles = [
     {
      featureType: 'road.arterial',
      elementType: 'all',
      stylers: [
      { hue: '#fff' },
      { saturation: 100 },
      { lightness: -48 },
      { visibility: 'on' }
      ]
    },{
      featureType: 'road',
      elementType: 'all',
      stylers: [

      ]
    },
    {
      featureType: 'water',
      elementType: 'geometry.fill',
      stylers: [
      { color: '#adc9b8' }
      ]
    },{
      featureType: 'landscape.natural',
      elementType: 'all',
      stylers: [
      { hue: '#809f80' },
      { lightness: -35 }
      ]
    }
    ];

    var styledMapType = new google.maps.StyledMapType(styles);
    map.mapTypes.set('Styled', styledMapType);

    marker = new google.maps.Marker({
      map:map,
      draggable:true,
      animation: google.maps.Animation.DROP,
      position: gmap
    });
    google.maps.event.addListener(marker, 'click', toggleBounce);
  }

  function toggleBounce() {

    if (marker.getAnimation() !== null) {
      marker.setAnimation(null);
    } else {
      marker.setAnimation(google.maps.Animation.BOUNCE);
    }
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>

 

</body>
</html>