<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Functions</h2>

<p>This example calls a function which performs a calculation, and returns the result:</p>

<p id="el"></p>

<script>
    function myFunction(p1, p2) {
        return p1 * p2;
    }
    document.getElementById("el").innerHTML = myFunction(20, 3);
</script>

</body>
</html>