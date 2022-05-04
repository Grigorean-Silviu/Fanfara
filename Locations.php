<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>



<p id="demo"></p>
<button onclick="myFunction()">Barcelona</button>
<button onclick="myFunction1()">Anzoátegui</button>
<button onclick="myFunction2()">Caraga</button>
<button onclick="myFunction3()">Philippines</button>

<script>
    const fruits = ["In ce tari ai fost din aceasta lisra : "];
    let fLen = fruits.length;
    let text = "";
    for (i = 0; i < fLen; i++) {
        text += fruits[i] + "<br>";
    }

    document.getElementById("demo").innerHTML = text;


    function myFunction() {
        fruits.push("Barcelona");
        document.getElementById("demo").innerHTML = fruits;
    }
    function myFunction1() {
        fruits.push("Anzoátegui");
        document.getElementById("demo").innerHTML = fruits;
    }
    function myFunction2() {
        fruits.push("Caraga");
        document.getElementById("demo").innerHTML = fruits;
    }
    function myFunction3() {
        fruits.push("Philippines");
        document.getElementById("demo").innerHTML = fruits;
    }

</script>

<form action="/action_page.php">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value="John"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value="Doe"><br><br>
    <input type="submit" value="Submit">
</form>


</body>
</html>


