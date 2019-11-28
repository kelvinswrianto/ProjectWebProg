@extends('admin.layoutadmin')
@section('title', "Manage Flowers")
@section('contents')
    <p id="title">Manage Flowers</p>
    <hr>
    <a href="" class="insertbtn">Insert Flower</a>
    <form class="search" action="action_page.php">
        <input type="text" placeholder="I want to find ..." name="search">
        <button type="submit">Search</button>
    </form>
    @endsection
