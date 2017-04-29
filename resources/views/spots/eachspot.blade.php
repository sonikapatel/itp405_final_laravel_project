
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Megrim');
@font-face {
  font-family: 'BlowBrush';
  src:  url('blowbrush.ttf') format('ttf'),

}
@font-face {
  font-family: 'Roboto';
  src:  url('Roboto-Light.ttf') format('ttf'),

}
a:link {
    color: #edd0cd;;
    text-decoration: none;
}
a:visited {
    color: white;
    text-decoration: none;
}
a:hover {
    color: #edd0cd;
    text-decoration: none;
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}
.w3-btn,.w3-button{border:none;display:inline-block;outline:0;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}

.w3-modal{z-index:3;display:none;padding-top:100px;position:fixed;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4)}
.w3-modal-content{margin:auto;background-color:#fff;position:relative;padding:0;outline:0;width:600px}
.w3-container:after,.w3-container:before,.w3-panel:after,.w3-panel:before,.w3-row:after,.w3-row:before,.w3-row-padding:after,.w3-row-padding:before,
.w3-cell-row:before,.w3-cell-row:after,.w3-clear:after,.w3-clear:before,.w3-bar:before,.w3-bar:after{content:"";display:table;clear:both}
.w3-display-topright{position:absolute;right:0;top:0}
</style>
<script src="jquery-3.2.0.min.js"></script>
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

</head>
<body style="background: -webkit-linear-gradient(#D96E88, #423853); color:white;font-family:Roboto;">

@include('navigation')
    <div style="width:60%; margin:auto; padding:70px; ">
      <img style="float:right;width:340px" src='{{ $spot->imageURL }}'>

  <p style="font-size:40px;">{{ $spot->spotName }}
    @if ($spot->Wifi ===1)
    <img style="width:20px" src="https://maxcdn.icons8.com/Share/icon/Network//wifi1600.png">
    @endif
    @if ($spot->Outlets ===1)
    <img style="width:20px" src="https://d30y9cdsu7xlg0.cloudfront.net/png/945-200.png">
    @endif
  </p>
  <p style="font-size:15px;margin-top:-37px;">  &nbsp{{ $spot->SpotType->spotType }}</p>
  <p style="font-size:14px;"><img style="width:15px" src='https://www.rawfoodmagazine.com/wp-content/uploads/2016/04/clock-icon-white.gif'>  {{$spot->StartTime->startingTime}} to {{ $spot->ClosingTime->closingTime }}</p>

  <p id="address" value="{{$spot->Address}} "style="font-size:14px;"><img src="http://www.gracefwbc.com/hp_wordpress/wp-content/uploads/2016/05/Location-Icon-White.png" style="width:18px;">{{ $spot->Address }}</p>

<script>
var burl = "https://www.google.com/maps/place/";
var hello = $('#address').text();
var link = burl+hello;
</script>
<script>
document.write('<a href="' + link + '">Get Directions</a>');
</script>
<br>
<br>
<br>
<br>
<hr>

<br>
<h style="font-size:20px;"> Reviews
<button onclick="document.getElementById('id01').style.display='block'" class="w3-button" style='font-family:Roboto; padding:10px;border: 0; width:100px; margin:auto; margin-left:15px; font-size:12px; background-color:#2E314C; color:white;'> Write a Review </button>
</h>
<br>
<br>
@if($reviews->count()==0)
No reviews listed yet!
@endif
@foreach($reviews as $review)


<div style="font-family:Roboto-Light;">{{$review->review}}<br><br></div>


<input type="hidden" name ="theID" value="{{$review->spot_id}}">


@endforeach
</div>

<div id="id01" class="w3-modal">
    <div class="w3-modal-content" style="width:300px;" >
      <div class="w3-container" style="color:black;">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <br>
        <br>
       <form action='/' method="post" style=" text-align:center;margin:auto;padding:10px;padding-bottom:20px;">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

          <textarea style="width:200px;height:140px;" name="review" id="review"></textarea>
        <div style="visibility:hidden">  <input type="text" id = "spot_id"name ="spot_id" value="{{$spot->id}}">{{$spot->id}}</p>
        </div>
            <button style="font-family:Roboto; padding:5px;border: 0; width:100px; margin:auto; margin-left:15px; font-size:12px; background-color:#2E314C; color:white;"> Write a Review </button>

        </form>

      </div>
    </div>
  </div>
</div>
      <script>
      <script>
      $(document).ready(function(){
          $("#writeReview").click(function(){
              $("#myModal2").modal();
          });
        });
      </script>
    </div>
  </div>

</body>
</html>
