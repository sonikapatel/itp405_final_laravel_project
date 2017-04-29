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

<body style="background: -webkit-linear-gradient(#D96E88, #423853);  color:white;padding-bottom:80px;">
@include('navigation')

<div style="margin-top:200px; margin:auto; margin-top:100px; font-family:Roboto;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding:10px; width:500px;">



<p style="font-family:Roboto; color:white; font-size:25px; text-align:center;">Search for a <span style="color:#edd0cd"> study spot </span>near you </p>
  <form action="/results"style=" margin:auto;  padding:10px; font-family:Roboto-Light">
<div style="width:370px; margin:auto;">
  <strong><p style="color:#edd0cd"> Features </p></strong>

  <input class="outlets" type="checkbox" name="outlets" value="1">
<label>Outlets</label>
<br>
  <input class="wifi" type="checkbox" name="wifi" value="1">
<label>Wifi</label>
</div>
<div style="width:370px; margin:auto;">
<strong><p style="color:#edd0cd"> Spot Type </p></strong>
<input id="CoffeeShop" name="coffeeshop" value="1"type="checkbox">
<label>Coffee Shop</label>
<br>
<input class="Rooftop" value="2"name ="rooftop"type="checkbox">
<label>Rooftop</label>
<br>
<input class="Hotel" value="3"name ="hotel"type="checkbox">
<label>Hotel</label>
<br>
<input class="Park" value="4"name ="park"type="checkbox">
<label>Park</label>
<br>
<input class="Library" name="library" value="5" type="checkbox">
<label>Library</label>
<br>
<input class="Outdoor Patio" name="outdoorpatio"value="6"type="checkbox">
<label>Outside Patio</label>
<br>
<input class="Apt Study Rooms" name="aptstudyrooms"value="7"type="checkbox">
<label>Apt Study Rooms</label>
</div>

<div style="width:370px; margin:auto;">
<strong><p style="color:#edd0cd"> Open after : </p></strong>
<select name="closingtime">
    <option value="9 PM">9 PM</option>
    <option value="10 PM">10 PM</option>
    <option value="11 PM">11 PM</option>
    <option value="12 AM">12 AM</option>
    <option value="1 AM">1 AM</option>
    <option value="2 AM">2 AM</option>
    <option value="3 AM">3 AM</option>

</select>
</div>
<br>
<br>
<div style="float:right; margin-right:40px;">
<button style=" border:0; font-size:13px;padding:10px;background-color:#edd0cd; color:black;"> Search </button>
</div>
<br>
<br>
<br>

  </form>


</div>








</body>





</html>
