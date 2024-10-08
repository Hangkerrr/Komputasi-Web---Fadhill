<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konfirmasi</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>

  <body class="bg-light">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-8 bg-white shadow-lg rounded-3 p-5">
          <?php 
            include 'config.php'; // Menyertakan file koneksi database

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Mengambil data form
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : "Not specified";
                $lahir = htmlspecialchars($_POST['lahir']);

                // Menyimpan data ke dalam database
                $sql = "INSERT INTO contacts (name, email, gender, birth_date) VALUES ('$name', '$email', '$gender', '$lahir')";

                if ($conn->query($sql) === TRUE) {
                    // Menampilkan data dalam card bootstrap
                    echo "<h2 class='mb-4 text-center'>Thank You!</h2>";
                    echo "<div class='card mb-3'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>Nama:</h5>";
                    echo "<p class='card-text'>" . $name . "</p>";
                    echo "</div>";
                    echo "</div>";
                    
                    echo "<div class='card mb-3'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>Email:</h5>";
                    echo "<p class='card-text'>" . $email . "</p>";
                    echo "</div>";
                    echo "</div>";
                    
                    echo "<div class='card mb-3'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>Gender:</h5>";
                    echo "<p class='card-text'>" . $gender . "</p>";
                    echo "</div>";
                    echo "</div>";
                    
                    echo "<div class='card mb-3'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>Tanggal Lahir:</h5>";
                    echo "<p class='card-text'>" . $lahir . "</p>";
                    echo "</div>";
                    echo "</div>";
                } else {
                    // Jika ada kesalahan saat menyimpan data
                    echo "<h1 class='text-danger'>Error!</h1>";
                    echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
                }
            } else {
                // Jika halaman diakses tanpa form
                echo "<h1 class='text-danger'>Access Denied</h1>";
                echo "<p>You need to submit the form first.</p>";
            }

            // Menutup koneksi
            $conn->close();
          ?>

          <!-- Tombol Kembali ke Contact -->
          <div class="text-center mt-4">
            <a href="contact.php" class="btn btn-primary">Kembali ke Beranda</a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
