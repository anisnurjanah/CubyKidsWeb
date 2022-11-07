<?php
session_start();
include '../koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Tab Icon -->
    <link rel="icon" href="../asset/gambar/logo1.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.0-web/css/all.min.css">

    <title>CUBYKIDS STORE</title>
</head>
<body>
<br>
<div class="container">
        <div class="card">
      <table class="table table-border">
      <tr align="center">
      <th>
         <a class="table" href="index.php">Beranda</a>
      </th>
      <th>
      <a class="table" href="transaksi.php">Transaksi</a>
      </th>
      <th>
      <button style="background-color: #F0F8FF; border: none; width: 100%;"> <a class="table" href="simpan.php">Penyimpanan</a></button>
      </th>
      <th>
        <a class="table" href="bantu.php">Bantuan</a>
      </th>
      </tr>
      </table>
      <div class="container">
      <form method="GET" action="simpan.php" style="text-align: center;">
		<label>Pencarian Nama Barang:</label>
		<input type="text" style="border: 1" name="cari" value="<?php if(isset($_GET['cari'])) { echo $_GET['cari']; } ?>" />
		<button type="submit" style="border: none" value="cari">Cari</button>
</form>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
}
?>
</div>
<br>
      <div class="container">
        <center><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModalTambahData">Tambah Stok</a></center></div>
    <div class="container">
    <div id="myModalTambahData" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- konten modal tambah data-->
            <div class="modal-content">
              <!-- heading modal -->
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data Barang</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- body modal -->
          <form action="tambah_data.php" method="get">
              <div class="text-left modal-body">
              <div class="row">
                        <div class="form-group col-lg-6">
                           <label>Nama</label>
                           <input type="text" name="nama" class="form-control">      
                        </div>
                        <div class="form-group col-lg-6">
                           <label>Jenis</label>
                           <input type="text" name="jenis" class="form-control">      
                        </div>
                        <div class="row">
                        <div class="form-group col-lg-6">
                           <label>Bahan</label>
                           <input type="text" name="bahan" class="form-control">      
                        </div>
                      </div>

                        <div class="form-group col-lg-6">
                           <label>Ukuran</label>
                           <input type="text" name="ukuran" class="form-control">      
                        </div>
                      </div>

                      <div class="row"> 
                        <div class="form-group col-lg-6">
                           <label>Harga Ecer</label>
                           <input type="text" name="harga" class="form-control">      
                        </div>
                        
                        <div class="form-group col-lg-6">
                           <label>Warna</label>
                           <input type="text" name="warna" class="form-control">      
                        </div>

<div class="row">                        
<div class="form-group col-lg-6">
                           <label>Tanggal</label>
                           <input type="date" name="tgl" class="form-control">      
                        </div>
                      </div>
                        <div class="form-group col-lg-6">
                           <label>Jumlah</label>
                           <input type="text" name="jml" class="form-control">      
                        </div>
                      
                      <div class="row"> 
                  <div class="form-group">
                      <label for="ket">Keterangan</label>
                      <select name="ket" class="form-control">
                              <option value="Kosong">Kosong</option>
                              <option value="Tersedia">Tersedia</option>
                            </select>
                        </div>
                      </div>
                      </div>
                      <!-- footer modal -->
                      <div class="modal-footer">
                      <button type="submit" class="btn btn-success" >Simpan</button>
                      
                  </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                      </div>
                      </div>

      </div>
      </div>
