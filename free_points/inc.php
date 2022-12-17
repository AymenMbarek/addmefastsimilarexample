<html>
<head>
</head>

<body>
    <h3>Click on below button to increase the value by 10<h3>

    <button onclick="reveal()"> Increment</button>

    <table>
        <tr><td><textarea id="outputtext">10</textarea></td></tr>
    </table>

    <script type="text/javascript">

    //Get the last value
    var current = parseInt(location.hash.slice(1));
    //If it is set, increment it
    if(current){
        document.getElementById("outputtext").value = current + 10;
        location.hash = '#' + (current+10);
    }

    function reveal() {
        var val = document.getElementById("outputtext").value;
        var result = parseInt(val) + parseInt(10);
        document.getElementById("outputtext").value = result;
        //Set the value
        location.hash = '#' + result;
    }
document.cookie="increment=10";
    </script>
</body>
</html>