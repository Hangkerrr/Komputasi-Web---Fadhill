<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo "Contact Us"; ?></title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  </head>

  <body class="bg-secondary">
    <!-- Navbar start -->
    <nav
      class="n  ar sticky-top navbar-expand-lg navbar-light bg-light shadow-lg p-2"
    >
      <div class="container-fluid">
        <a class="navbar-brand ps-5" href="index.html">
          <img
            src="images/logo_upj-removebg-preview (1).png"
            alt="logo"
            width="60"
            height="60"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarNav">
          <ul class="navbar-nav ms-auto pe-5">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link" href="news.html">Biodata</a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link active" aria-current="page" href="#"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar end -->

    <section style="padding-top: 30px; padding-bottom: 50px">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h1 class="text-light mb-5">
              Love to hear from you, <br />Get in touch.
            </h1>

            <form action="konfirmasi.php" method="post">
              <div class="row text-light">
                <div class="col-md-12">
                  <div class="mb-3">
                    <label for="name"><?php echo "Your Name"; ?></label>
                    <input
                      type="text"
                      name="name"
                      id="name"
                      placeholder="Enter Your Name"
                      class="form-control shadow-none"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <label for="email"><?php echo "Email"; ?></label>
                    <input
                      type="email"
                      name="email"
                      id="email"
                      placeholder="contoh@email.com"
                      class="form-control shadow-none"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <p>Gender<br /></p>
                    <input
                      type="radio"
                      id="gender_male"
                      name="gender"
                      value="Laki-laki"
                      required
                    />
                    <label for="gender_male"><?php echo "Laki-laki"; ?></label><br />
                    <input
                      type="radio"
                      id="gender_female"
                      name="gender"
                      value="Perempuan"
                      required
                    />
                    <label for="gender_female"><?php echo "Perempuan"; ?></label><br />
                  </div>
                </div>
                <div class="col-12">
                  <div class="mb-3">
                    <label for="lahir" class="pb-2"><?php echo "Tanggal Lahir"; ?></label><br />
                    <input
                      type="date"
                      name="lahir"
                      id="lahir"
                      placeholder="dd/mm/yyyy"
                      style="border-radius: 10px; width: 200px"
                      class="text-center"
                      required
                    />
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary px-5 py-2" type="submit">
                    <?php echo "Submit"; ?>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