</div>
</div>
  <div class="container">
        <h5>Stok Barang</h5>
        <div class="card">
            <table class="table table-striped">
            <thead>
              <tr align="center">
                <th>No</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Bahan</th>
                <th>Ukuran</th>
                <th>Harga Ecer</th>
                <th>Warna</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
              </tr>
            </thead>

            <tbody>
              <?php $i=1; ?>
                       <?php
                         $halaman = 10; /* page halaman*/
                         $page =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                         $mulai  =($page>1) ? ($page * $halaman) - $halaman : 0;
        
                         $result =mysqli_query($conn, "SELECT * FROM barang");
                         $total = mysqli_num_rows($result);
                         $pages = ceil($total/$halaman);

                         $query = mysqli_query($conn,"SELECT * FROM barang LIMIT $mulai, $halaman");
                         $no =$mulai+1;
                         while ($data = mysqli_fetch_assoc($query)) 
                         {
                          $no =$mulai+1;
                          if(isset($_GET['cari'])){
                            $cari = $_GET['cari'];
                            $query = mysqli_query($conn, "SELECT * FROM barang WHERE nama like '%".$_GET['cari']."%'");			
                          }
                          while ($data = mysqli_fetch_assoc($query)) {
                      ?>
              <tr align="center">
                    <td><?=$no ++ ?></td>
                    <td><?=$data['nama'] ?></td>
                    <td><?=$data['jenis'] ?></td>
                    <td><?=$data['bahan'] ?></td>
                    <td><?=$data['ukuran'] ?></td>
                    <td>Rp. <?=number_format($data['harga'])?>.00</td>
                    <td><?=$data['warna'] ?></td>
                    <td><?php echo date('d M Y', strtotime($data['tgl'])) ?></td>
                    <td><?=$data['jml'] ?> pcs</td>
                    <td><?=$data['ket'] ?></td>
                <td>
                  <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModalEdit<?php echo $data['id']; ?>">Edit</a>
                </td>
                <td>
                      <a href="hapus_stok.php?id=<?php echo $data['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin hapus data ini?')">Hapus</a>
                    </td>
                <div id="myModalEdit<?php echo $data['id']; ?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- konten modal tambah data-->
                    <div class="modal-content">
                      <!-- heading modal -->
                      <div class="modal-header">
                        <h4 class="modal-title">Edit Data</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- body modal -->
                  <form action="edit_data.php" method="get">
                      <div class="text-left modal-body">

                        <?php
                          $id = $data['id']; 
                          $query_edit = mysqli_query($conn,"SELECT * FROM barang WHERE id='$id'");
                          //$result = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <div class="row">
                        <div class="form-group col-lg-6">
                           <label>Nama</label>
                           <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">      
                        </div>
                        <div class="form-group col-lg-6">
                           <label>Jenis</label>
                           <input type="text" name="jenis" class="form-control" value="<?php echo $row['jenis']; ?>">      
                        </div>
                        <div class="row">
                        <div class="form-group col-lg-6">
                           <label>Bahan</label>
                           <input type="text" name="bahan" class="form-control" value="<?php echo $row['bahan']; ?>">      
                        </div>
                      </div>

                        <div class="form-group col-lg-6">
                           <label>Ukuran</label>
                           <input type="text" name="ukuran" class="form-control" value="<?php echo $row['ukuran']; ?>">      
                        </div>
                      </div>

                      <div class="row"> 
                        <div class="form-group col-lg-6">
                           <label>Harga Ecer</label>
                           <input type="text" name="harga" class="form-control" value="<?php echo $row['harga']; ?>">      
                        </div>

                        <div class="row">
                        <div class="form-group col-lg-6">
                           <label>Warna</label>
                           <input type="text" name="warna" class="form-control" value="<?php echo $row['warna']; ?>">      
                        </div>

                        <div class="form-group col-lg-6">
                           <label>Tanggal Masuk</label>
                           <input type="date" name="tgl" class="form-control" value="<?php echo $row['tgl']; ?>">      
                        </div>
                      </div>
                      <div class="form-group col-lg-6">
                           <label>Jumlah</label>
                           <input type="text" name="jml" class="form-control" value="<?php echo $row['jml']; ?>">      
                        </div>
                      
                      <div class="row"> 
                        <div class="form-group">
                            <label for="ket">Keterangan</label>
                            <select name="ket" class="form-control">
                              <option><?php echo $row['ket']; ?></option>
                              <option value="Kosong">Kosong</option>
                              <option value="Tersedia">Tersedia</option>
                            </select>
                        </div>
                      </div>
                      </div>
                      <!-- footer modal -->
                      <div class="modal-footer">
                      <button type="submit" class="btn btn-success" >Simpan</button>
                      
                  </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                      </div>
                      <?php 
                             } 
              //mysql_close($host);
                      ?>
                    </div>
                  </div>
              </div>
              </tr>
            </tbody>
            <?php } } ?> 
          </table>
        </div>
    </div>
    <br>
    <div class="container">
    <table class="table table-border">
      <tr>
      <th>
        <center><button style="background-color: khaki; border: none; border-radius: 15px; padding: 5px 10px;">
        <a href="logout.php" class="table">LOGOUT</a></button></center></th></tr></table></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>