<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SICEPATEXPRESS</title>
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <nav>
    <h1>SICEPAT<span class="exp">EXPRESS</span></h1>
    <div class="navigation">
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#layanan">Layanan</a></li>
        <li><a href="#pengiriman">Pengiriman</a></li>
        <li><a href="#testimoni">Testimoni</a></li>
      </ul>
    </div>
    <div class="hamburger">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
  </nav>

  <section id="home" class="home">
    <h1 class="homeh1">Selamat Datang di <span>Sicepat Express</span></h1>
    <p class="homep">
      solusi terpercaya untuk pengiriman paket Anda. Kami menyediakan layanan
      pengiriman yang cepat, aman, dan handal untuk memenuhi kebutuhan
      pengiriman Anda dengan profesionalisme dan keunggulan pelayanan.
      Percayakan pengiriman paket Anda kepada kami dan rasakan kemudahan serta
      keamanan dalam setiap langkah pengiriman
    </p>
    <div class="btnhome">
      <a href="#" class="warna1btn">Langganan Sekarang</a>
      <a href="#" class="warna2btn">Jelajahi Pengiriman Anda!</a>
    </div>
  </section>

  <section id="layanan" class="layanan">
    <h1>Fasilitas Kami</h1>
    <p>
      Beberapa layanan unggulan yang telah kami sediakan untuk memenuhi
      kebutuhan Anda
    </p>

    <div class="layanancardbase">
      <div class="layanancardbox">
        <i class="fa-solid fa-truck"></i>
        <h2>Pengiriman Cepat</h2>
        <p>
          Kami menyediakan layanan pengiriman cepat untuk memastikan barang
          Anda tiba tepat waktu.
        </p>
      </div>
      <div class="layanancardbox">
        <i class="fa-solid fa-shield-alt"></i>
        <h2>Keamanan Terjamin</h2>
        <p>
          Barang Anda dijamin aman selama proses pengiriman dengan
          perlindungan ekstra.
        </p>
      </div>
      <div class="layanancardbox">
        <i class="fa-solid fa-headset"></i>
        <h2>Dukungan 24/7</h2>
        <p>
          Tim dukungan pelanggan kami siap membantu Anda kapan saja, 24 jam
          sehari, 7 hari seminggu.
        </p>
      </div>
      <div class="layanancardbox">
        <i class="fa-solid fa-box-open"></i>
        <h2>Pengepakan Aman</h2>
        <p>
          Layanan pengepakan aman untuk memastikan produk Anda tidak rusak
          selama pengiriman.
        </p>
      </div>
      <div class="layanancardbox">
        <i class="fa-solid fa-globe"></i>
        <h2>Jangkauan Luas</h2>
        <p>
          Layanan pengiriman kami mencakup berbagai wilayah sehingga Anda
          dapat menjangkau pelanggan lebih luas.
        </p>
      </div>
      <div class="layanancardbox">
        <i class="fa-solid fa-dollar-sign"></i>
        <h2>Harga Kompetitif</h2>
        <p>
          Kami menawarkan harga pengiriman yang kompetitif untuk membantu Anda
          menghemat biaya.
        </p>
      </div>
    </div>
  </section>

  <section id="pengiriman" class="pengiriman">
    <h1>Harga Pengiriman Paket</h1>
    <p>
      Harga hemat untuk pengiriman per km! Kirim paket Anda dengan layanan
      yang handal dan terpercaya
    </p>

    <div class="pengirimancard">
      <div class="card-content">
        <form id="formPengiriman" method="post" action="simpan_data.php">
          <input type="number" id="jarak" name="jarak" placeholder="Jarak Pengiriman (KM)" required />
          <input type="hidden" id="biaya" name="biaya">
          <button type="button" onclick="hitungBiaya()">Hitung Biaya</button>
          <button type="submit">Simpan Data</button>
        </form>
        <div class="hasil1">
          <p id="hasil"></p>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="containerfooter">
      <div class="rowfooter">
        <div class="footertul col-md-6">
          <p>&copy; 2024 SicepatExpress. Hak Cipta Dilindungi.</p>
        </div>
        <div class="menufo col-md-6 text-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="/">Beranda</a></li>
            <li class="list-inline-item">
              <a href="/layanan">Fasilitas</a>
            </li>
            <li class="list-inline-item"><a href="/produk">Pengiriman</a></li>
            <li class="list-inline-item"><a href="/blog">testimoni</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <script src="./script.js"></script>
</body>

</html>