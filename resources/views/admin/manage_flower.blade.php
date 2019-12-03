@extends('admin.layoutadmin')
@section('title', "Manage Flowers")
<style>
    .topcard {
        height: 50%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .bottomcard {
        height: 50%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .cardview {
        display: flex;
        flex-direction: row;
        flex-flow: wrap;
        justify-content: center;
    }

    .card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        max-width: 233px;
        min-width: 220px;
        height: 370px;
        background-color: #ffffff;
        border-width: 2px;
        border-radius: 10px;
        border-color: #F37A71;
        border-style: solid;
        margin-right: 20px;
        margin-left: 20px;
        margin-top: 50px;
    }

    .image img {
        padding-top: 9px;
        width: 92%;
        height: 150px;
        max-height: 150px;
        padding-left: 9px;
        border-radius: 20px;
    }

    .detailorder form {
        width: 100%;
        display: flex;
        justify-content: space-around;
    }

    .detailorder {
        display: flex;
    }

    .name {
        padding-top: 10px;
        font-size: 22px;
        font-weight: bold;
        padding-left: 10px;
    }

    .detailorder input[type=submit] {
        border: none;
        padding: 10px 15px 10px 15px;
        color: #fff;
        font-size: 20px;
        box-shadow: 1px 1px 4px #DADADA;
        border-radius: 6px;
        width: 100px;
        margin-bottom: 10px;
    }

    #update {
        background-color: #CBB956;
    }

    #delete {
        background-color: #bf5329;
    }

    #update:hover, #delete:hover {
        border: solid #F37A71 1px;
        background-color: white;
        color: #F37A71;
        cursor: pointer;
    }


    .pagination li {
        display: inline-block;
        color: black;
        float: left;
        text-decoration: none;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 20px 5px 20px 5px;
    }

    .pagination a {
        display: inline-block;
        padding: 8px 16px;
        text-decoration: none;
    }

    .pagination li.active {
        padding: 8px 16px;
        background-color: #F37A71;
        color: white;
        border: 1px solid #F37A71;
    }

    .pagination li.disabled {
        padding: 8px 16px;
    }

    .pagination li:hover:not(.active) {
        background-color: #ddd;
    }

    .pagination li:first-child {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .pagination li:last-child {
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .desc {
        padding-left: 10px;
        max-height: 100px;
        overflow: auto;
        padding-top: 15px;
    }
</style>

@section('contents')
    <p id="title">Manage Flowers</p>
    <hr>
    <a href="/admin/flowers/insert" class="insertbtn">Insert Flower</a>
    <form class="search" action="action_page.php">
        <input type="text" placeholder="I want to find ..." name="search">
        <button type="submit">Search</button>
    </form>

    <div class="cardview">
        @foreach($flowers as $flower)
            <div class="card">
                <div class="topcard">
                    <div class="image">
                        <img src="{{ asset('storage/images/'.$flower->flower_image)}}" alt="flower image">

                    </div>
                    <div class="name">
                        <p>{{$flower->flower_name}}</p>
                    </div>
                </div>
                <div class="bottomcard">
                    <div class="desc">
                        <p>{{$flower->flower_description}}</p>
                    </div>

                    <div class="detailorder">
                        <form action="/admin/flowers/{{$flower->id}}/edit" method="get">
                            @csrf
                            <input id="update" type="submit" value="Update">
                        </form>
                        <form action="/admin/flowers/{{$flower->id}}/delete" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input id="delete" type="submit" value="Delete">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{$flowers->links()}}
@endsection
