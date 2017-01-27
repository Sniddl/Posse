@extends('layouts.app')

@section('content')
<style media="screen">


    .form-container {
        position: absolute;
        width: 100%;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        background: rgba(0,0,0,0.12);
        padding: 30px 0;
        color: white;
        text-shadow: 1px 1px #504e4e;
        font-weight: 300;
    }
    .btn-outline-primary{
      width: 100%;
      color: white;
      border-color: white;
    }
</style>
<div class="container">
    <div class="row">
      <div class="form-container">
        <form class="col-lg-8 offset-lg-2 col-md-8 offset-md-2" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
              <button type="submit" class="btn btn-outline-primary">Register</button>
            </div>
        </form>
      </div>

</div>
@endsection
