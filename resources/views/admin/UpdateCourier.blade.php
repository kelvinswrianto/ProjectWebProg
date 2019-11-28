@extends('admin.layoutadmin')

@section('title', 'Update Courier')

@section('contents')
    <p id="title">Update Courier</p>
    <hr>
    <div class="form-insert">
        <form action="/courier/{{$courier->id}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('put')}}
            <table id="courier-insert">
                <tr>
                    <td><span>Courier ID</span></td>
                    <td><input type="text" name="courier_name" value="{{$courier->id}}" disabled></td>
                </tr>
                <tr>
                    <td><span>Courier Name</span></td>
                    <td><input type="text" name="courier_name" value="{{$courier->courier_name}}"></td>
                    {{$errors->first('courier_name')}}
                </tr>
                <tr>
                    <td><span>Shipping Cost</span></td>
                    <td><input type="number" name="courier_price" value="{{$courier->courier_price}}"></td>
                    {{$errors->first('courier_price')}}
                </tr>
            </table>
            <div class="submit">
                <input type="submit" name="" value="Insert">
            </div>
        </form>
    </div>
@endsection
