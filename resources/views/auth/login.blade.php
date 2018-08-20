@include('inc.header')

<body class="auth-wrapper">
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
        <div class="logo-w">
            <a href="index.html"><img alt="" src="img/logo-big.png"></a>
        </div>
        <h4 class="auth-header">Login Form</h4>
        <form action="{{url('/login')}}" method="POST" role="form">
            {{Form::token()}}
            <div class="form-group {{$errors->has('email') ? 'has-error': ''}}" >
                <label for="email">Email Address</label>
                <input id="email" class="form-control" placeholder="Enter your Email Address" type="email" value="{{old('email')}}" name="email">

                @if($errors->has('email'))
                    <span class="help-block">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                    @endif
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
            </div>
            <div class="form-group" {{$errors->has('password') ? 'has-password':''}}>
                <label for="">Password</label>
                <input class="form-control" placeholder="Enter your password" type="password" name="password" id="password">
                @if($errors->has('password'))
                    <span class="help-block">
                        <strong>
                            {{$errors->first('password')}}
                        </strong>
                    </span>
                    @endif
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
            </div>
            <div class="buttons-w">
                <button class="btn btn-primary" type="submit">Log me in</button>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">Remember Me</label>
                    <a class="btn btn-link" href="{{url('/password/reset')}}">Forgot Password</a>
                </div>
            </div>
        </form>
    </div>
</div>
</body>


</html>



