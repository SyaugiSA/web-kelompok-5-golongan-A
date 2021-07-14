<html>
  <head>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous">
    </script>
    <link rel="icon" type="image/png" href="{{asset('Auth/login/logo_jember.png')}}">
    <link rel="stylesheet" href="{{asset('Auth/login/style_login.css')}}" />
    <title>Sistem Informasi Pelayanan Adminduk dan Pencapil | Dinas Kependudukan dan Pencatatan Sipil Kabupaten Jember</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
            @csrf
            <h2 class="title">Masuk</h2>
            
            @if (session('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="ID" type="text" class="form-control @error('email') is-invalid @enderror" name="ID" value="{{ old('email') }}" required autocomplete="ID" autofocus placeholder="NIK atau Alamat Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Kata Sandi" />
            </div>
            <input type="submit" value="Masuk" class="btn solid" />
          </form>

          <form action="{{ route('register') }}" method="POST" class="sign-up-form">
            @csrf
            <h2 class="title">Daftar Baru</h2>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="NIK" class="form-control @error('NIK') is-invalid @enderror" name="NIK" value="{{ old('NIK') }}" required autocomplete="NIK" autofocus type="number" placeholder="NIK" />
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" type="email" placeholder="Alamat Email" />
            </div>

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror


            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Kata Sandi" />
            </div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Kata Sandi" />
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
          <img src="{{asset('Auth/login/log.svg')}}" class="image" alt="" />
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
          <img src="{{asset('Auth/login/register.svg')}}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{asset('Auth/login/app.js')}}"></script>
  </body>
</html>