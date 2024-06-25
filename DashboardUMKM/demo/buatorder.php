<!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Forms - Admin UMKM</title>

    <!-- Bulma is included -->
    <link rel="stylesheet" href="css/main.min.css" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="app">
      <nav id="navbar-main" class="navbar is-fixed-top">
        <div class="navbar-brand">
          <a class="navbar-item is-hidden-desktop jb-aside-mobile-toggle">
            <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
          </a>
          <div class="navbar-item has-control">
            <div class="control"><input placeholder="Search everywhere..." class="input" /></div>
          </div>
        </div>
        <div class="navbar-brand is-right">
          <a class="navbar-item is-hidden-desktop jb-navbar-menu-toggle" data-target="navbar-menu">
            <span class="icon"><i class="mdi mdi-dots-vertical"></i></span>
          </a>
        </div>
        <div class="navbar-menu fadeIn animated faster" id="navbar-menu">
          <div class="navbar-end">
            <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider is-hoverable">
              <a class="navbar-link is-arrowless">
                <span class="icon">
                  <i class="mdi mdi-menu"></i>
                </span>
                <span>Menu</span>
                <span class="icon">
                  <i class="mdi mdi-chevron-down"></i>
                </span>
              </a>
              <div class="navbar-dropdown">
                <a href="profile.html" class="navbar-item">
                  <span class="icon"><i class="mdi mdi-account"></i></span>
                  <span>My Profile</span>
                </a>
                <a class="navbar-item">
                  <span class="icon"><i class="mdi mdi-settings"></i></span>
                  <span>Settings</span>
                </a>
                <a class="navbar-item">
                  <span class="icon"><i class="mdi mdi-email"></i></span>
                  <span>Messages</span>
                </a>
                <hr class="navbar-divider" />
                <a class="navbar-item">
                  <span class="icon"><i class="mdi mdi-logout"></i></span>
                  <span>Log Out</span>
                </a>
              </div>
            </div>
            <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider has-user-avatar is-hoverable">
              <a class="navbar-link is-arrowless">
                <div class="is-user-avatar">
                  <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" />
                </div>
                <div class="is-user-name">
                  <span>John Doe</span>
                </div>
                <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
              </a>
              <div class="navbar-dropdown">
                <a href="profile.html" class="navbar-item">
                  <span class="icon"><i class="mdi mdi-account"></i></span>
                  <span>My Profile</span>
                </a>
                <a class="navbar-item">
                  <span class="icon"><i class="mdi mdi-settings"></i></span>
                  <span>Settings</span>
                </a>
                <a class="navbar-item">
                  <span class="icon"><i class="mdi mdi-email"></i></span>
                  <span>Messages</span>
                </a>
                <hr class="navbar-divider" />
                <a class="navbar-item">
                  <span class="icon"><i class="mdi mdi-logout"></i></span>
                  <span>Log Out</span>
                </a>
              </div>
            </div>
            <a href="https://justboil.me/bulma-admin-template/free-html-dashboard/" title="About" class="navbar-item has-divider is-desktop-icon-only">
              <span class="icon"><i class="mdi mdi-help-circle-outline"></i></span>
              <span>About</span>
            </a>
            <a title="Log out" class="navbar-item is-desktop-icon-only">
              <span class="icon"><i class="mdi mdi-logout"></i></span>
              <span>Log out</span>
            </a>
          </div>
        </div>
      </nav>
      <aside class="aside is-placed-left is-expanded">
        <div class="aside-tools">
          <div class="aside-tools-label">
            <span><b>Admin</b> UMKM</span>
          </div>
        </div>
        <div class="menu is-menu-main">
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li>
          <a href="index.php" class="has-icon">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">Menu</p>
      <ul class="menu-list">
        <li>
          <a href="tables.php" class="is-active has-icon">
            <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span>
            <span class="menu-item-label">Tables</span>
          </a>
        </li>
        <li>
          <a href="gudang.php" class="has-icon">
            <span class="icon"><i class="mdi mdi-warehouse"></i></span>
            <span class="menu-item-label">Gudang</span>
          </a>
        </li>
        <li>
          <a href="forms.php" class="has-icon">
            <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
            <span class="menu-item-label">Forms</span>
          </a>
        </li>
        <li>
          <a href="profile.php" class="has-icon">
            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
            <span class="menu-item-label">Profile</span>
          </a>
        </li>
            <li>
              <a href="tambahitem.html" class="has-icon">
                <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                <span class="menu-item-label">Item</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <section class="section is-title-bar">
        <div class="level">
          <div class="level-left">
            <div class="level-item">
              <ul>
                <li>Admin</li>
                <li>Item</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="hero is-hero-bar">
        <div class="hero-body">
          <div class="level">
            <div class="level-left">
              <div class="level-item"><h1 class="title">Order</h1></div>
            </div>
            <div class="level-right" style="display: none">
              <div class="level-item"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section is-main-section">
        <div class="card">
          <header class="card-header">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-ballot"></i></span>
              Buat Order Baru
            </p>
          </header>
          <div class="card-content">
            <form action="buat_data_order.php" method="POST">
              <div class="field">
                <label class="label" for="nama-pembeli">Nama Pembeli:</label>
                <div class="control">
                  <input class="input" type="text" id="nama-pembeli" name="nama-pembeli" required />
                </div>
              </div>
              <?php
// Buat koneksi ke database
require_once("../../config/koneksi.php");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil nilai dari tabel
$query = "SELECT nama_item FROM item_barang";
$result = $conn->query($query);

// Cek apakah query berhasil dijalankan
if (!$result) {
    die("Query error: " . $conn->error);
}

// Buat dropdown HTML
echo '<div class="field">';
echo '<label class="label" for="jumlah-item">Item Barang:</label>';
echo '<div class="control">';
echo '<select class="input" id="jumlah-item" name="jumlah-item" required>';

// Tampilkan hasil query sebagai pilihan dropdown
while ($row = $result->fetch_assoc()) {
    $nama_item = $row['nama_item'];
    echo "<option value='$nama_item' id='item_dropdown' name='item_dropdown'>$nama_item </option>";
}

echo '</select>';
echo '</div>';
echo '</div>';

// Tutup koneksi ke database
$conn->close();
?>

              <!-- <div class="field">
                <label class="label" for="jumlah-item">Item Barang:</label>
                <div class="control">
                  <input class="input" type="number" id="jumlah-item" name="jumlah-item" required />
                </div>
              </div> -->
              <div class="field">
                <label class="label" for="jumlah-pembelian">Jumlah Pembelian:</label>
                <div class="control">
                  <input class="input" type="number" id="jumlah-pembelian" name="jumlah-pembelian" required />
                </div>
              </div>
              <div class="field">
    <label class="label" for="tanggal-pembelian">Tanggal Pembelian:</label>
    <div class="control">
        <input class="input" type="datetime-local" id="tanggal-pembelian" name="tanggal-pembelian" required />
    </div>
</div>

              <div class="field is-grouped">
                <div class="control">
                  <button type="submit" class="button is-primary" value="buatorder" name="buatorder" id="buatorder">Buat Order</button>
                </div>
                <div class="control">
                  <button type="reset" class="button is-light">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="js/main.min.js"></script>
    <!-- Icons below are for demo only. Feel free to use any icon pack. See https://jossef.github.io/material-design-icons-iconfont/ -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css" />
  </body>
</html>
