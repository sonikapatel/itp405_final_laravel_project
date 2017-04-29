<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Megrim');

    @font-face {
      font-family: 'Study';
      src:  url('study.ttf') format('ttf'),

    }
    @font-face {
      font-family: 'Roboto';
      src:  url('Roboto-Light.ttf') format('ttf'),

    }
    .alert {
    padding: 8px 35px 8px 14px;
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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body style="background: -webkit-linear-gradient(#D96E88, #423853);">
  @if (session('loginError'))
  <div class="alert alert-danger" style="font-family:Roboto;">
  <p>{{session('loginError')}}</p>
  </div>
    @endif

    <div style="margin-top:250px; text-align:center;">
    <p style="font-family: 'Megrim', cursive; color:white; font-size:60px;"> Study Spot </p>
    <div style="text-align:center; margin:auto;  width:200px; ">

    <form method="post">
      {{ csrf_field() }}

      <input type="text" name="email" placeholder="Email" style="width:200px;font-family:Roboto; padding:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <br>
      <br>
      <input type="password" name="password" placeholder="Password" style="font-family:Roboto;padding:5px;width:200px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <br>
      <br>
      <button style="font-family:Roboto; padding:10px; width:90px; margin:auto; font-family:'Roboto'; font-size:14px; background-color:#2E314C; color:white; "type="submit">Login</button>
    </form>
  </div>
  </body>
</html>
