
<!Doctype HTML>
<html>
<head>
<title>Form view</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
<div class="container">
 <div class="col-lg-9">  
  <div class="page-header">
   <h3>Lihat Data</h3>
  </div>
 <a href="input.php"> <b>Tambah Data Kategori</b></a>
 </br>
 <a href="index.php"> <b>Kembali</b></a>
</br>
 <table border="1" class="table table-stripped">
		<tr>
			<th>No</th>
			<th>Nama Kategory</th>
	
			
					
		</tr>
		<?php
    include 'koneksi.php';
    $barang = mysqli_query($koneksi, "SELECT * from categories");
    $no=1;
    foreach ($barang as $row){
		 ?>
       
        <tr>
            <td><?php echo $no ?></td>
       
            <td><?php echo $row['nama'] ?>
	
     
  
              </tr>;
     
 <?php $no++;}  ?>
		
	</table>
  </form>
 </div>
</div>

</body>
</html>