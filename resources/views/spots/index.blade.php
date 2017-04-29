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
ul {
    list-style-type: none;
    margin: -10px;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

a:link {
    color:#edd0cd;
    text-decoration: none;
}
li {
    float: left;

}
.fav:hover {
    background: url('star.png');
    margin-top:-20px;

}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.hello {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #473A55;
}

.active {
    background-color: #4CAF50;
}
.alert-danger {
color: #b94a48;
background-color: #f2dede;
border-color: #eed3d7;
}
.alert-success {
    color: #4F8A10;
    background-color: green;
}
.alert {
padding: 15px;
margin-bottom: 18px;
color: #A94442;
text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
background-color: #F2DEDE;
border: 1px solid #fbeed5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}

</style>
<script src="jquery-3.2.0.min.js"></script>
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body style="background: -webkit-linear-gradient(#D96E88, #423853);padding-bottom:30px; color:white;font-family:Roboto;">
  @include('navigation')
  <br>
  @if (session('successStatus'))
            <div class="alert alert-success" role="alert" style="color:#4F8A10; background-color:#DFF2BF">
              {{  session('successStatus') }}
            </div>
          @endif

<div style="margin:auto; text-align:center; padding:30px;">
  <!-- There are {{$spots->count()}} study spots. -->
</div>
 <p style="text-align:center;">There are {{$spots->count()}} results for your study spot preferences.</p>
 @if($spots->count() ==0)
 <p style="text-align:center;font-family:Roboto-Light;">Return to <a style="color:#edd0cd;"href='/search'>search </a>to  find another study spot.</p>
 @endif
    @foreach ($spots as $spot)

    <div style="width:40%; margin:auto; margin-top:30px;opacity:0.9;padding:30px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">


      <img style="float:right;width:170px; margin-top:10px;" src='{{ $spot->imageURL }}'>

  <a href="/spots/{{$spot->id}}" style="color:#edd0cd;"><p style="float:left;font-size:20px;">{{ $spot->spotName }} </a>
    @if ($spot->Wifi ===1)
    <img style="width:20px" src="https://maxcdn.icons8.com/Share/icon/Network//wifi1600.png">
    @endif
    @if ($spot->Outlets ===1)
    <img style="width:20px" src="https://d30y9cdsu7xlg0.cloudfront.net/png/945-200.png"> &nbsp
    @endif
      <form method="post" style="margin-left:60px;margin-top:14px; ">
  <a class='fav' >  <input style="font-family:Roboto; width:25px;  color: transparent;
     color:#D16B85; height:24px;border-style:none; outline: none;background: transparent;
    cursor: pointer; margin:auto; color:white; background-image: url('openstar.png') " name="favorite" type="submit"  value =""></a>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name ="spotID" value="{{$spot->id}}">
    <script language="javascript">
    $('#fav').hover(function () {
         this.src = "star.png";
     });



    }
</script>
  </form>

  </p>
  <br>
  <div style="margin-top:-20px; font-family:Roboto-Light;">
  <p style="font-size:15px;">{{ $spot->spotType }}</p>
  <p style="font-size:15px;"><strong>Closing Time:</strong> {{ $spot->closingTime }}</p>
</div>
</div>
@endforeach

  <br>

</div>

</body>
</html>
