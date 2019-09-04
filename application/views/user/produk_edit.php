<div class="container"><br>
  <a href="<?php echo base_url().'user/Add_produk';?>" class="btn btn-warning btn-sm">+ Tambah Produk</a>
  <table class="table">
        <thead>
          <tr>
              <th>Id</th>
              <th>Thumbnails</th>
              <th>Nama Barang</th>
              <th>Harga</th>
              <th>Action</th>
          </tr>
        </thead>
        <?php foreach ($prd as $key): ?>
        <tbody>
          <tr>
            <td><?php echo $key['id']; ?></td>
            <td><img class="img_frame" style="float:left;" src="<?php echo base_url();?>assets/picture_product/<?php echo $key['photo'];?>" alt="<?php echo $key['photo'];?>" height="150" width="100" title="<?php echo $key['nama_barang'];?>"></td>
            <td><?php echo $key['nama_barang']; ?></td>
            <td><?php echo 'Rp. '.number_format($key['harga']); ?></td>
            <td><a href="<?php echo site_url('user/edit_produk/');?><?php echo $key['id'];?>"><button class="btn btn-warning btn-sm">Edit</button></a> |<a href="<?php echo site_url('user/DeleteProduk/');?><?php echo $key['id'];?>">
            <button class="btn btn-danger btn-sm">Delete</button></a></td>
          </tr>
        </tbody>
        <?php endforeach; ?>
      </table>
</div>
