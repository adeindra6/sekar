<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="form-title">Registrasi</h1>
      <form method="POST" action="registrasi_user.php" onsubmit="return validateForm()">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="namaUser">Nama Lengkap</label>
            <input type="text"
                    id="owner"
                    name="owner"
                    placeholder="Masukkan Nama Lengkap"/>
          </div>
          <div class="user-input-box">
            <label for="usernameUser">Username</label>
            <input type="text"
                    id="usernameUser"
                    name="usernameUser"
                    placeholder="Masukkan Username"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Masukkan Email"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Nomor Telepon</label>
            <input type="text"
                    id="nomorTeleponUMKM"
                    name="nomorTeleponUMKM"
                    placeholder="Masukkan Nomor Telepon"/>
          </div>
          <div class="user-input-box">
            <label for="lokasi">Kota/Kabupaten</label>
            <select name="lokasi" id="lokasi">
              <option value="Sleman">Sleman</option>
              <option value="Bantul">Bantul</option>
              <option value="Jogja">Jogja</option>
            </select>
          </div>          
          <div class="user-input-box">
            <label for="alamatUMKM">Alamat Lengkap</label>
            <input type="text"
                    id="alamatUMKM"
                    name="alamatUMKM"
                    placeholder="Masukkan Alamat Lengkap"/>
          </div>
          <div class="user-input-box">
            <label for="password">Password</label>
            <input type="password"
                    id="password"
                    name="password"
                    placeholder="Enter Password"/>
          </div>
          <div class="user-input-box">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password"
                    id="confirmPassword"
                    name="confirmPassword"
                    placeholder="Confirm Password"/>
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Registrasi" name="registrasi" id="registrasi">
        </div>
      </form>
    </div>
  </body>
</html>