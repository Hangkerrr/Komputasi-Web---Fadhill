<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : "Not specified";
    $lahir = htmlspecialchars($_POST['lahir']);

    echo "<h3>Nama : " . $name . "</h1>";
    echo "<h3>email : " . $email . "</h1>";
    echo "<h3>gender : " . $gender . "</h1>";
    echo "<h3>lahir : " . $lahir . "</h1>";
} else {
    echo "<h1>Access Denied</h1>";
    echo "<p>You need to submit the form first.</p>";
}
?>

<a href="contact.php" class="btn btn-primary mt-4">Kembali ke Beranda</a>