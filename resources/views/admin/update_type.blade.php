@extends('admin.layoutadmin')
@section('title', "Update Flower Type")

@section('contents')
    <p id="title">Update Flower Type</p>
    <hr>
    <div class="form-insert">
        <form action="" method="post">
            <label for="field1"><span>Flower Type</span><input type="text" class="input-field" name="field1" value="" /></label>
            <label for="field2"><span>Flower Type</span><input type="text" class="input-field" name="field2" value="" /></label>
            <div class="submit"><input type="submit" value="Update" /></div>
        </form>
    </div>
@endsection

