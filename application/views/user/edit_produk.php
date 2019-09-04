<?php echo form_open_multipart('user/save?q=product');?>
<div class="container"><br>
  <h3 style="text-align:center;">Edit Produk</h3>
  <?php foreach ($prd as $key): ?>
    <img src="<?php echo base_url();?>assets/picture_product/<?php echo $key['photo'];?>" alt="Photo" height="190" width="180">
    <input type="file" name="userfile" value="" size="20"><br><br>
    <input type="hidden" name="id" value="<?php echo $key['id'];?>">
  <div class="form-group">
   <label for="formGroupExampleInput">Nama Barang</label>
   <input type="text" class="form-control" id="formGroupExampleInput" name="nama"value="<?php echo $key['nama_barang'];?>">
 </div>
 <div class="form-group">
  <label for="formGroupExampleInput">Harga</label>
  <input type="text" class="form-control" id="formGroupExampleInput" name="harga"value="<?php echo htmlentities($key['harga']);?>">
</div>
<label for="formGroupExampleInput">Description</label>
<textarea name="description" rows="8" cols="80" id="editor1"><?php echo $key['description'];?></textarea>
<br>
<input type="submit" name="submit" value="Save" class="btn btn-success btn-sm">
<?php endforeach; ?>
</div>
</form>
