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
    color: white;
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
ul {
    list-style-type: none;
    margin: -10px;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;

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


</style>
</head>
<body style="background: -webkit-linear-gradient(#D96E88, #423853);padding-bottom:30px; color:white;font-family:Roboto;">
  @include('navigation')
  <br>

<div style="margin:auto; margin-top:40px;text-align:center;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width:40%; padding-top:15px; padding-bottom:15px;">
<div style="margin:auto; text-align:left; width:50%; padding-top:30px;padding-bottom:30px;">
  <h style="font-size:20px;color:#edd0cd;text-align:center;">Your Favorites </h>

  <br>
  <br>
@if ($favorites->count()==0)
No favorites yet!
@endif
  @foreach($favorites as $favorite)




  <input type="hidden" name ="favID" value="{{$favorite->id}}">
<input type="hidden" name ="spotID" value="{{$favorite->spot_id}}">
  <a href='/spots/{{$favorite->spot_id}}'><div style="font-family:Roboto-Light;width:300px;margin-top:10px;">{{$favorite->spotName}}  </a> <a href="/favorites/{{$favorite->id}}"><img style="float:right;width:30px;"src="trash.png"></a></div>


  @endforeach
</div>
</div>
</body>
</html>
