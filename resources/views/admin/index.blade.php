<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            font-family: "Calibri Light";
            margin: 0px;
            padding: 0px;
        }
        /* Style the header with a grey background and some padding */
        .header {
            overflow: hidden;
            background-color: #F37A71;
            padding: 0px 100px;
        }

        /* Style the header links */
        .header a, .rightheader div{
            float: left;
            color: white;
            text-align: center;
            padding: 10px 5px;
            text-decoration: none;
            font-size: 14px;
            border-radius: 4px;
            margin: 0px 10px;
        }
        /* Change the background color on mouse-over */
        .menu:hover{
            background-color: white;
            color: #F37A71;
        }

        /* The dropdown container */
        .dropdown {
            float: left;
            overflow: hidden;
        }

        /* Dropdown button */
        .dropbtn {
            font-size: 14px;
            border: none;
            outline: none;
            color: white;
            padding: 10px 5px;
            background-color: inherit;
            border-radius: 4px;
            margin: 0px 10px;
        }

        /* Dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 4px;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            float: none;
            color: #F37A71;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: center;
            border-radius: 4px;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            margin-left: 10px;
            display: block;
        }

        i {
            border: solid black;
            border-width: 0 2px 2px 0;
            display: inline-block;
            padding: 2px;
            border-color: white;
            margin-bottom: 2px;
        }
        .down {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
        }
        .dropbtn:hover i{
            border-color: #F37A71;
        }
        .rightheader{
            float: right;
        }
        .rightheader div{
            display: inline-block;
        }

        .contentbtn{
            color: white;
            text-align: center;
            padding: 10px 5px;
            text-decoration: none;
            font-size: 14px;
            border-radius: 4px;
            margin: 0px 10px;
            background-color: #F37A71;
        }
        .contentbtn:hover{
            background-color: blanchedalmond;
            border-color: #F37A71;
            color: #F37A71;
        }
        .content{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .content hr{
            width: 80%;
        }
        .content #title{
            font-size: 30px;
            margin: 20px;
            color: #F37A71;        }

    </style>
</head>
<body>
<div class="header">
    <div class="leftheader">
        <a href="#default" class="logo">Online Florist</a>
        <a href="#home" class="menu">Profile</a>
        <div class="dropdown">
            <button href="#contact" class="menu dropbtn">
                Admin Menu
                <i class="arrow down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Manage Flower</a>
            </div>
        </div>
    </div>
    <div class="rightheader">
        <div class="datediv"><p id="date"></p></div>
        <div class="loginstatus">ADMIN()</div>
    </div>
</div>

<div class="content">
    <p id="title">Manage Flowers</p>
    <hr>
    <a href="" class="contentbtn">Insert Flower</a>
</div>

</body>
<script>
    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
</script>
</html>
