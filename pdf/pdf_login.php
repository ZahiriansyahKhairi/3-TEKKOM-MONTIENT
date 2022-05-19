
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
 <th>Id User</th>
 <th>Nama</th>
 <th>Jenis Kelamin</th>
 <th>Alamat</th>
 <th>Nomor Telepon</th>
 <th>Username</th>
 <th>Password</th>
 <th>Level</th>

 </tr>
 <?php 
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","tebusobat");

 // menampilkan data pegawai
 $data = mysqli_query($koneksi,"select * from useradmin");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td><?php echo $d['IdUser']; ?></td>
 <td><?php echo $d['Nama']; ?></td>
 <td><?php echo $d['JenisKelamin']; ?></td>
 <td><?php echo $d['Alamat']; ?></td>
 <td><?php echo $d['NoTelp']; ?> </td>
 <td><?php echo $d['Username']; ?> </td>
 <td><?php echo $d['Password']; ?> </td>
 <td><?php echo $d['Level']; ?> </td>
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
