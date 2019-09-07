
<!Doctype HTML>
<html>
<head>
<title>Form view</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 <div class="col-lg-9">  
  <div class="page-header">
   <h3>Lihat Data</h3>
  </div>
 <a href="input.php"> <b>Tambah Data Baru</b></a>
</br>
 <a href="kategori.php"> <b>lihat kategori</b></a>
</br>
 <a href="produk.php"> <b>Lihat produk</b></a>
</br>
 <table border="1" class="table table-stripped">
		<tr>
			<th>No</th>
			<th>Nama Kategory</th>
			<th>Nama Produk</th>
			
					
		</tr>
		<?php
    include 'koneksi.php';
    $barang = mysqli_query($koneksi, "SELECT * from view_barang2");
    $no=1;
    foreach ($barang as $row){
		 ?>
       
        <tr>
            <td><?php echo $no ?></td>
       
            <td><?php echo $row['nama'] ?>
	   <td><?php echo $row['name'] ?></td></td>
     
  
              </tr>;
     
 <?php $no++;}  ?>
		
	</table>
  </form>
 </div>
</div>

</body>
</html>