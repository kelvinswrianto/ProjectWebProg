@extends('admin.layoutadmin')
@section('title', "Insert Flower")

@section('contents')
    <p id="title">Insert Flowers</p>
    <hr>
    <div class="form-insert">
        <form action="" method="post">
            <label for="field1"><span>Flower Name</span><input type="text" class="input-field" name="field1" value="" /></label>
            <label for="field2"><span>Flower Price</span><input type="number" class="input-field" name="field2" value="" /></label>
            <label for="field3"><span>Flower Stock</span><input type="number" class="input-field" name="field3" value="" /></label>
            <label for="field4"><span>Flower Type</span><select name="field4" class="select-field">
                    @foreach($flower_types as $type)
                        <option value="{{$type->flower_type}}">{{$type->flower_type}}</option>
                        @endforeach
                </select></label>
            <label for="field5"><span>Flower Description</span><textarea name="field5" class="textarea-field"></textarea></label>
            <label for="field6"><span>img_url</span><input type="file" class="input-field" name="field6" value="" /></label>
            <div class="submit"><input type="submit" value="Insert" /></div>
        </form>
    </div>

    @endsection

