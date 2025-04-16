@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$title}}</title>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f5f9;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 800px;
      margin: 50px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    h1 {
      text-align: center;
      font-weight: bold;
      color: #1e293b;
      margin-bottom: 30px;
    }
    form {
      display: grid;
      gap: 20px;
    }
    label {
      font-weight: bold;
    }
    select, input[type="number"], button {
      width: 100%;
      padding: 10px;
      border: 1px solid #cbd5e1;
      border-radius: 5px;
      font-size: 16px;
    }
    button {
      background-color: #1e40af;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    button:hover {
      background-color: #1d4ed8;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
    }
    th, td {
      padding: 12px;
      border: 1px solid #e2e8f0;
      text-align: center;
    }
    th {
      background-color: #f8fafc;
      color: #1e293b;
    }
    @media (max-width: 600px) {
      .container {
        margin: 20px;
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Cek {{$title}}</h1>
    <hr>
    <br>
    <form>
    <div>

    <label for="provinsi">Pilih Provinsi Asal:</label>
        <select id="provinsi" name="provinsi">
        <option value="">-- Pilih Provinsi --</option>
        <option value="aceh">Aceh</option>
        <option value="sumatera_utara">Sumatera Utara</option>
        <option value="sumatera_barat">Sumatera Barat</option>
        <option value="riau">Riau</option>
        <option value="kepulauan_riau">Kepulauan Riau</option>
        <option value="jambi">Jambi</option>
        <option value="sumatera_selatan">Sumatera Selatan</option>
        <option value="bengkulu">Bengkulu</option>
        <option value="lampung">Lampung</option>
        <option value="bangka_belitung">Bangka Belitung</option>
        <option value="banten">Banten</option>
        <option value="dki_jakarta">DKI Jakarta</option>
        <option value="jawa_barat">Jawa Barat</option>
        <option value="jawa_tengah">Jawa Tengah</option>
        <option value="di_yogyakarta">DI Yogyakarta</option>
        <option value="jawa_timur">Jawa Timur</option>
        <option value="bali">Bali</option>
        <option value="nusa_tenggara_barat">Nusa Tenggara Barat</option>
        <option value="nusa_tenggara_timur">Nusa Tenggara Timur</option>
        <option value="kalimantan_barat">Kalimantan Barat</option>
        <option value="kalimantan_tengah">Kalimantan Tengah</option>
        <option value="kalimantan_selatan">Kalimantan Selatan</option>
        <option value="kalimantan_timur">Kalimantan Timur</option>
        <option value="kalimantan_utara">Kalimantan Utara</option>
        <option value="sulawesi_utara">Sulawesi Utara</option>
        <option value="sulawesi_tengah">Sulawesi Tengah</option>
        <option value="sulawesi_selatan">Sulawesi Selatan</option>
        <option value="sulawesi_tenggara">Sulawesi Tenggara</option>
        <option value="sulawesi_barat">Sulawesi Barat</option>
        <option value="gorontalo">Gorontalo</option>
        <option value="maluku">Maluku</option>
        <option value="maluku_utara">Maluku Utara</option>
        <option value="papua">Papua</option>
        <option value="papua_barat">Papua Barat</option>
        <option value="papua_tengah">Papua Tengah</option>
        <option value="papua_pegunungan">Papua Pegunungan</option>
        <option value="papua_selatan">Papua Selatan</option>
        <option value="papua_barat_daya">Papua Barat Daya</option>
    </select>


        <label for="asal">Asal Pengiriman:</label>
        <select id="asal" name="asal">
            <option value="">-- Pilih Kota Asal --</option>
            <option value="jakarta">Jakarta</option>
            <option value="surabaya">Surabaya</option>
            <option value="medan">Medan</option>
            <option value="bandung">Bandung</option>
            <option value="bekasi">Bekasi</option>
            <option value="tangerang">Tangerang</option>
            <option value="makassar">Makassar</option>
            <option value="depok">Depok</option>
            <option value="palembang">Palembang</option>
            <option value="semarang">Semarang</option>
            <option value="batam">Batam</option>
            <option value="padang">Padang</option>
            <option value="denpasar">Denpasar</option>
            <option value="bogor">Bogor</option>
            <option value="pekanbaru">Pekanbaru</option>
            <option value="bandar_lampung">Bandar Lampung</option>
            <option value="malang">Malang</option>
            <option value="samarinda">Samarinda</option>
            <option value="tasikmalaya">Tasikmalaya</option>
            <option value="serang">Serang</option>
            <option value="banjarmasin">Banjarmasin</option>
            <option value="pontianak">Pontianak</option>
            <option value="jambi">Jambi</option>
            <option value="cimahi">Cimahi</option>
            <option value="surakarta">Surakarta</option>
            <option value="kupang">Kupang</option>
            <option value="manado">Manado</option>
            <option value="cilegon">Cilegon</option>
            <option value="mataram">Mataram</option>
            <option value="jayapura">Jayapura</option>
            <option value="bengkulu">Bengkulu</option>
            <option value="palu">Palu</option>
            <option value="yogyakarta">Yogyakarta</option>
            <option value="ambon">Ambon</option>
            <option value="kendari">Kendari</option>
            <option value="cirebon">Cirebon</option>
            <option value="dumai">Dumai</option>
            <option value="pekalongan">Pekalongan</option>
            <option value="palangka_raya">Palangka Raya</option>
            <option value="binjai">Binjai</option>
            <option value="kediri">Kediri</option>
            <option value="sorong">Sorong</option>
            <option value="pematangsiantar">Pematangsiantar</option>
            <option value="banjarbaru">Banjarbaru</option>
            <option value="tegal">Tegal</option>
            <option value="banda_aceh">Banda Aceh</option>
            <option value="tarakan">Tarakan</option>
            <option value="probolinggo">Probolinggo</option>
            <option value="singkawang">Singkawang</option>
            <option value="lubuklinggau">Lubuklinggau</option>
            <option value="padang_sidempuan">Padang Sidempuan</option>
            <option value="tanjungpinang">Tanjungpinang</option>
            <option value="bitung">Bitung</option>
            <option value="pangkalpinang">Pangkalpinang</option>
            <option value="batu">Batu</option>
            <option value="pasuruan">Pasuruan</option>
            <option value="banjar">Banjar</option>
            <option value="gorontalo">Gorontalo</option>
            <option value="ternate">Ternate</option>
            <option value="madiun">Madiun</option>
            <option value="salatiga">Salatiga</option>
            <option value="prabumulih">Prabumulih</option>
            <option value="lhokseumawe">Lhokseumawe</option>
            <option value="langsa">Langsa</option>
            <option value="bontang">Bontang</option>
            <option value="tanjungbalai">Tanjungbalai</option>
            <option value="tebing_tinggi">Tebing Tinggi</option>
            <option value="metro">Metro</option>
            <option value="palopo">Palopo</option>
            <option value="bima">Bima</option>
            <option value="baubau">Baubau</option>
            <option value="parepare">Parepare</option>
            <option value="blitar">Blitar</option>
            <option value="pagar_alam">Pagar Alam</option>
            <option value="payakumbuh">Payakumbuh</option>
            <option value="gunungsitoli">Gunungsitoli</option>
            <option value="mojokerto">Mojokerto</option>
            <option value="bukittinggi">Bukittinggi</option>
            <option value="kotamobagu">Kotamobagu</option>
            <option value="magelang">Magelang</option>
            <option value="tidore_kepulauan">Tidore Kepulauan</option>
            <option value="tomohon">Tomohon</option>
            <option value="sungai_penuh">Sungai Penuh</option>
            <option value="subulussalam">Subulussalam</option>
            <option value="pariaman">Pariaman</option>
            <option value="sibolga">Sibolga</option>
            <option value="tual">Tual</option>
            <option value="solok">Solok</option>
            <option value="sawahlunto">Sawahlunto</option>
            <option value="padang_panjang">Padang Panjang</option>
            <option value="sabang">Sabang</option>
    </select>
    </div>
    <div>
    <label for="tujuan">Tujuan Pengiriman:</label>
        <select id="tujuan" name="tujuan">
        <option value="">-- Pilih Kota Tujuan --</option>
        <option value="jakarta">Jakarta</option>
        <option value="surabaya">Surabaya</option>
        <option value="medan">Medan</option>
        <option value="bandung">Bandung</option>
        <option value="bekasi">Bekasi</option>
        <option value="tangerang">Tangerang</option>
        <option value="makassar">Makassar</option>
        <option value="depok">Depok</option>
        <option value="palembang">Palembang</option>
        <option value="semarang">Semarang</option>
        <option value="batam">Batam</option>
        <option value="padang">Padang</option>
        <option value="denpasar">Denpasar</option>
        <option value="bogor">Bogor</option>
        <option value="pekanbaru">Pekanbaru</option>
        <option value="bandar_lampung">Bandar Lampung</option>
        <option value="malang">Malang</option>
        <option value="samarinda">Samarinda</option>
        <option value="tasikmalaya">Tasikmalaya</option>
        <option value="serang">Serang</option>
        <option value="banjarmasin">Banjarmasin</option>
        <option value="pontianak">Pontianak</option>
        <option value="jambi">Jambi</option>
        <option value="cimahi">Cimahi</option>
        <option value="surakarta">Surakarta</option>
        <option value="kupang">Kupang</option>
        <option value="manado">Manado</option>
        <option value="cilegon">Cilegon</option>
        <option value="mataram">Mataram</option>
        <option value="jayapura">Jayapura</option>
        <option value="bengkulu">Bengkulu</option>
        <option value="palu">Palu</option>
        <option value="yogyakarta">Yogyakarta</option>
        <option value="ambon">Ambon</option>
        <option value="kendari">Kendari</option>
        <option value="cirebon">Cirebon</option>
        <option value="dumai">Dumai</option>
        <option value="pekalongan">Pekalongan</option>
        <option value="palangka_raya">Palangka Raya</option>
        <option value="binjai">Binjai</option>
        <option value="kediri">Kediri</option>
        <option value="sorong">Sorong</option>
        <option value="pematangsiantar">Pematangsiantar</option>
        <option value="banjarbaru">Banjarbaru</option>
        <option value="tegal">Tegal</option>
        <option value="banda_aceh">Banda Aceh</option>
        <option value="tarakan">Tarakan</option>
        <option value="probolinggo">Probolinggo</option>
        <option value="singkawang">Singkawang</option>
        <option value="lubuklinggau">Lubuklinggau</option>
        <option value="padang_sidempuan">Padang Sidempuan</option>
        <option value="tanjungpinang">Tanjungpinang</option>
        <option value="bitung">Bitung</option>
        <option value="pangkalpinang">Pangkalpinang</option>
        <option value="batu">Batu</option>
        <option value="pasuruan">Pasuruan</option>
        <option value="banjar">Banjar</option>
        <option value="gorontalo">Gorontalo</option>
        <option value="ternate">Ternate</option>
        <option value="madiun">Madiun</option>
        <option value="salatiga">Salatiga</option>
        <option value="prabumulih">Prabumulih</option>
        <option value="lhokseumawe">Lhokseumawe</option>
        <option value="langsa">Langsa</option>
        <option value="bontang">Bontang</option>
        <option value="tanjungbalai">Tanjungbalai</option>
        <option value="tebing_tinggi">Tebing Tinggi</option>
        <option value="metro">Metro</option>
        <option value="palopo">Palopo</option>
        <option value="bima">Bima</option>
        <option value="baubau">Baubau</option>
        <option value="parepare">Parepare</option>
        <option value="blitar">Blitar</option>
        <option value="pagar_alam">Pagar Alam</option>
        <option value="payakumbuh">Payakumbuh</option>
        <option value="gunungsitoli">Gunungsitoli</option>
        <option value="mojokerto">Mojokerto</option>
        <option value="bukittinggi">Bukittinggi</option>
        <option value="kotamobagu">Kotamobagu</option>
        <option value="magelang">Magelang</option>
        <option value="tidore_kepulauan">Tidore Kepulauan</option>
        <option value="tomohon">Tomohon</option>
        <option value="sungai_penuh">Sungai Penuh</option>
        <option value="subulussalam">Subulussalam</option>
        <option value="pariaman">Pariaman</option>
        <option value="sibolga">Sibolga</option>
        <option value="tual">Tual</option>
        <option value="solok">Solok</option>
        <option value="sawahlunto">Sawahlunto</option>
        <option value="padang_panjang">Padang Panjang</option>
        <option value="sabang">Sabang</option>
    </select>
</div>
      <div>
        <label for="berat">Berat Paket (kg):</label>
        <input type="number" id="berat" name="berat" min="1" placeholder="Contoh: 1">
      </div>
      <button type="submit">Cek Tarif</button>
    </form>

    <!-- Hasil Tarif (Contoh statis, bisa diubah jadi dinamis di backend) -->
    <table>
      <thead>
        <tr>
          <th>Layanan</th>
          <th>Estimasi</th>
          <th>Tarif</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Reguler</td>
          <td>2-3 Hari</td>
          <td>Rp 25.000</td>
        </tr>
        <tr>
          <td>Kilat</td>
          <td>1 Hari</td>
          <td>Rp 40.000</td>
        </tr>
        <tr>
          <td>Same Day</td>
          <td>Hari yang sama</td>
          <td>Rp 60.000</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
@endsection
