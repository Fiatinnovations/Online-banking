
@include('inc.header')
<body>
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w wider">
        <div class="logo-w">
            <a href="index.html"><img alt="" src="img/logo-big.png"></a>
        </div>
        <h4 class="auth-header">Create new account</h4>
        <form action="{{url('/register')}}" method="POST" >
            {{Form::token()}}

            <div class="form-group" {{$errors->has('name') ? 'has-error': ''}}>
                <label for="">Name</label>
                <input class="form-control" placeholder="Enter name" type="name" name="name" id="name" value="{{old('name')}}">
                <div class="pre-icon os-icon os-icon-email-2-at2"></div>
                @if($errors->has('name'))
                    <span>
                        <strong>
                           {{$error->first('name')}}
                        </strong>
                    </span>
                @endif

            </div>

            <div class="form-group" {{$errors->has('email') ? 'has-error': ''}}>
                <label for=""> Email address</label>
                <input class="form-control" placeholder="Enter email" type="email" name="email" id="email" value="{{old('email')}}">
                <div class="pre-icon os-icon os-icon-email-2-at2"></div>
                @if($errors->has('email'))
                    <span>
                        <strong>
                           {{$error->first('email')}}
                        </strong>
                    </span>
                @endif

            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group" {{$errors->has('password') ? 'has-error':'' }}>
                        <label for=""> Password</label>
                        <input class="form-control" placeholder="Password" type="password" id="password" name="password" value="{{old('password')}}" >
                        <div class="pre-icon os-icon os-icon-fingerprint"></div>
                        @if($errors->has('password'))
                            <span>
                                <strong>
                                    {{$error->first('password')}}
                                </strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group" {{$errors->has('password_confirmation') ? 'has-error' : ''}} >
                        <label for="">Confirm Password</label>
                        <input class="form-control" placeholder="Password" type="password" name="password_confirmation" id="confirm-password">

                        @if($errors->has('password_confirmation') ? 'has-error' : '')
                            <span>
                                <strong>
                                    {{$error->first('password_confirmation')}}
                                </strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="buttons-w">
                <button class="btn btn-primary" type="submit">Register Now</button>
                <button style="margin-left: 110px" class="btn btn-primary">Login Here</button>

            </div>

        </form>
    </div>
</div>
</body>

</html>



