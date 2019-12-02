@extends('layout')

@section('title', 'Home Page')

@section('contents')
    <p id="title">Catalog</p>
    <hr>
    <div>
        <form class="form-insert">
            <input class="input-search" type="text" name="search" placeholder="I want to buy..">
            <button class="searchbutton">Search</button>
        </form>
    </div>

    <div class="cardd">
        @foreach($flowers as $flower)
            <div class="cards">
                <div class="image">
                    <img src="{{'storage/flowerimages/'.$flower->flower_image}}">
                </div>

                <div class="namedes">
                    <div class="name">
                        <p>{{$flower->name}}</p>
                    </div>

                    <div class="des">
                        <p>{{$flower->description}}</p>
                    </div>
                </div>

                <div class="detailorder">
                    <form class="d1" action="/flowers/{{$flower->id}}" method="get">
                        <input type="submit" value="Details">
                    </form>

                    <form class="d1" action="/flowers/{{$flower->id}}/order" method="post" enctype="multipart/form-data">
                        <input type="submit" value="Order">
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    {{$flowers->links()}}
@endsection
