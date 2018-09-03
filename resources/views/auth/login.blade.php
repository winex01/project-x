@extends('layouts.master')
@section('content')
  
  <div class="panel panel-default">
      <div class="panel-heading">{{ __('Login') }}</div>

      <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
              @csrf

              <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-4 control-label">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="col-md-4 control-label">{{ __('Password') }}</label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' has-error' : '' }}" name="password" required>

                      @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-8 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                            <span class="fa fa-sign-in" aria-hidden="true"></span>
                        </button>

                      <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                  </div>
              </div>
          </form>
      </div>
  </div>

  <hr>
@endsection