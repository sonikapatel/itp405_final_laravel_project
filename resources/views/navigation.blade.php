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

  li {
      float: left;

  }

  li a {
      display: block;
      color: white;
      text-align: center;
      padding: 16px 16px;
      text-decoration: none;
  }

  .hello {
      display: block;
      color: white;
      text-align: center;
      padding: 17px 16px;
      text-decoration: none;
  }

  li a:hover:not(.active) {
      background-color: #473A55;
      height:20px;
  }

  .active {
      background-color: #4CAF50;
  }
  .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
      float:right;
    /*position: absolute;;*/
    display: inline-block;
      z-index: 1;

}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;

}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
      z-index: 1;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}



  </style>
</head>
<body>
<ul style="font-family:Roboto-Light; margin-top:-10px; ">
<li class ='hello'style="font-family: 'Megrim', cursive;">Study Spot</li>
<li><a  href="/about">About</a></li>
<li><a href="/search">Search</a></li>
<li><a href="/favorites">Favorites</a></li>

  <div class="dropdown" style="float:right; margin-right:150px; padding-right:10px; ">
<img style="width:30px;color:white; margin-top:12px; padding-left:4px;text-align:center;"src='/icon.png'>&nbsp<p style="padding-top:3px;float:right;"> {{Auth::user()->name}} </p>
    <div class="dropdown-content">
      <a href="/userprofile">Change Password</a>
      <a href="/logout">Logout</a>
    </div>
  </div>
</ul>
</body>
</html>
