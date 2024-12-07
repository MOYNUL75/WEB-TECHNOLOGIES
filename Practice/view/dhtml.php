<!DOCTYPE html>
<html>
<body>
    <h1 id="id01">Old Heading</h1>
    <script>
        var element = document.getElementById("id01");
        element.innerHTML = "New Heading";
    </script>


   <p id="p2">Hello World!</p>
    <script>
        document.getElementById("p2").style.color = "blue";
    </script>
    <p>The paragraph above was changed by a script.</p>
    
</body>
</html>
