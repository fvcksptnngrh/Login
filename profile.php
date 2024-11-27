<?php
include('./db.php');

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

// Ambil data pengguna dari database
$sql = "SELECT * FROM users WHERE id = '$user_id'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>

<h2>Profil Pengguna</h2>
<p><strong>Nama:</strong> <?php echo $user['name']; ?></p>
<p><strong>Alamat:</strong> <?php echo $user['address']; ?></p>
<p><strong>Tanggal Lahir:</strong> <?php echo $user['dob']; ?></p>
<p><strong>No HP:</strong> <?php echo $user['phone']; ?></p>
<p><strong>Email:</strong> <?php echo $user['email']; ?></p>
<p><strong>Password:</strong> [hidden for security]</p>

<a href="logout.php">Logout</a>
