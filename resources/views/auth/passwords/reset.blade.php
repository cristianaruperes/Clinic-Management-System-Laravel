@extends('layoutlogin.main_login')

@section('content')
<div class="card">
            <div class="body">
                <form id="sign_up" method="POST" action="{{ route('password.request') }}">
                    @csrf

                     <input type="hidden" name="token" value="{{ $token }}">

                    <div class="msg">Reset Email Password</div>
                
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="Email Address" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" minlength="6" value="{{ $email ?? old('email') }}"  placeholder="Password" required>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password_confirmation" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                   
                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">RESET PASSWORD</button>
                </form>
            </div>
        </div>
@endsection
