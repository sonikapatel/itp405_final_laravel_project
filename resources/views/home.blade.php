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

</style>
</head>
<body style="background: -webkit-linear-gradient(#D96E88, #423853); font-family:Roboto; text-align:center;">


<div style="margin-top:250px; text-align:center;">

<p style="font-family: 'Megrim', cursive; color:white; font-size:60px;"> Study Spot </p>
<!-- <a href='search'><div style="padding:10px; width:100px; margin:auto; font-family:'Roboto'; background-color:#2E314C; color:white;"> LET'S GO </div></a> -->
<div style="text-align:center; margin:auto; width:200px; margin-top:-20px; ">
  @if (session('loginSuccess'))
  <div style="text-align:center;margin:auto;">   <p style="color:white;font-size:20px; margin-top:-50px;"> Welcome {{Auth::user()->name}}</p></div>
<a href='search'>  <button style="font-family:Roboto; padding:10px; width:90px; margin:auto; font-family:'Roboto'; font-size:14px; background-color:#2E314C; color:white; "type="submit">Explore</button></a>

  @else
<a href='login'><button style="font-family:Roboto; padding:10px; width:90px; margin:auto; font-family:'Roboto'; font-size:14px; background-color:#2E314C; color:white; float:left;"> LOGIN </button></a>
<a href='signup'><button style="font-family:Roboto;padding:10px; width:90px; margin:auto; margin-left:10px; font-size:14px; background-color:#2E314C; color:white;float:left;"> SIGN UP </button></a>
  @endif
</div>

</div>








</body>





</html>
