<!DOCTYPE html>
<html lang="en">
<head>
  <link href='favicon.ico' rel='shortcut icon'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dafa Motorsport</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500&family=Nunito&family=Palanquin+Dark:wght@500&family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="global.css"/>
</head>
<body>
      <!-- dropdown -->
      <div class="nav">
        <img src="images/designweb_03.jpg" class="logo">
        <div class="navBottom" id="navbar" class="navibar">
            <li class="dropdown" class="fList" class="active">
                <a href="index.html" class="dropbtn" ><h1 class="fMenuTitle" style="color: #ffd70a;">Home </h1></a> 
            </li>

            <li class="dropdown" class="flist">
              <a href="#" class="dropbtn" ><h1 class="fMenuTitle">Category </h1></a>
              <div class="dropdown-content">
                <a href="#">Moge</a>
                <a href="#">Custom</a>
                <a href="#">Matic</a>
                <a href="#">Trail</a>
                </div>
              </li>

          <li class="dropdown" class="flist">
            <a href="#" class="dropbtn" ><h1 class="fMenuTitle">Products </h1></a>
            <div class="dropdown-content">
              <a href="#">Revo</a>
              <a href="#">Byson</a>
              <a href="#">Mio</a>
              <a href="#">Beat Karbu</a>
              </div>
            </li>
   
                <li class="dropdown" class="flist">
                    <a href="#" class="dropbtn" ><h1 class="fMenuTitle">Login </h1></a>
                    <div class="dropdown-content">
                      <a href="#">Login</a>
                      <a href="#">Signup</a>
                      </div>
                    </li>
        </div>
        <div class="navTop">
 <a href="cart.html"><img src="images/cart.png" class="cart"></a>
        </div>
        </div>
        <!-- form data -->

    <form action="proses_form.php" method="post">
    <div class="form-data">
        <div class="form-group1">
            <h2>Informasi Alamat Pengiriman</h2>

            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="kota">Kota:</label>
            <input type="text" id="kota" name="kota" required>

            <label for="kode_pos">Kode Pos:</label>
            <input type="number" id="kode_pos" name="kode_pos" required>
</div>

<div class="form-group2">
            <h2>Informasi Pembayaran</h2>


            <label for="nomor_kartu">Nomor Kartu:</label>
            <input type="number" id="nomor_kartu" name="nomor_kartu" >

            <label for="tanggal_kadaluwarsa">Bulan Kadaluwarsa:</label>
            <div class="date-select">
                <select id="bulan_kadaluwarsa" name="bulan_kadaluwarsa" required>
                    <option value="">Bulan</option>
                    <?php
                    // Loop untuk menambahkan pilihan bulan (1-12)
                    for ($bulan = 1; $bulan <= 12; $bulan++) {
                        printf('<option value="%02d">%02d</option>', $bulan, $bulan);
                    }
                    ?>
                </select>
                <label for="tanggal_kadaluwarsa">Kadaluwarsa Kartu:</label>
                <select id="tahun_kadaluwarsa" name="tahun_kadaluwarsa" required>
                    <option value="">Tahun</option>
                    <?php
                    // Loop untuk menambahkan pilihan tahun (2020-2030)
                    for ($tahun = 2020; $tahun <= 2030; $tahun++) {
                        echo "<option value=\"$tahun\">$tahun</option>";
                    }
                    ?>
                </select>
                </div>
                
            <label for="kode_keamanan">Kode Keamanan:</label>
            <input type="number" id="kode_keamanan" name="kode_keamanan" required>
            <br><br>
            <button class type="submit">Pesan Sekarang</button>
 
                  </div>
                  </div>
                  </form>
        <footer>
          <div class="footerLeft">
            <div class="footerMenu">
        <img src="images/designweb_03.jpg" class="logo2">
            </div>
          </div>
        
        
          <div class="footerCenter">
            <div class="footerRightMenu">
              <ul class="fList">
                <h4 >ABOUT</h4>
                <li><a href="#">Stores</a></li>
                <li><a href="#">Company</a></li>
                <li><a href="#">Site</a></li>
              </ul>
          </div>
          </div>
        
          <div class="footerCenter">
            <div class="footerRightMenu">
              <ul class="fList">
                <h4 >Links</h4>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Feedback</a></li>
              </ul>
          </div>
          </div>
        
          <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow</h1>
                <div class="fIcons">
                  <a href="#" > <img  src="images/whatsapp.png" alt="" class="fIcon">+62 8888 9999 7777</a> 
                  <br>
                  <a href="#" > <img  src="images/twitter.png" alt="" class="fIcon">@Dafamotorsport</a> 
                  <br>
                  <a href="#" > <img  src="images/facebook.png" alt="" class="fIcon">@Dafamotorsport</a> 
                  <br>
                  <a href="#" > <img  src="images/instagram.png" alt="" class="fIcon">@Dafamotorsport</a> 
              </div>
            </div>
          </div>
</body>
</html>
