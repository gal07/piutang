<?php echo form_open_multipart('user/save?q=addProduk');?>
<div class="container"><br>
  <h3 style="text-align:center;">Tambah Produk</h3>
    <input type="file" name="userfile" value="" size="20"><br><br>
  <div class="form-group">
   <label for="formGroupExampleInput">Nama Barang</label>
   <input type="text" class="form-control" id="formGroupExampleInput" name="nama"value="">
 </div>
 <div class="form-group">
  <label for="formGroupExampleInput">Harga</label>
  <input type="text" class="form-control" id="formGroupExampleInput" name="harga"value="">
</div>
<label for="formGroupExampleInput">Description</label>
<textarea name="description" rows="8" cols="80" id="editor1"></textarea>
<br>
<input type="submit" name="submit" value="Save" class="btn btn-success btn-sm">
</div>
</form>
