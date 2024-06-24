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
      <form method="POST" action="registrasi_umkm.php" onsubmit="return validateForm()" enctype="multipart/form-data" >
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="owner">Nama Owner</label>
            <input type="text"
                    id="owner"
                    name="owner"
                    placeholder="Masukkan Nama Lengkap"/>
          </div>
          <div class="user-input-box">
            <label for="namaUMKM">Nama Resto</label>
            <input type="text"
                    id="namaUMKM"
                    name="namaUMKM"
                    placeholder="Masukkan Nama Resto"/>
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
            <label for="bankUMKM">Bank UMKM</label>
            <select name="bankUMKM" id="bankUMKM">
              <option value="BCA">BCA</option>
              <option value="Mandiri">Mandiri</option>
              <option value="BSI">BSI</option>
            </select>
          </div>  
          <div class="user-input-box">
            <label for="rekeningUMKM">Nomor Rekening</label>
            <input type="text"
                    id="rekeningUMKM"
                    name="rekeningUMKM"
                    placeholder="Masukkan Nomor Rekening"/>
          </div>
          <div class="user-input-box">
            <label for="lokasi">Kota/Kabupaten</label>
            <select name="lokasi" id="lokasi">
              <option value="Seleman">Seleman</option>
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
            <label for="username">Username</label>
            <input type="text"
                    id="usernameUMKM"
                    name="usernameUMKM"
                    placeholder="Masukkan Username"/>
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
        <div class="gender-details-box">
          <span class="gender-title">Unggah File</span>
          <div class="user-input-box">
            <label for="ktp">Kartu Identitas</label>
            <input type="file"
                    id="ktp"
                    name="ktp" accept="image/*" required/>
          </div>
          <div class="user-input-box">
            <label for="fotoResto">Foto Resto</label>
            <input type="file"
                    id="fotoResto"
                    name="fotoResto" accept="image/*" required/>
          </div>
          <div class="user-input-box">
            <label for="fotoBukuRekening">Foto Buku Rekening</label>
            <input type="file"
                    id="fotoBukuRekening"
                    name="fotoBukuRekening" accept="image/*" required/>
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Registrasi" name="registrasi" id="registrasi">
        </div>
      </form>
    </div>
  </body>
</html>