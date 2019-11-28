@extends('layout')

@section('title', 'Update')

@section('content')
    <div class="insert-page-container">

        <h1>Update Courier</h1>
        <form action="/courier/{{$courier->id}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('put')}};
            <table id="courier-insert">
                <tr>
                    <td>Courier ID</td>
                    <td><input type="text" name="courier_name" value="{{$courier->id}}" disabled></td>
                    <!-- code error here -->
                </tr>
                <tr>
                    <td>Courier Name</td>
                    <td><input type="text" name="courier_name" value="{{$courier->courier_name}}"></td>
                    <!-- code error here -->
                </tr>
                <tr>
                    <td>Shipping Cost</td>
                    <td><input type="number" name="courier_price" value="{{$courier->courier_price}}"></td>
                    <!-- code error here -->
                </tr>
            </table>

            <input type="submit" name="" value="Insert">
        </form>
    </div>
@endsection
