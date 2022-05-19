
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
 <th>Kode Obat</th>
 <th>Nama Obat</th>
 <th>Jenis Obat</th>
 <th>Kategori</th>
 <th>Harga Obat</th>
 <th>Stok Obat</th>
 </tr>
 <?php 
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","tebusobat");

 // menampilkan data pegawai
 $data = mysqli_query($koneksi,"select * from obat");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td><?php echo $d['KodeObat']; ?></td>
 <td><?php echo $d['NamaObat']; ?></td>
 <td><?php echo $d['JenisObat']; ?></td>
 <td><?php echo $d['Kategori']; ?></td>
 <td><?php echo $d['HargaObat']; ?> </td>
 <td><?php echo $d['StokObat']; ?> </td>
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
