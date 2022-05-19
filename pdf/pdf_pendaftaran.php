
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
 <th>Nomor Daftar</th>
 <th>Waktu Daftar</th>
 <th>Nama Pasien</th>
 <th>Nama Dokter</th>
 </tr>

 <?php 
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","tebusobat");

 // menampilkan data pegawai
 $data = mysqli_query($koneksi,"select pd.NoDaftar,pd.WaktuDaftar,p.NamaPasien,d.NamaDokter from pendaftaran pd,pasien p,dokter d where p.KodePasien=pd.KodePasien and pd.KodeDokter=d.KodeDokter order by pd.NoDaftar");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td><?php echo $d['NoDaftar']; ?></td>
 <td><?php echo $d['WaktuDaftar']; ?></td>
 <td><?php echo $d['NamaPasien']; ?></td>
 <td><?php echo $d['NamaDokter']; ?></td>

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
