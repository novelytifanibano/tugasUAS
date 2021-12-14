<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
      <?php
      include("koneksi.php");
      $cari=mysqli_query($koneksi,"select* from mobil");
      ?>
       
       
        <div class="card">
        <h5 class="card-header">tambah data order </h5>
        <div class="card-body">
        <form method="post"action="?x=sorder">
        
          <div class="form-group">
          <label> no polisi  </label>
          <select name="polisi" class ="from-control">
          <option value="">--pilih--</option>
<?php
    while ($data=mysqli_fetch_array($cari)){
    }?>
    <option value="<?php echo $data['id_mobil'];?>">$data['no_polisi']."-.$data['merk'];?></option>
<?php
    

?>
</div>
     <div class="form -group">
    <label> No KTP</label>
    <input type="text" class="form-control" name="txtKTP"> 
     
</div>
     <div class="form -group">
    <label> Nama Peminjam </label>
    <input type="text" class="form-control" name="txtnama"> 
     
    </div>
          <div class="form -group">
          <label> Jenis kelamin</label>
      <select name="jenkel"class="form-control">
      <option value="">--pilih--</option>
      <option value="laki-laki">laki-laki</option>
      <option value="perempuan">perempuan</option>

      </select>
      </div>
       <div class="form -group">
       <label> Alamat Lengkap</label>
       <input type="text" class="form-control" name="txtAlamat"> 
     
    </div>


    <div class="form -group">
    <label> tlp/hp </label>
    <input type="harga" class="form-control" name="txttlp">
</div>
    
    <div class="form -group">
    <label> tujuan </label>
    <input type="text" class="form-control" name="txttujuan">
</div>
   
    <div class="form -group">
    <label> Tanggal Pinjam </label>
    <input type="date" class="form-control" name="txtmulai"> 
    
  </div>
   
   
    <div class="form -group">
    <label>Tanggal Selesai</label>
    <input type="date" class="form-control" name="txtselesai"> 
     
    </div>
<button type="submit" class ="btn btn-primary"> simpan </button>
</form>
</div>

    </div>
</div>

  </body>
  </html>