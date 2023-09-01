<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cases</title>
    <style>
        .opt{
            display: none;
        }
        button{
            background: none;
    color:black;
    border:2px solid;
    transition: 0.2s;
    font-size: 20px;
}
button:hover{
    background: none;
    color: red;
    box-shadow: 0px 5px 5px yellow;
    transform: translateY(-0.25px);
}
        
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script type="text/javascript">
    function sort()
    {
         var demo = document.getElementById("cas"); 
        demo.style.display="block";
    }
    function sort1()
    {
        var demo = document.getElementById("opt1");
        demo.style.display="block";
        document.getElementById("opt2").style.display="none";
        document.getElementById("opt3").style.display="none";
    }
    function sort2()
    {
        var demo = document.getElementById("opt2");
        demo.style.display="block";
        document.getElementById("opt1").style.display="none";
        document.getElementById("opt3").style.display="none";
    }
    function sort3()
    {
        var demo = document.getElementById("opt3");
        demo.style.display="block";
        document.getElementById("opt1").style.display="none";
        document.getElementById("opt2").style.display="none";

    }
    </script>
    
        <font size="6">
            <button onclick="sort()">Sort By :</button>
            <span class="opt" id="cas"><button onclick="sort1()">Cases:Low to high</button>&emsp;<button onclick="sort2()">Cases:High to low</button>&emsp;<button onclick="sort3()">Alphabetical order</button>&emsp;
            </span> 
            </font>            
            <span class="opt" id="opt1">
    <ul type="disc"><font size="4">
        <li><a href="5.php" target="_blank">Dakshina kannadai</a></li>
        <li><a href="3.php" target="_blank">Mysore</a></li>
        <li><a href="1.php" target="_blank">Bangalore-North</a></li>
        <li><a href="4.php" target="_blank">Tumakuru</a></li>
        <li><a href="2.php" target="_blank">Bangalore-South</a></li>
        <li><a href="6.php" target="_blank">Hassan</a></li>
</font></ul></span>
<span class="opt" id="opt2">
    <ul type="disc"><font size="4">
        <li><a href="6.php" target="_blank">Hassan</a></li>
        <li><a href="2.php" target="_blank">Bangalore-South</a></li>
        <li><a href="4.php" target="_blank">Tumakuru</a></li>
        <li><a href="1.php" target="_blank">Bangalore-North</a></li>
        <li><a href="3.php" target="_blank">Mysore</a></li>
        <li><a href="5.php" target="_blank">Dakshina kannada</a></li>
    </font></ul></span>
<span class="opt" id="opt3">
    <ul type="disc"><font size="4">
        <li><a href="1.php" target="_blank">Bangalore-North</a></li>
        <li><a href="2.php" target="_blank">Bangalore-South</a></li>
        <li><a href="4.php" target="_blank">Tumakuru</a></li>
        <li><a href="5.php" target="_blank">Dakshina kannada</a></li>
        <li><a href="3.php" target="_blank">Mysore</a></li>
        <li><a href="6.php" target="_blank">Hassani</a></li>
    </font></ul></span>
</body>
</html>