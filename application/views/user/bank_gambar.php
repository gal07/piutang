<div class="container">
<?php $i=1;?>
<a href="<?php echo base_url().'user/UploadBankGambar'?>" class="btn btn-warning"><strong>+</strong> New Picture</a>
    <table class="table">
          <thead>
            <tr>
                <th>No</th>
                <th>Thumbnails</th>
                <th>Name</th>
                <th>URL</th>
                <th>Size</th>
                <th>Time Upload</th>
                <th>Action</th>
            </tr>
          </thead>
          <?php foreach ($data as $key): ?>
          <tbody>
            <tr>
              <td><?php echo $i++ ?></td>
              <td><img class="img_frame" style="float:left;" src="<?php echo base_url();?>assets/picture_assets/bank_gambar/<?php echo $key['nama'];?>" alt="<?php echo $key['nama'];?>" height="150" width="100" title="<?php echo $key['nama'];?>"></td>
              <td><?php echo $key['nama']; ?></td>
              <td><a href="<?php echo base_url();?>assets/picture_assets/bank_gambar/<?php echo $key['nama'];?>" target="_blank">Link</a></td>
              <td><?php echo number_format($key['size']/1024,0).' KB';?></td>
              <td><?php echo $key['upload_at'];?></td>
              <td><a class="btn btn-danger btn-sm" href=<?php echo site_url('user/DeleteBankGambar/'.$key['id'].'');?>>Delete</a></td>
            </tr>
          </tbody>
          <?php endforeach; ?>
        </table>
</div>
