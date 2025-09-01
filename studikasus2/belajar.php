<?php
$namaPelanggan = "Budi Santoso";
$judulBuku = "Dasar-Dasar Pemrograman Web";
$jml = 2;
$hargaBuku = 85000;
$member = true;

function hitungTotal($jml, $hargaBuku){
    return $jml * $hargaBuku;
}

function hitungBayar($total, $member){
    if($member){
        $total = $total - ($total * 0.1);
    }
    return $total;
}

$totalAwal = hitungTotal($jml, $hargaBuku);
$totalAkhir = hitungBayar($totalAwal, $member);

echo "-----STRUK PEMBAYARAN-----\n";
echo "Nama Pelanggan : $namaPelanggan\n";
echo "Judul Buku     : $judulBuku\n";
echo "Jumlah Buku    : $jml\n";
echo "Harga Satuan   : Rp $hargaBuku\n";
echo "Total Awal     : Rp $totalAwal\n";
echo "Status         : ".($member ? "Member (Diskon 10%)" : "Non-Member")."\n";
echo "Total Bayar    : Rp $totalAkhir\n";
?>