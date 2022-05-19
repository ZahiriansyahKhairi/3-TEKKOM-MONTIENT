
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
 <th>Kode Poli</th>
 <th>Nama Poli</th>
 </tr>

 <?php 
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","tebusobat");

 // menampilkan data pegawai
 $data = mysqli_query($koneksi,"select * from poli ");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td><?php echo $d['KodePoli']; ?></td>
 <td><?php echo $d['NamaPoli']; ?></td>

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
