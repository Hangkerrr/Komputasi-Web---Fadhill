<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title><?php echo "Contact Us"; ?></title>
  </head>
  <body class="bg-danger">
    <!-- Navbar start -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-danger shadow-lg p-4">
      <div class="container-fluid">
        <a class="navbar-brand px-4 fw-bold" href="index.html"><?php echo "ManUnited.News"; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarNav">
          <ul class="navbar-nav ms-auto px-4">
            <li class="nav-item">
              <a class="nav-link" href="index.html"><?php echo "Home"; ?></a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link" href="news.html"><?php echo "News"; ?></a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link active" aria-current="page" href="#"><?php echo "Contact"; ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Contact start -->
    <section style="padding-top: 30px; padding-bottom: 50px">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h1 class="text-light mb-5">
              <?php echo "Love to hear from you, <br />Get in touch."; ?>
            </h1>

            <form action="konfirmasi.php" method="post">
              <div class="row text-light">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="name"><?php echo "Your Name"; ?></label>
                    <input type="text" name="name" id="name" placeholder="<?php echo 'Enter Your Name'; ?>" class="form-control shadow-none" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="email"><?php echo "Email"; ?></label>
                    <input type="email" name="email" id="email" placeholder="<?php echo 'contoh@email.com'; ?>" class="form-control shadow-none" required />
                  </div>
                </div>
                <div class="col-12">
                  <div class="mb-3">
                    <label for="phone"><?php echo "Phone"; ?></label>
                    <input type="tel" name="phone" id="phone" placeholder="<?php echo '08123456789'; ?>" class="form-control shadow-none" required />
                  </div>
                </div>
                <div class="col-12">
                  <div class="mb-3">
                    <label for="message"><?php echo "Message"; ?></label>
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control shadow-none" placeholder="<?php echo 'Let us know your message'; ?>" required></textarea>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-secondary px-5 py-2" type="submit">
                    <?php echo "Just send"; ?>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact end -->

    <!-- Footer start -->
    <footer class="bg-secondary text-center text-white">
      <div class="container p-4 pb-0">
        <!-- Social media start-->
        <section class="mb-4">
          <?php
            $socials = [
              "facebook" => "bi-facebook",
              "twitter" => "bi-twitter-x",
              "google" => "bi-google",
              "instagram" => "bi-instagram",
              "linkedin" => "bi-linkedin",
              "github" => "bi-github"
            ];

            foreach ($socials as $platform => $icon) {
              echo "<a class='btn btn-outline-danger btn-floating m-1 border border-white' href='#!' role='button'><i class='bi $icon'></i></a>";
            }
          ?>
        </section>
        <!-- Social media end -->
      </div>

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        <?php echo "&copy; 2024 Copyright"; ?>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
