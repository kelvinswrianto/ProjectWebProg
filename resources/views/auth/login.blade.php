@extends('layout')

@section('title', 'Login')

@section('contents')
    @if(\Session::has('alert'))
        <div class="messagealertdanger">
            <div class="alert-danger">
                <div>{{Session::get('alert')}}</div>
            </div>
        </div>
    @endif
    @if(\Session::has('alert-success'))
        <div class="messagealert">
            <div class="alert-success" role="alert">
                <div>{{Session::get('alert-success')}}</div>
            </div>
        </div>
    @endif
    <p id="title">Login</p>
    <hr>
    <div class="form-insert">
        <form action="{{url('/loginPost')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="field1"><span>E-mail Address</span>
                <input type="email" class="input-field" name="emaillogin" value="{{ Cookie::get('cookie') }}" autofocus>
                <td>
                    {{$errors->first('emaillogin')}}
                </td>
            </label>

            <label for="field1"><span>Password</span>
                <input type="password" class="input-field" name="passlogin">
                <td>
                    {{$errors->first('passlogin')}}
                </td>
            </label>

            <label class="rem" for="remember">
                <input id="remember" class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                Remember Me
            </label>

            <div class="submit"><input type="submit" value="Login" /></div>

            <p class="forgot">
                Forgot Your Password?
            </p>
        </form>
    </div>
@endsection
