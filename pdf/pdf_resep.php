
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 background-color: White;
 margin: 4px;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 2px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
 <table>
 <style type="text/css">
    
    </style>
 <tr>
 <th>Nomor Resep</th>
 <th>Waktu Daftar</th>
 <th>Nama Pasien</th>
 <th>Nama Dokter</th>
 <th>Tanggal Tebus</th>
 <th>Total Harga</th>
 <th>Bayar</th>
 <th>Kembali</th>
 </tr>

 <?php 
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","tebusobat");

 // menampilkan data pegawai
 $data = mysqli_query($koneksi,"select r.NomorResep,p.WaktuDaftar,pa.NamaPasien,d.NamaDokter,r.TanggalTebus,r.TotalHarga,r.Bayar,r.Kembali
 from resep r,pendaftaran p,pasien pa,dokter d
 where p.KodePasien=pa.KodePasien and p.KodeDokter=d.KodeDokter and r.NoDaftar=p.NoDaftar; ");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td><?php echo $d['NomorResep']; ?></td>
 <td><?php echo $d['WaktuDaftar']; ?></td>
 <td><?php echo $d['NamaPasien']; ?></td>
 <td><?php echo $d['NamaDokter']; ?></td>
 <td><?php echo $d['TanggalTebus']; ?></td>
 <td><?php echo $d['TotalHarga']; ?></td>
 <td><?php echo $d['Bayar']; ?></td>
 <td><?php echo $d['Kembali']; ?></td>

 </tr>
 <?php 
 }
 ?>
    </table>
    <script>
 print();
 </script>
</body>
</html>
