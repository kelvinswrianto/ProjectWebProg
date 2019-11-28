@extends('admin.layoutadmin')
@section('title', "Manage Flower Types")

@section('contents')
    <p id="title">Manage Flower Types</p>
    <hr>
    <a href="" class="insertbtn">Insert Flower Type</a>
    <form class="search" action="action_page.php">
        <input type="text" placeholder="I want to find ..." name="search">
        <button type="submit">Search</button>
    </form>
@endsection
