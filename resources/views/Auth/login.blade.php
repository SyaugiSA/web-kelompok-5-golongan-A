<html>
  <head>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous">
    </script>
    <link rel="icon" type="image/png" href="logo_jember.png">
    <link rel="stylesheet" href="style.css" />
    <title>Sistem Informasi Pelayanan Adminduk dan Pencapil | Dinas Kependudukan dan Pencatatan Sipil Kabupaten Jember</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Masuk</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="NIK atau Alamat Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Kata Sandi" />
            </div>
            <input type="submit" value="Masuk" class="btn solid" />
          </form>

          <form action="#" class="sign-up-form">
            <h2 class="title">Daftar Baru</h2>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="number" placeholder="NIK" />
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Alamat Email" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Kata Sandi" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Konfirmasi Kata Sandi" />
            </div>
            
            <input type="submit" class="btn" value="Daftar Baru" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>SELAMAT DATANG</h3>
            <p>
              Selamat Datang di Website Resmi Disdukcapil
              Kabupaten Jember
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Daftar Baru
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>SELAMAT DATANG</h3>
            <p>
              Selamat Datang di Website Resmi Disdukcapil
              Kabupaten Jember
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Masuk
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>