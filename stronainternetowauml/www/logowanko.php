<style>
    body{
        background-color:orange;
        text-align: center;
        font-size: 61px;

    }
</style>
<?php

echo "Dziękujemy za zakup ";

$conn = mysqli_connect('localhost', 'root', '', 'test123');

$imie = $_POST['imie'];

$nazwisko = $_POST['nazwisko'];

$mail = $_POST['mail'];

echo $imie."<br><br>";

$dodaj ="INSERT INTO dane(id, imie, nazwisko, adres) Value ('', '$imie', '$nazwisko', '$mail')";

$odczyt ="SELECT * FROM dane";

$result = mysqli_query($conn, $dodaj);

$result2 = mysqli_query($conn, $odczyt);

echo "<table border=2 width=50%>";

while($row=mysqli_fetch_assoc($result2)){

    echo "<tr>";

    echo "<td>".$row['id']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td><td>".$row['adres']."</td><td>";

    echo "</tr>";

}

echo "</table>";

mysqli_close($conn)

?>