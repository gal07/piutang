<div class="container">
  <h3 style="text-align:center;">Upload Picture</h3>
  <?php echo form_open_multipart('user/uploadPicture');?>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Picture" name="nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label><br>
    <input type="file" name="userfile" value="" size="10">
  </div>
<input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">
</form>
</div>
