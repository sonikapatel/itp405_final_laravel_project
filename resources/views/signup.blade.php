<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Megrim');

@font-face {
  font-family: 'Roboto';
  src:  url('Roboto-Light.ttf') format('ttf'),

}
@font-face {
  font-family: 'hello';
  src:  url('study.ttf') format('ttf'),

}
.alert-danger,
.alert-error {
color: #b94a48;
background-color: #f2dede;
border-color: #eed3d7;
}
.alert {
padding: 8px 4px 8px 4px;
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
</head>
<body style="background: -webkit-linear-gradient(#D96E88, #423853); font-family:Roboto;">
  @if (count($errors) > 0)
               <div class="alert alert-danger" role="alert">
                 <ul>
                   @foreach ($errors->all() as $error)
                   {{ $error }}
                   @endforeach
                 </ul>
               </div>
             @endif
  <div style="margin-top:250px; text-align:center;">
<p style="font-family: 'Megrim', cursive; color:white; font-size:60px;"> Study Spot </p>
    <div style="text-align:center; margin:auto;  margin-top:-30px;width:200px; ">
<form method="post">
        {{ csrf_field() }}
        <div class="form-group">

          <input type="name" id="name" name="name" style="width:200px;font-family:Roboto; padding:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" placeholder="Name"class="form-control">
        </div>
            <br>
        <div class="form-group">

          <input type="email" id="email" name="email" style="width:200px;font-family:Roboto; padding:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" placeholder="Email"class="form-control" value="{{Request::old('email')}}">
        </div>
            <br>
        <div class="form-group">

          <input type="password" style="width:200px;font-family:Roboto; padding:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"id="password" name="password"placeholder="Password" class="form-control">
        </div>
        <br>
        <div class="form-group">

          <input type="password" id="password_confirmation" style="width:200px;font-family:Roboto; padding:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"placeholder="Confirm Password"name="password_confirmation" class="form-control">
        </div>
        <br>
        <button style="font-family:Roboto; padding:10px; width:90px; margin:auto; font-family:'Roboto'; font-size:14px; background-color:#2E314C; color:white; " type="submit" value="Sign Up" class="btn btn-primary">Sign Up </button>
      </form>
    </div>
</body>
</html>
