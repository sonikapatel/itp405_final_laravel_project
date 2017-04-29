
<html>
<head>
<style>
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


</head>

<body style="background: -webkit-linear-gradient(#D96E88, #423853); font-family:Roboto-Light; color:white;">
@include('navigation')
<br>
@if (session('successStatus'))
          <div class="alert alert-success" role="alert" style="color:#4F8A10; background-color:#DFF2BF">
            {{  session('successStatus') }}
          </div>
        @endif
        @if (session('failedStatus'))
                  <div class="alert alert-danger" role="alert" >
                    {{  session('failedStatus') }}
                  </div>
                @endif
@if (count($errors) > 0)
             <div class="alert alert-danger" role="alert">

                 @foreach ($errors->all() as $error)
                 {{ $error }}
                 @endforeach

             </div>
           @endif

<br>
<br>

<div style="margin:auto; text-align:center; margin-top:140px;width:500px;padding:30px; ">

<p style="color:white;font-size:20px; "> Change Password </p>
<form method="post">
        {{ csrf_field() }}
          <input type="password" id="currentpassword"style="width:200px;font-family:Roboto; padding:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"id="password" name="currentpassword"placeholder="Current Password" class="form-control">
        <br>
        <br>

          <input type="password" id="newpassword" style="width:200px;font-family:Roboto; padding:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"placeholder="New Password"name="newpassword" class="form-control">
        <br>
        <br>

        <button style="font-family:Roboto; padding:5px; width:100px; margin:auto; font-family:'Roboto'; font-size:12px; background-color:#2E314C; color:white; " type="submit" value="Change Password" class="btn btn-primary">Submit </button>
      </form>


</div>

</div>

</body>
</html>
