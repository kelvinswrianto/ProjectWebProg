<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'Default title')
    </title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        /* Style the header with a grey background and some padding */
        .header {
            overflow: hidden;
            background-color: #F37A71;
            padding: 0px 100px;
            height: 80px;
            font-family: "Bahnschrift Light", serif;
        }

        /* Style the header links */
        .header a, .rightheader div {
            float: left;
            color: white;
            text-align: center;
            padding: 25px 5px;
            text-decoration: none;
            font-size: 23px;
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
            font-size: 23px;
            border: none;
            outline: none;
            color: white;
            padding: 25px 5px;
            background-color: inherit;
            border-radius: 4px;
            margin: 0px 10px;
            font-family: "Bahnschrift Light", serif;
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

        .datediv{
            font-family: "Sitka Banner", serif;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="leftheader">
        <a href="#default" class="logo">Online Florist</a>
        <?php
        session_start();
        if(isset($_SESSION['Username'])){
            echo "<a href=#home' class='menu'>Profile</a>";
        }
        ?>
    </div>
    <div class="rightheader">
        <?php
        if(isset($_SESSION['Username'])){
            echo "<div class='leftheader'>";
            echo "<div class='dropdown'>";
            echo "<button href='#contact' class='menu dropbtn'>
                        Admin Menu
                    <i class='arrow down'></i>
                </button>";
            echo "<div class='dropdown-content'>";
            echo "<a href='#'>Manage Flower</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            $username = $_SESSION['username'];
            echo "$username";
            echo "<a href=#' class='datediv' id='date'></a>";
            echo "<a href=#' class='loginstatus'></a>";
        }
        else{
            echo "<a href=#'>Login</a>";
            echo "<a href=#'>Register</a>";
        }
        ?>
    </div>

</div>

<div>
    @yield('content')
</div>
</body>
<script>
    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth();
    d = n.getDay();
    h = n.getHours();
    minute = n.getMinutes();
    second = n.getSeconds();
    var month = new Array();
    month[0] = "Jan";
    month[1] = "Feb";
    month[2] = "Mar";
    month[3] = "Apr";
    month[4] = "May";
    month[5] = "Jun";
    month[6] = "Jul";
    month[7] = "Aug";
    month[8] = "Sep";
    month[9] = "Oct";
    month[10] = "Nov";
    month[11] = "Dec";

    var day = new Array();
    day[0] = "Sun";
    day[1] = "Mon";
    day[2] = "Tue";
    day[3] = "Wed";
    day[4] = "Thu";
    day[5] = "Fri";
    day[6] = "Sat";
    document.getElementById("date").innerHTML = h + ":" + minute + ":" + second + " " + month[m] + "/" + day[d] + "/" + y;
</script>
</html>
