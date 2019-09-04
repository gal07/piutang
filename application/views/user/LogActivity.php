<div class="container">
  <h3 style="text-align:center">Log Activity Web</h3>
  <?php if (isset($MyVal) == '3'): ?>
    <?php
     $kode = md5('3');
     echo form_open('user/Search?key='.$kode.'');?>
    <input type="search" name="kunci" value="" class="float-right" placeholder="Search..." required><input type="submit" name="submit" value="Cari" class="float-right"></form>
      <a href="<?php echo site_url('user/deleteLogAct/');?>" class="btn btn-danger btn-sm">Delete All</a>
        <table class="table table-light">
              <thead>
                <tr>
                    <th>Id Aktivitas</th>
                    <th>IP</th>
                    <th>Host</th>
                    <th>URL_execution</th>
                    <th>Server</th>
                    <th>Device</th>
                    <th>Time</th>
                </tr>
              </thead>
              <?php foreach ($result as $key): ?>
              <tbody>
                <tr>
                  <td><small><?php echo $key['id_activity'];?></small></td>
                  <td><small><?php echo $key['ip'];?></small></td>
                  <td><small><?php echo $key['host'];?></small></td>
                  <td><small><?php echo $key['path_exec'];?></small></td>
                  <td><small><?php echo $key['server_name'];?></small></td>
                  <td><small><?php echo $key['device'];?></small></td>
                  <td><small><?php echo $key['time'];?></small></td>
                </tr>
              </tbody>
              <?php endforeach; ?>
            </table>
            <br>
            <a href="<?php echo base_url().'user/LogActivity';?>" class="blue-text"><p style="text-align:center;">Back</p></a>
  <?php else: ?>
    <?php
     $kode = md5('3');
     echo form_open('user/Search?key='.$kode.'');?>
    <input type="search" name="kunci" value="" class="float-right" placeholder="Search..." required><input type="submit" name="submit" value="Cari" class="float-right"></form>
      <a href="<?php echo site_url('user/deleteLogAct/');?>" class="btn btn-danger btn-sm">Delete All</a>
        <table class="table table-light">
              <thead>
                <tr>
                    <th>Id Aktivitas</th>
                    <th>IP</th>
                    <th>Host</th>
                    <th>URL_execution</th>
                    <th>Server</th>
                    <th>Device</th>
                    <th>Time</th>
                </tr>
              </thead>
              <?php foreach ($data as $key): ?>
              <tbody>
                <tr>
                  <td><small><?php echo $key['id_activity'];?></small></td>
                  <td><small><?php echo $key['ip'];?></small></td>
                  <td><small><?php echo $key['host'];?></small></td>
                  <td><small><?php echo $key['path_exec'];?></small></td>
                  <td><small><?php echo $key['server_name'];?></small></td>
                  <td><small><?php echo $key['device'];?></small></td>
                  <td><small><?php echo $key['time'];?></small></td>
                </tr>
              </tbody>
              <?php endforeach; ?>
            </table>

  <?php endif; ?>
  </div>
