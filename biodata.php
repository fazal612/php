<html>
<body>
    <form action="" method="POST">
        <H1>Biodata</h1>
        Name:<input type=text name="name1"><br><br>
        Address: <textarea name=address> </textarea><br><br>
        Age: <input type=text name=age><br><br>
        Phone: <input type=text name=phone><br><br>
        Email: <input type=text name=email><br><br>
        Educational Qualification:<input type=text name=qualification><br>
        <input type=submit value=Display><br><br>
    </form>
</body>
</html>
<?php
if ($_POST) {
    echo "<h1>Biodata</h1>";
    echo "Name: " . $_POST["name1"] . "<br>";
    echo "Address: " . $_POST["address"] . "<br>";
    echo "Age: " . $_POST["age"] . "<br>";
    echo "Mobile: " . $_POST["phone"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Qualification: " . $_POST["qualification"] . "<br>";
}
?>