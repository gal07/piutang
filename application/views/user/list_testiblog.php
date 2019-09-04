<div class="container">
  <h3 style="text-align:center;">List Gambar Testi</h3>
  <table class="table">
        <thead>
          <tr>
              <th>Id</th>
              <th>Thumb</th>
              <th>Link</th>
              <th>Upload Time</th>
              <th>Edit</th>
          </tr>
        </thead>
        <?php foreach ($data as $key): ?>
        <tbody>
          <tr>
            <?php echo form_open('user/save_testi');?>
            <input type="hidden" name="id" value="<?php echo $key['id']; ?>">
            <td><?php echo $key['id']; ?></td>
            <td><img class="img_frame" style="float:left;" src="<?php echo $key['link'];?>" height="150" width="100"></td>
            <td><input type="text" name="link" value="<?php echo $key['link'];?>" size="100"></td>
            <td><?php echo $key['create_at']; ?></td>
            <td><input type="submit" value="Update" name="submit" class="btn btn-warning btn-sm"></td>
          </form>
          </tr>
        </tbody>
        <?php endforeach; ?>
      </table>
