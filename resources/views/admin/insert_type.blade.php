@extends('admin.layoutadmin')
@section('title', "Insert Flower Type")

@section('contents')
    <p id="title">Insert Flower Type</p>
    <hr>
    <div class="form-insert">
        <form action="" method="post">
            <label for="field1"><span>Flower Type</span><input type="text" class="input-field" name="field1" value="" /></label>
            <div class="submit"><input type="submit" value="Insert" /></div>
        </form>
    </div>
@endsection

