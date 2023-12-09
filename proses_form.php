<?php
// Memeriksa apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai-nilai dari formulir
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $kota = $_POST["kota"];
    $kode_pos = $_POST["kode_pos"];
    $nomor_kartu = $_POST["nomor_kartu"];
    $bulan_kadaluwarsa = $_POST["bulan_kadaluwarsa"];
    $tahun_kadaluwarsa = $_POST["tahun_kadaluwarsa"];
    $kode_keamanan = $_POST["kode_keamanan"];

    // Validasi Nama Lengkap
    if (empty($nama)) {
        echo "Nama Lengkap harus diisi";
        exit;
    }

    // Validasi Alamat
    if (empty($alamat)) {
        echo "Alamat harus diisi";
        exit;
    }

    // Validasi Kota
    if (empty($kota)) {
        echo "Kota harus diisi";
        exit;
    }

    // Validasi Kode Pos
    if (empty($kode_pos) || !is_numeric($kode_pos)) {
        echo "Kode Pos harus diisi dengan angka";
        exit;
    }

    // Validasi Nomor Kartu
    if (empty($nomor_kartu) || !is_numeric($nomor_kartu)) {
        echo "Nomor Kartu harus diisi dengan angka";
        exit;
    }

    // Validasi Bulan Kadaluwarsa
    if (empty($bulan_kadaluwarsa)) {
        echo "Bulan Kadaluwarsa harus dipilih";
        exit;
    }

    // Validasi Tahun Kadaluwarsa
    if (empty($tahun_kadaluwarsa)) {
        echo "Tahun Kadaluwarsa harus dipilih";
        exit;
    }

    // Validasi Kode Keamanan
    if (empty($kode_keamanan) || !is_numeric($kode_keamanan)) {
        echo "Kode Keamanan harus diisi dengan angka";
        exit;
    }

    // Jika semua validasi berhasil, pindahkan ke halaman sukses_pembayaran.html
    header("Location: sukses_pembayaran.html");
    exit;
} else {
    // Jika formulir tidak disubmit secara langsung, kembalikan ke halaman formulir
    header("Location: form-data.php");
    exit;
}
?>