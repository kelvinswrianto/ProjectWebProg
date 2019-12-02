@extends('layout')

@section('title', 'Update Profile')

@section('contents')
    <p id="title">Update Courier</p>
    <hr>

    <div class="form-insert">
        <form action="/profile" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('put')}}
            <table id="profile-insert">
                <tr>
                    <td><span>Name</span></td>
                    <td><input type="text" name="nameregister" value="{{Session::get('username')}}"></td>
                    {{$errors->first('nameregister')}}
                </tr>
                <tr>
                    <td><span>E-Mail Address</span></td>
                    <td><input type="text" name="emailregister" value="{{Session::get('email')}}"></td>
                    {{$errors->first('emailregister')}}
                </tr>
                <tr>
                    <td><span>Phone Number</span></td>
                    <td><input type="tel" name="phoneregister" value="{{Session::get('phone')}}"></td>
                    {{$errors->first('phoneregister')}}
                </tr>
                <tr>
                    <td><span>Gender</span></td>
                    <td>
                        <input type="radio" name="gender" value="male">Male<br>
                        <input type="radio" name="gender" value="female">Female<br>
                    </td>
                    {{$errors->first('gender')}}
                </tr>
                <tr>
                    <td><span>Address</span></td>
                    <td><input type="text" name="address" value="{{Session::get("address")}}"></td>
                    {{$errors->first('address')}}
                </tr>
                <tr>
                    <td>Profile Image</td>
                    <td><input type="file" name="product_image"></td>
                    {{$errors->first('product_image')}}
                </tr>
            </table>
            <div class="submit">
                <input type="submit" name="" value="Update">
            </div>
        </form>
    </div>
@endsection
