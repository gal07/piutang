
<div class="container"><br>
  <h4 style="text-align:center;">List Link</h4>
  <br><br>
      <div class="row">
        <div class="col-sm">
          <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Link</th>
          <th scope="col">Action</th>
          <th scope="col">Last Upload</th>
        </tr>
      </thead>
      <tbody>
        <tr>

          <?php foreach ($link as $key): ?>
            <?php echo form_open('user/save?q=link');?>
            <input type="hidden" name="id" value="<?php echo $key['id'];?>">
            <th scope="row"><?php echo $key['id'];?></th>
            <td><input type="text" name="link" value="<?php echo $key['link'];?>" class="form-group"></td>
            <td><input type="submit" name="submit" value="Update" class="btn btn-warning btn-sm"></td>
            <td><?php echo $key['time_upload'];?></td>
          </tr>
            </form>
        <?php endforeach;?>
      </tbody>
    </table>
        </div>
      </div>
    </div>
