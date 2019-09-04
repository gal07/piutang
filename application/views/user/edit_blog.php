<div class="container">
  <h3 style="text-align:center;">Edit Blog</h3>
  <?php foreach ($data as $key): ?>
  <?php echo form_open_multipart('user/save?q=edit&id='.$key['id'].'');?>
  <input type="hidden" name="id" value="<?php echo $key['id'];?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Judul Blog</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" name="judul" value="<?php echo $key['title'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Deskripsi</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" name="description" value="<?php echo $key['description'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label><br>
    <input type="file" name="foto" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea name="body" rows="8" cols="80" id="editor1"><?php echo $key['text'];?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">KeyWords</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" name="keywords" value="<?php echo $key['keywords'];?>">
  </div>
<input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">
</form>
  <?php endforeach; ?>
</div>
