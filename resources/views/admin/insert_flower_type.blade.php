@extends('admin.layoutadmin')
@section('title', "Insert Flower Type")

@section('contents')
    <p id="title">Insert Flower Type</p>
    <hr>
    <div class="form-insert">
        <form action="" method="post">
            @csrf
            <label for="flower_type"><span>Flower Type</span><input type="text" class="input-field" name="flower_type" value="" /></label>
            <div class="submit"><input type="submit" value="Insert" /></div>
        </form>
    </div>
@endsection

