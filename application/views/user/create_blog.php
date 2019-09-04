<div class="container">
  <h3 style="text-align:center;">Create Blog</h3>
  <?php echo form_open_multipart('user/save?q=create');?>
  <div class="form-group">
    <label for="exampleInputEmail1">Judul Blog</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" name="judul">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Deskripsi</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" name="description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label><br>
    <input type="file" name="userfile" value="" size="10">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea name="body" rows="8" cols="80" id="editor1"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">KeyWords</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Keywords" name="keywords">
  </div>

<input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">
</form>
</div>
