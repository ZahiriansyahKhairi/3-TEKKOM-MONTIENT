
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
 <th>Kode Pasien</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Jenis Kelamin</th>
 <th>Umur</th>
 <th>Telepon</th>
 <th>Keterangan</th>

 </tr>
 <?php 
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","tebusobat");

 // menampilkan data pegawai
 $data = mysqli_query($koneksi,"select * from pasien");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td><?php echo $d['KodePasien']; ?></td>
 <td><?php echo $d['NamaPasien']; ?></td>
 <td><?php echo $d['AlamatPasien']; ?></td>
 <td><?php echo $d['GenderPasien']; ?></td>
 <td><?php echo $d['UmurPasien']; ?> </td>
 <td><?php echo $d['TeleponPasien']; ?> </td>
 <td><?php echo $d['Keterangan']; ?> </td>
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
