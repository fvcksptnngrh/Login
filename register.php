<?php

include('./db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (name, address, dob, phone, email, password) VALUES ('$name', '$address', '$dob', '$phone', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Akun berhasil dibuat! <a href='login.php'>Login</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST" action="">
    <label for="name">Nama:</label><br>
    <input type="text" id="name" name="name" required><br>

    <label for="address">Alamat:</label><br>
    <textarea id="address" name="address" required></textarea><br>

    <label for="dob">Tanggal Lahir:</label><br>
    <input type="date" id="dob" name="dob" required><br>

    <label for="phone">No HP:</label><br>
    <input type="text" id="phone" name="phone" required><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Daftar</button>
</form>
